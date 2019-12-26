<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Результат пошуку</title>
    <link rel="stylesheet" type="text/css" href="pokaz.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/44dd34d961.js" crossorigin="anonymous"></script>
</head>
<body>

    <!--     Menu     -->
    <header>
        <ul class="menu">
            <li><a href=#><i class="fas fa-bars"></i></a>
                <ul class="submenu">
                    <li><a href="pokaz.php?type=phones">Телефони</a></li>
                    <li><a href="pokaz.php?type=laptop">Ноутбуки</a></li>
                    <li><a href="pokaz.php?type=headphone">Навушники</a></li>
                </ul>
            </li>
        </ul>
        <a class="Name" href="../index.php">Tech Store</a>
        <form action="pokaz.php" method="get">
            <input type="search" name="search" placeholder="Введіть товар" class="search">
            <button type="submit" class="button_search">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
        <a href="../Not released/User_In.php" class="user"><i class="fas fa-user"></i></a>
    </header>

    <div class="OOOO">
        <h1 class="on_sale">Результат</h1>
    </div>

    <div class="result">
        <div class="sidebar_section">
            <div class="sidebar">
                <div class="ss">
                    <h2>Фільтри</h2>
                </div>
            </div>
        </div>
        <div class="products_section"> 
            <?php 
            require_once("../action/db.php");
            $link=db_content();

            if(isset($_GET['search'])) {
                $search_title = $_GET['search'];
                $query = sprintf("SELECT * FROM products WHERE title LIKE '%%%s%%'", $search_title);
            } else if (isset($_GET['type']) && $_GET['type'] == 'phones') {
                $query="SELECT * FROM products WHERE product_type = 'Телефон' ORDER BY id ASC";
            } else if (isset($_GET['type']) && $_GET['type'] == 'laptop') {
                $query="SELECT * FROM products WHERE product_type = 'laptop' ORDER BY id ASC";
            } else if (isset($_GET['type']) && $_GET['type'] == 'headphone') {
                $query="SELECT * FROM products WHERE product_type = 'headphone' ORDER BY id ASC";
            }
            $result = mysqli_query($link, $query);
            $n=mysqli_num_rows($result);
            $array=array();
            for($i = 0; $i < $n; $i++)
                    {
                        $row = mysqli_fetch_assoc($result);
                        $array[] = $row;
                    }

            ?>
            <?php foreach($array as $var):  ?>
            <div class="product">
                <div class="res_image">
                    <img src="../<?php echo($var['image']) ?>" style="width: auto; height: 260px; max-width: 240px; ">
                </div>
                <div class="name_product"><a href="../device.php?id=<?php echo $var['id'] ?>" style= "color: black; font-weight: bold;"><?php echo($var['title']) ?></a></div>
                <div class="cost_buy">
                    <p style="font-weight: bolder; font-size: 18px; text-decoration: none;"><?php echo($var['price']) ?> грн</p>
                    <a href="../device.php?id=<?php echo $var['id'] ?>" class="buy" style="color: white;">Купити</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
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