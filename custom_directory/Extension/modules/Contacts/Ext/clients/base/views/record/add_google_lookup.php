<?php
if(!empty($viewdefs['Contacts']))
{
  foreach($viewdefs['Contacts']['base']['view']['record']['panels'] as $panel=>$values)
  {
    foreach($values['fields'] as $field=>$properties)
    {
      if(!empty($properties['name'])&&
         ($properties['name']=='primary_address'||$properties['name']=='alt_address'))
      {
        array_unshift($viewdefs['Contacts']['base']['view']['record']['panels'][$panel]['fields'][$field]['fields'],
                      [
                        'name'         =>$properties['name'].'_lookup',
                        'source_origin'=>'Contacts',
                        'type'         =>'google_lookup',
                        'placeholder'  =>'Google Address lookup',
                      ]
        );
      }
    }
  }
}