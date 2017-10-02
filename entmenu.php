
<?php
    $pageTitle='Entree Menu';
    $description='This page displays all items on the entree menu';

    include('include/header.php');
    session_start();
    include('./include/functions.php');
    if(isset($_GET['add_to_cart'])) {
        add_to_cart();
    }
?>
	<main>
            <?php
                display_menu("entrees", 4);
            ?>
        </main> 
            <?php
                include('include/footer.php');
            ?>
    </body>
</html>