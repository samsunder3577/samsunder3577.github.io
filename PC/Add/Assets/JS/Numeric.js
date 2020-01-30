function restrictAlphabets(e){
				var x=e.which||e.keycode;
				if((x>=48 && x<=57) || x==8 ||
					(x>=35 && x<=40)|| x==46)
					return true;
				else
					return false;
}

function inputFocus(i) {
    if (i.value == i.defaultValue) { i.value = ""; i.style.color = "white"; }
}
function inputBlur(i) {
    if (i.value == "") { i.value = i.defaultValue; i.style.color = "white"; }
}