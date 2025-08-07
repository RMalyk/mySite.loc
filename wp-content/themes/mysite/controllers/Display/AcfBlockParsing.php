<?php namespace mySite\Display;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class AcfBlockParsing {

	public static function get_blocks_data_from_post( $post_id, $block_name ) {
		$post = get_post( $post_id );

		if ( ! $post ) {
			return null;
		}

		$blocks = parse_blocks( $post->post_content );

		foreach ( $blocks as $block ) {
			if ( $block['blockName'] === 'acf/' . $block_name ) {
				return $block['attrs']['data'] ?? null;
			}
		}

		return null;
	}

}

class_alias( 'mySite\Display\AcfBlockParsing', 'AcfBlockParsing' );
