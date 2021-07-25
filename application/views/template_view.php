<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta charset="utf-8"> 
<link rel="stylesheet" href="css/style.css">
<title>Главная</title> 
</head> 
<body>
    <div class="container">

        <header>
                <div class="h1"><h1>Our Company</h1></div>
            <nav class="navbar">
                <ul>
                  <li><a class="nav-link" href="index.php?url=main">Главная</a></li>
                  <li><a class="nav-link" href="index.php?url=portfolio">Портфолио</a></li>
                  <li><a class="nav-link" href="index.php?url=services">Услуги</a></li>
                  <li><a class="nav-link" href="index.php?url=contacts">Контакты</a></li>
                </ul> 
            </nav>
        </header>

        <main>
            <div>
                
            </div>
        </main>

        <?php include 'application/views/'.$content_view; ?>

        <footer>
            <div class="footer">
                 <div>&copy; «Our Company», 2020&#8722;<?=date("Y")?></div>
            </div>
        </footer>
    </div>
    <script src="js/script.js"></script>
</body> 
</html>