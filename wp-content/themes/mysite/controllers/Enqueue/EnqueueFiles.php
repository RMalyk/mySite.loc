<?php namespace mySite\Enqueue;

if (!defined('ABSPATH')) exit;

class EnqueueFiles
{

	public function __construct()
	{
		$this->applyActions();
	}

	/**
	 * Add actions and filters
	 */
	public function applyActions()
	{
		add_filter('wp_enqueue_scripts', [$this, 'enqueueScriptsAndStyles']);
	}


	public function enqueueScriptsAndStyles()
	{
		$get_stylesheet_directory_uri = get_stylesheet_directory_uri();

		wp_enqueue_style('mySite', $get_stylesheet_directory_uri . '/assets/css/style.min.css', [], false);

		wp_enqueue_script('mySite', $get_stylesheet_directory_uri . '/assets/js/script.min.js', ['jquery'], '', true);
	}
}

new EnqueueFiles();