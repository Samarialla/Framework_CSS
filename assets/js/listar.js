//$(document).on("ready", main());


$(function () {
    $('#bususuario').select2({
        dropdownParent: $('#myModal'),
//        theme: "bootstrap",
        allowClear: true
        
//
        //minimumInputLength: 1
    });


//    $('#btnSave').click(function () {
//        alertify.success("Se realizo correctamente el proceso");
//        alertify.set('notifier', 'position', 'top-center');
//
//    });

    $("form").keypress(function (e) {
        if (e.which == 13) {
            return false;
        }
    });
//
////    function actualizar() {
//        location.reload(true);
////    }
////Función para actualizar cada 4 segundos(4000 milisegundos)
//    setInterval("actualizar()", 4000);




    $("#bususuario").select2("val", "");
//    console.log('select2');

    $("#bususuario").on('change', function () {
        var selValue = this.value;
        var selStatus = (selValue) ? "Tiene el valor: " + selValue : "Está vacío";
        console.log(selStatus);
    });

    $(document).on('click', '.item-edit', function () {
        var usuario_id = $(this).val();
        var first = $('#bususuario' + usuario_id).select();
        var nombre = $('#bususuario' + usuario_id).text();
//		var address=$('#address'+id).text();

        $('#item-edit').modal('show');
//        $('#bususuario').val(usuariio_id);
//		$('#elastname').val(last);
//		$('#eaddress').val(address);
    });



    $('.solo-numero').keyup(function () {
        this.value = (this.value + '').replace(/[^0-9]/g, '');
    });




//    showAllEmployee();
    $('#btnAdd').click(function () {
        $('#myModal').modal('show');
        $('#myModal').modal('show');
        $('#myModal').find('.modal-title').text('Add Nuevos Internos');
        $('#myForm').attr('action', 'Funcionario/addEmployee');

    });


    $('#btnSave').click(function () {
        var url = $('#myForm').attr('action');
        var data = $('#myForm').serialize();
        //validate form
        var usuario_id = $('select[name=bususuario]');
        var fun_interno = $('input[name=txtfun_interno]');
        var result = '';
        if (usuario_id.val() == '') {
            usuario_id.parent().parent().addClass('has-error');
            alertify.error('Seleccione una opcion');
            alertify.set('notifier', 'position', 'top-right');
        } else {
            usuario_id.parent().parent().removeClass('has-error');
            result += '1';
        }
        if (fun_interno.val() == '') {
            fun_interno.parent().parent().addClass('has-error');
            alertify.error('Ingrese numero de Internos');
            alertify.set('notifier', 'position', 'top-right');
        } else {
            fun_interno.parent().parent().removeClass('has-error');
            result += '2';
        }

        if (result == '12') {
            $.ajax({

                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
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
                        $('.alert-success').html('funcionario ' + type + ' ¡GRACIAS!').fadeIn().delay(4000).fadeOut('slow');
                        refresh();
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
    $('#showdata').on('click', '.item-edit', function () {
        var idfuncionarios = $(this).attr('data');
        $('#myModal').modal('show');
        $('#myModal').find('.modal-title').text('Edit Internos de Funcionarios');
        $('#myForm').attr('action', 'Funcionario/updateEmployee');
//        allowClear: true;
//        $("#bususuario").empty().trigger('change');
        $.ajax({
            type: 'ajax',
            method: 'get',
            url: 'Funcionario/editEmployee',
            data: {idfuncionarios: idfuncionarios},
            async: false,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('input[name=txtidfuncionarios]').val(data.idfuncionarios);
                $('[name=txtusuario_id]').val(data.usuario_id);
                $('#select2-bususuario-container').text(data.usuario_email);
                $('input[name=txtfun_interno]').val(data.fun_interno);
//                $('select2-chosen-2[name=Nombre]').val(data.Nombre);

                //$('#myselect2').val(selected).trigger('change'); 
//                refresh();
            },
            error: function () {
                alertify.error('NO se pudo editar esta accion');
                alertify.set('notifier', 'position', 'top-center');
            }
        });
    });
    //delete- 
    $('#showdata').on('click', '.item-delete', function () {
        var idfuncionarios = $(this).attr('data');
        $('#deleteModal').modal('show');
        //prevent previous handler - unbind()
        $('#btnDelete').unbind().click(function () {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: 'Funcionario/deleteEmployee',
                data: {idfuncionarios: idfuncionarios},
                dataType: 'json',
                success: function (data) {
                    // console.log(data);
                    if (data.success) {
                        // console.log(data);
                        $('#deleteModal').modal('hide');
                        $('.alert-success').html('Interno se elimino correactamente').fadeIn().delay(4000).fadeOut('slow');


                        alertify.success("Se borro correctamento¡");
                        alertify.set('notifier', 'position', 'top-center');
                        refresh();
                    } else {
                        alertify.error('NO se pudo eliminar esta accion');
                        alertify.set('notifier', 'position', 'top-center');
                    }
                },
                error: function () {
                    alertify.error('NO se pudo eliminar esta accion');
                    alertify.set('notifier', 'position', 'top-center');
                }
            });
        });
    });
    function showAllEmployee() {
//        $.ajax({
//            type: 'post',
//            url: 'Funcionario/showAllEmployee',
////            async: false,
//            destroy: 'true',
//            dataType: 'json',
//            success: function (data) {
//                ///console.log('Hola');
//                //console.log(data);
//                var html = '';
//                var i;
//                for (i = 0; i < data.data.length; i++) {
//                    html += '<tr>' +
//                            '<td class="hidden">' + data.data[i].idfuncionarios + '</td>' +
//                            '<td class="hidden">' + data.data[i].usuario_id + '</td>' +
//                            '<td>' + data.data[i].Nombre + '</td>' +
//                            '<td>' + data.data[i].usuario_email + '</td>' +
//                            '<td>' + data.data[i].fun_interno + '</td>' +
//                            '<td>' +
////                            '<center>' +
////                            '<a href="javascript:;" class="glyphicon glyphicon-pencil"   data="' + data.data[i].idfuncionarios + '"></a>' +
////                            '<a href="javascript:;"  class="glyphicon glyphicon-trash" data="' + data.data[i].idfuncionarios + '"></a>' +
////                            '</center>' +
//                            '</td>' +
//                            '</tr>';
//                }
//                $('#showdata').html(html);
//            },
//            error: function () {
//                alert('Could not get Data from Database');
//            }
//        });
    }

    $('#btnref').click(function () {
        // console.log('hola');
//      $('#tblinternos').DataTable().fnClearTable();
        var dataTable = $('#tblinternos').DataTable();
        
        dataTable.clear().draw();
    });

    function refresh() {
        // console.log('hola1');
//      $('#tblinternos').DataTable().fnClearTable();
        var dataTable = $('#tblinternos').DataTable();
        
        dataTable.clear().draw();
    }
});




 