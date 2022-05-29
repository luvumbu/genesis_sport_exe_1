<!-- 
<script src="http://bokonzi.com/go.js"></script>
-->
<script>
 var i = 0;
 var y = 0; 
 var l = 
 [
"a",
"b",
"c",
"d",
"e",
"f",
"g",
"h",
"i",
"j",
"k",
"l",
"m",
"n",
"o",
"p",
"q",
"r",
"s",
"t",
"u",
"w",
"x",
"y",
"z"
 
 ]
 
;

var epreuve = [
  "50m_haies_84",
  "50mf",
  "50mf_haies_76",
  "50mf_salle",
  "60mf_salle",
  "100mf",
  "100mf_76",
  "300mf",
  "400mf76",
  "400mfsalle",
  "500mfsalle",
  "800mf",
  "800mf_salle",
  "1000mf",
  "1000mf_salle",
  "1500mf",
  "1500mf_salle",
  "1500mf_steep",
  "2000mf",
  "2000mf_marche",
  "2000mf_steep",
  "3000mf_marche",
  "3000mf_salle",
  "5000mf_marche",
  "20000m_marche",
  "disquef_1kg",
  "disquef_08",
  "hauteurf",
  "hauteur_salle",
  "javelof_500g",
  "javelotf_400g",
  "longuerf",
  "longuerf_salle",
  "martauf3kg",
  "martauf4kg",
  "poidf4kg",
  "poidfmf3kg",
  "perchef",
  "poidf4kg",
  "poidfmf3kg",
  "prchfsall",
  "triplsfsall",
  "tripsautf" 
  
]


setInterval(function(){ 
  
  
 
  var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

var myObj = JSON.parse(this.responseText);
 
console.log(  myObj);
 
  }
};
//xhttp.open("GET", "data/data_full_name/data_full_name_z_.php", true);
xhttp.open("GET", "http://localhost/dataf/"+epreuve[y]+"/data/data_full_name/data_full_name_all_"+l[i]+"_.php", true);
console.log("numero est "+i+"epreuve est "+epreuve[y]+" la lettre est  "+l[i]);
xhttp.send();
i++; 


if(i==26)
{
  i=0; 
  y++;
}
  
  
  }, 30);


 
</script>
 
 