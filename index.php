<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="STYLE/style.css">
    <link rel="stylesheet" href="/STYLE/main_style.css">
    <link rel="website icon" type="png" href="IMG/icon.png">
    <title>ProFix GSM - Daniel Drozdowski</title>
</head>
<body>
    <nav class="navbar" id="mainNav">
        <ul class="nav-links">
          <li><a href="#" id="exception"><img src="IMG/icon.png"/></a></li>
          <li><a href="#">O mnie</a></li>
          <li><a href="#">Usługi</a></li>
          <li><a href="#">Sklep</a></li>
          <li><a href="#">Projekty</a></li>
          <li><a href="#">Kontakt</a></li>
        </ul>
        <div class="hamburger-icon">
        <li><img src="IMG/icon.png"/></li> 
        <li><button id="NavButton" onclick="toggleShowLinks()">&#9776;</button></li>
        </div>
        <div class="show-links hidden">
          <li><a href="#">O mnie</a></li>
          <li><a href="#">Usługi</a></li>
          <li><a href="#">Sklep</a></li>
          <li><a href="#">Projekty</a></li>
          <li><a href="#">Kontakt</a></li>
        </div>
      </nav>
      <main>
        <br>
        <?php


$standardpagePath = 'PAGES/homepage.php'; // Domyślna strona

if (isset($_GET['PAGE'])) {
    $requestedPage = $_GET['PAGE'];
    $requestedPagePath = 'PAGES/' . $requestedPage . '.php';

    if (file_exists($requestedPagePath)) {
        include($requestedPagePath);
    } else {
        echo 'PAGES= 404.php';
    }
} else {
    include($standardpagePath);
}

?>    
      <br>
      </main>
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <h4>ProFix GSM - Daniel Drozdowski</h4>
              <ul>
                <li><a href="#">O mnie</a></li>
                <li><a href="#">Kontakt</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Pomoc</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Regulamin</a></li>
                <li><a href="#"></a></li>
              </ul>
          <p>&copy; 2024 Daniel Drozdowski - ProFix GSM. Wszelkie prawa zastrzeżone.</p>
        </div>
      </footer>
      <script src="INCLUDE/nav_resp_script.js"></script>
      <script src="INCLUDE/main_changer.js"></script>
</body>
</html>