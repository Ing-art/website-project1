<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>Barcelona Street Parade Videos</title>
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <link rel="stylesheet" type="text/css" href="css/stylevideos.css">
        <script src="js/javascript3.js"></script>
    </head>
    <body>
    <?php require 'templates/template.php' ?>
        <?php myheader('videos') ?>
        <?php mylogo() ?>
        <main>
            <section id="playlist">
                <div class="herovideo">
                    <video id="myvideo" controls title = "Workout" autoplay muted>
                        <source src="videos/terrassadigital.mp4" type="video/mp4" >
                        El teu navegador no suporta aquest video.
                    </video>
                </div>
            </section>
            
        </main>
        <?php myfooter() ?>
    </body>
</html>