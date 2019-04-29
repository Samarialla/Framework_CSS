//$(document).on("ready", main);
//function main(){
//	$("#login").click(function(event){
//		event.preventDefault();
//		$.ajax({
//			url:$(this).attr("action"),
//			type:$(this).attr("method"),
//			data:$(this).serialize(),
//			success:function(resp){
//				if(resp==="error"){
//					alert("Los datos no existen");
//				}
//				else{
//					window.location.href = "http://localhost/Internos/";
//				}
//			}
//		});
//	});

//	$("#cerrar").on("click",function(event){
//		event.preventDefault();
//		$.ajax({
//			url:"http://localhost/Internos/login/cerrar",
//			type:"POST", 
//			data:{},
//			success:function(){
//				window.location.href = "http://localhost/Internos/Login";
//			}
//		});
//	});
//}

//jQuery(document).on('submit', '#login', function (event) {
//    event.preventDefault();
//    jQuery.ajax({
//        url: "inicio.php",
//        type: 'POST',
//        dataType: 'json',
//        data: $(this).serialize(),
//        beforeSend: function () {
//
//        }
//    })
//            .done(function (respuesta) {
//                console.log('success');
//            })
//            .fail(function (resp) {
//                console.log(resp.responseText);
//            })
//
//
//            .always(function (resp) {
//                console.log('complete');
//            });
//});

$(function () {


    $('#btnSave').click(function () {
        var url = $('#Mylogin').attr('action');
        var data = $('#Mylogin').serialize();
        //validate form
        var usuario_email = $('input[name=usuario_email]');
        var usuario_pass = $('input[name=usuario_pass]');
        var result = '';
        if (usuario_email.val() == '') {
            usuario_email.parent().parent().addClass('has-error');
            alertify.error('Por favor ingresar algun usuario');
            alertify.set('notifier', 'position', 'top-right');
        } else {
            usuario_email.parent().parent().removeClass('has-error');
//            result += '1';
        }
        if (usuario_pass.val() == '') {
            usuario_pass.parent().parent().addClass('has-error');
            alertify.error('Ingrese su contraseña');
            alertify.set('notifier', 'position', 'top-right');
        } else {
            usuario_pass.parent().parent().removeClass('has-error');
            result += '2';
        }

        if (result == '12') {
            $.ajax({

                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: true,
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
//                        $('#login').modal('hide');
                        $('#Mylogin')[0].reset();


                        alertify.success("Se realizo correctamente el proceso");

                        alertify.set('notifier', 'position', 'top-center');
//                        location.href = 'http://localhost/Internos/Login/ingresar';
//                        alert('hola');
                    } else {
                        alertify.error('Error al INTENTAR INGRESAR');
                        alertify.set('notifier', 'position', 'top-center');
                    }
                },
                error: function () {
                    //$('.alert-success').html('Funcionario' + type + ' successfully').fadeIn().delay(4000).fadeOut('slow');
                    alertify.error('Error ! DE loqgue!');
                    alertify.set('notifier', 'position', 'top-center');
                }
            });
        }
    });


//    $("#Mylogin").submit(function (event) {
//        event.preventDefault();
//        $.ajax({
//            url: $(this).attr("action"),
//            type: $(this).attr("method"),
//            data: $(this).serialize(),
//            success: function (resp) {
//                if (resp === "error") {
//                    alert("Los datos no existen");
//                } else {
////					window.location.href = "http://localhost/Internos";
////                    alertify.error('Usuarios o Contraseña incorrectas');
////                    alertify.set('notifier', 'position', 'top-center');
//                }
//            }
//        });
//    });

//	$("#cerrar").on("click",function(event){
//		event.preventDefault();
//		$.ajax({
//                    //alert('hola'),
//			url:"Login/cerrar",
//			type:"POST", 
//			data:{},
//			success:function(){
//				window.location.href = "http://localhost/Internos";
//			}
//		});
//	});


    
});