<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tech Store</title>
    <link rel="stylesheet" type="text/css" href="device.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/44dd34d961.js" crossorigin="anonymous"></script>
</head>
<body>

	<!--     Menu     -->
    <header>
        <ul class="menu">
            <li><a href=#><i class="fas fa-bars"></i></a>
                <ul class="submenu">
                    <li><a href="../pokaz/pokaz.php">Телефони</a></li>
                    <li><a href="../Laptops/deivice_laptop.php">Ноутбуки</a></li>
                    <li><a href="../headphones/headphone.php">Навушники</a></li>
                </ul>
            </li>
        </ul>
        <a class="Name" href="../index.php">Tech Store</a>
        <form>
            <input type="search" name="search" placeholder="Введіть товар" class="search">
            <button type="submit" class="button_search">
                <a href="../search_resut/Search_result.php"><i class="fas fa-search"></i></a>
            </button>
        </form>
        <a href="" class="cart"><i class="fas fa-shopping-cart"></i></a>
        <a href="../Not released/User_In.php" class="user"><i class="fas fa-user"></i></a>
    </header>
	
	<?php 
    require_once("action/db.php");
    $link=db_content();
    $query = sprintf("SELECT * FROM products WHERE id=%d", (int)$_GET['id']);

    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
     ?>

    <div class="content">	
		<div class="device_image">
			<img src="<?php echo $row['image']; ?>" style="height: 450px; width: auto; margin: auto;">
			<div>
				
			</div>
		</div>
		<div class="device_info">
			<div class="device_coast">
				<p class="device_name"><?php echo $row['title']; ?></p>
				<div class="price">
					<p class="device_price">Ціна: </p>
						<p class="device_int"><?php echo $row['price']; ?></p>
					<button type="submit" class="button_cart"><i class="fas fa-shopping-cart"></i></button>
				</div>
				<div class="buy_ico">
					<button type="submit" class="buy">Купити</button>
					<button type="submit" class="buy">Купити в кредит</button>
				</div>
			</div>
			<div class="device_stats">
				<h2>Характеристика девайсу</h2>
			</div>
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