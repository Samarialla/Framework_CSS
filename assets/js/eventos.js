



$('#btnAdd').click(function () {
    $('#myModal').modal('show');
    $('#myModal').modal('show');
    $('#myModal').find('.modal-title').text('Add Nuevos Eventos');
    $('#myForm').attr('action', 'Eventos/addEventos');
});
$('#btnSave').click(function () {
    var url = $('#myForm').attr('action');
    var data = $('#myForm').serialize();
    //validate form
    var nombre_eventos = $('input[name=txtnombre_evento]');
    var fecha_eventoinicio = $('datetime-local[name=txtfecha_inicio]');
    var fecha_evenofin = $('datetime-local[name=txtfecha_fin]');
    var result = '';
    if (nombre_eventos.val() == '') {
        nombre_eventos.parent().parent().addClass('has-error');
        alertify.error('Ingrese el nombre del evento');
        alertify.set('notifier', 'position', 'top-right');
    } else {
        nombre_eventos.parent().parent().removeClass('has-error');
        result += '1';
    }
    if (fecha_eventoinicio.val() == '') {
        console.log('fecha_inicio');
        fecha_eventoinicio.parent().parent().addClass('has-error');
        alertify.error('Ingrese la fecha y hora de inicio del eventos');
        alertify.set('notifier', 'position', 'top-right');
    }
    else {
        fecha_eventoinicio.parent().parent().removeClass('has-error');
        result += '2';
    }
//
//    if (fecha_evenofin.val() == '') {
//        fecha_evenofin.parent().parent().addClass('has-error');
//        alertify.error('Ingrese la fecha y hora de fin del eventos');
//        alertify.set('notifier', 'position', 'top-right');
//    } else {
//        fecha_evenofin.parent().parent().removeClass('has-error');
////        result += '3';
//    }

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
                    $('#myModal').modal('hide');
                    $('#myForm')[0].reset();
                    if (response.type == 'add') {
                        var type = 'added'
                    } else if (response.type == 'update') {
                        var type = "updated"
                    }
                    $('.alert-success').html('eventos ' + type + ' ¡GRACIAS!').fadeIn().delay(4000).fadeOut('slow');
//                        refresh();
                    alertify.success("Se realizo correctamente el proceso");
                    alertify.set('notifier', 'position', 'top-center');
//                        alert('hola');
                } else {
                    alertify.error('Por favor modificar al menos un campo para poder realizar la accion');
                    alertify.set('notifier', 'position', 'top-center');
                }
            },
            error: function () {
                //$('.alert-success').html('Funcionario' + type + ' successfully').fadeIn().delay(4000).fadeOut('slow');
                alertify.error('Error !Selecione al menos un Funcionario!');
                alertify.set('notifier', 'position', 'top-center');
            }
        });
    }
});
$('#btnref').click(function () {
// console.log('hola');
//      $('#tblinternos').DataTable().fnClearTable();
    var fullcalendar = $('#calendar').fullCalendar();
    fullcalendar.clear().draw();
});
function refresh() {
    // console.log('hola1');
//      $('#tblinternos').DataTable().fnClearTable();
    var fullcalendar = $('#calendar').fullCalendar();
    fullcalendar.clear().draw();
}

$('#btnUpdEvento').click(function () {
    var nome = $('#txtBandaRP').val();
//        var web = $('#txtWeb').val();
    var ide = $('#mhdnIdEvento').val();
    $.post("Eventos/updEvento2",
            {
                nom: nome,
//                    web: web,
                id: ide
            },
            function (data) {
                if (data == 1) {
                    $('#btnCerrarModal').click();
                }
            })
});

var bgColor = [];
var bgBorder = [];
$(document).ready(function () {


    $.post('Eventos/getEventos',
            function (data) {

                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay,listWeek'
                    },

                    defaultDate: new Date(),
                    navLinks: true,
                    selectable: true,
                    selectHelper: true,
                    eventLimit: true,
                    editable: true,
                    eventSources: [{

                            events: $.parseJSON(data),
                            //color: '#257e4a',
                            textColor: "white",
                            textsize: "12"
                        }],

                    eventDrop: function (event, delta, revertFunc) {
                        var id = event.id;
                        var fi = event.start.format();
                        var ff = event.end.format();
                        if (!confirm("Esta seguro??")) {
                            revertFunc();
                        } else {
                            $.post("Eventos/updEvento",
                                    {
                                        id: id,
                                        fecini: fi,
                                        fecfin: ff
                                    },
                                    function (data) {
                                        if (data == 1) {
                                            alert('Se actualizo correctamente');
                                        } else {
                                            alert('ERROR.');
                                        }
                                    });
                        }
                    },
                    eventResize: function (event, delta, revertFunc) {
                        var id = event.id;
                        var fi = event.start.format();
                        var ff = event.end.format();
                        if (!confirm("Esta seguro de cambiar la fecha?")) {
                            revertFunc();
                        } else {
                            $.post("Eventos/updEvento",
                                    {
                                        id: id,
                                        fecini: fi,
                                        fecfin: ff
                                    },
                                    function (data) {
                                        if (data == 1) {
                                            alert('Se cambio correctamente');
                                        } else {
                                            alert('ERROR.');
                                        }
                                    });
                        }
                    },
                    eventClick: function (event, jsEvent, view) {

//                            alert(event.title);
                        $('#mhdnIdEvento').val(event.id);
                        $('#mtitulo').html(event.title);
                        $('#txtBandaRP').val(event.title);
                        $('#modalEvento').modal();
                        if (event.url) {
                            window.open(event.url);
                            return false;
                        }

                    },
                    eventRender: function (event, element) {
                        var el = element.html();
                        element.html("<div style='width:100%;float:left;'>" + el + "</div>" +
                                "<div style='color:red;text-align:right;' class='closeE'>" +
                                "<i class='fa fa-trash'></i>" +
                                "</div>");
                        element.find('.closeE').click(function () {
                            if (!confirm("Esta seguro de eliminar el evento?")) {
                                return false;
                            } else {
                                var id = event.id;
                                $.post("Eventos/deleteEvento",
                                        {
                                            id: id
                                        },
                                        function (data) {
                                            alert(data);
                                            if (data == 1) {
                                                $('#calendar').fullCalendar('removeEvents', event.id);
                                                alert('Se elimino correctamente');
                                            } else {
                                                alert('ERROR.');
                                            }
                                        });
                            }

                        });
                    }
//


                });


            });
});

