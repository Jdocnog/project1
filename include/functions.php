<?php


function display_app() {
    $file_in = fopen("text/menu.txt", "r");
    $count = 0;
    $menu_size = 4;
    if ($file_in) {
        $line = fgets($file_in);
        while ($line != false) {
            if (strpos($line, 'appetizers') !== false) {
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
                <form action="appmenu.php">
                    <figure>
                        <img src="$url" alt="Menu Image"><br>
                        <p>$name</p>
                        <p>$price</p>
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
        $line = fgets($file_in);
        while ($line != false) {
            if (strpos($line, 'entrees') !== false) {
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
                <form action="entmenu.php">
                    <figure>
                        <img src="$url" alt="Menu Image"><br>
                        <p>$name</p>
                        <p>$price</p>
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

function display_des() {
    $file_in = fopen("text/menu.txt", "r");
    $count = 0;
    $menu_size = 4;
    if ($file_in) {
        $line = fgets($file_in);
        while ($line != false) {
            if (strpos($line, 'desserts') !== false) {
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
                <form action="dessmenu.php">
                    <figure>
                        <img src="$url" alt="Menu Image"><br>
                        <p>$name</p>
                        <p>$price</p>
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


