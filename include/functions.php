<?php
function display_menu($menu_type, $menu_size) {
    $file_in = fopen("text/menu.txt", "r");
    $count = 0;
    if ($file_in) {
        $line = fgets($file_in);
        while ($line != false) {
            if (strpos($line, $menu_type) !== false) {
                break;
            }
            else {
                $line = fgets($file_in);
            }
        }
        while ($count < $menu_size) {
            $name = fgets($file_in);
            $price = fgets($file_in);
            $url = fgets($file_in);
            echo <<<EOD
                <form action="">
                    <figure>
                        <img src="$url" alt="Menu Image"><br>
                        <p>$name</p>
                        <p>$$price</p>
                        <input type="hidden" name="name" value="$name">
                        <input type="hidden" name="price" value="$price">
                        <input type="submit" name="add_to_cart" value="Add to Cart">
                    </figure>
                </form>
EOD;
            $count++;
        }
    }
    else {
        // Case for if there is no file of the specified name.
        echo "Could not process request.";
    }
}

function add_to_cart() {
    if(!isset($_SESSION['cart_array'])) {
        $_SESSION['cart_array'] = array();
    }
    $item_array = array();
    $item_array['name'] = $_GET['name'];
    $item_array['price'] = $_GET['price'];
    array_push($_SESSION['cart_array'], $item_array);
}

function display_cart() {
    $total = 0.00;
    foreach ($_SESSION['cart_array'] as $item) {
        foreach ($item as $key => $value) {
            if ($key == 'name') {
                echo "$value<br>";
            }
            else {
                echo '$';
                echo "$value<br>";
                $total = $total + (float)$value;
            }
        }
    }
    echo "<br>Your total comes to: $$total";
}