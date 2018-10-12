<?php
include(dirname(__FILE__).'/Net/SFTP.php');
$extesions_list = ["php", "js", "css", "html"];

$host = 'YOUR_HOST_HERE';
$username = 'USERNAME';
$password = 'PASSWORD!';

$sftp = new Net_SFTP($host);
if (!$sftp->login($username, $password)) {
	exit('Login Failed');
}
echo "Logged in...";
die();



$output = $sftp->nlist('public_html', true);

foreach ($output as $filename) {
	if($filename == '.' || $filename == '..') continue;
	$el = explode(".", $filename);
	$extesion = array_pop($el);
	if (in_array($extesion, $extesions_list)) {
	    $dirname = dirname($filename);
	    if (!is_dir($dirname))
	    {
	    	mkdir($dirname, 0755, true);
	    }
	    //$myfile = fopen($filename, "w");
	    //fclose($myfile);
	    $date = "5/11/2014 08:32 PM EST";
	    if (!touch($filename, strtotime($date))) {
	    	echo 'Whoops, something went wrong...';
	    } else {
	    	
	    }
	}
}
echo "Done";



// include('../Net/SFTP.php');
// $extesions_list = ["php", "js", "css", "html"];
// $sftp = new Net_SFTP('178.62.54.127');
// if (!$sftp->login('b2b_admin', 'IwebImob223!')) {
// 	exit('Login Failed');
// }
// echo "Logged in...";
// $output = $sftp->nlist('public_html', true);

// foreach ($output as $filename) {
// 	if($filename == '.' || $filename == '..') continue;
// 	$el = explode(".", $filename);
// 	$extesion = array_pop($el);
// 	if (in_array($extesion, $extesions_list)) {
// 	    $dirname = dirname($filename);
// 	    if (!is_dir($dirname))
// 	    {
// 	    	mkdir($dirname, 0755, true);
// 	    }
// 	    //$myfile = fopen($filename, "w");
// 	    //fclose($myfile);
// 	    $date = "5/11/2014 08:32 PM EST";
// 	    if (!touch($filename, strtotime($date))) {
// 	    	echo 'Whoops, something went wrong...';
// 	    } else {
	    	
// 	    }
// 	}
// }
// echo "Done";





