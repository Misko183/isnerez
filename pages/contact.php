<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt • IsNerez | Nerezové a hliníkové zábradlia, oplotenia, brány, kovovýroba</title>
    <meta name="description"
        content="nerezové zábradlia, zábradlia, hliník, nerez, kov, sklo, drevo, kombinácia s drevom, kombinácia so sklom, sklenené striešky, polykarbonatové striešky, točité schodiská" />
    <meta name="author" content="Michal Sládeček" />
    <meta name="theme-color" content="#E62A32" />
    <meta name="msapplication-TileColor" content="#E62A32" />
    <meta property="og:site_name" content="isnerez.sk" />
    <meta property="og:title"         
        content="Kontakt • IsNerez | nerezové zábradlia, zábradlia, hliník, nerez, kov, sklo, drevo, kombinácia s drevom, kombinácia so sklom, sklenené striešky, polykarbonatové striešky, točité schodiská" />
    <meta property="og:description"
        content="nerezové zábradlia, zábradlia, hliník, nerez, kov, sklo, drevo, kombinácia s drevom, kombinácia so sklom, sklenené striešky, polykarbonatové striešky, točité schodiská">
    <meta property="og:url" content="https://www.isnerez.sk/pages/contact.php">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../templ/css/footer.css">
    <link rel="stylesheet" href="../templ/css/nav.css">
    <link rel="stylesheet" href="../templ/css/top.css">
    <link rel="stylesheet" href="./css/contact.css">
</head>

<body>

    <?php include "../templ/top.php" ?>

    <!-- Navigation section -->
    <?php include "../templ/nav.php" ?>

    <!-- Main section -->
    <main>
        <div class="main__container">
            <div class="con">
                <h1>Kontaktujte Nás</h1>
                <hr class="h1">
                <div class="main__section1">
                    <div class="main_first">
                        <h2>Kontakt:</h2>
                        <strong><span><i class="far fa-envelope"></i></span> Email:</strong><a
                            href="mailto:sladecek@isnerez.sk"> sladecek@isnerez.sk</a><br>
                        <strong><span><i class="fa fa-phone-alt"></i></span> Tel:</strong><a href="tel:+421948208422">
                            +421 948 208 422</a><br>
                        <h2>Adresa:</h2>
                        <p>Nesluša 713</p>
                        <p>023 41 Nesluša</p>
                    </div>
                    <div class="main__second">
                    <h2>Daňové údaje:</h2>
                        <p><strong>DIČ:</strong><span id="copyText1"> 1021148579</span>
                            <button id="btnCopy1" class="btnCopy"><i class="far fa-copy"></i></button>
                        </p>
                        <p><strong>IČO:</strong> <span id="copyText2">33918210</span>
                            <button id="btnCopy2" class="btnCopy"><i class="far fa-copy"></i></button>
                        </p>
                        <p><strong>IČ DPH:</strong> <span id="copyText3">SK1021148579</span>
                            <button id="btnCopy3" class="btnCopy"><i class="far fa-copy"></i></button>
                        </p>
                    </div>
                </div>
                <div class="buttons">
                    <div class="facebook">
                        <a href="https://www.facebook.com/is.nerez" target="_blank">
                            <button class="fb"><span><i class="fab fa-facebook"></i></span> Facebook</button>
                        </a>
                    </div>
                    <div class="instagram">
                        <a href="https://www.instagram.com/isnerez/" target="_blank">
                            <button class="ig"><span><i class="fab fa-instagram"></i></span> Instagram</button>
                        </a>
                    </div>
                </div>
                <hr class="hr">
                <div class="main__section2">
                    <div class="main__map">
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.3965265419765!2d18.744051915929084!3d49.30677387698398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47145d2b71da2875%3A0x753acf34b8e29f06!2sIS%20nerez!5e0!3m2!1ssk!2ssk!4v1641157763305!5m2!1ssk!2ssk"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <hr class="hr">
                <div class="main__section3">
                    <div class="main__form">
                        <div class="form__section1">
                            <h2>Máte na nás nejaké otázky? Neváhajte nám napísať.</h2>
                            <p id="phonelayout">
                                Máte nejaké otázky? Zodpovieme ich. Prosíme o starostlivé vyplnenie kontaktných údajov.
                            </p>
                        </div>
                        <div class="main__section2">
                            <div class="conatct">
                                <form action="mail.php" method="post">
                                    <p>
                                        <label>Meno <span>*</span></label>
                                        <input type="text" name="fname" placeholder="Meno" required>
                                    </p>
                                    <p>
                                        <label>Priezvisko <span>*</span></label>
                                        <input type="text" name="lname" placeholder="Priezvisko" required>
                                    </p>
                                    <p>
                                        <label>Emailová adresa <span>*</span></label>
                                        <input type="email" name="email" placeholder="Vaša emailová adresa" required>
                                    </p>
                                    <p>
                                        <label>Telefónné číslo <span>*</span></label>
                                        <input type="tel" name="phone" placeholder="+421 ..." required>
                                    </p>
                                    <p class="message">
                                        <label>Predmet <span>*</span></label>
                                        <textarea name="subject" rows="1" placeholder="..." required></textarea>
                                    </p>
                                    <p class="message">
                                        <label>Správa <span>*</span></label>
                                        <textarea name="message" rows="5" placeholder="..." required></textarea>
                                    </p>
                                    <p class="submit-btn">
                                        <button type="submit" name="submit" value="Send">Odoslať</button>
                                    </p>
                                </form>
                            </div>
                            <div class="form_gdpr">
                                <p>Vložením správy súhlasíte s podmienkami <a href="https://www.iubenda.com/privacy-policy/24287038" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer section -->
        <?php include "../templ/footer.php" ?>



        <!-- JavaScripts -->
        <script src="../js/copy.js"></script>

        <?php include "../templ/fb.php" ?>

</body>

</html>