<?php
function minify_html($content) {

    $search = array(
        '/\>[^\S ]+/msi',     // strip whitespaces after tags, except space
        '/[^\S ]+\</msi',     // strip whitespaces before tags, except space
        '/(\s{2,})/msi',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/msi', // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        ' ',
    );

    $buffer = preg_replace($search, $replace, $content);

    return $buffer;
}
