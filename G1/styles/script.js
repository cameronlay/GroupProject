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

function testNameType2(){
    var x = $("mail2").value;
    var patt = /^\w+$/;
    var res = patt.test(x);
//        will return true if input is valid
    return res;
}
        
function warnNameType2() {
    if(!testNameType2()){
        $("errEmail2").style.visibility = 'visible';
    } else { 
        $("errEmail2").style.visibility = 'hidden';
    }
}

function testNameType(){
    var x = $("mail").value;
    var patt = /^\w+$/;
    var res = patt.test(x);
//        will return true if input is valid
    return res;
}
        
function warnNameType() {
    if(!testNameType()){
        $("errEmail").style.visibility = 'visible';
    } else { 
        $("errEmail").style.visibility = 'hidden';
    }
}

function testUsername(){
    var x = $("login").value;
    var patt = /^(?:\S\w*_*)$/i;
    var res = patt.test(x);
//        will return true if input is valid
    return res;
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
    return 8 <= x && x <= 128;
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
    if (testNameType2() && testUsername() && testNameType()
     && testPassword() && testConfirm()) {
        return true;
    }   else {
        if (!testNameType()) {
            $("errEmail").style.visibility = 'visible';
        }   else {
            $("errEmail").style.visibility = 'hidden';
        }
        if (!testNameType2()) {
            $("errEmail2").style.visibility = 'visible';
        }   else {
            $("errEmail2").style.visibility = 'hidden';
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
//  var x = $(id).value;
//  x = x.substring(x.lastIndexOf("."));
//  return x == ".com" || x == ".ca" || x == ".org";
//}

function testEmailValid(){
    var x = $("mailUs").value;
    var patt = /(\w+)(@)(\w+)(\.com$|\.co$|\.org$|\.ca$|\.net$)/;
    var res = patt.test(x);
//        will return true if input is valid
    return res;
}

//function warnEmailValid(id) {
//  if(!testEmailValid(id)){
//      $("errEmailValid").style.visibility = 'visible';
//  } else { 
//      $("errEmailValid").style.visibility = 'hidden';
//  }
//}


function testEmptyField () {
    // will return if all inputs' are completed
    var x = !($("mailUs").value == "" 
                || $("subject").value == "" 
                || $("emailReply").value == "");
    return x;
}

//function warnEmptyField (id, id1, id2) {
//  if($(id).value == "" || $(id1).value == "" || $(id2).value == ""){
//      $("errEmptyField").style.visibility = 'visible';
//  } else {
//      $("errEmptyField").style.visibility = 'hidden';
//  }
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

/*
var z= document.getElementsByClassName("extraText");
    var i;
    for(i = 0; i < z.length; i++){
        z[i].style.display = "none";
    }
*/
    function expandContent(num){
    
        var x = document.getElementsByClassName("extraText");
        var y = document.getElementsByClassName("contentbox");
        var z = document.getElementsByClassName("readMore");
        
        x[num].style.display = "block";
        y[num].style.height = "700px";
        z[num].style.display = "none";
                
    }
   
    
    function showLess(num) {
        
        var x = document.getElementsByClassName("extraText");
        var y = document.getElementsByClassName("contentbox");
        var z = document.getElementsByClassName("readMore");
        
        x[num].style.display = "none";
        y[num].style.height = "350px";
        z[num].style.display = "block";
    }