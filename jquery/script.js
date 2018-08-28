$(document).ready(function(){
    $(".btn").click(function(){
        $(".input").toggleClass("ativo").focus;
         $(this).toggleClass("anima");
    });
});