document.addEventListener("DOMContentLoaded", function(){
    
    var formulario = document.getElementById("formCorreo");

    formulario.addEventListener("submit", function(e){
        e.preventDefault();

        // Validación del TextArea con JavaScript antes de procesar los datos con PHP.
        // ===========================================================================
        var campoMensaje = document.getElementById("mensaje");
        if(new RegExp("^\\s+$").test(campoMensaje.value)){ 
            var contadorSegundos = 0;
            // Temporizador para validación del TextArea:
            var tempo = setInterval(() => {
                contadorSegundos++;
                $('#validadorTextArea').removeClass('d-none');
                if (contadorSegundos == 5) {
                    clearInterval(tempo);
                    $('#validadorTextArea').addClass('d-none');
                    campoMensaje.value = ""; 
                    campoMensaje.focus();
                    contadorSegundos = 0;
                }
            }, 1000);

        }else{
            // Tomando los datos del formulario:
            var datos = new FormData(formulario);

            $('#botonEnviar').addClass('d-none'); 
            $('#divEnviando').removeClass('d-none');
            
            fetch("procesarCorreo.php",{
                method: 'POST',
                body: datos
            })
                .then(respuesta => respuesta.json())
                .then(r => {
                    // ================= Si el correo se envió correctamente =================
                    if (r == "ok") {
                        var segundos = 0;
                        // Temporizador para notificaciones al usuario:
                        var temporizador = setInterval(() => {
                            segundos++;
                            $('#divEnviando').addClass('d-none');
                            $('#empresa').val('');
                            $('#mensaje').val('');
                            $('#imgEnviado').removeClass('d-none'); 
                            
                           if (segundos == 3) {
                               clearInterval(temporizador); 
                               $('#imgEnviado').addClass('d-none');
                               $('#botonEnviar').removeClass('d-none');
                               $('#empresa').focus();
                                segundos = 0;
                            }
                        }, 1000);

                    }else{
                        window.alert("¡ERROR!\nNo pudimos enviar su mensaje.\nInténtelo más tarde.");
                        $('#divEnviando').addClass('d-none');
                        $('#botonEnviar').removeClass('d-none');
                    }
                });
        }    

    });


});
