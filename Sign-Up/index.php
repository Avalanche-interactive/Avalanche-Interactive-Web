<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/Logo.png" type="image/x-icon">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">

    <style>
        .header-btn .btn-selected {
            background-color: #000;
            border-radius: 50px;
        }

        .header-btn .btn-selected a {
            color: yellow !important;
        }
    </style>

    <title>Sign Up</title>
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
                    <a href="#">About</a>
                    <ul class="dropdown-menu">
                        <li><a href="">Comapny</a></li>
                        <li><a href="">Engine</a></li>
                        <li><a href="">News</a></li>
                    </ul>
                </li>
                <li>
                    <a href="Store">Store</a>
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
                <a class="btn-selected" href="">Sign-Up</a>
                <a href="">Login</a>
            </div>
        </div>
    </nav>

    <main>

        <div class="sign-up-form">
            <form>
                <div class="form-item">
                    <label for="fname">Email Address:</label>
                    <input type="text" id="fname" name="fname">
                </div>
                <div class="form-item">
                    <label for="lname">Password:</label>
                    <input type="text" id="lname" name="lname">
                </div>
            </form>

        </div>
    </main>

    <footer>
        <div class="footer-container">
            <ul>
                <li><i class='bx bxs-envelope'> <a target="_blank" href=""></i> Email</a></li>
                <li><i class='bx bxl-facebook-square'><a target="_blank" href=""></i>Facebook</a></li>
                <li><i class='bx bxl-instagram-alt'> <a target="_blank" href=""></i>Instagram</a></li>
                <li><i class='bx bxl-linkedin-square'><a target="_blank" href=""></i>LinkedIn</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>