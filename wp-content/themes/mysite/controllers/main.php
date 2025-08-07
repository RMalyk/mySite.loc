<?php

if( !defined( 'ABSPATH' ) ) exit;


$controllers_path = get_stylesheet_directory().'/controllers/';
$controllers = [
    'Admin'      => [
        'Settings'
    ],
//    'Menu'       => [
//        'MenuDisplay',
//        'RegisterCustom'
//    ],
    'Display'    => [
//        'DisplayMain',
        'DisplayGlobal',
//        'DisplayImages',
        'GutenbergBlocks',
        'AcfBlockParsing',
//        'DisplayBreadcrumbs',
//        'DisplayResources',
    ],
    'Enqueue'    => [
//        'EnqueueChangeTags',
        'EnqueueFiles'
    ],
//    'Posts'      => [
//        'PostsQuery',
//        'DisplayPosts'
//    ],
//    'Redirects'  => [
//        'OrRedirects',
//        'FrRedirects'
//    ],
//    'Taxonomies' => [
//        'TaxonomiesQuery'
//    ],
//    'RestAPI'    => [
//        'RestAPIMain'
//    ],
//    'Ajax'       => [
//        'AjaxResourceFilter'
//    ]
];

foreach( $controllers as $controller_folder => $controller_array ) {
    foreach( $controller_array as $controller_single_key => $controller_single ) {
        if( is_array( $controller_single ) ) {
            foreach( $controller_single as $controller_file ) {
                require_once( $controllers_path.$controller_folder.'/'.$controller_single_key.'/'.$controller_file.'.php' );
            }

            continue;
        }

        require_once( $controllers_path.$controller_folder.'/'.$controller_single.'.php' );
    }
}