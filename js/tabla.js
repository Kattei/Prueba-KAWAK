// IIFE - Immediately Invoked Function Expression
(function (yourcode) {

    yourcode(window.jQuery, window, document);

}(function ($, window, document) {
    $(document).ready(function () {
        $('#documentos').DataTable({
        });

        $(".doc_datos").click(function () {
            $("#documento").val($(this).data("nombre"));
            $("#contenido").val($(this).data("contenido"));
            $("#tipo").val($(this).data("tipid"));
            $("#proceso").val($(this).data("proid"));
            $("#docid").val($(this).data("docid"));
            $("#modificar").show();
            $("#eliminar").show();
            $("#agregar").hide();
        });


    });

    $("body").on("click", "#nuevo", function () {
        camposBlancos();
        $("#agregar").show();
        $("#modificar").hide();
        $("#eliminar").hide();
    });


    function camposBlancos() {
        $("#documento").val("");
        $("#contenido").val("");
        $("#proceso").val("");
        $("#tipo").val("");
    }


    function creaAjax(funcion) {
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: "doc_id=" + $("#docid").val() + "&documento=" + $("#documento").val() + "&contenido=" + $("#contenido").val() +
                    "&doc_id_tipo=" + $("#tipo").val() + "&doc_id_proceso=" + $("#proceso").val() + "&funcion=" + funcion + "&pagina=tabla",
            success: function (response)
            {
                location.href = 'index.php?pagina=tabla';

            },
            error: function (jqXHR, exception) {
                 location.href = 'index.php'
            }
        });
    }

    $("body").on("click", "#deslogear", function () {
        location.href = 'index.php';
    });


    $("body").on("click", "#modificar", function () {
        creaAjax("modificar");
    });

    $("body").on("click", "#agregar", function () {
        creaAjax("agregar");
    });

    $("body").on("click", "#eliminar", function () {
        creaAjax("eliminar");
    });

}
));