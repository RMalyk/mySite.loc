<?php namespace mySite\Display;

if (!defined('ABSPATH')) exit;

class DisplayGlobal
{

	/**
	 * @param        $link
	 * @param string $classes
	 * @param bool $echo
	 *
	 * @return string|void
	 */
	public static function renderAcfLink($link, $classes = '', $echo = true, $before_title = '', $after_title = '')
	{
		if (empty($link['url'])) return;

		$title  = !empty($link['title']) ? $link['title'] : $link['url'];
		$target = !empty($link['target']) ? 'target="_blank"' : '';
		$class  = !empty($classes) ? 'class="' . $classes . '"' : '';



		$link_html = '<a href="' . $link['url'] . '" ' . $class . ' ' . $target . '>'.$before_title.' ' . $title . ' '.$after_title.'</a>';

		if ($echo) {
			echo $link_html;

			return;
		}

		return $link_html;
	}

	/**
	 * @param        $image
	 * @param string $classes
	 * @param bool $echo
	 *
	 * @return string|void
	 */
	public static function renderAcfImage($image, $classes = '', $echo = true, $attrs_data = [])
	{
		if (empty($image['url'])) return;

		$alt     = !empty($image['alt']) ? $image['alt'] : '';
		$classes = !empty($classes) ? " class='" . $classes . "' " : '';
		$attrs   = '';
		if (!empty($attrs_data)) {
			foreach ($attrs_data as $attrs_datum_key => $attrs_datum) {
				$attrs .= $attrs_datum_key . '="' . $attrs_datum . '" ';
			}
		}

		$image_html = '<img src="' . $image['url'] . '" alt="' . $alt . '"' . $classes . ' ' . $attrs . '>';

		if ($echo) {
			echo $image_html;

			return;
		}

		return $image_html;
	}


	public static function getTemplate($slug, $args = [], $echo = true, $base = '/page-template')
	{
		if (empty($slug)) return '';

		$dir       = get_stylesheet_directory() . $base;
		$full_path = $dir . '/' . $slug . '.php';
		if (!file_exists($full_path)) return '';
		if (!empty($args)) {
			extract($args);
		}

		ob_start();
		include $full_path;

		$content = ob_get_clean();

		if ($echo) {
			echo $content;

			return;
		}

		return $content;
	}

	public static function renderTag($title, $tag = 'p', $class = '')
	{
		if (empty($title)) return;
		if (!empty($class)) {
			echo "<" . $tag . " class='" . $class . "'>" . $title . "</" . $tag . ">";
		} else {
			echo "<" . $tag . ">" . $title . "</" . $tag . ">";
		}
	}

}

class_alias('mySite\Display\DisplayGlobal', 'DisplayGlobal');
