$(document).ready(function () {
    // Agrega la animación de desplazamiento suave a los enlaces de la barra de navegación
    $("a").on('click', function (event) {
        // Asegura que this.hash tenga un valor antes de anular el comportamiento predeterminado
        if (this.hash !== "") {
            // Evita el comportamiento de clic predeterminado
            event.preventDefault();

            // Almacena el hash
            var hash = this.hash;

            // Usa el método animate para animar el desplazamiento y la duración de 800 milisegundos
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Añade el hash (#) a la URL cuando haya terminado de desplazarse (comportamiento predeterminado del clic)
                window.location.hash = hash;
            });
        }
    });
});
