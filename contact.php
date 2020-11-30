<?php include 'includes/header.php' ?>

<!--Start Contact Section-->
<div id="contact" class="contact">

    <div class="content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
    <br><br><br>
        <h2>Contáctanos</h2>
        <p>Estamos interesados en crear una relación de negocios y de oportunidades de empleo.</p>
    </div>

    <div class="container">

        <div class="contactInfo">
            <div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"> </i></div>
                <div class="text">
                    <h3>Dirección</h3>
                    <p>Blvd. Colosio #1, y Carrt. Internacional,<br>Parque Industrial Apolo,<br> Nogales, Sonora,
                        <br> 84094</p>
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="250">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"> </i></div>
                <div class="text">
                    <h3>Teléfono</h3>
                    <p>(631) 319 0743, 314 4343</p>
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>anahie@afpmexico.com</p>
                </div>
            </div>
        </div>

        <div class="contactForm" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
            <form action="php/form.php" method="POST" name="form" id="form">
                <h2>Envíanos un mensaje</h2>
                <div class="inputBox">
                    <input type="text" pattern="[a-zA-Z]+[ ][a-zA-Z]+" name="name" id="name" maxlength="25"
                        required="required">
                    <span>Nombre</span>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" id="email" required>
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea name="message" id="message" cols="30" rows="10" required="required"></textarea>
                    <span>Escribe tu mensaje...</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" id="submit" value="Enviar">
                </div>
                <span id="successMessage"> </span>
            </form>
        </div>
    </div>
</div>

<!--Map Section-->
<div id="mapa" class="googlemap">
    <div class="overlay" onClick="style.pointerEvents='none' "></div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!4v1601230787520!6m8!1m7!1s_KJUXFWfQQTBWhS_qJtVQA!2m2!1d31.28066845973927!2d-110.9412708973745!3f201.43891280810436!4f-1.8468008792086152!5f0.7820865974627469"
        width="100%" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
</div>
<!--End Map Section-->


<?php include 'includes/footer.php' ?>