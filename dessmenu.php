
<?php
    $pageTitle='Dessert Menu';
    $description='This page displays all items on the dessert menu';

    include('include/header.php');
    session_start();
    include('./include/functions.php');
    if(isset($_GET['add_to_cart'])) {
        add_to_cart();
    }
?>	
        <main>
            <?php
                display_menu("desserts", 4);
            ?>
        </main> 
            <?php
                include('include/footer.php');
            ?>
    </body>
</html>