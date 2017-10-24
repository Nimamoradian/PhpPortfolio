
function myFunction(){
    var menus = document.getElementsByClassName('hideMenu');
    var bar= document.getElementById('hideBar');
    for(i=0 ; i<menus.length; i++){
	    if (menus[i].style.display === 'none') {
	        menus[i].style.display = 'block';
	        bar.style.width='100%';
	        
	    } else {
	        menus[i].style.display = 'none';
	        bar.style.width='0%';
	    }
	}
   
}


function openNav(id) {
  document.getElementById(id).style.width = "350px";
}

function closeNav(id) {
    document.getElementById(id).style.width = "0";
}


function formValidation(){
	var errNum=0;
    var name= document.getElementById('profileCName').value;
	var age= document.getElementById('profileCAge').value;
	var phone= document.getElementById('profileCPhone').value;
	var mail= document.getElementById('profileCEmail').value;
	var msg="<ul>";
	var x = mail.indexOf("@");
	var y = mail.lastIndexOf(".");
//	Name validation
	if (name == "" || mail == "" || age=="" ){
		msg += "<li> Please insert required fields </li>";
		errNum++; 
	} 
	if (name.match(/^[0-9&._-]+$/)){
		msg += "<li> Name only contains letter </li>";
		errNum++; 
	}  
//		Age validation
	if (age.match(/^[A-Z a-z&._-]+$/)  ){
			msg += "<li> Age is not correct </li>";
			errNum++; 
	}  
	if (phone.match(/^[A-Z a-z&._-]+$/)  ){
		msg += "<li> Phone Number is wrong </li>";
		errNum++; 
	}  
			
	if (x<1 || y<x+2 || y+2>=mail.length  ) {
		msg += "<li>please type correct mail</li>";
		errNum++; 
    } else     {
    	msg += "";
    }
	msg+="</ul>"
	document.getElementById('Message').innerHTML= msg;
	
	
	if (errNum <=0 ){
		return true;
	}	else{
		return false;
	}
}
	



