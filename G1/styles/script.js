// USEFULL PREDEFINED FUNCTION

function $(id) {
	var element = document.getElementById(id);

	if (element == null) {
		alert('Programmer error (id): ' + id + 'does not exist.');
	}
	return element;
}

function @(class) {
	var element = document.getElementsByClassName(class);

	if (element == null) {
		alert('Programmer error (class): ' + class + 'does not exist.');
	}
	return element;
}

// NOT SURE WE ARE USING THESE FUNCTION, BUT MADE IT JUST IN CASE WE NEED THEM

function valueId(id) {
	var idValue = $(id).value;
	return idValue;
}

function valueClass(class) {
	var classValue = @(class).value;
	return classValue;
}