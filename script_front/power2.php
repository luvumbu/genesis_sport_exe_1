<?php 
header("Access-Control-Allow-Origin: *");
echo "ok";

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

$somme= 30000; 
$somme_plus= 1000;
$sql = 'SELECT * FROM `info_a` WHERE 1  LIMIT '.$somme.','.$somme_plus.'';
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id_user = $row["id_user"] ;
    $epreuve_sex = $row["epreuve_sex"] ;
    $get_cat = $row["get_cat"] ;
    $get_club_departement = $row["get_club_departement"] ;
    $get_club_nom_complet = $row["get_club_nom_complet"] ;

    $get_club_region = $row["get_club_region"] ;
    $get_epreuve_emplacement = $row["get_epreuve_emplacement"] ;
    $get_result_users_nom_0 = $row["get_result_users_nom_0"] ;
    $get_epreuve_nom_complet = $row["get_epreuve_nom_complet"] ;
    $get_result_date_perf = $row["get_result_date_perf"] ;

    $get_result_users_nom_1 = $row["get_result_users_nom_1"] ;
    $get_result_users_nom_2 = $row["get_result_users_nom_2"] ;
    $get_result_users_perf = $row["get_result_users_perf"] ;
    $get_users_nom_complet = $row["get_users_nom_complet"] ;
    $get_result_users_perf2 = $row["get_result_users_perf2"] ;

    $get_result_villes_nom = $row["get_result_villes_nom"] ;
    $get_users_naissance = $row["get_users_naissance"] ;
    $get_users_naissance2 = $row["get_users_naissance2"] ;
    $get_users_nationality = $row["get_users_nationality"] ;
   

    $get_users_nom_complet_1 = $row["get_users_nom_complet_1"] ;

 //echo '<br/>'.    $get_users_nom_complet_1 ; 


    //selection N1






   



































    





// DEBUT SECTION N°_00
$conn_00 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_00->connect_error) {
  die("Connection failed: " . $conn_00->connect_error);
}

$sql_00 = 'SELECT * FROM `epreuve_sex` WHERE `epreuve_sex`="'.$epreuve_sex.'"   ';
$result_00 = $conn_00->query($sql_00);

if ($result_00->num_rows > 0) {
  // output data of each row
  while($row = $result_00->fetch_assoc()) {
  
      $id_epreuve_sex = $row["id_epreuve_sex"];


    //  echo "id eest ".$id_epreuve_sex ; 
  }
} else {
// insertion



                  $conn_00_1 = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn_00_1->connect_error) {
                die("Connection failed: " . $conn_00_1->connect_error);
              }

              $sql_00_1 = "INSERT INTO epreuve_sex (epreuve_sex)
              VALUES ('$epreuve_sex' )";

              if ($conn_00_1->query($sql_00_1) === TRUE) {
                echo "Club departement add ok New record created successfully <br/>";
              } else {
                echo "Error: " . $sql_00_1 . "<br>" . $conn_00_1->error;
              }

              $conn_00_1->close();


// fin de linsertion 
}
$conn_00->close();



























    





// DEBUT SECTION N°_0
$conn_0 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_0->connect_error) {
  die("Connection failed: " . $conn_0->connect_error);
}

$sql_0 = 'SELECT * FROM `get_users_naissance` WHERE `get_users_naissance`="'.$get_users_naissance.'"   ';
$result_0 = $conn_0->query($sql_0);

if ($result_0->num_rows > 0) {
  // output data of each row
  while($row = $result_0->fetch_assoc()) {
  
      $id_get_users_naissance = $row["id_get_users_naissance"];
  }
} else {
// insertion



                  $conn_0_1 = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn_0_1->connect_error) {
                die("Connection failed: " . $conn_0_1->connect_error);
              }

              $sql_0_1 = "INSERT INTO get_users_naissance (get_users_naissance,get_users_naissance2 )
              VALUES ('$get_users_naissance','$get_users_naissance2' )";

              if ($conn_0_1->query($sql_0_1) === TRUE) {
                echo "get naissance  add ok New record created successfully<br/>";
              } else {
                echo "Error: " . $sql_0_1 . "<br>" . $conn_0_1->error;
              }

              $conn_0_1->close();


// fin de linsertion 
}
$conn_0->close();























// DEBUT SECTION N°_1
$conn_1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_1->connect_error) {
  die("Connection failed: " . $conn_1->connect_error);
}

$sql_1 = 'SELECT * FROM `get_cat` WHERE `get_cat`="'.$get_cat.'"   ';
$result_1 = $conn_1->query($sql_1);

if ($result_1->num_rows > 0) {
  // output data of each row
  while($row = $result_1->fetch_assoc()) {
  
      $id_get_cat = $row["id_get_cat"];
  }
} else {
// insertion



                  $conn_1_1 = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn_1_1->connect_error) {
                die("Connection failed: " . $conn_1_1->connect_error);
              }

              $sql_1_1 = "INSERT INTO get_cat (get_cat)
              VALUES ('$get_cat' )";

              if ($conn_1_1->query($sql_1_1) === TRUE) {
                echo "get cat  add ok New record created successfully<br/>";
              } else {
                echo "Error: " . $sql_1_1 . "<br>" . $conn_1_1->error;
              }

              $conn_1_1->close();


// fin de linsertion 
}
$conn_1->close();
























// DEBUT SECTION N°_2
    $conn_2 = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn_2->connect_error) {
      die("Connection failed: " . $conn_2->connect_error);
    }
    
    $sql_2 = 'SELECT * FROM `get_club_departement` WHERE `get_club_departement`="'.$get_club_departement.'" AND `get_club_region`="'.$get_club_region.'" ';
    $result_2 = $conn_2->query($sql_2);
    
    if ($result_2->num_rows > 0) {
      // output data of each row
      while($row = $result_2->fetch_assoc()) {
      
          $id_get_club_departement = $row["id_get_club_departement"];
      }
    } else {
    // insertion



                      $conn_2_1 = new mysqli($servername, $username, $password, $dbname);
                  // Check connection
                  if ($conn_2_1->connect_error) {
                    die("Connection failed: " . $conn_2_1->connect_error);
                  }

                  $sql_2_1 = "INSERT INTO get_club_departement (get_club_departement,get_club_region)
                  VALUES ('$get_club_departement','$get_club_region' )";

                  if ($conn_2_1->query($sql_2_1) === TRUE) {
                    echo "Club departement add ok New record created successfully<br/>";
                  } else {
                    echo "Error: " . $sql_2_1 . "<br>" . $conn_2_1->error;
                  }

                  $conn_2_1->close();


    // fin de linsertion 
    }
    $conn_2->close();

// FIN DE LA SECTION N°_2
 

// DEBUT SECTION N°_3
$conn_3 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_3->connect_error) {
  die("Connection failed: " . $conn_3->connect_error);
}

$sql_3 = 'SELECT * FROM `get_club_nom_complet` WHERE `get_club_nom_complet`="'.$get_club_nom_complet.'" ';
$result_3 = $conn_3->query($sql_3);

if ($result_3->num_rows > 0) {
  // output data of each row
  while($row = $result_3->fetch_assoc()) {
    $id_get_club_nom_complet = $row["id_get_club_nom_complet"];
  }
} else {
// insertion



                  $conn_3_1 = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn_3_1->connect_error) {
                die("Connection failed: " . $conn_3_1->connect_error);
              }

              $sql_3_1 = "INSERT INTO get_club_nom_complet (get_club_nom_complet,get_club_departement,get_club_region,get_result_date_perf)
              VALUES ('$get_club_nom_complet','$get_club_departement','$get_club_region','$get_result_date_perf')";

              if ($conn_3_1->query($sql_3_1) === TRUE) {
                echo "get_club_nom_complet New record created successfully";
              } else {
                echo "Error: " . $sql_3_1 . "<br>" . $conn_3_1->error;
              }

              $conn_3_1->close();


// fin de linsertion 
}
$conn_3->close();

// FIN DE LA SECTION N°_3
 


 





// DEBUT SECTION N°_4
$conn_4 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_4->connect_error) {
  die("Connection failed: " . $conn_4->connect_error);
}

$sql_4 = 'SELECT * FROM `get_result_users_nom_0` WHERE `get_result_users_nom_0`="'.$get_result_users_nom_0.'"';
$result_4 = $conn_4->query($sql_4);

if ($result_4->num_rows > 0) {
  // output data of each row
  while($row = $result_4->fetch_assoc()) {
    $id_get_result_users_nom_0 = $row["id_get_result_users_nom_0"];
  }
} else {
// insertion


$conn_4_1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_4_1->connect_error) {
  die("Connection failed: " . $conn_4_1->connect_error);
}

$sql_4_1 = "INSERT INTO get_result_users_nom_0 (get_result_users_nom_0,get_result_users_nom_1,get_result_users_nom_2,get_users_naissance,get_users_naissance2,get_users_nationality)
VALUES ('$get_result_users_nom_0','$get_result_users_nom_1','$get_result_users_nom_2','$get_users_naissance','$get_users_naissance2','$get_users_nationality')";

if ($conn_4_1->query($sql_4_1) === TRUE) {
  echo "get_result_users_nom_0 New record created successfully";
} else {
  echo "Error: " . $sql_4_1 . "<br>" . $conn_4_1->error;
}

$conn_4_1->close();


// fin de linsertion 
}
$conn_4->close();






















// DEBUT SECTION N°_5
$conn_5 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_5->connect_error) {
  die("Connection failed: " . $conn_5->connect_error);
}

$sql_5 = 'SELECT * FROM `get_result_users_nom_1` WHERE `get_result_users_nom_0`="'.$get_result_users_nom_0.'"';
$result_5 = $conn_5->query($sql_5);

if ($result_5->num_rows > 0) {
  // output data of each row
  while($row = $result_5->fetch_assoc()) {
 
    $id_get_result_users_nom_1 = $row["id_get_result_users_nom_1"];
  }
} else {
// insertion


$conn_5_1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_5_1->connect_error) {
  die("Connection failed: " . $conn_5_1->connect_error);
}

$sql_5_1 = "INSERT INTO get_result_users_nom_1 (get_result_users_nom_0,get_result_users_nom_1,get_result_users_nom_2,get_users_naissance,get_users_naissance2,get_users_nationality)
VALUES ('$get_result_users_nom_0','$get_result_users_nom_1','$get_result_users_nom_2','$get_users_naissance','$get_users_naissance2','$get_users_nationality')";

if ($conn_5_1->query($sql_5_1) === TRUE) {
  echo "get_result_users_nom_1 New record created successfully";
} else {
  echo "Error: " . $sql_5_1 . "<br>" . $conn_5_1->error;
}

$conn_5_1->close();


// fin de linsertion 
}
$conn_5->close();

























// DEBUT SECTION N°_6
$conn_6 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_6->connect_error) {
  die("Connection failed: " . $conn_6->connect_error);
}

$sql_6 = 'SELECT * FROM `get_result_villes_nom` WHERE `get_result_villes_nom`="'.$get_result_villes_nom.'"';
$result_6 = $conn_6->query($sql_6);

if ($result_6->num_rows > 0) {
  // output data of each row
  while($row = $result_6->fetch_assoc()) {
    $id_get_result_villes_nom = $row["id_get_result_villes_nom"];
  }
} else {
// insertion


$conn_6_1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_6_1->connect_error) {
  die("Connection failed: " . $conn_6_1->connect_error);
}

$sql_6_1 = "INSERT INTO get_result_villes_nom (get_result_villes_nom)
VALUES ('$get_result_villes_nom' )";

if ($conn_6_1->query($sql_6_1) === TRUE) {
  echo "get_result_villes_nom New record created successfully";
} else {
  echo "Error: " . $sql_6_1 . "<br>" . $conn_6_1->error;
}

$conn_6_1->close();


// fin de linsertion 
}
$conn_6->close();

























// DEBUT SECTION N°_7
$conn_7 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_7->connect_error) {
  die("Connection failed: " . $conn_7->connect_error);
}

$sql_7 = 'SELECT * FROM `get_users_nationality` WHERE `get_users_nationality`="'.$get_users_nationality.'"';
$result_7 = $conn_7->query($sql_7);

if ($result_7->num_rows > 0) {
  // output data of each row
  while($row = $result_7->fetch_assoc()) {
    $id_get_users_nationality = $row["id_get_users_nationality"];
  }
} else {
// insertion


$conn_7_1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_7_1->connect_error) {
  die("Connection failed: " . $conn_7_1->connect_error);
}

$sql_7_1 = "INSERT INTO get_users_nationality (get_users_nationality)
VALUES ('$get_users_nationality' )";

if ($conn_7_1->query($sql_7_1) === TRUE) {
  echo "get_users_nationality New record created successfully";
} else {
  echo "Error: " . $sql_7_1 . "<br>" . $conn_7_1->error;
}

$conn_7_1->close();


// fin de linsertion 
}
$conn_7->close();








// DEBUT SECTION N°_8
$conn_8 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_8->connect_error) {
  die("Connection failed: " . $conn_8->connect_error);
}

$sql_8 = 'SELECT * FROM `get_epreuve_nom_complet` WHERE `get_epreuve_nom_complet`="'.$get_epreuve_nom_complet.'"';
$result_8 = $conn_8->query($sql_8);

if ($result_8->num_rows > 0) {
  // output data of each row
  while($row = $result_8->fetch_assoc()) {
    $id_get_epreuve_nom_complet = $row["id_get_epreuve_nom_complet"];
  }
} else {
// insertion


$conn_8_1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_8_1->connect_error) {
  die("Connection failed: " . $conn_8_1->connect_error);
}

$sql_8_1 = "INSERT INTO 	get_epreuve_nom_complet (get_epreuve_nom_complet,epreuve_sex)
VALUES ('$get_epreuve_nom_complet','$epreuve_sex')";

if ($conn_8_1->query($sql_8_1) === TRUE) {
  echo "get_epreuve_nom_complet New record created successfully";
} else {
  echo "Error: " . $sql_8_1 . "<br>" . $conn_8_1->error;
}

$conn_8_1->close();


// fin de linsertion 
}
$conn_8->close();



 









 







// DEBUT SECTION N°_10
$conn_10 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_10->connect_error) {
  die("Connection failed: " . $conn_10->connect_error);
}

$sql_10 = 'SELECT * FROM `get_users_nom_complet` WHERE `get_users_nom_complet`="'.$get_users_nom_complet.'"';
$result_10 = $conn_10->query($sql_10);

if ($result_10->num_rows > 0) {
  // output data of each row
  while($row = $result_10->fetch_assoc()) {
    $id_get_users_nom_complet = $row["id_get_users_nom_complet"];
  }
} else {
// insertion


$conn_10_1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_10_1->connect_error) {
  die("Connection failed: " . $conn_10_1->connect_error);
}

$sql_10_1 = "INSERT INTO get_users_nom_complet (get_users_nom_complet,get_users_naissance,get_users_naissance2)
VALUES ('$get_users_nom_complet','$get_users_naissance','$get_users_naissance2' )";

if ($conn_10_1->query($sql_10_1) === TRUE) {
  echo "get_users_nom_complet  New record created successfully";
} else {
  echo "Error: " . $sql_10_1 . "<br>" . $conn_10_1->error;
}

$conn_10_1->close();


// fin de linsertion 
}
$conn_10->close();





$get_result_users_perf2 = str_replace("'",".",$get_result_users_perf2);
$get_result_users_perf = str_replace("'",".",$get_result_users_perf);



$get_result_users_perf2_vend = "";
$get_result_users_perf2_rp ="";
$get_result_users_perf2_verif_1= false ;

$get_result_users_perf2_verif_2= false ;


for($i = 0 ; $i< strlen($get_result_users_perf2);$i++){
  if($get_result_users_perf2[$i]=="("){
    $get_result_users_perf2_verif_1 =true; 
  }

 

  if($get_result_users_perf2_verif_1==true){

    if($get_result_users_perf2!="("){
      $get_result_users_perf2_vend = $get_result_users_perf2_vend.$get_result_users_perf2[$i];
    }
    if($get_result_users_perf2==")"){
      $get_result_users_perf2_verif_2 = $get_result_users_perf2_verif_2;
    }    
  }
  if($get_result_users_perf2_verif_2==true){
        $get_result_users_perf2_rp = $get_result_users_perf2_rp.$get_result_users_perf2[$i];
  }

}
/*
echo '<br/>.....'.$get_result_users_perf2_vend.'....................................<br/>';
echo '<br/>rp.....'.$get_result_users_perf2_rp.'....................................<br/>';
*/
// DEBUT SECTION N°_8
$conn_9 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_9->connect_error) {
  die("Connection failed: " . $conn_9->connect_error);
}

$sql_9 = 'SELECT * FROM `get_result_users_perf` WHERE `get_users_nom_complet_1`="'.$get_users_nom_complet_1.'" AND `get_result_users_perf` ="'.$get_result_users_perf.'" AND `get_result_date_perf` ="'.$get_result_date_perf.'"';
$result_9 = $conn_9->query($sql_9);

if ($result_9->num_rows > 0) {
  // output data of each row
  while($row = $result_9->fetch_assoc()) {

  }
} else {
// insertion


$conn_9_1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_9_1->connect_error) {
  die("Connection failed: " . $conn_9_1->connect_error);
}

$sql_9_1 = "INSERT INTO get_result_users_perf (
id_get_result_users_perf,
id_get_cat,
id_get_club_departement,
id_get_club_nom_complet,
id_get_epreuve_nom_complet,
id_get_result_users_nom_0,
id_get_result_users_nom_1,
id_get_result_villes_nom,
id_get_users_naissance,
id_get_users_nationality,
id_get_users_nom_complet,
id_epreuve_sex,
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
get_result_villes_nom,
get_users_naissance,
get_users_naissance2,
get_users_nationality,
get_users_nom_complet,
get_users_nom_complet_1,
get_result_users_perf,
get_result_users_perf2,
get_result_users_perf2_vend
)
VALUES (
'$id_get_result_users_perf',
'$id_get_cat',
'$id_get_club_departement',
'$id_get_club_nom_complet',
'$id_get_epreuve_nom_complet',
'$id_get_result_users_nom_0',
'$id_get_result_users_nom_1',
'$id_get_result_villes_nom',
'$id_get_users_naissance',
'$id_get_users_nationality',
'$id_get_users_nom_complet',
'$id_epreuve_sex',
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
'$get_result_villes_nom',
'$get_users_naissance',
'$get_users_naissance2',
'$get_users_nationality',
'$get_users_nom_complet',
'$get_users_nom_complet_1',
'$get_result_users_perf',
'$get_result_users_perf2',
'$get_result_users_perf2_vend' 

)";

if ($conn_9_1->query($sql_9_1) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_9_1 . "<br>" . $conn_9_1->error;
}

$conn_9_1->close();


// fin de linsertion 
}
$conn_9->close();

// FIN DE LA SECTION N°_4
/*
// DEBUT SECTION N°_5


*/


 

 
/*
 
*/
// FIN DE LA SECTION N°_4

























 
  }
} else {
  echo "0 results";
}
$conn->close();
?>