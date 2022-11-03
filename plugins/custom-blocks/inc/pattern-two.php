<?php
/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/
register_block_pattern_category(
    'Second Pattern File',
    array(
        'label'     => __( 'Second Pattern File', 'block-test' )
    )
);
function custom_block_pattern_two() {
    register_block_pattern(
        'block-test/pattern-two',
        array(
            'title'       => __( 'Second', 'block-test' ),
            'description' => _x( 'Description here', 'block-test' ),
            'content'     => "<!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:list -->\r\n<ul><!-- wp:list-item -->\r\n<li>one</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>two</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>three</li>\r\n<!-- /wp:list-item --></ul>\r\n<!-- /wp:list -->",
            'categories'  => array( 'Second Pattern File' ),
        )
    );
}
add_action( 'init', 'custom_block_pattern_two' );