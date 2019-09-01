function csinal(){
	var a = document.getElementById("a").value;
	var b = document.getElementById("b").value;
	var c = document.getElementById("c").value;

	var out = a + " " + b + " " + c;

	if(isNaN(a) || isNaN(b) || isNaN(c) || a == "" || b == "" || c == ""){
		out = "hiba";
	}else{
		var d = (b*b)-(4*a*c);
		var sqrt_d = Math.sqrt(d);
		var ikszek = "";
		
		if(d<0){
			out = 0;
		}else if(d>0){
			out = 2;
			var x1 = (-b+sqrt_d)/(2*a);
			var x2 = (-b-sqrt_d)/(2*a);
			ikszek = x1.toFixed(2) + " és " + x2.toFixed(2);
		}else{
			out = 1;
			ikszek = (b+sqrt_d)/2*a;
		}
	}
	
	document.getElementById("ide_ir").innerHTML = out;
	
	if(ikszek != ""){
		document.getElementById("x_ek").innerHTML = ikszek;
	}else{
		document.getElementById("x_ek").innerHTML = "";
	}
	return false;
	}