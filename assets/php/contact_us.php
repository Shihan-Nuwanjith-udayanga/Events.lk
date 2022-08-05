<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../img/logo_tab.jpeg">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/headerStyle.css">
    <link rel="stylesheet" href="../css/footerStyle.css">
    <link rel="stylesheet" href="../css/contact_us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
          integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>CONTACT US</title>
</head>
<body>
<!--Header Start-->
<header>
    <aside>
        <a href="">
            <img src="../img/logo.jpeg" alt=".jpeg">
        </a>
    </aside>
    <nav>
        <ul>
            <a href="../../index.php">
                <li><i class="fa-solid fa-house"></i>HOME</li>
            </a><a href="about_us.php">
                <li>ABOUT US</li>
            </a><a href="events.php">
                <li>EVENTS</li>
            </a><a href="contact_us.php">
                <li>CONTACT US</li>
            </a><a href="">
                <li>REGISTER</li>
            </a><a href="">
                <li><i class="fa-solid fa-lock"></i>LOG IN</li>
            </a>
        </ul>
    </nav>
</header>
<!--End header-->
<main>
    <h1>CONTACT US</h1>
    <!--    location map start-->
    <p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63480.83748982079!2d80.17697732375586!3d6.055975780885579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!5e0!3m2!1sen!2slk!4v1659179437220!5m2!1sen!2slk"
                width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </p>
    <!--    location map end-->
<!--    contact form start-->
    <section>
        <aside>
            <!-- drop message start -->
            <div>
                <form  action= "process_form.php" method="post">
                    <h3>Drop a Message</h3>
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name">
                    <small class="error"> </small>
                    <br>
                    <br>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Your email">
                    <small class="error"> </small>
                    <br>
                    <br>
                    <label for="message">Message</label>
                    <textarea type="text" name="message" id="message" placeholder="Your message"></textarea>
                    <small class="error"> </small>
                    <br>
                    <br>
                    <div class="center">
                        <input type="submit" value="Send Message" name="submit">
                        <p id="success"></p>
                    </div>
                </form>
            </div>
            <!-- drop message End -->
            <!-- contact details start -->
            <div>
                <h2>Contact Details</h2>
                <div>
                    <div>
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h3>+94 773 381 841</h3>
                </div>
                <br>
                <div>
                    <div>
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3>+94 915 682 251</h3>
                </div>
                <br>
                <div>
                    <div>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h3>shihannuwanjith@gmail.com</h3>
                </div>
                <br>
                <div>
                    <div>
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <h3>www.shihannuwanjith.com</h3>
                </div>
                <br>
                <div>
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3>No:449/12, Kalukanda, Thalgasyaya, Akmeemana</h3>
                </div>
            </div>
            <!-- contact details End -->
        </aside>
    </section>
    <!-- contact form End -->
</main>
<footer>
    <section>
        <div>
            <i class="fa-solid fa-headset"></i>
            <h4>For assistance call</h4>
            <h3>+94 727 300 400 / +94 727 600 700</h3>
        </div>
        <div>
            <i class="fa-solid fa-clock"></i>
            <h4>Working Hours</h4>
            <h3>9.00 AM - 5.00 PM</h3>
        </div>
        <div>
            <i class="fa-solid fa-paper-plane"></i>
            <h4>email us on</h4>
            <a href=""><h3>support@events.lk</h3></a>
        </div>
    </section>
    <section>
        <div>
            <ul>
                <a href="/index.php">
                    <li>HOME</li>
                </a><a href="about_us.php">
                    <li>ABOUT US</li>
                </a><a href="events.php">
                    <li>EVENTS</li>
                </a><a href="contact_us.php">
                    <li>CONTACT US</li>
                </a><a href="">
                    <li>REGISTER</li>
                </a><a href="">
                    <li>LOG IN</li>
                </a>
            </ul>
        </div>
        <div>
            <ul>
                <a href="">
                    <li>FAQ</li>
                </a><a href="">
                    <li>Privacy Policy</li>
                </a><a href="">
                    <li>Terms & conditions</li>
                </a><a href="">
                    <li>Sitemap</li>
                </a>
            </ul>
        </div>
        <div>
            <h4>Address</h4>
            <address>
                Events.lk <br>
                449/12, <br>
                Kalukanda,<br>
                Thalgasyaya,<br>
                Akmeemana,<br>
                Galle, Sri Lanka
            </address>
        </div>
        <div>
            <h4>Follow us on</h4>
            <ul>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                <a href=""><i class="fa-brands fa-square-twitter"></i></a>
                <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </ul>
        </div>
    </section>
    <section>
        <h5>Copyright 2022 © Events.lk All Rights Reserved.</h5>
    </section>
</footer>
<script src="../js/contact.js"></script>
</body>
</html>


