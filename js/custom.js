$(document).ready(function(){
$('.parent a').click(function(){
$( "li" ).removeClass( "current" );
$(this).parent('li').addClass('current');
});
});