<?php namespace App;

use MatthiasMullie\Minify;

class Utils
{
	/**
	 * Static public function
	 *
	 * @param
	 * @return
	 */
	static public function getStyle($file) {
		$minifier = new Minify\CSS(CSS . $file);
		return $minifier->minify();
	}

	/**
	 * Static public function
	 *
	 * @param
	 * @return
	 */
	static public function getScript($file) {
		$minifier = new Minify\JS(JS . $file);
		return $minifier->minify();
	}

	/**
	 * Static public function
	 *
	 * @param
	 * @return
	 */
	static public function generateID($type = false) {
		$id = ($type) ? $type : '';
		$microtime = explode(' ', microtime());
		$hash = date('s') . str_replace('0.', '', $microtime[0]);
		$id .= $hash;
		return strtoupper($id);
	}
}
