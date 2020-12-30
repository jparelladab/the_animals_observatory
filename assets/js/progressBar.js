window.onscroll = function() { ScrollIndicator() };

function ScrollIndicator() {
	var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
	var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	var scrolled = (winScroll / height) * 100;
	document.getElementById( 'progress_bar' ).style.width = scrolled + "%";
	
}
