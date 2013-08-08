function include(arr, obj) {
  return (arr.indexOf(obj) != -1);
}

function clicked(e, id){
	var c = document.getElementById(id);
	if(c.className == "hide"){
		c.className = "hide open";
		c.getElementsByTagName("h2")[0].childNodes[1].innerHTML = "&ndash;";
	}else{
		c.className = "hide";
		c.getElementsByTagName("h2")[0].childNodes[1].innerHTML = "+";
	}
}

$(document).ready(function(){
	$('.acc-handle').click( function() {
		var trig = $(this);
		trig.toggleClass("active");
		trig.parent().next(".acc-panel").toggleClass("active");
	});
});

var a = function(d){
}(document)
