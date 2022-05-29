if(lien=="http://localhost/genesis_sport/script_front/linste.php"){
	var direction_envoie ="switchs.php";
	var direction_envoie_internet="";

}
else{
var direction_envoie ="https://bokonzi.com/genesis_sport/script_front/switchs.php";
var direction_envoie_internet="https://bokonzi.com/genesis_sport/script_front/";
}


url_reverse = window.location.href;
url_reverse_="";
url_reverse_boolean =false; 
url_reverse_final="";

var number="";
var number_verese="";

 
for(var i =url_reverse.length; i>-1 ; i-- ){
    
    if(url_reverse[i]!=undefined){
        url_reverse_=url_reverse_+url_reverse[i];
        if(url_reverse[i]=="="){
            url_reverse_boolean=true; 
        }
        if(url_reverse_boolean==false){
            number=number+url_reverse[i];
        }
 
        
    }
}
 if(url_reverse_[0]=="="){
    url_reverse=url_reverse+"&frmposition=0";
    window.location.href = url_reverse;
 
 }else {
      console.log("tout va bien");
 }



 
 var select= document.getElementsByTagName("select"); 
 var maxPages=select[0].length ;


 number_verese_taille=0; 


 for(var i =number.length; i>-1 ; i-- ){
    if(number[i]!=undefined){
        number_verese=number_verese+number[i];
        number_verese_taille++;
    } 
}
number_verese++;
 
//alert(number_verese);
//alert("la taille est de "+number_verese_taille); 






var frmanneex="";
var frmanneex_="";

var n1=5;
var n2=n1+1;
var n3=n2+1;
var n4=n3+1;
var n5=n4+1;
var n6=n5+1;
var n7=n6+1;
var n8=n7+1;
var n9=n8+1;
var n10=n9+1;
var n11=n10+1;
 






 

console.log(url_reverse_final+number_verese);


 var redirection_= false;
setTimeout(function(){ 


  if(number_verese>=maxPages){
    
    frmanneex ++;
    window.location.href = url_reverse_final+0;
    redirection_=true; 
    
    //window.location.href = url_reverse_final+number_verese;
  }
  else {
  window.location.href = url_reverse_final+number_verese;
  }




    
  for(var i =0; i<url_reverse.length-number_verese_taille; i++){
    url_reverse_final=url_reverse_final+url_reverse[i];
    //&frmepreuve
   if(window.location.href[i+n1]=="&" && window.location.href[i+n2]=="f" && window.location.href[i+n3]=="r" && window.location.href[i+n4]=="m"  && window.location.href[i+n5]=="e"  && window.location.href[i+n6]=="p"  && window.location.href[i+n7]=="r"  && window.location.href[i+n8]=="e"  && window.location.href[i+n9]=="u"  && window.location.href[i+n10]=="v"  && window.location.href[i+n11]=="e")
   {
     frmanneex = window.location.href[i+1]+window.location.href[i+2]+window.location.href[i+3]+window.location.href[i+4];
    i = i+4; 
    
   
      if(redirection_==true){
        frmanneex ++ ;
        url_reverse_final=url_reverse_final+frmanneex;
     
      }
      else {
        url_reverse_final=url_reverse_final+frmanneex;
     
      }
    
    }
  
  }


    if(number_verese>=maxPages){
   
      frmanneex ++;
      window.location.href = url_reverse_final+0;
      
      //window.location.href = url_reverse_final+number_verese;
    }
    else {
    window.location.href = url_reverse_final+number_verese;
    }




},23000);
 


class Information {
	constructor(link) {
		this.link = link;
		this.identite = new FormData();
		this.req = new XMLHttpRequest();
		this.identite_tab = [
		];
	}
	info() {
		return this.identite_tab; 
	}
	add(info, text){
		this.identite_tab.push([info, text]); 
		
	}
	push(){
		for(var i = 0 ; i < this.identite_tab.length ; i++){
			//console.log(this.identite_tab[i][1]);
			this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
		}		
		this.req.open("POST",this.link);
		this.req.send(this.identite);
		console.log(this.req);	 
	}
}

class IndexOffs{
constructor(info_link){
this.info_link= info_link;
}
set_info(){
	var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

var myObj = JSON.parse(this.responseText);

console.log(  myObj);

  }
};
xhttp.open("GET", this.info_link, true);
// xhttp.open("GET", "data/data_full_name/data_full_name_all_.php", true);
xhttp.send();
}
set_info(){
}
} 
var pull = new IndexOffs("data/data_full_name/data_full_name_all_.php");
pull.set_info(); 
class Information_envoie {
	constructor() { 
		this.datas_ = []; 
	}

	set_source_recherche(source_recherche){
		this.source_recherche= source_recherche;
	}
	get_source_recherche(){
		return this.source_recherche;
	}
	set_source_envoie(source_envoie){
		this.source_envoie= source_envoie;
	}
	get_source_envoie(){
		return this.source_envoie;
	}
	get_test(){
		return this.test;
	}
	set_test(test){
		 this.test= test;
	}

	get_call(){
		return this.call;
	}
	set_call(call){
		this.call =call;
	}

	get_switchs(){
		return this.switchs;
	}
	set_switchs(switchs){
		this.switchs =switchs;
	}

	get_datas_(numero){
		return this.datas_[numero];
	}

	get_datas_length(){
		return this.datas_.length;
	}
	get_datas_all(){
		return this.datas_;
	}
	set_datas_(datas_){	 
		this.datas_.push(datas_);
	}
	get_premier_lettre(){


		try {  
			return this.get_source_envoie()[0];
			jenvoie= true; 
		}
		catch(err) {

		  myStopFunction();
		  jenvoie= false; 
		}
	}	
	execution(){
  monObj="";

 var get_source_envoie = this.get_source_envoie();
 //alert(get_source_envoie);
 var get_source_recherche = this.get_source_recherche();
 var get_call=this.get_call();
 var get_switchs =this.get_switchs();
 var get_datas_length=this.get_datas_length() ;
 var d = new Date();
 var get_time = d.toLocaleTimeString();
 var get_datas_all =this.get_datas_all();
 var get_premier_lettre = this.get_premier_lettre(); 

		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		  if (this.readyState == 4 && this.status == 200) {
			var myObj = JSON.parse(this.responseText);
			monObj= myObj;		   
			var monindexoff=	monObj.indexOf(get_source_envoie) ; 
		//	alert("index off is"+monindexoff);

			//console.log(get_source_envoie[0]);
			var boolean = myObj.includes(get_source_envoie);
	//	console.log("information: "+get_source_envoie);
		if(get_source_envoie!=undefined ){	 		
			var ok = new Information(get_switchs); // création de la classe 
			ok.add("get_call",  get_call); // ajout de l'information pour lenvoi 
			ok.add("get_premier_lettre", get_premier_lettre); 
			ok.add("get_source_envoie",  get_source_envoie); // ajout de l'information pour lenvoi 
			ok.add("get_datas_length",get_datas_length);
			ok.add("get_time",  get_time); // ajout de l'information pour lenvoi *
			ok.add("get_index",  monindexoff); // ajout de l'information pour lenvoi 
			console.log(ok.info()); // demande l'information dans le tableau

		 console.log("Source envoie "+get_source_envoie+" nombre est"+nombre);

  if(boolean==false){

	console.log(monObj );
	for(var i=0; i< get_datas_length;i++){
	ok.add(i, get_datas_all[i]); // ajout de l'information pour lenvoi 

		 }


		 ok.push(); // envoie l'information au code pkp 
}
else {
	indexOf =monObj.indexOf(get_source_envoie);

	//beasts.indexOf('bison'));

}


		}
		else{
			console.log("*"); 
		}

			console.log(myObj.includes(get_source_envoie));
		  }
		};



		xmlhttp.open("GET", get_source_recherche, true);
			if(jenvoie==true){
			xmlhttp.send();
		}
	}
}
class Information_general {
	constructor() {
        this.epreuve_nom_complet;
        this.epreuve_filtre_nom;
		this.epreuve_sex;
		this.taille_athletes;
        this.epreuve_emplacement;   
        this.users_nom_complet= [];
        this.users_nom_complet_1= [];
        this.result_users_nom_0= [];
        this.result_users_nom_1= [];
        this.result_users_nom_2= [];
        this.users_naissance= [];
        this.users_naissance2= [];
        this.users_nationality= [];        
        this.club_nom_complet= [];
        this.club_departement= [];
        this.club_region= [];       
        this.result_club_departement= [];  
		this.result_users_perf= [];
		this.result_users_perf2= [];
        this.result_villes_nom= [];        
		this.result_date_perf= [];	
		this.cat= [];
		this.reccord= [];


		
    }

set_epreuve_nom_complet(epreuve_nom_complet){
this.epreuve_nom_complet = epreuve_nom_complet;
}
set_epreuve_filtre_nom(epreuve_filtre_nom){
this.epreuve_filtre_nom = epreuve_filtre_nom;
}
set_epreuve_sex(epreuve_sex){
this.epreuve_sex = epreuve_sex;
}
set_epreuve_emplacement(epreuve_emplacement){
this.epreuve_emplacement = epreuve_emplacement;
}

set_users_nom_complet(users_nom_complet){
 this.users_nom_complet.push(users_nom_complet);
}
set_reccord(reccord){
	this.reccord.push(reccord);
   }

 
set_users_nom_complet_1(users_nom_complet_1){
 this.users_nom_complet_1.push(users_nom_complet_1);
}
set_result_users_nom_0(result_users_nom_0){
 this.result_users_nom_0.push(result_users_nom_0);
}
set_result_users_nom_1(result_users_nom_1){
 this.result_users_nom_1.push(result_users_nom_1);
}
set_result_users_nom_2(result_users_nom_2){
 this.result_users_nom_2.push(result_users_nom_2);
}
set_users_naissance(users_naissance){
 this.users_naissance.push(users_naissance);    
}
set_users_naissance2(users_naissance2){
 this.users_naissance2.push(users_naissance2);
}

set_result_date_perf(result_date_perf){  
    this.result_date_perf.push(result_date_perf);
}
set_users_nationality(users_nationality){
 this.users_nationality.push(users_nationality);
}

set_club_nom_complet(club_nom_complet){
 this.club_nom_complet.push(club_nom_complet);
}
set_club_departement(club_departement){
 this.club_departement.push(club_departement);
}
set_club_region(club_region){
 this.club_region.push(club_region);
}
set_result_club_departement(result_club_departement){
 this.result_club_departement.push(result_club_departement);
}
set_result_users_perf(result_users_perf){
 this.result_users_perf.push(result_users_perf);
}
set_result_users_perf2(result_users_perf2){
	this.result_users_perf2.push(result_users_perf2);
   }
set_result_villes_nom(result_villes_nom){
 this.result_villes_nom.push(result_villes_nom);
}
set_taille_athletes(taille_athletes){
	this.taille_athletes = taille_athletes;
}



get_reccord(number){
    return this.reccord[number];
}

get_users_nom_complet(number){
    return this.users_nom_complet[number];
}
get_users_nom_complet_1(number){
    return this.users_nom_complet_1[number];
}
get_result_users_nom_0(number){
    return this.result_users_nom_0[number];
}
get_result_users_nom_1(number){
    return this.result_users_nom_1[number];
}
get_result_users_nom_2(number){
    return this.result_users_nom_2[number];
}
get_users_naissance(number){
    return this.users_naissance[number];
}
get_users_naissance2(number){
    return this.users_naissance2[number];
}
get_users_nationality(number){
    return this.users_nationality[number];
}
get_club_nom_complet(number){
    return this.club_nom_complet[number];
}
get_club_departement(number){
    return this.club_departement[number];
}
get_club_region(number){
    return this.club_region[number];
}
get_result_club_departement(number){
    return this.result_club_departement[number];
}
get_result_users_perf(number){
    return this.result_users_perf[number];
}
get_result_users_perf2(number){
    return this.result_users_perf2[number];
}
get_result_villes_nom(number){
    return this.result_villes_nom[number];
}
get_epreuve_nom_complet(){
    return this.epreuve_nom_complet ;
}
get_epreuve_filtre_nom(){
    return this.epreuve_filtre_nom ;
}
get_epreuve_sex(){
    return this.epreuve_sex ;
}
get_epreuve_emplacement(){
    return this.epreuve_emplacement ;
}

get_result_date_perf(number){ 
    return this.result_date_perf[number];
}
get_cat(number){ 
    return this.cat[number];
}
set_cat(cat){  
    this.cat.push(cat);
}
get_length(){ 
    return this.epreuve_nom_complet.length;
}
get_taille_athletes(){
	return this.taille_athletes;
} 
// index off 
get_index_off_club(){
	return this.index_off_club;
}
get_index_off_country_name(){
	return this.index_off_country_name;
}
get_index_off_country_number(){
	return this.index_off_country_number;
}
get_index_off_departement(){
	return this.index_off_departement;
}
get_index_off_discipline(){
	return this.index_off_discipline;
}
get_index_off_first_name(){
	return this.index_off_first_name;
}
get_index_off_nationality(){
	return this.index_off_nationality;
}
get_index_off_region(){
	return this.index_off_region;
}
get_index_off_result(){
	return this.index_off_result;
}
get_index_off_second_name(){
	return this.index_off_second_name;
} 
get_index_off_data_user(){
	return this.index_off_data_user;
} 
//


// set 

// index off 
set_index_off_club(value){
	this.index_off_club= value;
}
set_index_off_country_name(value){
	this.index_off_country_name=value;
}
set_index_off_country_number(value){
	this.index_off_country_number=value;
}
set_index_off_departement(value){
	this.index_off_departement=value;
}
set_index_off_discipline(value){
	this.index_off_discipline=value;
}
set_index_off_first_name(value){
	this.index_off_first_name=value;
}
set_index_off_nationality(value){
	this.index_off_nationality=value;
}
set_index_off_region(value){
	this.index_off_region=value;
}
set_index_off_result(value){
	this.index_off_result=value;
}
set_index_off_second_name(value){
	this.index_off_second_name=value;
} 
set_index_off_data_user(value){
	this.index_off_data_user=value;
} 
//
}
var switch_name=[
	"data_full_name",
	"data_club",
	"data_country_name",
	"data_country_number",
	"data_discipline",
	"data_nationality",
	"data_first_name",
	"data_result",
	"data_second_name",
	"data_user",
	"data_name_1_2",
	"data_departement",
	"data_region",
	"data_result"
]

var indexOf =-1; 
var information_general = new Information_general() ;
// nombre de pages 
//tr[0].children[5].children[0].childElementCount
var source_send;
var set_source_recherche_switch;
function function_dossier(name_folder){
  switch (name_folder) {

	  case switch_name[0]: // variable declaré au depart // data ok ne pas changer son ordre 
		 source_send =direction_envoie_internet+"data/data_full_name/data_full_name";
		break;
		case switch_name[1]: // variable declaré au depart
		source_send =direction_envoie_internet+"data/data_club/data_club";
	   break;
		case switch_name[2]:
		  source_send =direction_envoie_internet+"data/data_country_name/data_country_name";
		 break;
		 case switch_name[3]: // ok ne pas changer son ordre
		  source_send =direction_envoie_internet+"data/data_country_number/data_country_number";
		 break;
		 case switch_name[4]:
		  source_send =direction_envoie_internet+"data/data_discipline/data_discipline";
		 break;
		 case switch_name[5]:
			source_send =direction_envoie_internet+"data/data_nationality/data_nationality";
		 break;
		 case switch_name[6]:
		   source_send =direction_envoie_internet+"data/data_first_name/data_first_name";
		 break;
		 case switch_name[7]:
		  source_send =direction_envoie_internet+"data/data_second_name/data_second_name";
		 break;
		 case switch_name[8]:
		  source_send =direction_envoie_internet+"data/data_nationality/data_nationality";
		 break;
		 case switch_name[9]:
		  source_send =direction_envoie_internet+"data/data_user/data_user";
		 break;
		 case switch_name[9]:
			source_send =direction_envoie_internet+"data/data_user/data_user";
		   break;
		   case switch_name[10]:
			source_send =direction_envoie_internet+"data/data_user/data_user";
		   break;


	}
	// envoie des donne en fonction du nom du fichier 
  switch (resul_get) {
	  case "a":
		set_source_recherche_switch=source_send+"_a_.php";
		break;
	  case "b":
		set_source_recherche_switch=source_send+"_b_.php";
		break;
	  case "c":
		set_source_recherche_switch=source_send+"_c_.php";
		break;
	  case "d":
		set_source_recherche_switch=source_send+"_d_.php";
		break;
	  case "e":
		set_source_recherche_switch=source_send+"_e_.php";
		break;
	  case "f":
		set_source_recherche_switch=source_send+"_f_.php";
		break;
 
 
	  case "g":
		set_source_recherche_switch=source_send+"_g_.php";
		break;
	  case "h":
		set_source_recherche_switch=source_send+"_h_.php";
		break;
	  case "i":
		set_source_recherche_switch=source_send+"_i_.php";
		break;
	  case "j":
		set_source_recherche_switch=source_send+"_j_.php";
		break;
	  case "k":
		set_source_recherche_switch=source_send+"_k_.php";
		break;
	  case "l":
		set_source_recherche_switch=source_send+"_l_.php";
		break; 
	  case "m":
		set_source_recherche_switch=source_send+"_m_.php";
		break;
	  case "n":
		set_source_recherche_switch=source_send+"_n_.php";
		break;
	  case "o":
		set_source_recherche_switch=source_send+"_o_.php";
		break;
	  case "p":
		     set_source_recherche_switch=source_send+"_p_.php";
		  break;
	  case "q":
		     set_source_recherche_switch=source_send+"_q_.php";
		  break;
	  case "r":
		     set_source_recherche_switch=source_send+"_r_.php";
		  break;

 

 
	  case "s":
		     set_source_recherche_switch=source_send+"_s_.php";
		  break;
		case "t":
			   set_source_recherche_switch=source_send+"_t_.php";
		  break;
		case "u":
			   set_source_recherche_switch=source_send+"_u_.php";
		  break;
		case "v":
			   set_source_recherche_switch=source_send+"_v_.php";
		  break;
		case "w":
			   set_source_recherche_switch=source_send+"_w_.php";
		  break;
		case "x":
			   set_source_recherche_switch=source_send+"_x_.php";
		  break;
		case "y":
			   set_source_recherche_switch=source_send+"_y_.php";
		  break;
		case "z":
			   set_source_recherche_switch=source_send+"_z_.php";
		  break;
 
  }
  // classe les fichier en fonction de la lalphabet
}
// class pour lenvoie en focnction de la case chosi 
//soit clun user ect
var jenvoie = false; 
//var source = source; 
//var source = "php.php";
var tr = document.getElementsByTagName("tr"); 
// initialisation au premier elment qui va permetttre de voir toutres les valeurs 
var anne_epreuve_taille =tr[1].innerText.length; 
// Donne l'anne de la réalisation des pérformence 
var taille_athletes= tr.length;
information_general.set_taille_athletes(taille_athletes);
// donne le nombre de participant présent sur cette meme page 
var epreuve_nom_complet=tr[2].innerText;
var epreuve_nom_complet_taille=epreuve_nom_complet.length;
var epreuve_filtre_nom_verif= false; 
var epreuve_sex = "F";
var epreuve_emplacement="PLEIN AIR";
var anne_epreuve_verif=false;
var anne_epreuve ="";
var monObj="";
var epreuve_filtre_nom="";
var resul_get ="";
var nomber_space = 0 ;
// initialisation des variables de boucle 
var result_users_nom_0 =""; //ok
var result_users_nom_1 =""; //ok
var result_users_nom_2 =""; //ok
var result_users_nom_3 =""; //ok
var result_users_nom=false;
var users_naissance ="";
var users_naissance2 ="";
var users_nom_complet; 
var users_nom_complet_1; 
var tiempo = new Date();			 

//var data_full_pass=getFullYear+"-"+getMonth+"-"+getDay+" "+getHours+":"+getMinutes+":"+getSeconds;
 //tiempo
var data_full_pass=tiempo;

for(var i=0;i<anne_epreuve_taille;i++){ // boucle anne_epreuve

if(tr[1].innerText[i]==":"){
	anne_epreuve_verif =true;
	i = i+2;
}
if(tr[1].innerText[i]==","){
	break;
}
if(anne_epreuve_verif==true){  
		anne_epreuve = anne_epreuve+tr[1].innerText[i] ; 
}
 }
 for(var i=0;i<epreuve_nom_complet_taille;i++){

	 if(epreuve_nom_complet[i]=="|"){
		epreuve_filtre_nom_verif = true;
	 }
	 if(epreuve_filtre_nom_verif==false){
		epreuve_filtre_nom=epreuve_filtre_nom+epreuve_nom_complet[i];
	 }
	 if(epreuve_nom_complet[i]=="M"){
		epreuve_sex = "M";
	 }
	 if(epreuve_nom_complet[i]=="S"){
		epreuve_emplacement = "SALLE";
	 }
 }
information_general.set_epreuve_nom_complet(epreuve_nom_complet);
information_general.set_epreuve_filtre_nom(epreuve_filtre_nom); 
information_general.set_epreuve_sex(epreuve_sex);
information_general.set_epreuve_emplacement(epreuve_emplacement);
result_users_nom =""; //ok
result_users_nom=false;
users_sex = epreuve_sex;
for(var i = 3 ; i <taille_athletes-10; i++){ 
	result_users_nom_0="";
	result_users_nom_1="";
	result_users_nom_2="";
	result_users_nom_3="";
	result_users_nom_4="";		 
	users_nationality="";
	users_naissance ="";
	users_nationality_boolean=false;
	nomber_space= 0 ; // initialisation du nombre si nom le nombre grandit a l'infinie 
	users_naissance2 ="";

// verification du nombre de space !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 for(var ii = 0; ii<tr[i].children[6].innerText.length;ii++){
	// console.log(tr[i].children[6].innerText[ii]);
	 if(tr[i].children[6].innerText[ii]==0){ //  zero c'est un space entre chaque nom ou prenom 
		nomber_space++; 

	 }

// ajoute moi tous le Nom et nom de famille total
	 switch (nomber_space) {
		case 0:
			if(tr[i].children[6].innerText[ii]!=0){
				result_users_nom_0 = result_users_nom_0+tr[i].children[6].innerText[ii] ; 
			}
		  break;
		case 1:
			if(tr[i].children[6].innerText[ii]!=0){
				result_users_nom_1 = result_users_nom_1+tr[i].children[6].innerText[ii] ; 
			}
		  break;
		case 2:
			if(tr[i].children[6].innerText[ii]!=0){
				result_users_nom_2 = result_users_nom_2+tr[i].children[6].innerText[ii] ; 
			}
		  break;
		case 3:
			if(tr[i].children[6].innerText[ii]!=0){
				result_users_nom_3 = result_users_nom_3+tr[i].children[6].innerText[ii] ; 
			}
		  break;
		case 4:
			if(tr[i].children[6].innerText[ii]!=0){
				result_users_nom_4 = result_users_nom_4+tr[i].children[6].innerText[ii] ; 
			} 
	  }
	  users_naissance = tr[i].children[16].innerText;
	   if(users_naissance<35){
		   users_naissance2 ="20"+users_naissance;		   
	   }
	   else{
		users_naissance2 ="19"+users_naissance;
	   }
	}
if(result_users_nom_2.includes("(")==true){

	var result_users_nom_2 = result_users_nom_2.replace("(", "");
	var result_users_nom_2 = result_users_nom_2.replace(")", "");

	users_nationality=result_users_nom_2;
	result_users_nom_2="";
	users_nationality_boolean = true;
}

if(result_users_nom_3.includes("(")==true){

	var result_users_nom_3 = result_users_nom_3.replace("(", "");
	var result_users_nom_3 = result_users_nom_3.replace(")", "");
	users_nationality=result_users_nom_3;
	result_users_nom_3="";
	users_nationality_boolean = true;

}
if(result_users_nom_4.includes("(")==true){

	var result_users_nom_4 = result_users_nom_4.replace("(", "");
	var result_users_nom_4 = result_users_nom_4.replace(")", "");
	users_nationality=result_users_nom_4;
	result_users_nom_4="";
	users_nationality_boolean = true;

}
if(users_nationality_boolean==false){
	users_nationality = "FR";
} 
users_nom_complet =result_users_nom_0+" "+result_users_nom_1+" "+result_users_nom_2;
users_nom_complet_1=tr[i].children[6].innerText;
information_general.set_users_nom_complet(users_nom_complet);
information_general.set_users_nom_complet_1(tr[i].children[6].innerText);
information_general.set_result_users_nom_0(result_users_nom_0);
information_general.set_result_users_nom_1(result_users_nom_1);
information_general.set_result_users_nom_2(result_users_nom_2); 
information_general.set_users_naissance(users_naissance);
information_general.set_users_naissance2(users_naissance2);
information_general.set_users_nationality(users_nationality);



information_general.set_club_nom_complet(tr[i].children[8].innerText);
information_general.set_club_departement(tr[i].children[10].innerText);
information_general.set_club_region(tr[i].children[12].innerText); 


information_general.set_cat(tr[i].children[14].innerText);
 
information_general.set_result_club_departement(tr[i].children[10].innerText); 
var result_users_perf_final = "";
var result_users_boolean = false;
var result_reccord ="";
for(var xi = 0 ; xi<tr[i].children[2].innerText.length;xi++){

	if(tr[i].children[2].innerText[xi]=="("){
		result_users_boolean = true; 
		result_reccord = "RP";
	}
	if(result_users_boolean==false){
		result_users_perf_final = result_users_perf_final+tr[i].children[2].innerText[xi];
	}
}
// ajout de l'information pour lenvoi 
information_general.set_result_users_perf(result_users_perf_final);
information_general.set_result_users_perf2(tr[i].children[2].innerText);
information_general.set_result_date_perf(tr[i].children[18].innerText);
information_general.set_result_villes_nom( tr[i].children[20].innerText);
information_general.set_epreuve_emplacement(epreuve_emplacement);

information_general.set_reccord(result_reccord);


} 

var nombre  = -1 ; 
	try {
		var myVar = setInterval(myTimer1, 10);
			jenvoie =true;
	  } catch (error) {
		console.error(error);
		jenvoie= false; 	 
	  }

// test si il pas de donne non defini ppour eviter lerreur
function myTimer1() {
  var d = new Date();
  var t = d.toLocaleTimeString();


  nombre ++ ; 

  var get_users_nom_complet_1 =information_general.get_users_nom_complet_1(nombre);
  var get_users_nom_complet =information_general.get_users_nom_complet(nombre);

  var get_result_users_nom_0 =information_general.get_result_users_nom_0(nombre);
  var get_result_users_nom_1 =information_general.get_result_users_nom_1(nombre);
  var get_result_users_nom_2 =information_general.get_result_users_nom_2(nombre);

  var get_users_naissance =information_general.get_users_naissance(nombre);
  var get_users_naissance2 =information_general.get_users_naissance2(nombre);
  var get_users_nationality =information_general.get_users_nationality(nombre);
  var get_club_nom_complet =information_general.get_club_nom_complet(nombre);
  var get_club_departement =information_general.get_club_departement(nombre);

  var get_club_region =information_general.get_club_region(nombre);
  var get_result_club_departement =information_general.get_result_club_departement(nombre);
  var get_result_users_perf =information_general.get_result_users_perf(nombre);

  var get_result_users_perf2 =information_general.get_result_users_perf2(nombre);
  var get_result_villes_nom =information_general.get_result_villes_nom(nombre);
  var get_epreuve_nom_complet =information_general.get_epreuve_nom_complet(nombre);
  var get_reccord = information_general.get_reccord(nombre);
  var get_epreuve_filtre_nom =information_general.get_epreuve_filtre_nom(nombre);
  var get_epreuve_sex =information_general.get_epreuve_sex(nombre);
  var get_epreuve_emplacement =information_general.get_epreuve_emplacement(nombre);
  var get_result_date_perf =information_general.get_result_date_perf(nombre);
  var get_length =information_general.get_length(nombre);
  var get_taille_athletes =information_general.get_taille_athletes(nombre);
  var  get_cat =information_general.get_cat(nombre);
  // *---MOD1---

	var r = new Information_envoie();
	var verif_recherche = information_general.get_result_users_nom_0(nombre);
	//alert(get_club_nom_complet[0]);
    r.set_source_envoie(get_users_nom_complet_1 +get_result_users_perf+get_result_date_perf);     
	// valeur a verifier dans le fichier javascript
	r.set_call(switch_name[0]); //data_full_name
	//data_full_name
	//premier valeur dans le tableau d'appelation
	//direction_envoie
	//"switchs.php"
	r.set_switchs(direction_envoie);  
	// fichier d'ajout des donnes 
	// tout les ajout 	   
	try {  
		resul_get =get_result_users_nom_0[0].toLowerCase();
		jenvoie= true; 
		if(get_result_users_nom_0.length<4 ){
			 if(get_result_users_nom_2.length!=0){
					r.set_datas_(get_users_nom_complet_1);//0
					r.set_datas_(get_users_nom_complet);//1
					r.set_datas_(get_result_users_nom_0+" "+get_result_users_nom_1);
					r.set_datas_(get_result_users_nom_2);
					r.set_datas_("");
					r.set_datas_(epreuve_sex);
					r.set_datas_(get_users_naissance);
					r.set_datas_(get_users_naissance2);
					r.set_datas_(get_users_nationality);
					r.set_datas_(window.location.href);
					r.set_datas_(data_full_pass);
					r.set_datas_(get_club_nom_complet);

					r.set_datas_(get_club_departement);

					r.set_datas_(get_club_region);

					r.set_datas_(get_result_users_perf);

					r.set_datas_(get_result_villes_nom);

					r.set_datas_(get_epreuve_nom_complet);

					r.set_datas_(get_epreuve_emplacement);

					r.set_datas_(get_result_date_perf);

					r.set_datas_(window.location.href);
					r.set_datas_(get_cat);

					r.set_datas_(get_reccord);
					r.set_datas_(get_result_users_perf2);

			 }
			 else{
				r.set_datas_(get_users_nom_complet_1);
				r.set_datas_(get_users_nom_complet);
				r.set_datas_(get_result_users_nom_0);
				r.set_datas_(get_result_users_nom_1);
				r.set_datas_(get_result_users_nom_2);
				r.set_datas_(epreuve_sex);
				r.set_datas_(get_users_naissance);
				r.set_datas_(get_users_naissance2);
				r.set_datas_(get_users_nationality);
				r.set_datas_(window.location.href);
				r.set_datas_(data_full_pass);

				r.set_datas_(get_club_nom_complet);

				r.set_datas_(get_club_departement);

				r.set_datas_(get_club_region);

				r.set_datas_(get_result_users_perf);

				r.set_datas_(get_result_villes_nom);

				r.set_datas_(get_epreuve_nom_complet);

				r.set_datas_(get_epreuve_emplacement);

				r.set_datas_(get_result_date_perf);
				r.set_datas_(window.location.href);
				r.set_datas_(get_cat);
				r.set_datas_(get_reccord);
				r.set_datas_(get_result_users_perf2);
			 }
		 }
		 else {

			r.set_datas_(get_users_nom_complet_1);
			r.set_datas_(get_users_nom_complet);
			r.set_datas_(get_result_users_nom_0);
			r.set_datas_(get_result_users_nom_1);
			r.set_datas_(get_result_users_nom_2);
			r.set_datas_(epreuve_sex);
			r.set_datas_(get_users_naissance);
			r.set_datas_(get_users_naissance2);
			r.set_datas_(get_users_nationality);
			r.set_datas_(window.location.href);			
			r.set_datas_(data_full_pass);



			r.set_datas_(get_club_nom_complet);

			r.set_datas_(get_club_departement);

			r.set_datas_(get_club_region);

			r.set_datas_(get_result_users_perf);

			r.set_datas_(get_result_villes_nom);

			r.set_datas_(get_epreuve_nom_complet);

			r.set_datas_(get_epreuve_emplacement);

			r.set_datas_(get_result_date_perf);
	 
			r.set_datas_(get_cat);
			r.set_datas_(get_reccord);
			r.set_datas_(get_result_users_perf2);


		 }


	}
	catch(err) {

	  myStopFunction();
	  jenvoie= false; 
	}
	// tester si il ya pas derreur 

   function_dossier(r.get_call());
   r.set_source_recherche(set_source_recherche_switch);
   r.execution();
// mode 1 fin










  if(nombre==taille_athletes){
	myStopFunction();
  }
}function myTimer2() {
	var d = new Date();
	var t = d.toLocaleTimeString();


	nombre ++ ; 

	var get_users_nom_complet_1 =information_general.get_users_nom_complet_1(nombre);
	var get_users_nom_complet =information_general.get_users_nom_complet(nombre);

	var get_result_users_nom_0 =information_general.get_result_users_nom_0(nombre);
	var get_result_users_nom_1 =information_general.get_result_users_nom_1(nombre);
	var get_result_users_nom_2 =information_general.get_result_users_nom_2(nombre);

	var get_users_naissance =information_general.get_users_naissance(nombre);
	var get_users_naissance2 =information_general.get_users_naissance2(nombre);
	var get_users_nationality =information_general.get_users_nationality(nombre);
	var get_club_nom_complet =information_general.get_club_nom_complet(nombre);
	var get_club_departement =information_general.get_club_departement(nombre);

	var get_club_region =information_general.get_club_region(nombre);
	var get_result_club_departement =information_general.get_result_club_departement(nombre);
	var get_result_users_perf =information_general.get_result_users_perf(nombre);
	var get_result_villes_nom =information_general.get_result_villes_nom(nombre);
	var get_epreuve_nom_complet =information_general.get_epreuve_nom_complet(nombre);

	var get_epreuve_filtre_nom =information_general.get_epreuve_filtre_nom(nombre);
	var get_epreuve_sex =information_general.get_epreuve_sex(nombre);
	var get_epreuve_emplacement =information_general.get_epreuve_emplacement(nombre);
	var get_result_date_perf =information_general.get_result_date_perf(nombre);
	var get_length =information_general.get_length(nombre);
	var get_taille_athletes =information_general.get_taille_athletes(nombre);

	// *---MOD1---

	  var r = new Information_envoie();
	  var verif_recherche = information_general.get_result_users_nom_0(nombre);
	  //alert(get_club_nom_complet[0]);
	  r.set_source_envoie(get_users_nom_complet+get_users_naissance);     
	  // valeur a verifier dans le fichier javascript
	  r.set_call(switch_name[0]); //data_full_name
	  //data_full_name
	  //premier valeur dans le tableau d'appelation
	  //direction_envoie
	  //"switchs.php"
	  r.set_switchs(direction_envoie);  
	  // fichier d'ajout des donnes 
	  // tout les ajout 	   
	  try {  
		  resul_get =get_result_users_nom_0[0].toLowerCase();
		  jenvoie= true; 
		  if(get_result_users_nom_0.length<4 ){
			   if(get_result_users_nom_2.length!=0){
					  r.set_datas_(get_users_nom_complet_1);
					  r.set_datas_(get_users_nom_complet);
					  r.set_datas_(get_result_users_nom_0+" "+get_result_users_nom_1);
					  r.set_datas_(get_result_users_nom_2);
					  r.set_datas_("");
					  r.set_datas_(epreuve_sex);
					  r.set_datas_(get_users_naissance);
					  r.set_datas_(get_users_naissance2);
					  r.set_datas_(get_users_nationality);
					  r.set_datas_(window.location.href);
					  r.set_datas_(data_full_pass);
			   }
			   else{
				  r.set_datas_(get_users_nom_complet_1);
				  r.set_datas_(get_users_nom_complet);
				  r.set_datas_(get_result_users_nom_0);
				  r.set_datas_(get_result_users_nom_1);
				  r.set_datas_(get_result_users_nom_2);
				  r.set_datas_(epreuve_sex);
				  r.set_datas_(get_users_naissance);
				  r.set_datas_(get_users_naissance2);
				  r.set_datas_(get_users_nationality);
				  r.set_datas_(window.location.href);
				  r.set_datas_(data_full_pass);
			   }
		   }
		   else {

			  r.set_datas_(get_users_nom_complet_1);
			  r.set_datas_(get_users_nom_complet);
			  r.set_datas_(get_result_users_nom_0);
			  r.set_datas_(get_result_users_nom_1);
			  r.set_datas_(get_result_users_nom_2);
			  r.set_datas_(epreuve_sex);
			  r.set_datas_(get_users_naissance);
			  r.set_datas_(get_users_naissance2);
			  r.set_datas_(get_users_nationality);
			  r.set_datas_(window.location.href);			
			  r.set_datas_(data_full_pass);


		   }


	  }
	  catch(err) {

		myStopFunction();
		jenvoie= false; 
	  }
	  // tester si il ya pas derreur 

	 function_dossier(r.get_call());
	 r.set_source_recherche(set_source_recherche_switch);
	 r.execution();





	 // mode 2
	 var r2 = new Information_envoie();
	 var verif_recherche = get_club_nom_complet;
	 //alert(get_club_nom_complet[0]);

	 r2.set_source_envoie(verif_recherche);    
	 r2.set_call(switch_name[1]); //data_full_name
	 r2.set_datas_(verif_recherche);   
	 r2.set_switchs(direction_envoie);     
	 try {  
	  resul_get =get_result_users_nom_0[0].toLowerCase();
	  jenvoie= true; 		
  }
  catch(err) {

	myStopFunction();
	jenvoie= false; 
  }
  function_dossier(r2.get_call());
  r2.set_source_recherche(direction_envoie_internet+"data/data_club/data_club_az_.php");
  r2.execution();

	if(nombre==taille_athletes){
	  myStopFunction();
	}
  }

//fonction a repeter en boucle
function myStopFunction() {
  clearInterval(myVar);
  console.log("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX00") ;  
} 

 