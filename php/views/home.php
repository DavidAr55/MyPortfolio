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
                        <li><a href="public/cv/CV - David Arturo Loera Olmos.pdf" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></li>
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
                        <b id='gray'>6&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;<b id="brown">"languages"</b> <b id="white">=></b> <b id="purple">[<b id="brown">"Python"</b><b id="white">,</b> </b><b id="brown">"PHP"</b><b id="white">,</b> <b id="brown">"Java"</b><b id="white">,</b> <b id="brown">"C/C++/C#"</b><b id="white">,</b> <b id="brown">"Js"</b><b id="purple">]</b><br>
                    <b id='gray'>7&nbsp;&nbsp;</b><b id="yellow-2">)</b><b id="white">;</b><br>
                    <?php echo "<b id='gray'>8&nbsp;&nbsp;</b><b id='blue-1'>?&gt</b>"; ?>
                </code>
            </div>
        </div>
    </section>

    <section class="container-my-work" id="Work">
        <div class="my-portfolio-head">
            <h3>-Portfolio</h3>
            <h1>My Experience</h1>
        </div>

        <div class="container mt-5">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="python-tab" data-toggle="tab" href="#python">Python</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="php-tab" data-toggle="tab" href="#php">PHP</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" id="java-tab" data-toggle="tab" href="#java">Java</a>
                </li> -->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content mt-2">

                <div class="tab-pane fade show active" id="python">
                    <h3>Python Projects</h3>
                    
                    <!-- FlaskyLinux Command Hub -->
                    <div class="container-work">
                        <div class="container-screen-shot" onclick="showImage(this)">
                            <img src="public/images/work/python/flaskylinux command hub.png" alt="FlaskyLinux Command Hub">
                        </div>
                        <div class="my-work">
                            <h3><a href="https://davidloera-flask.info/" target="_blank">FlaskyLinux Command Hub <i class="fa-solid fa-arrow-up-right-from-square"></i></a> | <a href="https://github.com/DavidAr55/bash-users" target="_blank"><i class="fa-brands fa-github"></i></a></h3>
                            <ul>
                                <li>
                                    <p>This project was designed for demonstration purposes, showcasing: basic administration of a <b>'Linux/Debian 12'</b> server.</p>
                                </li>
                                <li>
                                    <p>User and group management, directory and file handling, and server management using <b>'Python'</b> and <b>'bash'</b> via the <b>'root'</b> user.</p>
                                </li>
                                <li>
                                    <p>Logging actions in a <b>'MySQL'</b> database and server resource monitoring.</p>
                                </li>
                                <li>
                                    <p>Root user access was intentionally left public to simplify the concept of <b>'CRUD in BASH'</b> .</p>
                                </li>
                            </ul>
                            <div class="container-tecnologies">
                                <div class="technology python">Python</div>
                                <div class="technology python">Flask</div>
                                <div class="technology python">MySQL</div>
                                <div class="technology python">Bash</div>
                                <div class="technology python">Virtualenv</div>
                                <div class="technology python">Ajax</div>
                                <div class="technology python">Bcrypt</div>
                                <div class="technology python">Subprocess</div>
                                <div class="technology python">JavaScript</div>
                                <div class="technology python">Bootstrap</div>
                                <div class="technology python">JQuery</div>
                                <div class="technology python">Chart.js</div>
                                <div class="technology python">HTML & CSS</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="php">

                    <h3>PHP Projects</h3>
                    <!-- Nine Minutes Pizza -->
                    <div class="container-work">
                        <div class="container-screen-shot" onclick="showImage(this)">
                            <img src="public/images/work/php/nine minutes pizza.png" alt="Nine Minutes Pizza">
                        </div>
                        <div class="my-work">
                            <h3>Nine Minutes Pizza <i class="fa-solid fa-arrow-up-right-from-square"></i></h3>
                            <ul>
                                <li>
                                    <p>Website and ordering system for <b>"Nine Minutes Pizza"</b> fast-food chain.</p>
                                </li>
                                <li>
                                    <p>The challenge in this project was the franchise's desire to reduce dependence on delivery apps like <b>"Rappi"</b> or <b>"Didi Food."</b></p>
                                </li>
                                <li>
                                    <p>This solution empowers customers to place orders directly on the website, whether for pickup at the store or delivery to their homes.</p>
                                </li>
                                <li>
                                    <p><b>The repository is private due to legal agreements.</b></p>
                                </li>
                            </ul>
                            <div class="container-tecnologies">
                                <div class="technology php">PHP</div>
                                <div class="technology php">Laravel</div>
                                <div class="technology php">MySQL</div>
                                <div class="technology php">Google Maps API</div>
                                <div class="technology php">Ajax</div>
                                <div class="technology php">PHP Mailer</div>
                                <div class="technology php">Bootstrap</div>
                                <div class="technology php">JavaScript</div>
                                <div class="technology php">Swal2</div>
                                <div class="technology php">HTML & CSS</div>
                            </div>
                        </div>
                    </div>

                    <!-- Makaza -->
                    <div class="container-work">
                        <div class="container-screen-shot" onclick="showImage(this)">
                            <img src="public/images/work/php/makaza.png" alt="Makaza">
                        </div>
                        <div class="my-work">
                            <h3>Makaza <i class="fa-solid fa-arrow-up-right-from-square"></i></h3>
                            <ul>
                                <li>
                                    <p>It is a website for the company <b>Makaza</b>, where its clients can land and learn about the company, view its products and contacts.</p>
                                </li>
                                <li>
                                    <p>It features an administration panel for managing products and company information.</p>
                                </li>
                                <li>
                                    <p><b>The repository is private due to legal agreements.</b></p>
                                </li>
                            </ul>
                            <div class="container-tecnologies">
                                <div class="technology php">PHP</div>
                                <div class="technology php">MySQL</div>
                                <div class="technology php">JavaScript</div>
                                <div class="technology php">JQuery</div>
                                <div class="technology php">Ajax</div>
                                <div class="technology php">Swal2</div>
                                <div class="technology php">Bootstrap</div>
                                <div class="technology php">HTML & CSS</div>
                            </div>
                        </div>
                    </div>

                    <!-- Canvolt -->
                    <div class="container-work">
                        <div class="container-screen-shot" onclick="showImage(this)">
                            <img src="public/images/work/php/canvolt.png" alt="Canvolt">
                        </div>
                        <div class="my-work">
                            <h3>Canvolt <i class="fa-solid fa-arrow-up-right-from-square"></i></h3>
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
                                    <p><b>The repository is private due to legal agreements.</b></p>
                                </li>
                            </ul>
                            <div class="container-tecnologies">
                                <div class="technology php">PHP</div>
                                <div class="technology php">Laravel</div>
                                <div class="technology php">MySQL</div>
                                <div class="technology php">JavaScript</div>
                                <div class="technology php">JQuery</div>
                                <div class="technology php">Swal2</div>
                                <div class="technology php">Bootstrap</div>
                                <div class="technology php">HTML & CSS</div>
                            </div>
                        </div>
                    </div>

                    <!-- Sistema de Canvolt -->
                    <div class="container-work">
                        <div class="container-screen-shot" onclick="showImage(this)">
                            <img src="public/images/work/php/sistema.canvolt.png" alt="Sistema de Canvolt">
                        </div>
                        <div class="my-work">
                            <h3>Sistema Canvolt <i class="fa-solid fa-arrow-up-right-from-square"></i></h3>
                            <ul>
                                <li>
                                    <p>The Canvolt system is a comprehensive web application designed for mechanics at the Canvolt electric scooter repair workshop. </p>
                                </li>
                                <li>
                                    <p>It facilitates order processing, sales inquiries, invoicing, and offers performance tracking through graphs and statistics for the entire year. </p>
                                </li>
                                <li>
                                    <p>This solution empowers customers to place orders directly on the website, whether for pickup at the store or delivery to their homes.</p>
                                </li>
                                <li>
                                    <p><b>The repository is private due to legal agreements.</b></p>
                                </li>
                            </ul>
                            <div class="container-tecnologies">
                                <div class="technology php">PHP</div>
                                <div class="technology php">Laravel</div>
                                <div class="technology php">TCPDF</div>
                                <div class="technology php">PHP Mailer</div>
                                <div class="technology php">Ajax</div>
                                <div class="technology php">Bootstrap</div>
                                <div class="technology php">JavaScript</div>
                                <div class="technology php">JQuery</div>
                                <div class="technology php">Swal2</div>
                                <div class="technology php">Chart.js</div>
                                <div class="technology php">HTML & CSS</div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="java">
                    <h3>Java Projects</h3>
                    
                    <!-- Agenda App -->
                    <div class="container-work">
                        <div class="container-screen-shot" onclick="showImage(this)">
                            <img src="public/images/work/java/agenda.png" alt="Student Personal Agenda Application">
                        </div>
                        <div class="my-work">
                            <h3>Student Personal Agenda App <i class="fa-solid fa-arrow-up-right-from-square"></i></h3>
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
                            </ul>
                            <div class="container-tecnologies">
                                <div class="technology java">Java</div>
                                <div class="technology java">Android Studio</div>
                                <div class="technology java">SQLite</div>
                                <div class="technology java">ZXing</div>
                            </div>
                        </div>
                    </div>

                    <!-- Texto a Binario RMI -->
                    <div class="container-work">
                        <div class="container-screen-shot" onclick="showImage(this)">
                            <img src="public/images/work/java/rmi.png" alt="Conversor de Texto a Binario RMI">
                        </div>
                        <div class="my-work">
                            <h3>RMI Text to Binary Converter <i class="fa-solid fa-arrow-up-right-from-square"></i></h3>
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
                            </ul>
                            <div class="container-tecnologies">
                                <div class="technology java">Java</div>
                                <div class="technology java">Swing</div>
                                <div class="technology java">Java RMI</div>
                                <div class="technology java">Thread</div>
                            </div>
                        </div>
                    </div>

                    <!-- Animacion Graficas 3D -->
                    <div class="container-work">
                        <div class="container-screen-shot" onclick="showImage(this)">
                            <img src="public/images/work/java/ghast.png" alt="Minecraft Ghast 3D Animation">
                        </div>
                        <div class="my-work">
                            <h3>Minecraft Ghast 3D Animation <i class="fa-solid fa-arrow-up-right-from-square"></i></h3>
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
                            </ul>
                            <div class="container-tecnologies">
                                <div class="technology java">Java</div>
                                <div class="technology java">Swing</div>
                                <div class="technology java">Graphics 2D</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal" id="imageModal">
                <span class="close" onclick="closeModal()">&times;</span>
                <img class="modal-content" id="modalImage">
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
                    Backend Developer in PHP, Python and Node.js with over <b>3 years of experience</b>. I have expertise in the following programming languages: <b>PHP</b>, <b>Python</b>, <b>SQL</b>, <b>MySQL</b>, <b>SQLite</b>, <b>C</b>, <b>C++</b>, <b>C#</b>, <b>Java</b> and <b>Java Script</b>. I am familiar with data structures such as search trees, graphs, linked lists, and object matrices.
                </div>
                <div class="column">
                    I have experience using <b>bash</b> to configure <b>Linux servers</b>, as well as managing and deploying them, configuring their <b>cells</b> and their <b>DNS</b>. My knowledge also includes familiarity with the following Linux distributions: <b>Debian</b>, <b>Kali</b>, <b>Ubuntu</b> and <b>Arch</b>. I employ technologies like <b>Git</b> and <b>GitHub</b> to manage the versions of my projects, ensuring a more organized and simple versioning process.
                </div>
                <div class="column">
                    I have experience using and managing <b>Docker</b> containers. I enjoy continuous learning and do not restrict myself to what I already know. Additionally, I have skills in design software such as <b>Photoshop</b> and <b>Illustrator</b>. In various projects, I have been responsible for generating assets and graphic identity to create systems that are not only functional but also aesthetically attractive.
                </div>
            </div>
            <div class="technologies-list">
                <h1>Versatile Mastery of Software Development Technologies</h1>
                <div class="container-technologies-list">
                    <!-- Primera Fila -->
                    <div class="technology-item"><img src="public/images/technologies/debian.png" alt="Linux Debian"><br><b>Linux/Debian</b></div>
                    <div class="technology-item"><img src="public/images/technologies/ubuntu.png" alt="Linux Ubuntu"><br><b>Linux/Ubuntu</b></div>
                    <div class="technology-item"><img src="public/images/technologies/kali.png" alt="Linux Kali"><br><b>Linux/Kali</b></div>
                    <div class="technology-item"><img src="public/images/technologies/arch.png" alt="Linux Arch"><br><b>Linux/Arch</b></div>
                    <div class="technology-item"><img src="public/images/technologies/fedora.png" alt="Linux Fedora"><br><b>Linux/Fedora</b></div>

                    <!-- Segunda Fila -->
                    <div class="technology-item"><img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=984,h=984,fit=crop/jasont2m0a/logos-02-meP1GDEK6kSJbLe0.png" alt="Python"><br><b>Python</b></div>
                    <div class="technology-item"><img src="public/images/technologies/PHP-logo.svg.png" alt="PHP"><br><b>PHP</b></div>
                    <div class="technology-item"><img src="public/images/technologies/c.png" alt="C"><br><b>C</b></div>
                    <div class="technology-item"><img src="public/images/technologies/c++.png" alt="C++"><br><b>C++</b></div>
                    <div class="technology-item"><img src="public/images/technologies/cs.png" alt="C#"><br><b>C#</b></div>
                    
                    <!-- Tercera Fila -->
                    <div class="technology-item"><img src="public/images/technologies/java-logo-1.png" alt="Java JDK"><br><b>Java</b></div>
                    <div class="technology-item"><img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=984,h=984,fit=crop/jasont2m0a/logos-03-A3QPrLG0XVHwOx7M.png" alt="JavaScript"><br><b>Javascript</b></div>
                    <div class="technology-item"><img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=984,h=984,fit=crop/jasont2m0a/logos-06-m2WlrxJBOOSLXJZA.png" alt="SQL"><br><b>SQL</b></div>
                    <div class="technology-item"><img src="public/images/technologies/mySQL-5-logo.png" alt="MySQL"><br><b>MySQL</b></div>
                    <div class="technology-item"><img src="public/images/technologies/sqlite.jpg" alt="SQLite"><br><b>SQLite</b></div>

                    <!-- Cuarta Fila -->
                    <div class="technology-item"><img src="public/images/technologies/django.png" alt="DJango for Python"><br><b>DJango</b></div>
                    <div class="technology-item"><img src="public/images/technologies/flask.png" alt="Flask for Python"><br><b>Flask</b></div>
                    <div class="technology-item"><img src="public/images/technologies/Laravel.png" alt="Laravel for PHP"><br><b>Laravel</b></div>
                    <div class="technology-item"><img src="public/images/technologies/node.png" alt="Node Js"><br><b>Node Js</b></div>
                    <div class="technology-item"><img src="public/images/technologies/express.png" alt="Express Js"><br><b>Express Js</b></div>

                    <!-- Quinta Fila -->
                    <div class="technology-item"><img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=984,h=984,fit=crop/jasont2m0a/logos-01-YyvP2WDVj0uLVq33.png" alt="HTML & CSS"><br><b>HTML/CSS</b></div>
                    <div class="technology-item"><img src="public/images/technologies/google-cloud.png" alt="Google Cloud"><br><b>Google Cloud</b></div>
                    <div class="technology-item"><img src="public/images/technologies/aws.jpg" alt="AWS"><br><b>AWS</b></div>
                    <div class="technology-item"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Git_icon.svg" alt="Git"><br><b>Git</b></div>
                    <div class="technology-item"><img src="public/images/technologies/GitHub.png" alt="GitHub"><br><b>GitHub</b></div>
                    
                    <!-- Sexta Fila -->
                    <div class="technology-item"><img src="public/images/technologies/vs-code.png" alt="Visual Studio Code"><br><b>VS Code</b></div>
                    <div class="technology-item"><img src="public/images/technologies/Android-studio.png" alt="Android Studio"><br><b>Android Studio</b></div>
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