var action = "click" ; 
var speed = "300ms" ;
$(document).ready(function(){

//Get next element 
$('li.q').on(action, function(){
$(this).next().slideToggle(speed).siblings('li.a').slideUp() ; 

//Get image for active question 
var img = $(this).children('img') ; 
//Remove the 'rotate class of all images except they active 
 $('img').not(img).removeClass('rotate');

//Toggle Rotate Class 

img.toggleClass('rotate');


});

});