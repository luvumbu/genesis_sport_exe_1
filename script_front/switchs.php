<?php
header("Access-Control-Allow-Origin: *"); 
echo "cool XXX ";
 
$call =  $_POST["get_call"];
 
$get_time = $_POST["get_time"];
$get_source_envoie = $_POST["get_source_envoie"]; 
$get_datas_length= $_POST["get_datas_length"]; 
// echo $_POST["0"]; 
// echo $_POST["1"]; 
// echo $_POST["2"]; 
$data_full_name_="data_full_name";  
$get_premier_lettre = strtolower($_POST["get_premier_lettre"]);
 
/*
echo "Lonsgeur : ";
echo count($_POST["0"]);
echo "Fin";
*/
 

//echo $call;
/* 
  case "a":
  case "b":
  case "c":
  case "d":
  case "e":
  case "f":
  case "g":
  case "h":
  case "i":
  case "j":
  case "k":
  case "l":
  case "m":
  case "n":
  case "o":
  case "p":
  case "q":
  case "r":
  case "s":
  case "t":
  case "u":
  case "v":
  case "w":
  case "x":
  case "y":
  case "z":


 
*/


$data_full_name='data/data_full_name/data_full_name';      

/*
$info_sendx='
        ,
  {        
  "users_nom_complet":"'.$_POST["0"].'",
  "users_nom_complet_1":"'.$_POST["1"].'",
  "result_users_nom_0":"'.$_POST["2"].'",
  "result_users_prenom_1":"'.$_POST["3"].'",
  "result_users_prenom_2":"'.$_POST["4"].'",
  "users_sex":"'.$_POST["5"].'",

  "users_naissance":"'.$_POST["6"].'",
  "users_naissance2":"'.$_POST["7"].'",
  "users_nationality":"'.$_POST["8"].'",
  "users_link_page":"", 

  "users_add_date":"'.$_POST["10"].'",

  "club_nom_complet":"'.$_POST["11"].'",
  "club_departement":"'.$_POST["12"].'",
  "club_region":"'.$_POST["13"].'",
  "result_users_perf":"'.$_POST["14"].'",
  "result_villes_nom":"'.$_POST["15"].'",

  "epreuve_nom_complet":"'.$_POST["16"].'",
  "epreuve_emplacement":"'.$_POST["17"].'",
  "result_date_perf":"'.$_POST["18"].'",
  "window_location_href":"'.$_POST["19"].'", 
  "users_categorie":"'.$_POST["20"].'", 

  "result_users_perf_final":"'.$_POST["21"].'", 
  "result_reccord":"'.$_POST["22"].'"  , 
  "epreuve_filtre_nom":"'.$_POST["23"].'"  , 
  "epreuve_emplacement":"'.$_POST["24"].'"  
  

}';
 */


$_POST["14"] =str_replace("'",".",$_POST["14"]);
$_POST["21"] =str_replace("'",".",$_POST["21"]);



$_POST["14"] =str_replace("..",".",$_POST["14"]);
$_POST["21"] =str_replace("..",".",$_POST["21"]);
 

$reccord = $_POST["20"];



$info_sendx='
        ,
  {        
  "get_users_nom_complet_1":"'.$_POST["0"].'",
  "get_users_nom_complet":"'.$_POST["1"].'",
  "get_result_users_nom_0":"'.$_POST["2"].'",
  "get_result_users_nom_1":"'.$_POST["3"].'",
  "get_result_users_nom_2":"'.$_POST["4"].'",
  "epreuve_sex":"'.$_POST["5"].'",
  "get_users_naissance":"'.$_POST["6"].'",
  "get_users_naissance2":"'.$_POST["7"].'",
  "get_users_nationality":"'.$_POST["8"].'",
  "window_location_href":"'.$_POST["9"].'",
  "data_full_pass":"'.$_POST["10"].'",
  "get_club_nom_complet":"'.$_POST["11"].'",
  "get_club_departement":"'.$_POST["12"].'",
  "get_club_region":"'.$_POST["13"].'",
  "get_result_users_perf":"'.$_POST["14"].'",
  "get_result_villes_nom":"'.$_POST["15"].'",
  "get_epreuve_nom_complet":"'.$_POST["16"].'",
  "get_epreuve_emplacement":"'.$_POST["17"].'",
  "get_result_date_perf":"'.$_POST["18"].'",
  "get_cat":"'.$_POST["19"].'" ,
  "reccord":"'.$_POST["20"].'" , 
  "get_result_users_perf2":"'.$_POST["21"].'"    
}';
 





 
	//direction_envoie















 


$adds= $_POST["0"].$_POST["14"].$_POST["18"] ;




switch ($get_premier_lettre) {
  case "a":

    $monfichier = fopen('data/data_full_name/data_full_name_all_a.php', 'a+');
    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
    //fseek($monfichier, 0); // On remet le curseur au début du fichier
    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
    //fseek($monfichier, 0); // On remet le curseur au début du fichier
     fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
     fclose($monfichier); 





    $monfichier = fopen('data/data_full_name/data_full_name_a.php', 'a+');
    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
    //fseek($monfichier, 0); // On remet le curseur au début du fichier
    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
    //fseek($monfichier, 0); // On remet le curseur au début du fichier
     fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
     fclose($monfichier); 



    







      break;

      case "b":

        $monfichier = fopen('data/data_full_name/data_full_name_all_b.php', 'a+');
        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
        //fseek($monfichier, 0); // On remet le curseur au début du fichier
        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
        //fseek($monfichier, 0); // On remet le curseur au début du fichier
        fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
        fclose($monfichier); 

        $monfichier = fopen('data/data_full_name/data_full_name_b.php', 'a+');
        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
        //fseek($monfichier, 0); // On remet le curseur au début du fichier
        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
        //fseek($monfichier, 0); // On remet le curseur au début du fichier
         fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
         fclose($monfichier); 
          break;
          case "c":

            $monfichier = fopen('data/data_full_name/data_full_name_all_c.php', 'a+');
            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
            //fseek($monfichier, 0); // On remet le curseur au début du fichier
            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
            //fseek($monfichier, 0); // On remet le curseur au début du fichier
            fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
            fclose($monfichier); 

            $monfichier = fopen('data/data_full_name/data_full_name_c.php', 'a+');
            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
            //fseek($monfichier, 0); // On remet le curseur au début du fichier
            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
            //fseek($monfichier, 0); // On remet le curseur au début du fichier
             fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
             fclose($monfichier); 
              break;
              case "d":

                $monfichier = fopen('data/data_full_name/data_full_name_all_d.php', 'a+');
                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                fclose($monfichier); 

                $monfichier = fopen('data/data_full_name/data_full_name_d.php', 'a+');
                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                 fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                 fclose($monfichier); 
                  break;
                  case "e":

                    $monfichier = fopen('data/data_full_name/data_full_name_all_e.php', 'a+');
                    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                     fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                    fclose($monfichier); 
                    $monfichier = fopen('data/data_full_name/data_full_name_e.php', 'a+');
                    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                     fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                     fclose($monfichier); 
                      break;
                      case "f":

                        $monfichier = fopen('data/data_full_name/data_full_name_all_f.php', 'a+');
                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                        fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                        fclose($monfichier); 
                        $monfichier = fopen('data/data_full_name/data_full_name_f.php', 'a+');
                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                         fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                         fclose($monfichier); 
                          break;
                          case "g":

                            $monfichier = fopen('data/data_full_name/data_full_name_all_g.php', 'a+');
                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                            fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                            fclose($monfichier); 
                            $monfichier = fopen('data/data_full_name/data_full_name_g.php', 'a+');
                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                             fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                             fclose($monfichier); 
                              break;
                              case "h":

                                $monfichier = fopen('data/data_full_name/data_full_name_all_h.php', 'a+');
                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                fclose($monfichier); 
                                $monfichier = fopen('data/data_full_name/data_full_name_h.php', 'a+');
                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                 fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                 fclose($monfichier); 
                                  break;
                                      
                                  case "i":

                                    $monfichier = fopen('data/data_full_name/data_full_name_all_i.php', 'a+');
                                    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                    fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                    fclose($monfichier); 
                                    $monfichier = fopen('data/data_full_name/data_full_name_i.php', 'a+');
                                    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                     fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                     fclose($monfichier); 
                                      break;
                                      case "j":

                                        $monfichier = fopen('data/data_full_name/data_full_name_all_j.php', 'a+');
                                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                        fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                        fclose($monfichier); 
                                        $monfichier = fopen('data/data_full_name/data_full_name_j.php', 'a+');
                                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                         fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                         fclose($monfichier); 
                                          break;
                                          case "k":

                                            $monfichier = fopen('data/data_full_name/data_full_name_all_k.php', 'a+');
                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                            fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                            fclose($monfichier); 
                                            $monfichier = fopen('data/data_full_name/data_full_name_k.php', 'a+');
                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                             fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                             fclose($monfichier); 
                                              break;
                                              case "l":

                                                $monfichier = fopen('data/data_full_name/data_full_name_all_l.php', 'a+');
                                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                fclose($monfichier); 
                                                $monfichier = fopen('data/data_full_name/data_full_name_l.php', 'a+');
                                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                 fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                 fclose($monfichier); 
                                                  break;
                                                  case "m":

                                                    $monfichier = fopen('data/data_full_name/data_full_name_all_m.php', 'a+');
                                                    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                    fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                    fclose($monfichier); 
                                                    $monfichier = fopen('data/data_full_name/data_full_name_m.php', 'a+');
                                                    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                     fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                     fclose($monfichier); 
                                                      break;
                                                      case "n":

                                                        $monfichier = fopen('data/data_full_name/data_full_name_all_n.php', 'a+');
                                                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                        fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                        fclose($monfichier); 

                                                        $monfichier = fopen('data/data_full_name/data_full_name_n.php', 'a+');
                                                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                         fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                         fclose($monfichier); 
                                                          break;
                                                          case "s":

                                                            $monfichier = fopen('data/data_full_name/data_full_name_all_s.php', 'a+');
                                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                            fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                            fclose($monfichier); 
                                                            $monfichier = fopen('data/data_full_name/data_full_name_s.php', 'a+');
                                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                             fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                             fclose($monfichier); 
                                                              break;
                                                      case "o":

                                                        $monfichier = fopen('data/data_full_name/data_full_name_all_o.php', 'a+');
                                                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                        fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                        fclose($monfichier); 
                                                        $monfichier = fopen('data/data_full_name/data_full_name_o.php', 'a+');
                                                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                         fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                         fclose($monfichier); 
                                                          break;
                                                          case "u":

                                                            $monfichier = fopen('data/data_full_name/data_full_name_all_u.php', 'a+');
                                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                            fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                            fclose($monfichier); 
                                                            $monfichier = fopen('data/data_full_name/data_full_name_u.php', 'a+');
                                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                             fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                             fclose($monfichier); 
                                                              break;
                                                          case "p":

                                                            $monfichier = fopen('data/data_full_name/data_full_name_all_p.php', 'a+');
                                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                            fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                            fclose($monfichier); 
                                                            $monfichier = fopen('data/data_full_name/data_full_name_p.php', 'a+');
                                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                             fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                             fclose($monfichier); 
                                                              break;
                                                              case "q":

                                                                $monfichier = fopen('data/data_full_name/data_full_name_all_q.php', 'a+');
                                                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                                fclose($monfichier); 
                                                                $monfichier = fopen('data/data_full_name/data_full_name_q.php', 'a+');
                                                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                 fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                                 fclose($monfichier); 
                                                                  break;
                                                                  case "r":

                                                                    $monfichier = fopen('data/data_full_name/data_full_name_all_r.php', 'a+');
                                                                    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                    fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                                    fclose($monfichier); 
                                                                    $monfichier = fopen('data/data_full_name/data_full_name_r.php', 'a+');
                                                                    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                     fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                                     fclose($monfichier); 
                                                                      break;
                                                                      case "t":

                                                                        $monfichier = fopen('data/data_full_name/data_full_name_all_t.php', 'a+');
                                                                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                        fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                                        fclose($monfichier); 
                                                                        $monfichier = fopen('data/data_full_name/data_full_name_t.php', 'a+');
                                                                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                         fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                                         fclose($monfichier); 
                                                                          break;
                                                                          case "u":

                                                                            $monfichier = fopen('data/data_full_name/data_full_name_all_u.php', 'a+');
                                                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                            fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                                            fclose($monfichier); 
                                                                            $monfichier = fopen('data/data_full_name/data_full_name_u.php', 'a+');
                                                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                             fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                                             fclose($monfichier); 
                                                                              break;
                                                                              case "v":

                                                                                $monfichier = fopen('data/data_full_name/data_full_name_all_v.php', 'a+');
                                                                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                                                fclose($monfichier); 
                                                                                $monfichier = fopen('data/data_full_name/data_full_name_v.php', 'a+');
                                                                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                 fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                                                 fclose($monfichier); 
                                                                                  break;
                                                                                  case "w":

                                                                                    $monfichier = fopen('data/data_full_name/data_full_name_all_w.php', 'a+');
                                                                                    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                    fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                                                    fclose($monfichier); 
                                                                                    $monfichier = fopen('data/data_full_name/data_full_name_w.php', 'a+');
                                                                                    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                    //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                    //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                     fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                                                     fclose($monfichier); 
                                                                                      break;
                                                                                      case "x":

                                                                                        $monfichier = fopen('data/data_full_name/data_full_name_all_x.php', 'a+');
                                                                                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                        fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                                                        fclose($monfichier); 
                                                                                        $monfichier = fopen('data/data_full_name/data_full_name_x.php', 'a+');
                                                                                        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                        //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                        //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                         fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                                                         fclose($monfichier); 
                                                                                          break;
                                                                                          case "y":

                                                                                            $monfichier = fopen('data/data_full_name/data_full_name_all_y.php', 'a+');
                                                                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                            fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                                                            fclose($monfichier); 
                                                                                            $monfichier = fopen('data/data_full_name/data_full_name_y.php', 'a+');
                                                                                            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                            //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                            //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                             fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                                                             fclose($monfichier); 
                                                                                              break;
                                                                                              case "z":

                                                                                                $monfichier = fopen('data/data_full_name/data_full_name_all_z.php', 'a+');
                                                                                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                                fputs($monfichier, $info_sendx); // On écrit le nouveau nombre de pages vues
                                                                                                fclose($monfichier); 
                                                                                                $monfichier = fopen('data/data_full_name/data_full_name_z.php', 'a+');
                                                                                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                                //$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                                                                                //fseek($monfichier, 0); // On remet le curseur au début du fichier
                                                                                                 fputs($monfichier, ',"'.$adds.'"'."\n"); // On écrit le nouveau nombre de pages vues
                                                                                                 fclose($monfichier); 
                                                                                                  break;
                                              
                                            
                                          
                                        
 
}


































$servername = "localhost";
$username = "u481158665_ffa";
$password = "v3p9r3e@59A";
$dbname = "u481158665_ffa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

















$sql =" CREATE TABLE `info_all` (
  `id_user` int(11) NOT NULL,
  `epreuve_sex` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_cat` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_club_departement` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_club_nom_complet` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_club_region` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_epreuve_emplacement` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_result_users_nom_0` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_epreuve_nom_complet` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_result_date_perf` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_result_users_nom_1` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_result_users_nom_2` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_result_users_perf` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_result_users_perf2` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_result_villes_nom` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_users_naissance` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_users_naissance2` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_users_nationality` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_users_nom_complet` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_users_nom_complet_1` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";


















if ($conn->query($sql) === TRUE) {
echo "Table MyGuests created successfully";
} else {
echo "Error creating table: " . $conn->error;
}

$conn->close();












































































 



echo $window_location_href."ooook" ; 


$servername = "localhost";
$username = "u481158665_ffa";
$password = "v3p9r3e@59A";
$dbname = "u481158665_ffa";














$get_users_nom_complet_1= $_POST["0"] ;  // ok 
$get_users_nom_complet= $_POST["1"] ; // ok
$get_result_users_nom_0= $_POST["2"] ; // ok
$get_result_users_nom_1= $_POST["3"] ; // ok
$get_result_users_nom_2= $_POST["4"] ; // ok 
$epreuve_sex= $_POST["5"] ; // ok
$get_users_naissance= $_POST["6"] ; 
$get_users_naissance2= $_POST["7"] ; 
$get_users_nationality= $_POST["8"] ; 
$window_location_href= htmlspecialchars( $_POST["9"]) ; 
$data_full_pass= $_POST["10"] ; 
$get_club_nom_complet= $_POST["11"] ; 
$get_club_departement= $_POST["12"] ; 
$get_club_region= $_POST["13"] ; 

$get_result_users_perf= $_POST["14"] ; 


$get_result_villes_nom= $_POST["15"] ; 
$get_epreuve_nom_complet= $_POST["16"] ; 
$get_epreuve_emplacement= $_POST["17"] ; 
$get_result_date_perf= $_POST["18"] ; 
$get_cat= $_POST["19"] ;
$reccord= $_POST["20"] ; 
$get_result_users_perf2= $_POST["21"];  

/*
$get_result_users_perf =str_replace('"',"'",$get_result_users_perf);
$get_result_users_perf2 =str_replace('"',"'",$get_result_users_perf2);
*/


$get_result_users_perf =str_replace('"',":",$get_result_users_perf);
$get_result_users_perf =str_replace("'",":",$get_result_users_perf);
$get_result_users_perf =str_replace("::",":",$get_result_users_perf);
 

$get_result_users_perf2 =str_replace('"',":",$get_result_users_perf2);
$get_result_users_perf2 =str_replace("'",":",$get_result_users_perf2);
$get_result_users_perf2 =str_replace("::",":",$get_result_users_perf2);






$get_result_users_perf2 =str_replace('"'," ", $get_result_users_perf2);
$get_result_users_perf =str_replace("'",".", $get_result_users_perf);

$get_result_users_perf =str_replace('"'," ", $get_result_users_perf);
$get_result_users_perf2 =str_replace("'",".", $get_result_users_perf2);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}










$sql = "INSERT INTO info_all (
  epreuve_sex,
  get_cat,
  get_club_departement,
  get_club_nom_complet,
  get_club_region,
  get_epreuve_emplacement,
  get_result_users_nom_0,
  get_epreuve_nom_complet,
  get_result_date_perf,
  get_result_users_nom_1,
  get_result_users_nom_2,
  get_result_users_perf,
  get_result_users_perf2,
  get_result_villes_nom,
  get_users_naissance,
  get_users_naissance2,
  get_users_nationality,
  get_users_nom_complet,
  get_users_nom_complet_1,
  reccord 


  )
VALUES (
  '$epreuve_sex',
  '$get_cat',
  '$get_club_departement',
  '$get_club_nom_complet',
  '$get_club_region',
  '$get_epreuve_emplacement',
  '$get_result_users_nom_0',
  '$get_epreuve_nom_complet',
  '$get_result_date_perf',
  '$get_result_users_nom_1',
  '$get_result_users_nom_2',
  '$get_result_users_perf',
  '$get_result_users_perf2',
  '$get_result_villes_nom',
  '$get_users_naissance',
  '$get_users_naissance2',
  '$get_users_nationality',
  '$get_users_nom_complet',
  '$get_users_nom_complet_1', 
  '$reccord'
  )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();





































  



?>