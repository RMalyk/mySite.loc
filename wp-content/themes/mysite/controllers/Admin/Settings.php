<?php namespace mySite\Admin;

if (!defined('ABSPATH')) exit;

class Settings
{

	public function __construct()
	{
		$this->initHooks();
	}

	public function initHooks()
	{
		add_action('acf/init', [$this, 'addOptionsPages']);
		add_action('after_setup_theme', [$this, 'mySiteSetup']);
	}

	public function mySiteSetup()
	{
		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support('title-tag');

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support('post-thumbnails');

		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			]
		);
	}

	public function addOptionsPages()
	{
		if (!function_exists('acf_add_options_page')) return;

		acf_add_options_page(
			[
				'page_title' => 'mySite settings',
				'menu_title' => 'mySite settings',
				'menu_slug'  => 'mySite-settings',
				'capability' => 'administrator',
				'redirect'   => false
			]
		);

//		acf_add_options_page(
//			[
//				'page_title'  => 'Main slider',
//				'menu_title'  => 'Main slider',
//				'menu_slug'   => 'main-slider',
//				'parent_slug' => 'shopingo-theme-settings',
//				'capability'  => 'administrator',
//				'redirect'    => false
//			]
//		);
	}

}

new Settings();