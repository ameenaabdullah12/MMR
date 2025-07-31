<?php
// WARNING: The contents of this file are auto-generated.


if(!empty($viewdefs['Accounts']))
{
  foreach($viewdefs['Accounts']['base']['view']['record']['panels'] as $panel=>$values)
  {
    foreach($values['fields'] as $field=>$properties)
    {
      if(!empty($properties['name'])&&($properties['name']=='billing_address'||$properties['name']=='shipping_address'))
      {
        array_unshift($viewdefs['Accounts']['base']['view']['record']['panels'][$panel]['fields'][$field]['fields'],
                      [
                        'name'         =>$properties['name'].'_lookup',
                        'source_origin'=>'Accounts',
                        'type'         =>'google_lookup',
                        'placeholder'  =>'Google Address lookup',
                      ]
        );
      }
    }
  }
}