<footer id="Contact">
    <section class="container-footer">
        <div class="footer-column">
            <h1>Wanna contact me?</h1>
            <p>Please feel free to reach out for any inquiries or to share your thoughts. I welcome your questions and appreciate your feedback. Your input is valuable, and I'm here to assist you in any way I can. Thank you for considering getting in touch.</p>
        </div>
        <div class="footer-column">
            <form action="php/controllers/sent-email.php" method="POST">
                <div class="mb-3">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputNombre" name="inputNombre" type="text" placeholder="" required />
                        <label for="inputNombre">Name:</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" name="inputEmail" type="email" placeholder="" required />
                        <label for="inputEmail">Email:</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" id="inputMensaje" name="inputMensaje" placeholder="" rows="6" required></textarea>
                        <label for="inputMensaje">Message:</label>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </section>
    <section class="copy-right">
        <p><b>© <?php echo date('Y'); ?> DavidAr55</b></p>
    </section>
</footer>