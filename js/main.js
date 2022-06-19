document.addEventListener("DOMContentLoaded", function(){
    
    var formulario = document.getElementById("formCorreo");

    formulario.addEventListener("submit", function(e){
        e.preventDefault();

        var datos = new FormData(formulario);
        $('#botonEnviar').addClass('d-none');
        $('#divEnviando').removeClass('d-none');
        
        fetch("procesarCorreo.php",{
            method: 'POST',
            body: datos
        })
            .then(respuesta => respuesta.json())
            .then(r => {
                if (r == "ok") {
                    var segundos = 0;
                    var temporizador = setInterval(() => {
                        segundos++;
                        $('#divEnviando').addClass('d-none');
                        $('#imgEnviado').removeClass('d-none');

                        if (segundos == 3) {
                            clearInterval(temporizador);
                            $('#imgEnviado').addClass('d-none');
                            $('#botonEnviar').removeClass('d-none');

                            $('#empresa').val('');
                            $('#mensaje').val('');
                            $('#empresa').focus();
                            segundos = 0;
                        }
                    }, 1000);

                }
            });

    });


});