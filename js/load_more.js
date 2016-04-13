function load_more() {

	var elemn = document.getElementById("status_button");

	elemn.onclick = function () {
		document.getElementById("status_button").style.background = "#cdd422";
		/*changing the inner text of my button*/
		document.getElementById("status_button").innerHTML = "LOADING ...";
		/*disabling the link so that users dont keep clicking on it*/
		document.getElementById("status_button").disable = true;
		document.getElementById("status_button").style.cursor = "not-allowed";

		setTimeout(function () {
			ajaxGet("..\statuses-1.html", function (response) {
				document.getElementById("more-status-div").innerHTML = response;
			});
		}, 2000);
	}
}

document.addEventListener("DOMContentLoaded", function () {
	load_more();
	reply();
});