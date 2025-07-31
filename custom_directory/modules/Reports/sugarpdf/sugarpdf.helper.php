<?php
/**
 * Utility function to get the URL fields
 *
 * @param $bean
 * @param $columnsName
 * @return array
 */
function getURLColumnsToDisplayAsHTML($bean, $columnsName)
{
    $urlColumns = [];
    $alwaysDisplayAsUrlFields = ['po_link', 'po_url'];

    $columnsList = $bean->report_def[$columnsName];

    // Some basic non null checks
    if (!empty($bean->report_def)
        && !empty($columnsList)
        && !empty($bean->full_bean_list)) {

        foreach ($columnsList as $index => $column) {

            // With the table key, ensure that the field is a 'URL'
            if (!empty($bean->full_bean_list[$column['table_key']])
                && !empty($bean->full_bean_list[$column['table_key']]->field_defs[$column['name']])
                && $bean->full_bean_list[$column['table_key']]->field_defs[$column['name']]['type'] == 'url'
            ) {
                // This is a URL field - display this column as a link
                $urlColumns[] = $index;
            }

            foreach ($alwaysDisplayAsUrlFields as $alwaysUrlFieldName) {
                if (strpos($column['name'], $alwaysUrlFieldName) !== false) {
                    $urlColumns[] = $index;
                    break;
                }
            }
        }
    }

    return array_unique($urlColumns);
}
