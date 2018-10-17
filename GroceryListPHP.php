<?php
session_start();
?>
<!DOCTYPE html>
<!--
Jesse Gajda, 000750483 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styles.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            body{
                background-image: linear-gradient(to right, #44f1df, #00cbde, #00a3d5, #007abf, #0d519c);
            }
            #storeCont{
                text-align: center;
                padding: 5px 16px;
                height: auto;
                background-color: silver;
                border-radius:6px;
                width: 400px;
                margin: 0 auto;
                font-weight: bold;
                font-size: 25px;
                border-color: black;
                border-width: 2px;
                border-style: solid;
            }
            a:link, a:visited {
                background-color: #f44336;
                color: white;
                padding: 12px 20px;
                text-align: center; 
                text-decoration: none;
                display: inline-block;
            }

            a:hover, a:active {
                background-color: red;
            }
        </style>
    </head>
    <body>
        <div id="storeCont">
            <h1>Shopping List</h1>
            <?php
            //grabs the users input and stores it in $addItems
            $addItems = filter_input(INPUT_POST, "addItems", FILTER_SANITIZE_STRING);
            //creates a session 
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            // checks if user added a cart
            if (isset($addItems)) {
                // checks if its in the array if so displays error
                if (in_array($addItems, $_SESSION['cart'])) {
                    echo "<p>Already in the cart!</p>";
                    //adds the item in the array 
                } elseif ($addItems != "") {
                    array_push($_SESSION['cart'], $addItems);
                }
            }
            ?>
            <form action = "GroceryListPHP.php" method="post">
                <input type="text" name="addItems" placeholder="Add Items">
                <input type="submit" name="Add"value="Add">

                <table border="1" class="table">
                    <?php
                    //loop to go through whole session array, and echos out the items
                    foreach ($_SESSION['cart'] as $item) {
                        echo "<p>$item</p>";
                    }
                    ?>
                    <a href="DisplayEverythingPHP.php">Done</a>
                </table>
        </div>
    </body>
</html>