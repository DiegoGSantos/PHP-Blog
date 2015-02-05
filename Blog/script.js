// Diego - Script responsible to show an "Read full post" when the post is longer than 200 char.

$(document).ready(function() {
	var showChar = 200;
	var ellipsestext = "...";
	var moretext = "Read full post";
	var i = 0;
	$('.more').each(function() {
		var content = $(this).html();

		var ul_element = document.getElementById("main");
		var lis = ul_element.getElementsByTagName('li');
		var li = lis[i].getElementsByTagName('p')[1];
		var id_value = li.firstChild.nodeValue;

		i = i + 1;

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			// var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';
			var html = c + '<span class="moreelipses">'
			+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' 
			+ h + '</span>&nbsp;&nbsp;<a href="fullpost.php?id='
			+id_value+'" class="morelink">'
			+moretext+'</a></span>';


			$(this).html(html);
		}

	});
});