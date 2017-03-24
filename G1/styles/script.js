// USEFULL PREDEFINED FUNCTION

function $(id){
	var element = document.getElementById(id);
	if( element == null )
		alert( 'Programmer error: ' + id + ' does not exist.' );
	return element;
}


function $$(className) {
	var element = document.getElementsByClassName(className);

	if (element == null) {
		alert('Programmer error (class): ' + className + 'does not exist.');
	}
	return element;
}

/*=========Sign-up Page Javascript===============*/

function testEmailType(){
	var x = $("mail").value;
        var patt = /(\w+)(@)(\w+)(\.com$|\.co$|\.org$|\.ca$|\.net$)/;
        var res = patt.test(x);
//        will return true if input is valid
	return res;
}
		
function warnEmailType() {
	if(!testEmailType()){
		$("errEmail").style.visibility = 'visible';
	} else { 
		$("errEmail").style.visibility = 'hidden';
	}
}

function testUsername(){
	var x = $("login").value;
//        will return true if input is valid
	return x !== "";
}
		
function warnUsername() {
	if(!testUsername()){
		$("errUsername").style.visibility = 'visible';
	} else { 
		$("errUsername").style.visibility = 'hidden';
	}
}

function testPassword(){
	var x = $("password").value.length;
//        will return true if input is valid
	return 8 <= x && x <= 16;
}
		
function warnPassword() {
	if(!testPassword()){
		$("errPassword").style.visibility = 'visible';
	} else { 
		$("errPassword").style.visibility = 'hidden';
	}
}

function testConfirm() {
    var x = $("password").value === $("password2").value;
//    will return true if input is valid
    return x;
}

function warnConfirm() {
	if(!testConfirm()){
		$("errConfirm").style.visibility = 'visible';
	} else { 
		$("errConfirm").style.visibility = 'hidden';
	}
}

//Validating for onsubmit

function formValidate() {
    if (testEmailType() && testUsername() && testPassword()
            && testConfirm()) {
        return true;
    }   else {
        if (!testEmailType()) {
            $("errEmail").style.visibility = 'visible';
        }   else {
            $("errEmail").style.visibility = 'hidden';
        }
        if (!testUsername()) {
            $("errUsername").style.visibility = 'visible';
        }   else {
            $("errUsername").style.visibility = 'hidden';
        }
        if (!testPassword()) {
            $("errPassword").style.visibility = 'visible';
        }   else {
            $("errPassword").style.visibility = 'hidden';
        }
        if (!testConfirm()) {
            $("errConfirm").style.visibility = 'visible';
        }   else {
            $("errConfirm").style.visibility = 'hidden';
        }
        return false;
    }
}

/*================= Contact-Us JavaScript============*/

//function testEmailValid(id){
//	var x = $(id).value;
//	x = x.substring(x.lastIndexOf("."));
//	return x == ".com" || x == ".ca" || x == ".org";
//}

function testEmailValid(){
	var x = $("mailUs").value;
        var patt = /(\w+)(@)(\w+)(\.com$|\.co$|\.org$|\.ca$|\.net$)/;
        var res = patt.test(x);
//        will return true if input is valid
	return res;
}

//function warnEmailValid(id) {
//	if(!testEmailValid(id)){
//		$("errEmailValid").style.visibility = 'visible';
//	} else { 
//		$("errEmailValid").style.visibility = 'hidden';
//	}
//}


function testEmptyField () {
    // will return if all inputs' are completed
	var x = !($("mailUs").value == "" 
                || $("subject").value == "" 
                || $("emailReply").value == "");
        return x;
}

//function warnEmptyField (id, id1, id2) {
//	if($(id).value == "" || $(id1).value == "" || $(id2).value == ""){
//		$("errEmptyField").style.visibility = 'visible';
//	} else {
//		$("errEmptyField").style.visibility = 'hidden';
//	}
//}

function infoValidate() {
    if (testEmailValid() && testEmptyField()) {
        return true;
    }   else {
        if (!testEmailValid()) {
            $("errEmailValid").style.visibility = 'visible';
            $("errEmailValid").style.textAlign = "right";
	} else { 
            $("errEmailValid").style.visibility = 'hidden';
	}
        if (!testEmptyField()) {
            $("errEmptyField").style.visibility = 'visible';
            $("errEmptyField").style.textAlign = "right";
	} else {
            $("errEmptyField").style.visibility = 'hidden';
	}
        return false;
    }
}


    
/*======== Product page javascript ========= */


var z= document.getElementsByClassName("extraText");
	var i;
	for(i = 0; i < z.length; i++){
		z[i].style.display = "none";
	}

	function myFunction(){
	
	var x = document.getElementsByClassName("extraText");
	var y = document.getElementsByClassName("contentbox");
    var z = document.getElementsByClassName("readMore");
		
			
					x[0].style.display = "block";
					y[0].style.height = "700px";
                    z[0].style.display = "none";
				
	}
   
	
	function myFunction1(){
	
	var x = document.getElementsByClassName("extraText");
	var y = document.getElementsByClassName("contentbox")
    var z = document.getElementsByClassName("readMore");
		
			
					x[1].style.display = "block";
					y[1].style.height = "700px";
                    z[1].style.display = "none";
				
	}
	
	function myFunction2(){
	
	var x = document.getElementsByClassName("extraText");
	var y = document.getElementsByClassName("contentbox")
    var z = document.getElementsByClassName("readMore");
		
			
					x[2].style.display = "block";
					y[2].style.height = "700px";
                    z[2].style.display = "none";
				
	}
	
	function myFunction3(){
	
	var x = document.getElementsByClassName("extraText");
	var y = document.getElementsByClassName("contentbox")
    var z = document.getElementsByClassName("readMore");
		
			
					x[3].style.display = "block";
					y[3].style.height = "700px";
                    z[3].style.display = "none";
				
	}
	
	function myFunction4(){
	
	var x = document.getElementsByClassName("extraText");
	var y = document.getElementsByClassName("contentbox")
    var z = document.getElementsByClassName("readMore");
		
			
					x[4].style.display = "block";
					y[4].style.height = "700px";
                    z[4].style.display = "none";
				
	}
    
    function showLess() {
        
        var x = document.getElementsByClassName("extraText");
        var y = document.getElementsByClassName("contentbox");
        var z = document.getElementsByClassName("readMore");
        
            x[0].style.display = "none";
		    y[0].style.height = "350px";
            z[0].style.display = "block";
    }
    
    function showLess1() {
        
        var x = document.getElementsByClassName("extraText");
        var y = document.getElementsByClassName("contentbox");
        var z = document.getElementsByClassName("readMore");
        
            x[1].style.display = "none";
		    y[1].style.height = "350px";
            z[1].style.display = "block";
    }
    
    function showLess2() {
        
        var x = document.getElementsByClassName("extraText");
        var y = document.getElementsByClassName("contentbox");
        var z = document.getElementsByClassName("readMore");
        
            x[2].style.display = "none";
		    y[2].style.height = "350px";
            z[2].style.display = "block";
    }
    
    function showLess3() {
        
        var x = document.getElementsByClassName("extraText");
        var y = document.getElementsByClassName("contentbox");
        var z = document.getElementsByClassName("readMore");
        
            x[3].style.display = "none";
		    y[3].style.height = "350px";
            z[3].style.display = "block";
    }
    
    function showLess4() {
        
        var x = document.getElementsByClassName("extraText");
        var y = document.getElementsByClassName("contentbox");
        var z = document.getElementsByClassName("readMore");
        
            x[4].style.display = "none";
		    y[4].style.height = "350px";
            z[4].style.display = "block";
    }

