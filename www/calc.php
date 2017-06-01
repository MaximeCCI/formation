<?php
/**
 * Returns an Image object that can then be painted on the screen. 
 * The url argument must specify an absolute {@link URL}. The name
 * argument is a specifier that is relative to the url argument. 
 * <p>
 * This method always returns immediately, whether or not the 
 * image exists. When this applet attempts to draw the image on
 * the screen, the data will be loaded. The graphics primitives 
 * that draw the image will incrementally paint on the screen. 
 *
 */

class calc {

/**
 * texte du docblok 
 *
 * @param  $arg1  premier argument
 * @param  $arg2 2eme argument
 * @return  $res sortie
 */
	static function sum($arg1, $arg2) {
		$res = $arg1 + $arg2;
		return $res;
	}
 
	static function minus($arg1, $arg2) {
		$res = $arg1 - $arg2;
		return $res;
	}
 
	static function multi($arg1, $arg2) {
		$res = $arg1 * $arg2;
		return $res;
	}
 
	static function divid($arg1, $arg2) {
		if ($arg2 == 0) return 'erreur';
		$res = $arg1 / $arg2;
		return $res;
	}
 
}
?>