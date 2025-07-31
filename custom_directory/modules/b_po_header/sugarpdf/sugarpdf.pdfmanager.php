<?php

require_once 'include/Sugarpdf/sugarpdf/sugarpdf.pdfmanager.php';

class b_po_headerSugarpdfPdfmanager extends SugarpdfPdfmanager

{ 
    public function preDisplay() 
    { 
		$GLOBALS['log']->fatal('***** c_po_detailSugarpdfPdfmanager STARTING...');
        parent::preDisplay(); 
        $previewMode = false; 
        if (!empty($_REQUEST['pdf_preview']) && $_REQUEST['pdf_preview'] == 1) { 
            $previewMode = true; 
        } 
        if ($previewMode === false) { 
		$GLOBALS['log']->fatal('***** c_po_detailSugarpdfPdfmanager STARTING 2...');
            // Select links to add 
            $linksToLoad = array('b_po_header_c_po_detail_1'); 

            foreach ($linksToLoad as $linkName) { 
                /** @var Meeting $this->bean */ 
				$GLOBALS['log']->fatal('***** c_po_detailSugarpdfPdfmanager REL='. $linkName);
                $this->bean->load_relationship($linkName); 
                $linkedBeans = $this->bean->$linkName->getBeans(); 
				$GLOBALS['log']->fatal('***** c_po_detailSugarpdfPdfmanager count='. strval(count($linkedBeans)));
                // Prepare data 
                $linkedData = array(); 
                foreach ($linkedBeans as $linkedBean) { 
                    $linkedData[] = PdfManagerHelper::parseBeanFields($linkedBean, true); 
					$GLOBALS['log']->fatal("***** c_po_detailSugarpdfPdfmanager  " . print_r($linkedData, True));
					
                }                 // Assign data to template
				$this->ss->assign($linkName, $linkedData);
			}
		}       
	}
}