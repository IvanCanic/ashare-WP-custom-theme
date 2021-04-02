<?php

function ashare_pagination() {

    $allowedTags = array(
        'span' => array(
            'class' => array()
        ),
        'a' => array(
            'class' => array(),
            'href' => array()
        )
    );

    printf('<ul class="post__pagination">%1$s</ul>', wp_kses( paginate_links(), $allowedTags ));
}