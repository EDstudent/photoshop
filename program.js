window.onload=function(){
 console.log("Done begin");
 var a=0;
 	var id = setInterval(frame, 5);
	function frame() {
		if (a == 100) {
			clearInterval(id);
		}
		
		else {
			a++
			function1();
			function2();
			console.log(a);
		}};
	console.log("Done end");
}



function function1(){
	
	var elem = document.getElementById("right"); 
	var elem2 = document.getElementById("left"); 
	var width = 48;
	var id = setInterval(frame, 5);
	function frame() {
		if (width == 17) {
			clearInterval(id);
		}
		else if(width == 35){
			elem.style.display="none";
			elem2.style.display="block";
			width--;
		}
		else if( width!=17 && width!==35) {
			width--; 
		elem.style.left = width + '%'; 
		elem2.style.left = width + '%'; 
    }
  }
}

function function2(){
	
	var elem2 = document.getElementById("right"); 
	var elem = document.getElementById("left"); 
	var width = 17;
	var id = setInterval(frame, 5);
	function frame() {
		if (width == 48) {
			clearInterval(id);
		}
		else if(width == 35){
			elem.style.display="none";
			elem2.style.display="block";
			width++;
		}
		else if( width!=48 && width!==35) {
			width++; 
		elem.style.left = width + '%'; 
		elem2.style.left = width + '%'; 
    }
  }
}