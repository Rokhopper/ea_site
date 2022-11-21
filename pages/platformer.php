<html>
<meta charset="UTF-8">
<head>
    <title>Electronic Arts</title>
    <link rel="icon" href="../assets/img/electronics-arts.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/ico_games.css">
</head>
<img>
<div class="nav" role="navigation">
    <a href="../index.html"><img class="logo" src="https://media.contentapi.ea.com/content/dam/eacom/common/ea-wordmark-network-nav-coral.svg"></a>
    <a class="nav_item" href="lastes.php">Новинки</a>
    <a class="nav_item" href="comingsoon.php">Скоро</a>
    <a class="nav_item" href="free-to-play.php">Безкоштовні ігри</a>
    <a class="nav_item" href="sport.php">EA SPORTS</a>
</div>

<div class="image_content">
    <div class="text_title_1">ПЛАТФОРМЕРИ ВІД EA</div>
</div>

<div class="text_bellow_tittle">
    Хочете зіграти у класичний платформер? Ви потрапили куди треба!
    Вирушайте в саму шалену подорож у своєму житті в It Takes Two.
    Пустіться в неповторну пригоду з чарівним Ярні в Unravel або спіймайте іскру разом з другом Unravel Two.
    Бігайте, паріть і дертися, пробираючись крізь чарівний ліс у незабутній грі Fe.
    У нас є платформери на будь-який смак!
</div>
<div class="catalog_container">
    <?php
    $conn = new mysqli("localhost", "rokhopper", "1234", "games");
    $sql = "SELECT * FROM platformer";

    if($result = $conn->query($sql)){
        foreach($result as $row){
            echo "<button class='games'>";
            echo "<a href='$row[url]'><img class='image_game' src='$row[image]'></a>";
            echo "<h3>" .$row["name"]. "</h3>";
            echo "</button>";
        }
        $result->free();
    } else{
        echo "Error: " . $conn->error;
    }

    $conn->close();
    ?>
</div>

<footer>
    <p><div class="footer_logo"><img src="../assets/img/october-ea-ring.png" width="60px" height="60px" align="left"></div>

    <p><a href="http://www.ea.com/ru-ru/legal" class="footer_item_logo">Юридична інформація та конфіденційність</a></p>
    <p><a href="https://www.ea.com/ru-ru/legal/privacy-and-cookie-policy" class="footer_item_logo">Правила дотримання конфіденційності інформації та ідентифікації користувача (ваша конфіденційність)</a></p>
    <p><a href="https://www.youtube.com/t/terms" class="footer_item">Умови використання YouTube</a></p>
    <p class="footer_item">© 2022 Electronic Arts Inc.</p>
</footer>

</body>
</html>