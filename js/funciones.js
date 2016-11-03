$(document).ready(function(){
	$(".line").fadeOut();
    $("#preloader").delay(500).fadeOut("slow");

    $(document).scroll(function(){
        //Distancia de lo visible acerca del borde superior del documento
        //(Tope de la vista)
        var windowTop=$(document).scrollTop();
        //Bottom de la vista
        var windowBottom=windowTop+window.innerHeight;
        //Elemento a verificar
        var footer=$('footer');
        //Posicion top del elemento acerca del Top del documento
        var offset=footer.offset();
        var footerTop=offset.top;
        //posicion Bottom del elemento
        var footerBottom=footerTop+footer.height();
        
        if((footerTop>windowBottom)||(footerBottom<windowTop)){ 
            $('.colores').css('bottom','0');
            $('.borde').css('top','0');
        }else{
            $('.colores').css('bottom',windowBottom-footerTop);
            $('.borde').css('top','auto');
        }

        var barraColoresTop=$('.colores').offset().top;
        $('.borde').css('bottom',windowBottom-barraColoresTop);

        var video=$('#video-intro');
        var videoBottom=video.offset().top+video.height();
        if(videoBottom>windowBottom){
            $('.borde').removeClass('borde-solido');
            $("#logo img.novisible").css('opacity','0');
            $("#logo img.novisible").css('filter','alpha(opacity=0)');
            $("#logo img.visible").css('opacity','1');
            $("#logo img.visible").css('filter','alpha(opacity=100)');
        }else{
            $('.borde').addClass('borde-solido');
            $("#logo img.novisible").css('opacity','1');
            $("#logo img.novisible").css('filter','alpha(opacity=100)');
            $("#logo img.visible").css('opacity','0');
            $("#logo img.visible").css('filter','alpha(opacity=0)');
        }
    });

    $('#btnFormula').click(function(){
        var ok=0;
        var nombre=$('input[name="formNombre"]').val();
        var empresa=$('input[name="formEmpresa"]').val();
        var telefono=$('input[name="formTelefono"]').val();
        var email=$('input[name="formEmail"]').val();
        var formula=$('select[name="formFormula"]').val();
        var finan=$('select[name="formFinan"]').val();
        var mensaje=$('textarea[name="formMensaje"]').val();
        console.log(nombre+empresa+telefono+formula+email+finan+mensaje);

        if(nombre.length<3){
            $('input[name="formNombre"]').css('border-color','red');    
        }else{
            ok++;
            $('input[name="formNombre"]').css('border-color','#2199e8');        
        }

        if(empresa.length<2){
            $('input[name="formEmpresa"]').css('border-color','red');    
        }else{
            ok++;
            $('input[name="formEmpresa"]').css('border-color','#2199e8');    
        }

        if(telefono.length<10){
            $('input[name="formTelefono"]').css('border-color','red');    
        }else{
            ok++;
            $('input[name="formTelefono"]').css('border-color','#2199e8');   
        }

        validacion = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        if((email.length<3) || (!validacion.test(email))){
            $('input[name="formEmail"]').css('border-color','red');    
        }else{
            ok++;
            $('input[name="formEmail"]').css('border-color','#2199e8');    
        }

        if(mensaje.length<3){
            $('textarea[name="formMensaje"]').css('border-color','red');    
        }else{
            ok++;
            $('textarea[name="formMensaje"]').css('border-color','#2199e8');    
        }
        
        $('#form-financiamiento').submit(function(e) {
            if (ok != 5) {
                e.preventDefault();
                $('#form-financiamiento .success').css('display','none');
                $('#form-financiamiento .alert').css('display','block');
            }else{
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(data) {
                        $('#form-financiamiento .alert').css('display','none');
                        $('#form-financiamiento .success').css('display','block');
                    }
                }); 
                $('#form-financiamiento input').val("");
                $('#form-financiamiento textarea').val("");
                e.preventDefault();
            }
        });
        ok=0;
    });

    $('a.scroll').click(function(e){
        e.preventDefault();
        $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
    });
});


$(window).load(function(){
    $(".line").fadeOut();
    $("#preloader").delay(500).fadeOut("slow");
});


