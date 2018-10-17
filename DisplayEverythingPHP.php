<?php
session_start()
?>
<!DOCTYPE html>
    <!--
Jesse Gajda, 000750483 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <style type="text/css">
            body{
                  background-image: linear-gradient(to right, #44f1df, #00cbde, #00a3d5, #007abf, #0d519c);
            }
             #storeInfo{
                text-align: center;
                padding: 5px 16px;
                height: auto;
                background-color: silver;
                border-radius:6px;
                width: 400px;
                margin: 0 auto;
                font-weight: bold;
                font-size: 20px;
                border-color: black;
                border-width: 2px;
                border-style: solid;
                float: left;
            }
            #itemsInfo{
                text-align: center;
                padding: 5px 16px;
                height: auto;
                background-color: silver;
                border-radius:6px;
                width: 400px;
                margin: 0 auto;
                font-weight: bold;
                font-size: 20px;
                border-color: black;
                border-width: 2px;
                border-style: solid;
                float: left;
            }
            
            </style>
    </head>
    <body>
        <?php
        //grabs the session management from page 2 and page 3 for displaying it for users.
               ?>
        <div id ="storeInfo">
        <label>Store Name: </label><?php echo '<p>' .$_SESSION['StoreName']. '</p>'?>
        <label>Store Address: </label> <?php echo'<p>' .$_SESSION['StoreAddress']. '</p>' ?>
        <label>Store City: </label> <?php echo '<p>' .$_SESSION['storeCity']. '</p>' ?>
        <label>Store Postal Code: </label> <?php echo '<p>' .$_SESSION['StorePostal']. '</p>' ?>
        </div>
        <div id ="itemsInfo"
        <label>Shopping Items: </label> <?php foreach ($_SESSION['cart'] as $item)
       {
        echo "<p>$item</p>";
        }
    ?>
        </div>
      
    </body>
</html>

