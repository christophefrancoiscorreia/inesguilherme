<?php
function patch() {
    $allowed_tags = array(
        '&nbsp;' => array(),
        'br'=> array(),
        'iframe' => array(
            'class' => array(),
            'src'  => array(),
            'style' => array(),
            'align' => array()
        ),
        'a' => array(
            'class' => array(),
            'href'  => array(),
            'rel'   => array(),
            'title' => array(),
            'style' => array(),
            'align' => array(),
            'target' => array()
        ),
        'abbr' => array(
            'title' => array()
        ),
        'b' => array(),
        'blockquote' => array(
            'cite'  => array()
        ),
        'cite' => array(
            'title' => array()
        ),
        'code' => array(),
        'del' => array(
            'datetime' => array(),
            'title' => array()
        ),
        'dd' => array(),
        'div' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'article' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'section' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'div' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'address' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'table' => array(
            'align' => array(),
            'width' => array(),
            'frame' => array(),
            'rules' => array(),
            'summary' => array(),
            'bgcolor' => array(),
            'cellspacing' => array(),
            'cellpadding' => array(),
            'border' => array(),
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'thead' => array(
            'align' => array(),
            'width' => array(),
            'frame' => array(),
            'rules' => array(),
            'summary' => array(),
            'bgcolor' => array(),
            'cellspacing' => array(),
            'cellpadding' => array(),
            'border' => array(),
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'th' => array(
            'colspan' => array(),
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'tbody' => array(
            'align' => array(),
            'width' => array(),
            'frame' => array(),
            'rules' => array(),
            'summary' => array(),
            'bgcolor' => array(),
            'cellspacing' => array(),
            'cellpadding' => array(),
            'border' => array(),
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'tr' => array(
            'rowspan' => array(),
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'td' => array(
            'colspan' => array(),
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'tfoot' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()
        ),
        'dl' => array(),
        'dt' => array(),
        'em' => array(),
        'h1' => array(
            'style' => array(),
            'align' => array(),
        ),
        'h2' => array(
            'style' => array(),
            'align' => array(),
        ),
        'h3' => array(
            'style' => array(),
            'align' => array(),
        ),
        'h4' => array(
            'style' => array(),
            'align' => array(),
        ),
        'h5' => array(
            'style' => array(),
            'align' => array(),
        ),
        'h6' => array(
            'style' => array(),
            'align' => array(),
        ),
        'i' => array(),
        'img' => array(
            'alt'    => array(),
            'class'  => array(),
            'height' => array(),
            'src'    => array(),
            'width'  => array(),
            'style' => array(),
            'align' => array()

        ),
        'li' => array(
            'class' => array(),
            'style' => array(),
            'align' => array()

        ),
        'ol' => array(
            'class' => array(),
            'style' => array(),
            'align' => array()

        ),
        'p' => array(
            'class' => array(),
            'style' => array(),
            'align' => array()

        ),
        'q' => array(
            'cite' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()

        ),
        'span' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'align' => array()

        ),
        'strong' => array(
            'class' => array(),
            'style' => array(),
            'align' => array()
        ),
        'ul' => array(
            'class' => array(),
            'style' => array(),
            'align' => array()

        ),
        'sub' => array(
            'class' => array(),
            'style' => array(),
            'align' => array()
        ),
        'sup' => array(
            'class' => array(),
            'style' => array(),
            'align' => array()
        ),
        's' => array(
            'class' => array(),
            'style' => array(),
            'align' => array()
        ),
        'noscript' => array(
            'class' => array(),
            'style' => array(),
            'align' => array()
        ),
        'strike' => array(
            'class' => array(),
            'style' => array(),
            'align' => array()

        ),
    );

    return $allowed_tags;
}