HTMLElement.prototype.toggle = function() {
    if (this.style.display == ''){
	this.style.display = 'block';
    }else {
	this.style.display = '';
    }
}
