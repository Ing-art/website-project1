<?php function myheader(string $mypage = ''){ ?>

<header class="top">          
<nav class="topnav">
    <a href="home.php" <?= $mypage == "home" ? "class='active'": "" ; ?>> Inici</a>
    <a href="gallery.php" <?= $mypage == "gallery" ? "class='active'": "" ; ?>>Galeria</a>
    <a href="videos.php" <?= $mypage == "videos" ? "class='active'": "" ; ?>>Videos</a>
    <a href="contact.php" <?= $mypage == "contact" ? "class='active'": "" ; ?>>Contacte</a>           
</nav>
</header>

<?php } ?>

<?php function mylogo() { ?>
    <div id="title">
            <a href="home.php">
            <img id="logo" src="images/bcnlogo.jpg" alt="logo" title="logo"></a> 
            <br>
        </div>  
<?php } ?>

<?php function myfooter() { ?>

    <footer>
            <div class="flex-container bottom">
                <div class="flex1 bottomsec">
                    <span class="bottomtitle">Company</span>
                    <div class="item-links">
                        <ul class="footer-links">
                            <li><a href="home.php#intro">About Us</a></li>
                            <li><a href="contact.php">Careers</a></li>
                            <li><a href="home.php#new">Press Room</a></li>                    
                        </ul>
                    </div>
                </div>
                <hr class="hidden-sm">
                <div class="flex1 bottomsec">
                    <span class="bottomtitle">Resources</span>
                    <div class="item-links">
                        <ul class="footer-links">
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="home.php">Our team</a></li>
                            <li><a href="login.php">Services</a></li>
                            <li><a href="">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="hidden-sm">
                <div class="flex1 bottomsec">
                    <span class="bottomtitle">Policies</span>
                    <div class="item-links">
                        <ul class="footer-links">
                           <li><a href="home.php">Terms of Use</a></li>
                            <li><a href="home.php">Membership</a></li>
                            <li><a href="home.php">Accessibility</a></li>
                        </ul>       
                    </div>
                </div>
            </div>   
        </footer>
        <div id="footinfo">
            <p>Author: IA 2024</p>
        </div>   
<?php } ?>