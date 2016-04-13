function ajaxGet(url, onSuccess) {

	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function () {

		if (xhttp.readyState == 4 && xhttp.status == 200) {
			onSuccess(xhttp.responseText);
			reply_extra();
		}
	};
	/*this is to handle the backgound in extra comments and keep the background on the see more statuses bar*/
	document.getElementById("more-status-div").style.background = "#e6e9f0";
	xhttp.open("GET", url, true);
	xhttp.send();
}