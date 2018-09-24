var xmlHttp;

function PrikaziRec(breed_name){ 
	xmlHttp=GetXmlHttpObject();
	if (xmlHttp==null){
 		alert ("Pretrazivac ne podrzava HTTP zahtev!")
 		return
 	}
 
	var url="pronadjiponazivu.php";
	url=url+"?breed_name="+breed_name;
	url=url+"&sid="+Math.random();
	xmlHttp.onreadystatechange=stateChanged; 
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}

function stateChanged(){ 

	if (xmlHttp.readyState==4){ 
 		document.getElementById("livesearch").innerHTML=xmlHttp.responseText;
 		document.getElementById("livesearch").style.display="block";
 		document.getElementById("livesearch").style.border="0px solid";
 	} 
}

function GetXmlHttpObject(){
	var xmlHttp=null;
	try {
 	// Firefox, Opera 8.0+, Safari
 		xmlHttp=new XMLHttpRequest();
 	} catch (e) {
 	//Internet Explorer
 		try {
  			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  		} catch (e) {
  			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
 	}
	return xmlHttp;
}
