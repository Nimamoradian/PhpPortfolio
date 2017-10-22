
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


