<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>MyPortFolio</title>
</head>
<body>
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Tee Gai Yu</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="contact.php">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://www.facebook.com/profile.php?id=100055176262053&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/kaiyou.zheng?igshid=NzZlODBkYWE4Ng==" class="instagram"><i class="bi bi-instagram"></i></a>
        <button style="border:none; background-color:transparent;" onclick="changeBackgroundColor()"><i class="fa-solid fa-arrows-rotate"></i></button>
      </div>

    </div>

    <script>
        // Set the background color when the page loads
        window.onload = function() {
            const savedColor = localStorage.getItem("backgroundColor");
            if (savedColor) {
                document.body.style.backgroundColor = savedColor;
            }
        };

        function changeBackgroundColor() {
            const colors = ['#ebe9e9', 'white'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            
            document.body.style.backgroundColor = randomColor;

            // Save the selected color in localStorage
            localStorage.setItem("backgroundColor", randomColor);
        }
    </script>

  </header><!-- End Header -->
</body>
</html>