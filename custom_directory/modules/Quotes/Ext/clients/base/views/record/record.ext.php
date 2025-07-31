<?php
// WARNING: The contents of this file are auto-generated.


//Richard Coleman 12/06/2018 - CRMDEV-1232 - Display Copy Quote button
foreach($viewdefs['Quotes']['base']['view']['record']['buttons'] as $key => $button){
    //Find the main dropdown metadata
    if ($button['type'] == 'actiondropdown' && $button['name'] == 'main_dropdown'){
        foreach($viewdefs['Quotes']['base']['view']['record']['buttons'][$key]['buttons'] as $mainButtonIndex => $mainButton){
            //Once we find the historical summary
            if ($mainButton['type'] == 'rowaction' && $mainButton['name'] == 'historical_summary_button'){
                //Slice all the buttons from this point onwards
                $slicedBtns = array_slice($viewdefs['Quotes']['base']['view']['record']['buttons'][$key]['buttons'],$mainButtonIndex);
                array_splice($viewdefs['Quotes']['base']['view']['record']['buttons'][$key]['buttons'],$mainButtonIndex);
                //Insert the Copy Quote Button
                $viewdefs['Quotes']['base']['view']['record']['buttons'][$key]['buttons'][] = array(
                    'type' => 'rowaction',
                    'event' => 'button:duplicate_button:click',
                    'name' => 'duplicate_button',
                    'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                    'acl_module' => 'Quotes',
                    'acl_action' => 'create',
                );
                //Then put all of the removed buttons back in
                foreach($slicedBtns as $oldButton){
                    $viewdefs['Quotes']['base']['view']['record']['buttons'][$key]['buttons'][] = $oldButton;
                }
                break;
            }
        }
        break;
    }
}

if(!empty($viewdefs['Quotes']))
{
  foreach($viewdefs['Quotes']['base']['view']['record']['panels'] as $panel=>$values)
  {
    foreach($values['fields'] as $field=>$properties)
    {
      if(!empty($properties['name'])&&($properties['name']=='billing_address'||$properties['name']=='shipping_address'))
      {
        array_unshift($viewdefs['Quotes']['base']['view']['record']['panels'][$panel]['fields'][$field]['fields'],
                      [
                        'name'         =>$properties['name'].'_lookup',
                        'source_origin'=>'Quotes',
                        'type'         =>'google_lookup',
                        'placeholder'  =>'Google Address lookup',
                      ]
        );
      }
    }
  }
}