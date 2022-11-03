<?php
/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/
register_block_pattern_category(
    'Testing Patterns',
    array(
        'label'     => __( 'Testing Patterns', 'block-test' )
    )
);
function custom_block_pattern() {
    register_block_pattern(
        'block-test/pattern-one',
        array(
            'title'       => __( 'Testing', 'block-test' ),
            'description' => _x( 'Description here', 'block-test' ),
            'content'     => "<!-- wp:heading -->\r\n<h2>Heading</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>jcsg;ouivwne:CgsemkjbinsldfikzdfmbnahzE>SKJLFvbxfldjzgbkd</p>\r\n<!-- /wp:paragraph -->",
            'categories'  => array( 'Testing Patterns' ),
        )
    );
}
add_action( 'init', 'custom_block_pattern' );
