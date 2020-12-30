jQuery(document).ready(function ($) {

	$('.splitTextDiv').each(function(i, el){
		
		var text = $(this).text();
		var arr = text.split(' ');
		var classAnimation = ['swing', 'tada', 'jello', 'bounce'];


		for (i in arr)
        	arr[i] = '<span class="' + classAnimation[Math.floor((Math.random() * 4))] + '">' + arr[i] + '</span> ';   
    	var textdef = arr.join(' ');
    	$(this).html(textdef);

		arr = undefined;

	});
});