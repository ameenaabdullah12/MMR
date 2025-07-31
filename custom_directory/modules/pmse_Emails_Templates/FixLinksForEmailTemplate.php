<?php

/**
 * SugarCleaner::cleanHtml cleans up template variables, but we restore them here
 */
class FixLinksForEmailTemplate
{

    function execute($bean, $event, $arguments)
    {
        $bean->body_html = str_replace('%7B::', '{::', str_replace('::%7D', '::}', $bean->body_html));
    }
}