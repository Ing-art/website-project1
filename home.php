<!DOCTYPE html>
<html lang="ca">
    <head> 
        <meta charset = "UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>Barcelona Street Parade Inici</title>
        <meta name='description' content='Jazz Music Band based in Barcelona'>
        <meta name="keywords" content="jazz, Barcelona, swing">
        <meta name="author" content="Ingrid">
        <link rel="stylesheet" type="text/css" href="css/bs.css">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <script src="js/javascript1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php require 'templates/template.php' ?>
        <?php myheader('home') ?>
        <?php mylogo() ?>

        <main class="flex-container">
            <section id="intro">
                <p id="introEnglish" title="English text.">
                <b>BARCELONA STREET PARADE</b> neix a Barcelona a l'any 2008. Formada per músics professionals provinents de reconegudes formacions de Jazz Clàssic, la banda es crea amb la voluntat d'oferir la mateixa música que omple els carrers de 
                la ciutat de New Orleans, adoptant el mateix repertori i aspecte d'una Brass Band tradicional.
                Formada per 10 músics i un animador, amb la possibilitat de ser ampliada amb una parella de ballarines, el seu terreny natural és el carrer i les desfilades, encara que també oferim concerts a l'escenari.
                </p>
            </section>
            <div id="slides" class="flex-container">
                <figure class="imgcontainer">
                    <img id="image1" class = "slide flex1" src="images/slideshow/bolo1.jpg" alt="image">
                </figure>
                <figure class="imgcontainer">
                    <img id="image2" class = "slide flex1" src="images/slideshow/bolo2.jpg" alt="image">
                </figure>
                <figure class="imgcontainer">
                    <img id="image3" class = "slide flex1" src="images/slideshow/bolo3.jpg" alt="image">
                </figure>
            </div>
        </main>     
        <?php myfooter() ?>   
    </body>
</html>
