<?php
// array with names
$a[] = "farhan";
$a[] = "roger";
$a[] = "franco";
$a[] = "grakk";
$a[] = "superman";
$a[] = "flash";

$q =$_REQUEST["q"];

$hint="";

if($q !==""){
	$q = strtolower($q);
	$len=strlen($q);
	foreach($a as $name){
		if (stristr($q,substr($name,0, $len))) {
		if ($hint ===""){
			$hint = $name;
		}else{
			$hint .=", $name";

		}

		}
	}
}


//output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "Nang Adong(TIDAK ADA)" : $hint;
?>

