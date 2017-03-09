// USEFULL PREDEFINED FUNCTION

function $(id) {
	
	var element = document.getElementById(id);

	if (element == null) {
		alert('Programmer error (id): ' + id + 'does not exist.');
	}
	return element;
}

// function @(className) {
	// var element = document.getElementsByClassName(className);

	// if (element == null) {
		// alert('Programmer error (class): ' + className + 'does not exist.');
	// }
	// return element;
// }

//NOT SURE WE ARE USING THESE FUNCTION, BUT MADE IT JUST IN CASE WE NEED THEM

function valueId(id) {
	var idValue = $(id).value;
	return idValue;
}

// function valueClass(className) {
	// var classValue = @(className).value;
	// return classValue;

// }

function warningMessage(id)
{
	alert("Please enter a valid " + $(id).name);
	//alert("Function hit");
}

// Test Validation for .com/.ca/.org && @hotmail @gmail @yahoo @outlook
function testForumValidation(id) {
	// Email
	switch($(id).id)
	{
		case "mail": {
			var aSplit = $(id).value.split("@"); // split email at @
		
			//Exit Statement, entered two "@"
			if(aSplit.length > 2) 
				return warningMessage(id); // leaves function and do not proceed furthur checks until the dude fixes his shit
			
			// Split Elements to desired searching elements
			var domain = aSplit[1];
			
			var address = domain.split(".")[0];
			var dot = domain.split(".")[1];
			
			alert( address +" " + dot);
			if(!(address == "hotmail" || address == "yahoo"|| address == "gmail"|| address == "outlook" )){
				warningMessage(id);
			}
			else if(!(dot == "com" || dot == "org" || dot == "ca")){
				warningMessage(id);
			}
		}break;
		case "login": {
			
		}break;
		case "password2": {
			if($(id).value != $("password").value)
				warningMessage(id);
		}break;
		
		
	}

	
}

