document.addEventListener("DOMContentLoaded", function() {
    const nombreCompleto = "David Loera Olmos";
    const contenedorNombre = document.getElementById("nombre");

    function escribirNombre() {
        let index = 0;
        const intervalId = setInterval(() => {
            contenedorNombre.textContent += nombreCompleto[index];
            index++;

            if (index === nombreCompleto.length) {
                clearInterval(intervalId);
            }
        }, 150);
    }

    escribirNombre();
});