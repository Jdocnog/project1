
<?php
    $pageTitle='Appetizer Menu';
    $description='This page displays all items on the appetizer menu';

    include('include/header.php');
    session_start();
    include('./include/functions.php');
    if(isset($_GET['start_order'])) {
        $_SESSION['cart_array'] = array();
    }
    if(isset($_GET['add_to_cart'])) {
        add_to_cart();
    }
?>
        <main>
            <?php            
                display_menu("a");
            ?>
        </main>  
            <?php
                include('include/footer.php');
            ?>          
    </body>
</html>
