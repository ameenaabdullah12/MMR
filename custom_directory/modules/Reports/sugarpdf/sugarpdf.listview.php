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

class ReportsSugarpdfListview extends ReportsSugarpdfReports
{
    function display()
    {
        $this->bean->run_query();

        $this->AddPage();

        $item = array();
        $header_row = $this->bean->get_header_row('display_columns', false, false, true);
        $count = 0;

        // MMR - Start Customization
        // Display URL fields as <a href since Sugar doesn't display them correctly in PDF
        // Identify the columns that needs to be displayed as HTML
        $urlColumnsToDisplayAsHtml = getURLColumnsToDisplayAsHTML($this->bean, 'display_columns');

        while ($row = $this->bean->get_next_row('result', 'display_columns', false, true)) {
            for ($i = 0; $i < sizeof($header_row); $i++) {
                $label = $header_row[$i];
                $value = '';
                if (isset($row['cells'][$i])) {
                    $value = $row['cells'][$i];
                }

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


