<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tech Store</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/44dd34d961.js" crossorigin="anonymous"></script>
</head>
<body>

    <!--     Menu     -->
    <header>
        <ul class="menu">
            <li><a href=#><i class="fas fa-bars"></i></a>
                <ul class="submenu">
                    <li><a href="phones/pokaz.php?type=phones">Телефони</a></li>
                    <li><a href="phones/pokaz.php?type=laptop">Ноутбуки</a></li>
                    <li><a href="phones/pokaz.php?type=headphone">Навушники</a></li>
                </ul>
            </li>
        </ul>
        <a class="Name" href="index.php">Tech Store</a>
        <form action="pokaz.php" method="get">
            <input type="search" name="search" placeholder="Введіть товар" class="search">
            <button type="submit" class="button_search">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <a href="pokaz.php" class="cart"><i class="fas fa-shopping-cart"></i></a>
        <a href="User_In.php" class="user"><i class="fas fa-user"></i></a>
    </header>

    <!--     Main Image     -->
    <div class="main_image">
        <img src="image/androidphones.png" style="height: 600px; width: 100%">
    </div>

    <!--     Block Parntners     -->
    <h1 class="our_partners">Наші партнери</h1>
    <div class="brands">
        <a class="brand" href=""><img src="image/samsung.jpg" style="height: 50"></a>
        <a class="brand" href=""><img src="image/Apple.png"></a>
        <a class="brand" href=""><img src="image/Xiaomi.png"></a>
        <a class="brand" href=""><img src="image/Huawei.jpeg"></a>
        <a class="brand" href=""><img src="image/Asus.png" style="width: 150px; height: auto"></a>
        <a class="brand" href=""><img src="image/HP.png" style="width: 80px; height: auto;"></a>
    </div>

    <!--     Block On Sale     -->
    <h1 class="on_sale">Спеціальні пропозиції</h1>
    <div class="products">
        <a class="product" href=""></a>
        <a class="product" href=""></a>
        <a class="product" href=""></a>
        <a class="product" href=""></a>
        <a class="product" href=""></a>
        <a class="product" href=""></a>
        <a class="product" href=""></a>
        <a class="product" href=""></a>
    </div>

    <!--     Footer     -->
    <div class="footer">
        <div class="footer_content">
            <div class="footer_block">
                <ul>
                    <li  class="list_title">Інформація:</li>
                    <li class="list"><a href="" style="color: white;">Акції</a></li>
                    <li class="list"><a href="" style="color: white;">Бренди</a></li>
                    <li class="list"><a href="" style="color: white;">Техноблог</a></li>
                </ul>
            </div>
            <div class="footer_block">
                <ul>
                    <li class="list_title">Компанія:</li>
                    <li class="list"><a href="" style="color: white;">Про компанію</a></li>
                    <li class="list"><a href="" style="color: white;">Вакансії</a></li>
                    <li class="list"><a href="" style="color: white;">Новини</a></li>
                </ul>
            </div>
            <div class="footer_block">
                <ul>
                    <li class="list_title">Допомога покупцю:</li>
                    <li class="list"><a href="" style="color: white;">Доставка</a></li>
                    <li class="list"><a href="" style="color: white;">Вимоги використання сайту</a></li>
                    <li class="list"><a href="" style="color: white;">Політика конфіденціальності</a></li>
                </ul>
            </div>
            <p class="footer_copy">Всі права захищені "Tech Store" Copyright &copy; 2019</p>
        </div>
    </div>
</body>
</html>