<?php
function clean($input){
        $input = (string) $input;
        if (get_magic_quotes_gpc())
        {
                $input = stripslashes($input);
        }
        $output = htmlentities($input, ENT_QUOTES, 'UTF-8');
        
        return $output;
}




function cleanPostContent($dirty_html){
    include_once 'html/HTMLPurifier.auto.php';
    $config = HTMLPurifier_Config::createDefault();
    $config->set('HTML.SafeIframe', true);
    $config->set('URI.SafeIframeRegexp', '%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video/)%'); //allow YouTube and Vimeo
    $purifier = new HTMLPurifier($config);
    $clean_html = $purifier->purify($dirty_html);
    
    return htmlentities($clean_html, ENT_QUOTES, 'UTF-8');
}