<!-- <swal2> -->
<?php if ($session->issetSession('executeSuccess')) : ?>
    <script>
        let mensaje = '<?php echo $session->getSession('executeSuccess'); ?>'
        Swal.fire({
            title: "¡Listo!",
            text: mensaje,
            icon: "success",
            customClass: {
                title: 'my-swal-title-class',
                content: 'my-swal-content-class',
            },
        });
    </script>
<?php $session->removeSession('executeSuccess');
endif; ?>

<?php if ($session->issetSession('executeError')) : ?>
    <script>
        let mensaje = '<?php echo $session->getSession('executeError'); ?>'
        Swal.fire({
            title: "Error!",
            text: mensaje,
            icon: "error",
            customClass: {
                title: 'my-swal-title-class',
                content: 'my-swal-content-class',
            },
        });
    </script>
<?php $session->removeSession('executeError');
endif; ?>

<?php if ($session->issetSession('executeWarning')) : ?>
    <script>
        let mensaje = '<?php echo $session->getSession('executeWarning'); ?>'
        Swal.fire({
            title: "Advertencia!",
            text: mensaje,
            icon: "warning",
            customClass: {
                title: 'my-swal-title-class',
                content: 'my-swal-content-class',
            },
        });
    </script>
<?php $session->removeSession('executeWarning');
endif; ?>