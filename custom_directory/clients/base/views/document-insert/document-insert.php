<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$viewdefs["base"]["view"]["document-insert"] = array(
    "buttons" => array(
        array(
            "name"      => "cancel_button",
            "type"      => "button",
            "label"     => "LBL_CANCEL_BUTTON_LABEL",
            "css_class" => "btn-invisible btn-link",
        ),
        array(
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
        ),
    ),
    'panels' => array (
    0 => array (
      'name' => 'panel_header',
      'header' => true,
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    1 => array (
      'name' => 'panel_body',
      'label' => 'LBL_RECORD_BODY',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'newTab' => false,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'filename',
          'related_fields' => 
          array (
            0 => 'file_mime_type',
          ),
        ),
      ),
    ),
  ),
);
