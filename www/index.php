<?php require_once("init.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/assets/css/main.css"  />
    <title>STELLAR</title>
</head>
<body>
    <section class="home-section">
        <div class="background-video">
            <video class="background-video__content" autoplay muted loop>
                <source src="videos/solar-flare.mp4" type="video/mp4">
                    Your Browser does not support this video.
            </video>
        </div>
        <div class="u-centre-text header-section u-margin-top-large u-margin-bottom-medium">
            <h1 class="main-heading--large">Stellar</h1>
            <h3 class="secondary-heading--purple">A rotating image gallery of stars</h3>
        </div>
        <div class="u-centre-text u-margin-bottom-small">
            <a class="btn btn__link" href="stars.php">All Stars</a>
            <a class="btn btn__link" href="sun.php">Our Sun</a>
        </div>
        <div class="form-section u-centre-text">
        <h4 class="tertiary-heading u-margin-bottom-medium">Or search for a star, constellation, planet or satellite: </h4>
            <form class="form">
                <div class="form__details u-centre-text input u-margin-bottom-medium">
                    <input class="form__input" type="text" placeholder="Your search query"/>
                </div>
                <button class="btn u-margin-bottom-small" type="submit">Submit</button>
            </form>
        </div>
    </section>
</body>
</html>