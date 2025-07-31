<?php
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