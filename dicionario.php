<?php
//nome do arquivo selecionado
$arquivo = file("texto.txt");
$quantidade = count(file("texto.txt"));


$dicionario = [];


$palavras = [];

for ($i=0; $i < $quantidade ; $i++) { 
  $palavras = explode(" ", $arquivo[$i]);
  

	  for ($y=0; $y < count($palavras) ; $y++) { 
	  		$controle = false;
	  		$str1 = str_replace("\"", "", rtrim(strtolower($palavras[$y])));
	  		$str2 = str_replace(".", "", $str1);
	  		$str = str_replace(":", "", $str2);

		  	if (count($dicionario)==0) {
		  		$dicionario[0] = $str; 
		  		
		  	}else{
				
				for ($z=0; $z < count($dicionario) ; $z++) { 
				  		if ($str == $dicionario[$z]) {
				  			$controle = true;		  		
				 		}		
				}

				if ($controle == false){
				  	$dicionario[count($dicionario)] = $str;
				}

		  	}
	  }
}


for ($r=0; $r < count($dicionario); $r++) { 
	natcasesort($dicionario);
	echo $dicionario[$r]."<br>";
}





?>
