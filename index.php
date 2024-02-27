<!DOCTYPE html>
<html lang="ca">
    <head> 
        <meta charset = "UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="GoptN-MySUJDU5mcItsVWF59Euox6jpB51SSvQqzWbk">
        <title>Inici | Barcelona Street Parade</title>
        <meta name='description' content='Banda de Música de Jazz de Nova Orleans'>
        <meta name="keywords" content="jazz, Barcelona, swing, New Orleans, música al carrer">
        <meta name="author" content="I-Art">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/bs.css">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <script src="js/javascript1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php require 'templates/template.php' ?>
        <?php myheader('index') ?>
        <?php mylogo() ?>

        <main class="flex-container">
            <section id="intro">
                <p id="introSpanish" title="BARCELONA STREET PARADE nace en Barcelona en el año 2008. Formada por músicos profesionales provenientes de reconocidas formaciones de Jazz clásico, la banda se crea con la voluntad de ofrecer la misma música típica de las calles de la ciudad de Nueva Orleans, adoptando el mismo repertorio y aspecto de una Brass Band tradicional. El grupo lo forman 10 músicos y un animador, con posibilidad de ampliarlo con una pareja de bailarinas, y su terreno natural es la calle y los desfiles, aunque también ofrecemos conciertos en escenario.">
                <b>BARCELONA STREET PARADE</b> neix a Barcelona a l'any 2008. Formada per músics professionals provinents de reconegudes formacions de jazz clàssic, la banda es crea amb la voluntat d'oferir la mateixa música típica dels carrers de 
                la ciutat de Nova Orleans, adoptant el mateix repertori i aspecte d'una Brass Band tradicional.
                El grup el formen 10 músics i un animador, amb possibilitat d'incorporar una parella de ballarines, i el seu terreny natural és el carrer i les desfilades, encara que també oferim concerts a l'escenari.
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
