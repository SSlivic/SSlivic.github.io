function myFunction() {
    var x = document.getElementById("ogrlica_");
    if ( x.style.display === "none") {
         x.style.display = "block";
    	} 
    else {
        x.style.display = "none";
    }
    myFunction();