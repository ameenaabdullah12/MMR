<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.popup.php');
class Customa_addressViewPopup extends ViewPopup
{
    function Customa_addressViewPopup()
    {
        //RC 21/11/16 Had to change this from PHP4 Constructor as method didn't exist in 7.7
        parent::__construct();
    }
    public function display()
    {
        parent::display();
        echo '<script>
        document.getElementById("account_id_advanced").style.display="none";
        $("label[for=account_id_advanced]")[0].style.display="none";
        $("input#search_form_clear")[0].style.display="none";
        </script>';
    }
}
