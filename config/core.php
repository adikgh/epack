<?php 

require 'db.php';
require 't.php';

class core {
   public function __construct() {
		session_start();

		new db;
		new t;
   }
}


// data
$core = new core;
$site = mysqli_fetch_array(db::query("select * from `site` where id = 1"));


// lang
$lang = 'ru';
if (isset($_GET['lang'])) if ($_GET['lang'] == 'kz' || $_GET['lang'] == 'ru') $_SESSION['lang'] = $_GET['lang'];
if (isset($_SESSION['lang'])) $lang = $_SESSION['lang'];


// 
$ver = 2;
$site_set = [];