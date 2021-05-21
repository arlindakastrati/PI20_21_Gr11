<?php
// Array with names
$a[] = "Arlinda";
$a[] = "Alberiana";
$a[] = "Albiona";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Betim";
$a[] = "Ari";
$a[] = "Agon";
$a[] = "Eris";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Amanda";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Violeta";
$a[] = "Liza";
$a[] = "Viktoria";

// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>