<?php
if(!empty($viewdefs['Leads']))
{
  foreach($viewdefs['Leads']['base']['view']['record']['panels'] as $panel=>$values)
  {
    foreach($values['fields'] as $field=>$properties)
    {
      if(!empty($properties['name'])&&
         ($properties['name']=='primary_address'||$properties['name']=='alt_address'))
      {
        array_unshift($viewdefs['Leads']['base']['view']['record']['panels'][$panel]['fields'][$field]['fields'],
                      [
                        'name'         =>$properties['name'].'_lookup',
                        'source_origin'=>'Leads',
                        'type'         =>'google_lookup',
                        'placeholder'  =>'Google Address lookup',
                      ]
        );
      }
    }
  }
}