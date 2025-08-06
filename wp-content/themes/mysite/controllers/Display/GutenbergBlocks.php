<?php namespace mySite\Display;

if( !defined( 'ABSPATH' ) ) exit;

class GutenbergBlocks {

	public function __construct() {
		$this->initHooks();
	}

	public function initHooks() {
		add_filter( 'block_categories_all', [ $this, 'addBlocksCategory' ] );
		add_action( 'acf/init', [ $this, 'addBlocks' ] );
	}

	public function addBlocksCategory( $categories ) {
		$new_category = [
			'slug'  => 'mySite-blocks',
			'title' => 'mySite Blocks'
		];

		array_unshift( $categories, $new_category );

		return $categories;
	}

	public static function checkForPreview( $block ) {
		if( empty( $_POST['query']['preview'] ) ) return false;

		echo '<hr>'.$block['title'];
		/* Render screenshot if it's exist for example */

		if(
			!empty( $block['example']['attributes']['data']['image'] ) &&
			file_exists( get_template_directory().'/assets/images/modules/'.
						 $block['example']['attributes']['data']['image'] )
		) {
			echo '<img src="'.get_template_directory_uri().'/assets/images/modules/'.
				 $block['example']['attributes']['data']['image'].
				 '" style="display: block; margin: 0 auto; width: 100%; object-fit: contain;">';
		}

		echo '<hr>';

		return true;
	}

	public function addBlocks() {
		if( !function_exists( 'acf_register_block_type' ) ) return;

		$blocks = $this->returnListOfBlocks();
		foreach( $blocks as $block ) {
			if( empty( $block['name'] ) ) continue;

			acf_register_block_type(
				[
					'name'            => $block['name'],
					'title'           => __( !empty( $block['title'] ) ? $block['title'] : $block['name'] ),
					'description'     => !empty( $block['description'] ) ? __( $block['description'] ) : '',
					'render_template' => 'template-parts/blocks/'.$block['name'].'.php',
					'category'        => !empty( $block['category'] ) ? $block['category'] : '',
					'icon'            => !empty( $block['icon'] ) ? $block['icon'] : [ 'background' => '#000133', 'src' => 'desktop' ],
					'keywords'        => !empty( $block['keywords'] ) ? $block['keywords'] : [],
					'example'         => !empty( $block['example'] ) ? $block['example'] : [],
				]
			);
		}
	}

	public function returnListOfBlocks() {
		return [
//			[
//				'name'        => 'delimiter',
//				'title'       => 'Delimiter',
//				'category'    => 'hayes-blocks',
//				'description' => '',
//				'icon'        => [ 'background' => '#000133', 'src' => 'image-flip-vertical' ],
//				'keywords'    => [ 'delimiter', 'line' ]
//			],
			[
				'name'        => 'hero_slider',
				'title'       => 'Hero Slider',
				'category'    => 'hayes-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#F8F200', 'src' => 'admin-home' ],
				'keywords'    => [ 'hero', 'slider', 'top', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'hero_slider.png',
						]
					]
				]
			],
            [
				'name'        => 'form_section',
				'title'       => 'Hero Slider',
				'category'    => 'hayes-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#F8F200', 'src' => 'admin-home' ],
				'keywords'    => [ 'hero', 'slider', 'top', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'hero_slider.png',
						]
					]
				]
			],
		];
	}

}

new GutenbergBlocks();

class_alias( 'mySite\Display\GutenbergBlocks', 'GutenbergBlocks' );