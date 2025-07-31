<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

require_once 'custom/modules/Reports/sugarpdf/sugarpdf.helper.php';

class ReportsSugarpdfSummary extends ReportsSugarpdfReports
{
    function display()
    {
        global $locale;

        //add chart
        if (isset($_REQUEST['id']) && $_REQUEST['id'] != false) {
            $this->bean->is_saved_report = true;
        }

        // fixing bug #47260: Print PDF Reports
        // if chart_type is 'none' we don't need do add any image to pdf
        if ($this->bean->chart_type != 'none') {
            $chartDisplay = new ChartDisplay();
            $xmlFile = $chartDisplay->get_cache_file_name($this->bean);

            $sugarChart = SugarChartFactory::getInstance();

            $shouldIncludeImage = true;
            // scheduleReportWithImage should not be set to true until chart gen service is in place
            if ($this->bean->isScheduledReport && empty(SugarConfig::getInstance()->get('schedule_report_with_chart'))) {
                $shouldIncludeImage = false;
            }
            if ($sugarChart->supports_image_export && $shouldIncludeImage) {
                $imageFile = $sugarChart->get_image_cache_file_name($xmlFile, ".".$sugarChart->image_export_type);
                // MMR - Start Customization
                // Changes below to allow package uploads - replaced restricted functions with alternatives
                // check image size is not '0'
                if (SugarAutoloader::fileExists($imageFile) && verify_uploaded_image($imageFile)) {
                    $this->AddPage();

                    $chartImageResource = imagecreatefrompng($imageFile);
                    $width = imagesx($chartImageResource);
                    $height = imagesy($chartImageResource);
                    imagedestroy($chartImageResource);
                    // MMR - end customization

                    $imageWidthAsUnits = $this->pixelsToUnits($width);
                    $imageHeightAsUnits = $this->pixelsToUnits($height);

                    $dimensions = $this->getPageDimensions();

                    $pageWidth = $dimensions['wk'];
                    $pageHeight = $dimensions['hk'];

                    $marginTop = $dimensions['tm'];
                    $marginBottom = $dimensions['bm'];
                    $marginLeft = $dimensions['lm'];
                    $marginRight = $dimensions['rm'];

                    $freeWidth = 0.9 * ($pageWidth - $marginLeft - $marginRight);
                    $freeHeight = 0.9 * ($pageHeight - $marginTop - $marginBottom);

                    $rate = min($freeHeight / $imageHeightAsUnits, $freeWidth / $imageWidthAsUnits, 2);
                    $imageWidth = floor($rate * $imageWidthAsUnits);
                    $imageHeight = floor($rate * $imageHeightAsUnits);

                    $leftOffset = $this->GetX() + ($pageWidth - $marginLeft - $marginRight - $imageWidth) / 2;
                    $topOffset = $this->GetY();

                    $this->Image($imageFile, $leftOffset, $topOffset, $imageWidth, $imageHeight, "", "", "N", false, 300, "", false, false, 0, true);

                    if ($sugarChart->print_html_legend_pdf) {
                        $legend = $sugarChart->buildHTMLLegend($xmlFile);
                        $this->writeHTML($legend, true, false, false, true, "");
                    }
                }
            }
        }

        //Create new page
        $this->AddPage();

        $this->bean->run_summary_query();
        $item = array();
        $header_row = $this->bean->get_summary_header_row();
        $count = 0;

        // MMR - Start Customization
        // Display URL fields as <a href since Sugar doesn't display them correctly in PDF
        // Identify the columns that needs to be displayed as HTML
        $urlColumnsToDisplayAsHtml = getURLColumnsToDisplayAsHTML($this->bean, 'summary_columns');
        // MMR - End Customization

        if (count($this->bean->report_def['summary_columns']) == 0) {
            $item[$count]['']='';
            $count++;
        }
        if (count($this->bean->report_def['summary_columns']) > 0) {
            while ($row = $this->bean->get_summary_next_row()) {
                for ($i= 0; $i < sizeof($header_row); $i++) {
                    $label = $header_row[$i];
                    $value = '';
                    if (isset($row['cells'][$i])) {
                        $value = $row['cells'][$i];
                    }
                    // MMR - Start Customization
                    // Wrap value with <a href> if it's a URL field and if it's not empty
                    if (in_array($i, $urlColumnsToDisplayAsHtml)) {
                        $urlValue = trim($value);
                        if (empty($urlValue)) {
                            $item[$count][$label] = $value;
                        } else {
                            $item[$count][$label] = [
                                'value' => '<a target="_blank" href="' . $urlValue . '">' . $urlValue . '</a>',
                                'options' => [
                                    'ishtml' => true,
                                ],
                            ];
                        }
                    } else {
                        $item[$count][$label] = $value;
                    }
                    // MMR - End Customization
                }
                $count++;
            }
        }

        $this->writeCellTable($item, $this->options);
        $this->Ln1();

        $this->bean->clear_results();

        if ($this->bean->has_summary_columns()) {
            $this->bean->run_total_query();
        }

        $total_header_row = $this->bean->get_total_header_row();
        $total_row = $this->bean->get_summary_total_row();
        $item = array();
        $count = 0;

        for ($j=0; $j < sizeof($total_header_row); $j++) {
            $label = $total_header_row[$j];
            $item[$count][$label] = $total_row['cells'][$j];
        }

        $this->writeCellTable($item, $this->options);

    }

    /**
     * This is to fix a tcpdf where it resets HREF to an empty string instead
     *
     * @param array $dom
     * @param int $key
     * @param false $cell
     */
    protected function closeHTMLTagHandler(&$dom, $key, $cell = false)
    {
        parent::closeHTMLTagHandler($dom, $key, $cell);
        if (!is_array($this->HREF)) {
            $this->HREF = [];
        }
    }
}
