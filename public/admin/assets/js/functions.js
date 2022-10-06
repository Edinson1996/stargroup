function modal(url, title, size = 1200) {
    let idDiv = "div" + title.replace(/\s+/g, "");
    const div = '<div id="' + idDiv + '"></div>';
    let box = bootbox.dialog({
        message: div,
        className: "bootbox",
        title: title,
        closeButton: true,
    });
    const query = ajaxView(url);
    query
        .done(function (response) {
            box.children(".modal-dialog").css("width", "auto");
            box.children(".modal-dialog").css("max-width", size + "px");
            box.children(".modal-dialog").css("margin-left", "auto");
            box.children(".modal-dialog").css("margin-right", "auto");
            $("#" + idDiv).html(response);
        })
        .fail(function (xhr, textStatus, errorThrown) {
            $("#" + idDiv).html("<span>Ocurrió un error</span>");
        })
        .always(function () {});
}
function ajax(url, data, method) {
    return $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        method: method,
        url: url,
        data: data,
        cache: false,
    });
}
function ajaxView(url) {
    return $.ajax({
        url: url,
        type: "GET",
    });
}
function msgLoading() {
    return `
                <div class="row">
                    <img src="/page-img/icons/loading-transparent.gif" alt="loading" width="20%" class="mx-auto my-5" >
                </div>
                `;
}
function deleteRegister(
    idForm,
    entity,
    msg = "¿Está Seguro de eliminar el registro?"
) {
    bootbox.confirm({
        message: msg,
        buttons: {
            cancel: {
                label: "Cancelar",
                className: "btn btn-warning  btn-sm",
            },
            confirm: {
                label: "Eliminar",
                className: "btn btn-danger btn-sm",
            },
        },
        callback: function (result) {
            if (result) {
                let form = "#" + idForm;
                let resp = submitForm(form);
                resp.done(function (response) {
                    bootbox.hideAll();
                    swal("", "El Registro ha sido eliminado", "success");
                    eval(entity.toLowerCase() + "Table").ajax.reload(
                        null,
                        false
                    );
                })
                    .fail(function (fail) {
                        toastr.error("Ocurrió en error", "Error:");
                    })
                    .always(function () {});
            }
        },
    });
}
//Enviar Formulario
function submitForm(form) {
    let data = new FormData($(form)[0]);
    let action = $(form).attr("action");
    let method = $(form).attr("method");
    let response = $.ajax({
        url: action,
        type: method,
        data: data,
        contentType: false,
        processData: false,
    });
    return response;
}

function store(entity) {
    let form = "#form" + entity + "Store";
    let resp = submitForm(form);
    resp.done(function (response) {
        console.log("ra");
        console.log(response);
        bootbox.hideAll();
        swal("", "Registro Completado", "success");
        eval(entity.toLowerCase() + "Table").ajax.reload(null, false);
    })
        .fail(function (fail) {
            console.log(fail);
            showErrors(fail.responseJSON.errors);
        })
        .always(function () {});
}
//Actualizar
function update(entity) {
    let form = "#form" + entity + "Update";
    let resp = submitForm(form);
    resp.done(function (response) {
        bootbox.hideAll();
        swal("", "El Registro se ha actualizado", "success");
        eval(entity.toLowerCase() + "Table").ajax.reload(null, false);
    })
        .fail(function (fail) {
            showErrors(fail.responseJSON.errors);
        })
        .always(function () {});
}

function tableOne(tableId, route, columns) {
    let table = "#" + tableId;
    return $(table).DataTable({
        serverSide: true,
        ajax: route,
        columns: columns,
        // columnDefs: [
        //     { targets: 3, render: function(d){
        //         return "S/ "+d;
        //         }},
        // ],
        language: {
            sProcessing: "Procesando...",
            sLengthMenu: "Mostrar _MENU_ registros",
            sZeroRecords: "No se encontraron resultados",
            sEmptyTable: "Ningún dato disponible en esta tabla",
            sInfo:
                "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            sInfoEmpty:
                "Mostrando registros del 0 al 0 de un total de 0 registros",
            sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
            sInfoPostFix: "",
            sSearch: "Buscar:",
            sUrl: "",
            sInfoThousands: ",",
            sLoadingRecords: "Cargando...",
            oPaginate: {
                sFirst: "Primero",
                sLast: "Último",
                sNext: "Siguiente",
                sPrevious: "Anterior",
            },
            oAria: {
                sSortAscending:
                    ": Activar para ordenar la columna de manera ascendente",
                sSortDescending:
                    ": Activar para ordenar la columna de manera descendente",
            },
        },
    });
}

function showErrors(response) {
    for (let index in response) {
        let total = response[index].length;
        for (let i = 0; i < total; i++) {
            if (response[index][i] != "") {
                toastr.error("" + response[index][i], "Error:");
            }
        }
    }
}
