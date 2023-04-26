<?php

class t {

	public function __construct() {}

	public static function w($l) {
		if (isset($_SESSION['lang'])) $lang = $_SESSION['lang']; else $lang = 'ru';
		$sql = mysqli_fetch_array(db::query("select * from `word` where name = '$l'"));
		return $sql['txt'.$lang];
	}

	public static function p($id) {
		$sql = mysqli_fetch_array(db::query("select MIN(price) as min from `price` where product_id = '$id'"));
		return $sql[0];
	}

	public static function s($id) {
		$sql = mysqli_fetch_array(db::query("select MIN(size_id) as min from `price` where product_id = '$id'"));
		$size_id = $sql[0];
		$sql2 = mysqli_fetch_array(db::query("select * from `size` where id = '$size_id'"));
		return $sql2['size'];
	}

	public static function c($id) {
		$sql = mysqli_fetch_array(db::query("select MIN(circ_id) as min from `price` where product_id = '$id'"));
		$circ_id = $sql[0];
		$sql2 = mysqli_fetch_array(db::query("select * from `circ` where id = '$circ_id'"));
		return $sql2['number'];
	}

	public static function img($id) {
		$sql = mysqli_fetch_array(db::query("select * from `product` where id = '$id'"));
		return $sql['img'];
	}
	
	public static function name($id) {
		$sql = mysqli_fetch_array(db::query("select * from `product` where id = '$id'"));
		return $sql['name'];
	}


	//
	public static function s2($id) {
		$sql2 = mysqli_fetch_array(db::query("select * from `size` where id = '$id'"));
		return $sql2['size'];
	}

	public static function c2($id) {
		$sql2 = mysqli_fetch_array(db::query("select * from `color` where id = '$id'"));
		return $sql2['name'];
	}
    
}