<?php

function display_app() {
    $file_in = fopen("text/menu.txt", "r");
    $count = 0;
    $menu_size = 4;
    if ($file_in) {
        while (($line = fgets($file_in)) != false) {
            echo $line;
            if ($line == "appetizers") {
                echo $line;
                break;
            }
        }
        while ($count < $menu_size) {
            $name = fgets($file_in);
            $price = fgets($file_in);
            $url = fgets($file_in);
            echo $name;
            echo $price;
            echo $url;
            echo <<<EOD
                <form action="appmenu.php">
                    <figure>
                        <img src="$url" alt="Menu Image"><br>
                        <p>$name</p><br>
                        <p>$price</p><br>
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

function display_ent() {
    $file_in = fopen("text/menu.txt", "r");
    $count = 0;
    $menu_size = 4;
    if ($file_in) {
        while (($first_line = fgets($file_in)) !== "entrees") {
            
        }
    }
}

function display_des() {
    $file_in = fopen("text/menu.txt", "r");
    $count = 0;
    $menu_size = 4;
    if ($file_in) {
        while (($first_line = fgets($file_in)) !== "desserts") {
            
        }
    }
}

