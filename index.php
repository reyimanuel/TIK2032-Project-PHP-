<?php

require 'function/functions.php';
$education = query("SELECT * FROM education");
$blog = query("SELECT * FROM blog");
$gallery = query("SELECT * FROM gallery");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Miracle Sumajow Portofolio</title>
</head>
<body>
    <header>
        <!-- navigation bar -->
                <a href="index.html" class="name"><span class="name2">rey</span>imanuel</a>
                <ul> 
                    <li><a href="#A">Home</a></li>
                    <li><a href="#A1">About</a></li>
                    <li><a href="#A2">Article</a></li>
                    <li><a href="#A3">Education</a></li>
                    <li><a href="#A4">Skills</a></li>
                    <li><a href="#A5">Gallery</a></li>
                    <li><a href="#A6">Contact</a></li>
                </ul>

                <div class="menu-toggle">
                    <input type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
        <!-- navigation bar -->
    </header>
    <!--Hero Section-->
    <div id="A" class="hero-image">
        <div class="hero-text">
          <h1>I am Miracle Sumajow</h1>
          <p>And I'm a <span class="hero-span">Informatics Student</span></p>
        </div>
      </div>
    <!--Hero Section-->

    <!--About me-->
      <section class="about" id="A1">
        <div class="content reveal">
            <img src="images/Rey.jpeg" alt="My Photo">
            <div class="content-text">
                <h1>About Me</h1>
                <h2>"Aut viam inveniam aut faciam"</h2>
                <h3>Hello World!</h3>
                <p> 
                    I am currently in my fourth semester studying informatics engineering at Sam Ratulangi University, and I am just beginning to explore the world of coding.
                    I have a strong passion for technology, particularly in programming.
                    Additionally, I am enthusiastic about sports, particularly calisthenics.<br><br>
                    <span class="content-information">
                        Name    : Miracle Immanuel Sumajow<br><br>
                        Email   : miraclesumajow32@gmail.com<br><br>
                        Address : Manado, Sulawesi Utara, Indonesia<br><br>
                    </span>
                </p>
            </div>
        </div>
      </section>
    <!--About me-->
 
    <br><br>

    <!--Article-->
    <section class="blog" id="A2">
        <div class="blog-heading">
            <h1 class="reveal">Article</h1>
        </div>  <br><br>
        
        <div class="blog-container">

        <?php foreach ( $blog as $blog_row ): ?>
            <article class="blog-box reveal">
                <div class="blog-img">
                <img src="images/<?= $blog_row["gambar"]; ?>" alt="<?= $blog_row["keterangan"]; ?>">
                </div>
                <h2><?= $blog_row["judul"]; ?></h2>
                <div class="blog-text">
                    <p><?= $blog_row["teks"]; ?></p>
                    <a href="<?= $blog_row["hypertext"]; ?>">Read More</a>
                </div>
            </article><br>
        <?php endforeach; ?>
        </div>
    </section>  
    <!--Article-->

    <br><br>
    
    <!-- Education -->
    <section class="education" id="A3">
        <div class="education-heading reveal">
            <h2>Education</h2>
        </div>

        <br><br>

    <table id="education" class="reveal">
        <tr>
            <th>Studi</th>
            <th>Tahun ajaran</th>
        </tr>

        <?php foreach ( $education as $edu_row ): ?>
        <tr>
            <td><?= $edu_row["school"]; ?></td>
            <td><?= $edu_row["school_year"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </section>
    <!-- Education -->


    <!--Skills-->
    <section class="skills" id="A4">
        <div class="skills-heading reveal">
            <h2>Skills</h2>
        </div>

        <div class="row">
            <div class="item reveal">
                <div class="item-text">
                    <span>HTML5</span>
                    <span class = "w-70">70%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar w-70"></div>
                </div>
            </div>

            <div class="item reveal">
                <div class="item-text">
                    <span>CSS3</span>
                    <span class = "w-50">50%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar w-50"></div>
                </div>
            </div>

            <div class="item reveal">
                <div class="item-text">
                    <span>JS</span>
                    <span class = "w-35">35%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar w-35"></div>
                </div>
            </div>

            <div class="item reveal">
                <div class="item-text">
                    <span>C++</span>
                    <span class = "w-65">65%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar w-65"></div>
                </div>
            </div>

            <div class="item reveal">
                <div class="item-text">
                    <span>MySQL</span>
                    <span class = "w-80">80%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar w-80"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Skills-->

    <br><br>

    <!--Gallery-->
    <section class="gallery" id="A5">
    <div class="gallery-heading reveal">
        <h2>Gallery</h2>
    </div>

    <br><br>

    <?php foreach ( $gallery as $gal_row ): ?>
    <div class="responsive reveal">
        <div class="gallery">
            <img src="images/<?= $gal_row["gambar"]; ?>" alt="<?= $gal_row["nama"]; ?>">
                <div class="desc">
                    <div class="text"><?= $gal_row["nama"]; ?></div>
                </div>
        </div>
      </div>
    <?php endforeach; ?>
      <div class="clearfix"></div>
    </section>
    <!--Gallery-->

    <br>

    <!--Contact-->
    <section class="contact" id="A6">
        <div class="contact-heading reveal">
            <h2>Contact Me!</h2>
        </div>

        <br><br>

        <p class="contact-text reveal">
            If you have any questions or would like to get in touch with me, 
            please feel free to contact me using the information below. <br><br>
            <span>arrivederci!</span>
        </p>
        <br>
        <div class="contact-info">
            <div class="card reveal">
                <div class="contact-icon">
                    <img src="images/Email.jpg" alt="Email" width="50" height="50">
                </div>
                <p>miraclesumajow32@gmail.com</p>
            </div>

            <div class="card reveal">
                <div class="contact-icon">
                    <img src="images/Instagram.jpg" alt="Instagram" width="50" height="50">
                </div>
                <p>@reyimanuel_</p>
            </div>

            <div class="card reveal">
                <div class="contact-icon">
                    <img src="images/Address.jpg" alt="Address" width="50" height="50">
                </div>
                <p>Manado, Sulawesi Utara, Indonesia</p>
            </div>
        </div>
    <!--Contact-->

        <br><br>

    <!--Footer-->
    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="mailto:miraclesumajow32@gmail.com"><img src="images/Email.jpg" alt="Facebook Logo" width="50" height="50"></a>
                <a href="https://www.facebook.com/imanuel.miracle.16"><img src="images/Facebook.jpg" alt="Facebook Logo" width="50" height="50"></a>
                <a href="https://github.com/reyimanuel"><img src="images/Github.jpg" alt="github" width="50" height="50"></a>
                <a href="https://www.instagram.com/reyimanuel_/"><img src="images/Instagram.jpg" alt="instagram Logo" width="50" height="50"></a>
                <a href="https://www.linkedin.com/in/miracle-sumajow-3ba587240/"><img src="images/Linkedin.jpg" alt="linkedin Logo" width="50" height="50"></a>
            </div>
            <br>
            <div class="footerNav">
                <ul> 
                    <li><a href="#A">Home</a></li>
                    <li><a href="#A1">About</a></li>
                    <li><a href="#A2">Article</a></li>
                    <li><a href="#A3">Education</a></li>
                    <li><a href="#A4">Skills</a></li>
                    <li><a href="#A5">Gallery</a></li>
                    <li><a href="#A6">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy; 2024 all right reserved | Made By Miracle Sumajow.</p>
        </div>
    </footer>
    <!--Footer-->

</body>
<script src="script/scripts.js"></script>  
</html>