$(document).ready(function(){
	$(".line").fadeOut();
    $("#preloader").delay(500).fadeOut("slow");
});


$(window).load(function(){
    $(".line").fadeOut();
    $("#preloader").delay(500).fadeOut("slow");
});

$(document).on("scroll", function(){
    //sacamos el desplazamiento actual de la página
    var desplazamientoActual = $(document).scrollTop();
    //accedemos al control de "ir arriba"
    var topFooter = $(footer).offset().top;
    //compruebo si debo mostrar el botón
    if(desplazamientoActual > topFooter){
        $(body).css("background-color","red");
    }
    //controlo si debo ocultar el botón
    if(desplazamientoActual < topFooter){
        $(body).css("background-color","green");
    }
});