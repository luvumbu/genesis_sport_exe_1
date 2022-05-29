<?php
header("Access-Control-Allow-Origin: *");
include("data_courant.php");
echo "[";

include($nom_dossier."_all_a.php"); 
echo ','; 
include($nom_dossier."_all_b.php");
echo ',';   
include($nom_dossier."_all_c.php");
echo ',';   
include($nom_dossier."_all_d.php");
echo ',';   
include($nom_dossier."_all_f.php");
echo ',';   

include($nom_dossier."_all_g.php");
echo ',';   
include($nom_dossier."_all_h.php");
echo ',';   
include($nom_dossier."_all_i.php");
echo ',';   
include($nom_dossier."_all_j.php");
echo ',';   
include($nom_dossier."_all_k.php");
echo ',';   

include($nom_dossier."_all_l.php");
echo ',';   
include($nom_dossier."_all_m.php");
echo ',';   
include($nom_dossier."_all_n.php");
echo ',';   
include($nom_dossier."_all_o.php");
echo ',';   
include($nom_dossier."_all_p.php");
echo ',';   

include($nom_dossier."_all_q.php");
echo ',';   
include($nom_dossier."_all_r.php");
echo ',';   
include($nom_dossier."_all_s.php");
echo ',';   
include($nom_dossier."_all_t.php");
echo ',';   
include($nom_dossier."_all_u.php");
echo ',';   

include($nom_dossier."_all_w.php");
echo ',';   
include($nom_dossier."_all_x.php");
echo ',';   
include($nom_dossier."_all_y.php");
echo ',';   
include($nom_dossier."_all_z.php");
   
 

echo "]";
?>