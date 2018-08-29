$(document).ready(function(){
    $(".btn").click(function(){
        $(".input").toggleClass("ativo");
         $(this).toggleClass("anima");
    });
});

/*MENU MOBILE*/
$(document).ready(function(){
    $(".menu-icon").click(function(){
        $("#undnav").toggleClass("mostrar");
    });
});

/*hamburger menu*/
function myFunction(x) {
    x.classList.toggle("change");
}

/*Produto hover*/
$(document).ready(function(){ 
     $('.product').each(function(i, el){         
      $(el).find('.make3D').hover(function(){
        $(this).addClass('animate');  
      }, function(){
        $(this).removeClass('animate');     
      });          
   });
});