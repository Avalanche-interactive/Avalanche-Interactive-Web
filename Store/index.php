<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">

    <title>Store</title>
</head>

<body>

    <nav>
        <div class="container">
            <img class="logo" src="../assets/images/Logo.png" alt="Avalanche Interactive Logo">

            <ul class="links">
                <li>
                    <a href="../">Home</a>
                </li>
                <li class="dropdown">
                    <a href="">About</a>
                    <ul class="dropdown-menu">
                        <li><a href="">Comapny</a></li>
                        <li><a href="">Engine</a></li>
                        <li><a href="">News</a></li>
                    </ul>
                </li>
                <li>
                    <a class="selected" href="../Store">Store</a>
                </li>
                <li class="dropdown">
                    <a href="">Support</a>
                    <ul class="dropdown-menu">
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Games</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </li>
            </ul>

            <div class="header-btn">
                <a href="Sign-Up">Sign-Up</a>
                <a href="">Login</a>
            </div>
        </div>
    </nav>

    <div class="games">
        <?php
        $jsonFile = "docs/store.json";
        $jsonData = file_get_contents($jsonFile);
        $games = json_decode($jsonData, true);

        if ($games === null) {
            $games = [];
        }

        if (count($games) == 0){
            ?>
            <div class="game-container">
                <h1>No Games Are Currently Available</h1>
            </div>
            <?php
        }

        //  Eventually add more game info 
        foreach ($games as $game) {
            ?>
            <div class="game-container">
                <img src="<?php echo htmlspecialchars($game["img-path"]); ?>">
                <h2><?php echo htmlspecialchars($game["name"]); ?></h2>
                <a href="">Purchase</a>
            </div>
            <?php
        } ?>
    </div>

</body>

</html>