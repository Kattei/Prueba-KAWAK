// IIFE - Immediately Invoked Function Expression
(function (yourcode) {

    yourcode(window.jQuery, window, document);

}(function ($, window, document) {
    $("body").on("click", "#logear", function () {
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: $("#login").serialize(),
            success: function (response)
            {
                var jsonData = JSON.parse(response);
                if (jsonData > 0)
                {
                    location.href = 'index.php?pagina=tabla';
                } else
                {
                    alert('Usuario incorrecto');
                }
            }
        });
        $(function () {


        });


    });

}
));