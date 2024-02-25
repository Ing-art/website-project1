<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Fitness Center</title>
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <link rel="stylesheet" type="text/css" href="css/stylecontact.css">
    </head>
    <body>
    <?php require 'templates/template.php' ?>
        <?php myheader('contact') ?>
        <?php mylogo() ?>
        <section class="formsection message">
            <form class="contactform" method="POST" autocompelte="off" id="contact">
                <h2>Contactar</h2>
                <p>Enviar missatge</p>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="user" id="email" value required>
                    <br>
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" required placeholder="3-20 characters" title="name must have 3-20 letters" pattern="^[A-Za-z]{3,20}$">
                    <br>
                    <label for="subject">Assumpte</label>
                    <select name="subject" id="subject" required>
                        <option selected disabled value="">Selecciona</option>
                        <option value="events">Events</option>
                        <option value="pressupost">Pressupost</option>
                        <option value="altres">Altres</option>
                    </select>
                    <div class="contacttext">
                        <textarea id="message" type="text" name="message" placeholder="Escriu aquí el teu missatge...." required cols="35" rows="5"></textarea>
                    </div>
                </div>
                <div id="formbtns">
                    <input type="submit" class="formbtn btn" name="submit" value="Enviar">
                    <input type="reset" class="formbtn btn" name="reset" value="Esborrar">
                </div>
            </form>
        </section>
        <?php myfooter() ?>
    </body>
</html>