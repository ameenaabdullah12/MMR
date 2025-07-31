<?php

    $hook_array['before_save'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'before_save example',

        //The PHP file where your class is located.
        'custom/modules/Accounts/setUniqueCode.php',

        //The class the method is in.
        'UniqueCode',

        //The method to call.
        'setUniqueCode'
    );

?>