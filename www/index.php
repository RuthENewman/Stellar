<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css"  />
    <title>STELLAR</title>
    <?php $title = "Stellar" ?>
</head>
<body>
    <h1 class="main-heading"><?php echo strtoupper($title); ?></h1>
    <h3 class="subtitle">A rotating image gallery of stars</h3>
    <button class="btn" type="submit"><a href="stars.php">All Stars</a></button>
    <button class="btn" type="submit"><a href="sun.php">Our Sun</a></button>
    <h4>Or search for your favourite star, constellation, planet or satellite: </h4>
    <form>
        <input type="text" placeholder="Your search query"/>
        <button type="submit">Submit</button>
    </form>
</body>
</html>