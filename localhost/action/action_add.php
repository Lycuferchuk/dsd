<?php
	require_once("db.php");
	$link = db_content();

	function new_device($link, $title, $price, $company_name, $product_description, $image, $product_type)
    {
        $title = trim($title);
        $company_name = trim($company_name);
        $product_description = trim($product_description);
        $product_type = trim($product_type);

        if ($title == '')
            return false;

        $t = "INSERT INTO products (title, price, company_name, product_description, image, product_type) VALUES ('%s','%s', '%s', '%s', '%s', '%s')";

        $query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $price), mysqli_real_escape_string($link, $compane_name), mysqli_real_escape_string($link, $product_description), mysqli_real_escape_string($link, $image), mysqli_real_escape_string($link, $product_type));

        $result = mysqli_query($link, $query);


        return true; 
    }

	if(!empty($_POST))
        {
            $name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];

            move_uploaded_file($tmp_name, '../image'.$name);
            $image = "image/".$name;

            
            new_device($link, $_POST['title'], $_POST['price'], $_POST['company_name'], $_POST['product_description'], $image, $_POST['product_type']);
            
        }


?>