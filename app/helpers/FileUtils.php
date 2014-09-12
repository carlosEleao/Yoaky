<?php

class FileUtils {

	public static function getImagePath($subDir) {
		$path = "\files\image\\".$subDir."\";
		if(!file_exists($path)) {
			mkdir($path);
		}
		return $path;
	}

	public static function getImageName() {
		$fileName = "img_".rand(0,99999).".jpg";
		return $fileName;
	}

	public static function saveImage($savePath, $imagePath) {

		$Imagine = new Imagine\Gd\Imagine();
		$size    = new Imagine\Image\Box(40, 40);
		$mode    = Imagine\Image\ImageInterface::THUMBNAIL_INSET;
    	$Imagine->open($imagePath)
    		->thumbnail($size, $mode)
    		->save($savePath);
	}
	
}

	