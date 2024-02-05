<?php
require_once "../../config.php";
require_once "../controllers/my-age.php";

require_once "../models/Connection.php";
require_once "../controllers/Session.php";

$conn = new Connection();
$session = new Session();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Componentes generales del <HEAD/> -->
    <?php require_once "components/head.php"; ?>

    <title>Home</title>
</head>
<body>
    <!-- Componentes generales del <NAV/> -->
    <?php require_once "components/nav.php"; ?>

    <!-- Alertaras -->
    <?php require_once "components/alerts.php"; ?>

    <section class="container-me">
        <div class="container-me-info">
            <div class="me-networks">
                <img src="public/images/yo.jpg" alt="David Loera">
                <div class="container-my-network-buttons">
                    <ul>
                        <li><a href="https://www.linkedin.com/in/david-arturo-loera-olmos-0b7b28181/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://github.com/DavidAr55" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                        <li><a href="public/cv/Cv-David Arturo Loera Olmos.pdf" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></li>
                        <li><a href="mailto:davidarturoloera@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="me-info">
                <code>
                    <?php echo "<b id='gray'>1&nbsp;&nbsp;</b><b id='blue-1'>&lt;?php</b><br>"; ?>
                        <b id='gray'>2&nbsp;&nbsp;</b><b id='blue-2'>$information_about_me</b> <b id="white">=</b> <b id="yellow-1">array</b><b id="yellow-2">(</b><br>
                        <b id='white'>3&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;<b id="brown">"name"</b> <b id="white">=></b> <b id="brown">"<span id="nombre"></span><span class='cursor'></span>"</b><b id="white">,</b><br>
                        <b id='gray'>4&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;<b id="brown">"age"</b> <b id="white">=></b> <b id="green"><?php echo $edadCalculada; ?></b><b id="white">,</b><br>
                        <b id='gray'>5&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;<b id="brown">"occupation"</b> <b id="white">=></b> <b id="brown">"Software Development Engineer"</b><b id="white">,</b><br>
                        <b id='gray'>6&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;<b id="brown">"languages"</b> <b id="white">=></b> <b id="purple">[</b><b id="brown">"PHP"</b><b id="white">,</b> <b id="brown">"C++"</b><b id="white">,</b> <b id="brown">"Java"</b><b id="white">,</b> <b id="brown">"Python"</b><b id="white">,</b> <b id="brown">"Js"</b><b id="purple">]</b><br>
                    <b id='gray'>7&nbsp;&nbsp;</b><b id="yellow-2">)</b><b id="white">;</b><br>
                    <?php echo "<b id='gray'>8&nbsp;&nbsp;</b><b id='blue-1'>?&gt</b>"; ?>
                </code>
            </div>
        </div>
    </section>

    <section class="container-my-work" id="Work">
        <div class="my-portfolio-head">
            <h3>-Portfolio</h3>
            <h1>My Work</h1>
        </div>
        <div class="my-portfolio-body-left">
            <div class="media-container">
                <h2>Nine minutes pizza <a href="https://www.nineminutes.com.mx/home" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></h2>
                <video autoplay loop muted controls="false" disablepictureinpicture width="100%">
                    <source src="public/media/nine-minutes-piza.mp4" type="video/mp4">
                    Tu navegador no admite el elemento de video.
                </video>
            </div>
            <div class="description-container">
                <ul>
                    <li>
                        <p>Website and ordering system for "Nine Minutes Pizza" fast-food chain.</p>
                    </li>
                    <li>
                        <p>The challenge in this project was the franchise's desire to reduce dependence on delivery apps like "Rappi" or "Didi Food."</p>
                    </li>
                    <li>
                        <p>This solution empowers customers to place orders directly on the website, whether for pickup at the store or delivery to their homes.</p>
                    </li>
                    <li>
                        <p>Technologies used: HTML5, CSS3, PHP 8.1, JavaScript, Ajax, Google Maps API, PHPMailer, TCPdf, and Bootstrap 5.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="my-portfolio-body-right">
            <div class="description-container desc-hidde-2">
                <ul>
                    <li>
                        <p>Website for purchasing, information, and contacting "Canvolt," an electric scooter workshop.</p>
                    </li>
                    <li>
                        <p>The challenge in this project was the workshop's need to establish an online presence for promotion and direct interaction with customers.</p>
                    </li>
                    <li>
                        <p>This project enables customers to connect directly with the workshop, place orders, request repairs, all seamlessly integrated with their web system "sistema.canvolt."</p>
                    </li>
                    <li>
                        <p>Technologies used: HTML5, CSS3, PHP 8.1, JavaScript, PHPMailer, and Bootstrap 5.</p>
                    </li>
                </ul>
            </div>
            <div class="media-container">
                <h2>Canvolt <a href="https://www.canvolt.com.mx/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></h2>
                <video autoplay loop muted controls="false" disablepictureinpicture width="100%">
                    <source src="public/media/canvolt.mp4" type="video/mp4">
                    Tu navegador no admite el elemento de video.
                </video>
            </div>
            <div class="description-container desc-hidde-1">
                <ul>
                    <li>
                        <p>Website for purchasing, information, and contacting "Canvolt," an electric scooter workshop.</p>
                    </li>
                    <li>
                        <p>The challenge in this project was the workshop's need to establish an online presence for promotion and direct interaction with customers.</p>
                    </li>
                    <li>
                        <p>This project enables customers to connect directly with the workshop, place orders, request repairs, all seamlessly integrated with their web system "sistema.canvolt."</p>
                    </li>
                    <li>
                        <p>Technologies used: HTML5, CSS3, PHP 8.1, JavaScript, PHPMailer, and Bootstrap 5.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="my-portfolio-body-left">
            <div class="media-container">
                <h2>Sistema Canvolt <a href="https://www.sistema.canvolt.com.mx/inicio" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></h2>
                <video autoplay loop muted controls="false" disablepictureinpicture width="100%">
                    <source src="public/media/sistema.canvolt.mp4" type="video/mp4">
                    Tu navegador no admite el elemento de video.
                </video>
            </div>
            <div class="description-container">
                <ul>
                    <li>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt fugit vitae harum sit veritatis commodi voluptatum expedita neque cupiditate quis, ut, fuga earum vel fugiat accusantium, error nam voluptate magnam?</p>
                    </li>
                    <li>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt fugit vitae harum sit veritatis commodi voluptatum expedita neque cupiditate quis, ut, fuga earum vel fugiat accusantium, error nam voluptate magnam?</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="my-portfolio-body-right">
            <div class="description-container desc-hidde-2">
                <ul>
                    <li>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt fugit vitae harum sit veritatis commodi voluptatum expedita neque cupiditate quis, ut, fuga earum vel fugiat accusantium, error nam voluptate magnam?</p>
                    </li>
                    <li>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt fugit vitae harum sit veritatis commodi voluptatum expedita neque cupiditate quis, ut, fuga earum vel fugiat accusantium, error nam voluptate magnam?</p>
                    </li>
                </ul>
            </div>
            <div class="media-container">
                <h2>Invitaciones personalizadas <a href="https://azuritaa15.sg-host.com/index.php?folio_invitacion=378HVG" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></h2>
                <video autoplay loop muted controls="false" disablepictureinpicture width="100%">
                    <source src="public/media/invitaciones.mp4" type="video/mp4">
                    Tu navegador no admite el elemento de video.
                </video>
            </div>
            <div class="description-container desc-hidde-1">
                <ul>
                    <li>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt fugit vitae harum sit veritatis commodi voluptatum expedita neque cupiditate quis, ut, fuga earum vel fugiat accusantium, error nam voluptate magnam?</p>
                    </li>
                    <li>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt fugit vitae harum sit veritatis commodi voluptatum expedita neque cupiditate quis, ut, fuga earum vel fugiat accusantium, error nam voluptate magnam?</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="my-portfolio-body-left">
            <div class="media-container">
                <h2>Makaza <a href="http://azuritaa24.sg-host.com/inicio" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></h2>
                <video autoplay loop muted controls="false" disablepictureinpicture width="100%">
                    <source src="public/media/makaza.mp4" type="video/mp4">
                    Tu navegador no admite el elemento de video.
                </video>
            </div>
            <div class="description-container">
                <ul>
                    <li>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt fugit vitae harum sit veritatis commodi voluptatum expedita neque cupiditate quis, ut, fuga earum vel fugiat accusantium, error nam voluptate magnam?</p>
                    </li>
                    <li>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt fugit vitae harum sit veritatis commodi voluptatum expedita neque cupiditate quis, ut, fuga earum vel fugiat accusantium, error nam voluptate magnam?</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container-about" id="About">
        <div class="container-about-me">
            <div class="my-portfolio-head">
                <h3>-Portfolio</h3>
                <h1>About Me</h1>
            </div>
            <div class="about-me">
                <div class="column">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi numquam nihil culpa error quidem aperiam cupiditate accusantium voluptates. Quas, est! Quaerat esse nam et ad repellendus. Atque corrupti laboriosam in? Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio vitae iste, modi aspernatur sit eum aliquid dignissimos incidunt alias quos id omnis neque, atque itaque, blanditiis amet magni illum suscipit!
                </div>
                <div class="column">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi numquam nihil culpa error quidem aperiam cupiditate accusantium voluptates. Quas, est! Quaerat esse nam et ad repellendus. Atque corrupti laboriosam in? Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio vitae iste, modi aspernatur sit eum aliquid dignissimos incidunt alias quos id omnis neque, atque itaque, blanditiis amet magni illum suscipit!
                </div>
                <div class="column">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi numquam nihil culpa error quidem aperiam cupiditate accusantium voluptates. Quas, est! Quaerat esse nam et ad repellendus. Atque corrupti laboriosam in? Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio vitae iste, modi aspernatur sit eum aliquid dignissimos incidunt alias quos id omnis neque, atque itaque, blanditiis amet magni illum suscipit!
                </div>
            </div>
            <div class="technologies-list">
                <h1>Versatile Mastery of Software Development Technologies</h1>
                <div class="container-technologies-list">
                    <!-- Primera Fila -->
                    <div class="technology-item"><img src="public/images/technologies/PHP-logo.svg.png" alt="PHP"><br><b>PHP</b></div>
                    <div class="technology-item"><img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=984,h=984,fit=crop/jasont2m0a/logos-01-YyvP2WDVj0uLVq33.png" alt="HTML & CSS"><br><b>HTML/CSS</b></div>
                    <div class="technology-item"><img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=984,h=984,fit=crop/jasont2m0a/logos-03-A3QPrLG0XVHwOx7M.png" alt="JavaScript"><br><b>Javascript</b></div>
                    <div class="technology-item"><img src="public/images/technologies/Logo-composer-tutsplus.png" alt="Composer"><br><b>Composer</b></div>
                    <div class="technology-item"><img src="public/images/technologies/Laravel.png" alt="MySql"><br><b>Laravel</b></div>
                    <div class="technology-item"><img src="public/images/technologies/mysql-5-logo.png" alt="MySql"><br><b>MySQL</b></div>

                    <!-- Segunda Fila -->
                    <div class="technology-item"><img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=984,h=984,fit=crop/jasont2m0a/logos-06-m2WlrxJBOOSLXJZA.png" alt="SQL"><br><b>SQL</b></div>
                    <div class="technology-item"><img src="public/images/technologies/C_Logo.png" alt="C#/C++/C"><br><b>C#/C++/C</b></div>
                    <div class="technology-item"><img src="public/images/technologies/java-logo-1.png" alt="Java JDK"><br><b>Java</b></div>
                    <div class="technology-item"><img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=984,h=984,fit=crop/jasont2m0a/logos-02-meP1GDEK6kSJbLe0.png" alt="Python"><br><b>Python</b></div>
                    <div class="technology-item"><img src="public/images/technologies/vs-code.png" alt="Visual Studio Code"><br><b>VS Code</b></div>
                    
                    <!-- Tercera Fila -->
                    <div class="technology-item"><img src="public/images/technologies/Android-studio.png" alt="Android Studio"><br><b>Android Studio</b></div>
                    <div class="technology-item"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Git_icon.svg" alt="Git"><br><b>Git</b></div>
                    <div class="technology-item"><img src="public/images/technologies/GitHub.png" alt="GitHub"><br><b>GitHub</b></div>
                    <div class="technology-item"><img src="public/images/technologies/debian.png" alt="Linux Debian"><br><b>Linux/Debian</b></div>
                    <div class="technology-item"><img src="public/images/technologies/Photoshop.png" alt="Adobe Photoshop"><br><b>Photoshop</b></div>

                    <div class="technology-item"><img src="public/images/technologies/Illustrator.png" alt="Adobe Illustrator"><br><b>Illustrator</b></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Componentes generales del <FOOTER/> -->
    <?php require_once "components/footer.php"; ?>
    
    <!-- Componentes generales del <SCRIPT/> -->
    <?php require_once "components/script.php"; ?>
</body>
</html>