<?
    /*
     * Josh Kovitz
     * 2016
     */

    // Include compiled CSS as $css
    ob_start();
    include 'css/main.css';
    $css = ob_get_clean();
    ob_end_clean();

    // Include JS libraries as $js_lib
    ob_start();
    include 'js/jq.js';
    $js_lib = ob_get_clean();
    ob_end_clean();

    // Include JS app as $js
    ob_start();
    include 'js/app.js';
    $js = ob_get_clean();
    ob_end_clean();

    // Include top-level template, and inherit resources from above
    include "template/layout.php";

    // TODO: server-side resource minification
    // TODO: replace includes with template render() function