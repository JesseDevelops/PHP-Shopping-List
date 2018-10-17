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
        <title>Store List</title>
         <style type="text/css">
            body{
                  background-image: linear-gradient(to right, #44f1df, #00cbde, #00a3d5, #007abf, #0d519c);
            }
            #storeForm {
                text-align: center;
                padding: 5px 16px;
                height: 300px;
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
                padding: 14px 25px;
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
        <?php
            // if error is given with user input- bring them back to the form page index.php
            $ErrorToIndex = "Index.php";
            // counter to check how many times user creates error- set to 0 originally
            $ErrorCounter = 0;
            
            //regex for the store name
            $storeNameExpression = '/([A-Za-z]|[0-9]| ) +/';
            //gets user input and stores it in variable $StoreName
            $StoreName = filter_input(INPUT_POST, "storeName", FILTER_SANITIZE_STRING);
            //if statement to check if userinput is in the appropriate format as regex if its appropriate create session, if not counter increases
            if (preg_match($storeNameExpression, $StoreName)){
                $_SESSION["StoreName"] = $StoreName;
            }
            else {
                echo "please put a valid store name";
                $ErrorCounter++;
            }
         
            // regex for the store address
            $streetAddressExpression = '/^[0-9]+ {1,}[A-Z][a-z]{1,} (st\.|rd\.|ave\.|blvd\.) (E|N|W|S)$/';
            // gets user input and stores it in variable $StoreAddress
            $StoreAddress = filter_input(INPUT_POST, "storeAddress", FILTER_SANITIZE_STRING);
            // if statement to check if userinput is in the appropriate format as regex if its appropriate create session, if not counter increases
            if(preg_match($streetAddressExpression, $StoreAddress)){
                $_SESSION["StoreAddress"] = $StoreAddress;
            }
            else{
                echo "enter a valid store address";
                $ErrorCounter++;
            }
            
            //regex for store city
            $storeCityExpression = '/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/';
            // gets user input and stores it in $storeCity
            $storeCity = filter_input(INPUT_POST, "storeCity", FILTER_SANITIZE_STRING);
            // if statement to check if userinput is in the appropriate format as regex if its appropriate create session, if not counter increases
            if(preg_match($storeCityExpression, $storeCity)){
                $_SESSION["storeCity"] = $storeCity;
            }
            else{
                echo "enter a valid city name";
                $ErrorCounter++;
            }
          
            //expression for postal code used in preg_match
            $postalExpression = '/^[A-Z][0-9][A-Z] ?[0-9][A-Z][0-9]$/';
            // get the postal code inputed in index.php
            $StorePostal = filter_input(INPUT_POST, "storePostal",FILTER_SANITIZE_STRING);
            // compare expression with user input to find match, if found create a session to store it
            if (preg_match($postalExpression, $StorePostal)){
                $_SESSION["StorePostal"] = $StorePostal;
            }
            else {
                echo "please put a valid postal code";
                $ErrorCounter++;
            }
            // checks how many errors , if its more than 0 take user back to first page form, else it will display the users inputs and link to next page
            if($ErrorCounter > 0){
                echo "<a href='$ErrorToIndex'>Back To Form</a>";
                }
           else{
               ?>
        <div id="storeForm">
        <label>Store Name: </label><?php echo $StoreName ?>
        <br>
        <label>Store Address: </label> <?php echo $StoreAddress ?><br>
        <label>Store City: </label> <?php echo $storeCity ?><br>
        <label>Store Postal Code: </label> <?php echo $StorePostal ?><br>
        <a href="GroceryListPHP.php">NEXT PAGE</a>
        </div>
        
        
        <?php
           }
        ?> 
    </body>
</html>
