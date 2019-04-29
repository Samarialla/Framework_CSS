var base_url = 'Login/cerrar';

var timeout;
document.onmousemove = function () {
    clearTimeout(timeout);
    contadorSesion(); //aqui cargamos la funcion de inactividad
}

function contadorSesion() {
    timeout = setTimeout(function () {
        $.confirm({
            title: 'Alerta de Inactividad!',
            content: 'La sesión esta a punto de expirar.',
            autoClose: 'expirar|10000', //cuanto tiempo necesitamos para cerrar la sess automaticamente
            type: 'red',
            icon: 'fa fa-spinner fa-spin',
            buttons: {
                expirar: {
                    text: 'Cerrar Sesión',
                    btnClass: 'btn-red',
                    action: function () {
                        salir();
                    }
                },
                cancelar: function () {

                    //contadorSesion(); 


                    contadorSesion();
 




//                            contadorSesion(); //reinicia el conteo
                    //$.alert('La Sesión ha sido reiniciada!'); //mensaje
//                    window.location.href = base_url + "Inicio_Controller";
                  location.reload(true);




                }
            }
        });
    }, 100000);//10 minutos para no demorar tanto 
}

function salir() {
    window.location.href = base_url; //esta función te saca
}
