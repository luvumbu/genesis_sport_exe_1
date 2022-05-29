<?php
$__FILE__= dirname(__FILE__); 
$nom_dossier = ""; 
$__FILE__strlen= strlen($__FILE__);
for($i=$__FILE__strlen-1; $i>0;$i--){
    
    $nom_dossier=$nom_dossier.$__FILE__[$i];
    if($__FILE__[$i]=="d" && $__FILE__[$i+1]=="a" && $__FILE__[$i+2]=="t" && $__FILE__[$i+3]=="a"){
      $i=0;
    }
}
$nom_dossier= strrev($nom_dossier);
$all="_all.php";
$a_="["; 
$_z="]"; 
$af="_af.php";
$gl="_gl.php";
$mr="_mr.php";
$sz="_sz.php";
?>