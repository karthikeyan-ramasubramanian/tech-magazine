jQuery(document).ready(function($){
       $("#tabs").tabs();
    $("#help").click(function(){
	$( "#tabs" ).tabs( "option", "active", 3 );
    });
});