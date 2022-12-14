<?php
	require 'simple_html_dom.php';
	$url = 'https://www.covid-19.pa.gov.br/';
	//$url = 'https://google.com';
	$config = array(
		"ssl"=> array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
		),
	);  

	$context = stream_context_create($config);
	
	$html = file_get_html($url, false, $context);
	$results = $html->find('script');
	for ($i=0;$i<count($results)-2;$i++){
		if($results[$i]->attr['src']){
			echo "<script src='".$url.$results[$i]->attr['src']."'></script>";
		}
	}
	$results = $html->find('link');
	for ($i=0;$i<count($results);$i++){
		if($results[$i]->attr['href']){
			echo "<link src='".$url.$results[$i]->attr['href']."'></script>";
		}
	}
	echo $html;
	
	?>