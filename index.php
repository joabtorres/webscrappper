<?php
	 require 'simple_html_dom.php';
	 $url = 'http://localhost/webscrappper/teste.php';
	 $html = file_get_html($url);
	 $results = $html->find('tbody tr');
	 echo "Total de Cidades: ".count($results).'<br/><br/>';
	 foreach($results as $index){
		$cidade = $index->find('td', 0)->plaintext;
		$confirmados = $index->find('td', 1)->plaintext;
		$obitos = $index->find('td', 2)->plaintext;
		echo $cidade."<br/>";
		echo $confirmados."<br/>";
		echo $obitos."<br/>";
	 }
	 
	?>