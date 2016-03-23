document.addEventListener("DOMContentLoaded", function(event) {
	var stat = document.getElementById("more-status-div");
	stat.addEventListener("click",displayMoreStatus);
	function displayMoreStatus(){
        		 
		/*
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("more-status-inject").innerHTML = xhttp.responseText;
		}
		};
		xhttp.open("GET", "/statuses-1.html", true);
		xhttp.send();
		*/
		
		ajaxGet("/statuses-1.html", function(string) { 
			document.getElementById("more-status-inject").innerHTML = string ;
		})
		//var st = document.getElementById('more-status-btn');
		//st.toggle();
		
	}
});