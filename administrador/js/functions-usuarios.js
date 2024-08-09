$('#tableusuarios').DataTable();
var tableusuarios;

document.addEventListener('DOMContentLoaded',function(){
    tableusuarios = $('#tableusuarios').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": "./models/usuarios/table_usuarios.php",
            "dataSrc":""
        },
        "columns": [
            {"data":"acciones"},
            {"data":"usuario_id"},
            {"data":"nombre"},
            {"data":"usuario"},
            {"data":"nombre_rol"},
            {"data":"estado"}
        ],
        "dom": "lBfrtip",
        "buttons": [
            {
                "extend": "copyHtml5",
                "text": "<i class='far fa-copy'></i> Copiar",
                "titleAttr": "Copiar",
                "className": "btn btn-secondary"
            },{
                "extend": "excelHtml5",
                "text": "<i class='fas fa-file-excel'></i> Excel",
                "titleAttr": "Exportar a excel",
                "className": "btn btn-success"
            },{
                "extend": "pdfHtml5",
                "text": "<i class='fas fa-pdf'></i> PDF",
                "titleAttr": "Exportar a PDF",
                "className": "btn btn-danger",
                "exportOptions": {
                    "columns": [ 1, 2, 3, 4, 5, 6, 7, 8 ]
                }
            },{
                "extend": "csvHtml5",
                "text": "<i class='far fa-csv'></i> CSV",
                "titleAttr": "Exportar a CSV",
                "className": "btn btn-info"
            }
        ],
        "responsive": true,
        "bDestroy": true,
        "iDisplayLength": 10,
        "order": [[0,"asc"]]
    });

    var formUsuario = document.querySelector('#formUsuario');
    formUsuario.onsubmit = function(e) {
        e.preventDefault();

        var idusuario = document.querySelector('#idusuario').value;
        var nombre = document.querySelector('#nombre').value;
        var usuario = document.querySelector('#usuario').value;
        var clave = document.querySelector('#clave').value;
        var rol = document.querySelector('#listRol').value;
        var estado = document.querySelector('#listEstado').value;

        if(nombre == '' || usuario == '') {
            swal('Atencion','Todos los campos son necesarios','error');
            return false;
        }

        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var url = './models/usuarios/ajax-usuarios.php';
        var form = new FormData(formUsuario);
        request.open('POST',url,true);
        request.send(form);
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                var data = JSON.parse(request.responseText);
                if(data.status) {
                    $('#modalUsuario').modal('hide');
                    formUsuario.reset();
                    swal('Usuario',data.msg,'success');
                    tableusuarios.ajax.reload();
                } else {
                    swal('Atencion',data.msg,'error');
                }
            }
        }
    }
})

function openModal() {
    document.querySelector('#idusuario').value = "";
    document.querySelector('#tituloModal').innerHTML = 'Nuevo Usuario';
    document.querySelector('#action').innerHTML = 'Guardar';
    document.querySelector('#formUsuario').reset();
    $('#modalUsuario').modal('show');
}

function editarUsuario(id) {
    var idusuario = id;

    document.querySelector('#tituloModal').innerHTML = 'Actualizar Usuario';
    document.querySelector('#action').innerHTML = 'Actualizar';

    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var url = './models/usuarios/edit-usuarios.php?idusuario='+idusuario;
        request.open('GET',url,true);
        request.send();
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                var data = JSON.parse(request.responseText);
                if(data.status) {
                    document.querySelector('#idusuario').value = data.data.usuario_id;
                    document.querySelector('#nombre').value = data.data.nombre;
                    document.querySelector('#usuario').value = data.data.usuario;
                    document.querySelector('#listRol').value = data.data.rol;
                    document.querySelector('#listEstado').value = data.data.estado;

                    $('#modalUsuario').modal('show');
                } else {
                    swal('Atencion',data.msg,'error');
                }
            }
        }
}

function eliminarUsuario(id) {
    var idusuario = id;

    swal({
        title: "Eliminar Usuario",
        text: "Realmente desea eliminar el usuario?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminar",
        cancelButtonText: "No, cancelar",
        closeOnConfirm: false,
        closeOnCancel: true
    },function(confirm){
        if(confirm) {
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var url = './models/usuarios/delet-usuarios.php';
            request.open('POST',url,true);
            var strData = "idusuario="+idusuario;
            request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            request.send(strData);
            request.onreadystatechange = function() {
                if(request.readyState == 4 && request.status == 200) {
                    var data = JSON.parse(request.responseText);
                    if(data.status) {
                        swal('Eliminar',data.msg,'success');
                        tableusuarios.ajax.reload();
                    } else {
                        swal('Atencion',data.msg,'error');
                    }
                }
            }
        }
    })
}