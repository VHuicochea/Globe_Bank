<?php

    function url_for($script_path) {
        // add the leading '/' if not present
        if($script_path[0] != '/') {
        $script_path = "/" . $script_path;
        }
        return WWW_ROOT . $script_path;
    }

    // Shortcut function
    function u($string=""){
        return urlencode($string);
    }

    // Shortcut function
    function raw_u($string=""){
        return rawurlencode($string);
    }

    // Shortcut function    
    function h($string=""){
        return htmlspecialchars($string);
    }
  
?>