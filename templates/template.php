<?php function myheader(string $mypage = ''){ ?>

<header class="top">          
<nav class="navbar navbar-expand-md bg-dark navbar-dark"> 
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <br>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?= $mypage == "index" ? 'active' : '' ?>">Inici</a>
                </li>
                <li class="nav-item">
                    <a href="gallery.php" class="nav-link <?= $mypage == "gallery" ? 'active' : '' ?>">Galeria</a>
                </li>
                <li class="nav-item">
                    <a href="videos.php" class="nav-link <?= $mypage == "videos" ? 'active' : '' ?>">Videos</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link <?= $mypage == "contact" ? 'active' : '' ?>">Contacte</a>
                </li>
                <li class="nav-item">
                    <a href="https://facebook.com/barcelonastreetparade" ><img src="images/facebook-icon.png" alt="facebook" class="socialmedia"></a> 
                </li>
                <li class="nav-item">
                    <a href="https://instagram.com/barcelonastreetparade" ><img src="images/instagram-icon.png" alt="instagram" class="socialmedia"></a>
                </li>
            </ul>
        </div> 
    </div>         
</nav>
</header>

<?php } ?>

<?php function mylogo() { ?>
    <div id="title">
            <a href="index.php">
            <img id="logo" src="images/bcnlogo_2.jpg" alt="logo" title="logo"></a> 
            <br>
        </div>  
<?php } ?>

<?php function myfooter() { ?>
        <div id="footinfo" class="d-flex justify-content-start">
            <p>I-Art &copy; 2024</p>
        </div>   
<?php } ?>