window.onload = function() {
    var showForm = document.getElementById('showLink');
    showForm.onclick = function() {
        var show = document.getElementById('statusPost')
        show.toggle();
    };
};