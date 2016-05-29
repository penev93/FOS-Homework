<?php
if(!(isset($_GET['page']))){
    $page='Home';
}   else{
$page=$_GET['page'];
}
$currPage=$page.".php";
date_default_timezone_set('Europe/Sofia');
?>


﻿<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $page?></title>
    <link rel="stylesheet" href="../csSheet/indexCSS.css"/>
    <link href=<?php echo "../csSheet/".$page."CSS.css"?> rel="stylesheet"/>
    <script  src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/todoDropDown.js"></script>
    <script src="../js/validator.js" ></script>
    <script src="../js/loginValidator.js"></script>
</head>
<body>
<div class="outer">
    <header>
        <a href="#home"><img src="../imgs/logo.png" alt="Doesnt' load" /></a>
			<span class="rightFloat">
				<span class="text">
					020 3026 6036<br />
					<span class="secondLine">
						second line: 020 7877 7777
					</span>
				</span>
				<a href="http://skype.com"><img alt="phone" src="../imgs/oldphone.png" /></a>
				<a href="http://skype.com"><img alt="call Center" src="../imgs/support.png" /></a>
				<a href="http://twitter.com"><img alt="Twitter" src="../imgs/twitter.png" /></a>
				<a href="http://facebook.com"><img alt="Facebook" src="../imgs/fb.png" /></a>

			</span>
        <div class="reg">
				<span class="regForm">
				   <a class="User" href="index.php?page=Register"> Register</a>
					|
					<a class="Loger"> Login</a>
				</span>
        </div>

    </header>
    <nav class="Navigation">
        <ul>
            <li><span><a name="home" href="index.php?page=Home">Home</a></span></li>
            <li><span class="separator"><a href="index.php?page=About">About</a></span></li>
            <li><span class="separator"><a href="index.php?page=News">News</a></span></li>
            <li><span class="separator"><a href="index.php?page=Gallery">Gallery</a></span></li>
            <li><span class="separator"><a href="index.php?page=Reviews">Reviews</a></span></li>
            <li><span class="separator"><a href="index.php?page=Contacts">Contacts</a></span></li>

        </ul>
    </nav>
    <form name="loginForm" id="loginForm">
        <a href="">X</a>
        <div class="main">
            <section>
                <label for="username">Username: </label>
                <input type="text" value="" name="username" id="username" />
            </section>
            <br />
            <section>
                <label for="password">Password: </label>
                <input type="text" value="" name="password" id="userpass" />
            </section>
            <br />
            <input type="button" id="login" name="Login" value="Login" />
        </div>
    </form>

    <section class="indexSec">
        <aside>
            <ul class="Cicero">
                <li>
                    <a href="index.php?page=Static&p=4">Our first page</a>
                </li>
                <li>
                    <a href="index.php?page=Static&p=2">Acro promotions</a>
                </li>
                <li>
                    <a href="">News</a>
                    <ul class="submenu">
                        <li><a href="#">Top News</a></li>
                        <li><a href="index.php?page=Static&p=1">Local News</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.php?page=Static&p=3">Sports</a>
                    <ul class="submenu">
                        <li><a href="index.php?page=Static&p=6">Sportal</a></li>
                    </ul>
                </li>
            </ul>
        </aside>

        <?php
        if(file_exists($currPage)){
            include_once $currPage;
        };
        ?>

        <article>
            <img src="../imgs/how-we-do-it.png" alt="Sorry" />
				<span>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit molestie eros condimentum porta.
					Aliquam pretium nibh at magna blandit, nec ullamcorper risus iaculis. Donec volutpat vel tortor non blandit.
					Class aptent taciti sociosqu ad litora torquent per conubia nostra.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Fusce hendrerit molestie eros condimentum porta.
					Aliquam pretium nibh at magna blandit, nec ullamcorper risus iaculis. Donec volutpat vel tortor non blandit.
					Class aptent taciti sociosqu ad litora torquent per conubia nostra.Donec volutpat vel tortor non blandit.
					Class aptent taciti sociosqu ad litora torquent per conubia nostra.
				</span>
        </article>
    </section>
    <footer>
        <section class="leftFooter">
				<span>
    					Copyright  &reg <?php echo date("Y"); ?> <a href="#home" style="color:lightgray;">End of Tononcy London co.uk</a>
				</span><br />
				<span>
					All right reserved
				</span>
        </section>
        <section class="rightFooter">
            <ul id="foot">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </section>
    </footer>
</div>
<script src="../js/validator.js"></script>
<script src="../js/newsView.js"></script>
<script src="../js/todoDropDown.js"></script>
<script src="../js/loginValidator.js"></script>>
</body>
</html>