function showImage(container) {
    var modal = document.getElementById('imageModal');
    var modalImage = document.getElementById('modalImage');

    // Obtener la fuente de la imagen desde el contenedor clicado
    var lowResImageSrc = container.querySelector('.container-screen-shot img').src;

    // Extraer el nombre del archivo y el directorio
    var filename = lowResImageSrc.split('/').pop(); // Obtener el nombre del archivo
    var directory = lowResImageSrc.substring(0, lowResImageSrc.lastIndexOf("/")); // Obtener el directorio

    // Formar la fuente de la imagen de alta resolución
    var highResImageSrc = directory + '/hd/' + filename;

    // Verificar si existe la imagen de alta resolución
    var img = new Image();
    img.onload = function () {
        // Establecer la fuente de la imagen en el modal a la versión de alta resolución
        modalImage.src = highResImageSrc;
        // Mostrar el modal
        modal.style.display = 'block';
    };
    img.onerror = function () {
        // Si la imagen de alta resolución no existe, usar la versión de baja resolución
        modalImage.src = lowResImageSrc;
        // Mostrar el modal
        modal.style.display = 'block';
    };
    img.src = highResImageSrc;

    // Cerrar el modal al hacer clic fuera de la imagen
    window.onclick = function (event) {
        if (event.target === modal) {
            closeModal();
        }
    };
}

function closeModal() {
    var modal = document.getElementById('imageModal');
    modal.style.display = 'none';
}
