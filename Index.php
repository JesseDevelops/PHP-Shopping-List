<!DOCTYPE html>
<!--
Jesse Gajda, 000750483
-->
<html>
    <head>
        <title>Store Information</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            body{
                  background-image: linear-gradient(to right, #44f1df, #00cbde, #00a3d5, #007abf, #0d519c);
            }
            h1 {
                text-align: center;
            }
            label {
                text-align: center;
            }
            p {
                text-align: center;
                font-size: large;
                
            }
            .align {
                width: 145px;
                
                
            }
            #storeForm {
                text-align: center;
                padding: 5px 16px;
                height: 300px;
                background-color: silver;
                border-radius:6px;
                width: 400px;
                margin: 0 auto;
                border-color: black;
                border-width: 2px;
                border-style: solid;
            }
       #submitButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #dcecfb;
	-webkit-box-shadow:inset 0px 1px 0px 0px #dcecfb;
	box-shadow:inset 0px 1px 0px 0px #dcecfb;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bddbfa), color-stop(1, #80b5ea));
	background:-moz-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:-webkit-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:-o-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:-ms-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:linear-gradient(to bottom, #bddbfa 5%, #80b5ea 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bddbfa', endColorstr='#80b5ea',GradientType=0);
	background-color:#bddbfa;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #84bbf3;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
        }
        #submitButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #80b5ea), color-stop(1, #bddbfa));
	background:-moz-linear-gradient(top, #80b5ea 5%, #bddbfa 100%);
	background:-webkit-linear-gradient(top, #80b5ea 5%, #bddbfa 100%);
	background:-o-linear-gradient(top, #80b5ea 5%, #bddbfa 100%);
	background:-ms-linear-gradient(top, #80b5ea 5%, #bddbfa 100%);
	background:linear-gradient(to bottom, #80b5ea 5%, #bddbfa 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80b5ea', endColorstr='#bddbfa',GradientType=0);
	background-color:#80b5ea;
        }
        #submitButton:active {
	position:relative;
	top:1px;
        }

        
        </style>
    </head>
    <body> 
        <div id = "storeForm">
            <h1>Store Information</h1>
            <p><strong>Welcome!<br>
                    Please enter the details of your store below!</strong></p>
            <form action="storeFormPHP.php" method="POST">
                <div id = "storeInfo">
                    <label><strong>Enter The Name Of The Store: </strong></label><input type="text" name="storeName" align="middle" class="align" size="6" placeholder="Ex. 100 The Store" required><br>
                    <label><strong>Enter The Street Address: </strong></label><input type ="text" name = "storeAddress" align="middle" class=" align" size ="6" placeholder="Ex. 99 Fennel ave. N"required><br>
                    <label><strong>Enter The City: </strong></label><input type ="text" name="storeCity" align ="middle" class ="align" size="6" placeholder="Ex Mississauga" required><br>
                    <label><strong>Enter The Postal Code: </strong></label><input type ="text" align="middle" name ="storePostal" class =" align" size ="6" placeholder="Ex L5N 6F8"required><br>
                    <br>
                    <input type ="submit" name ="submit" id ="submitButton" value ="Submit"/>
                </div>
            <?php
            
         
            ?>
            
            
            
        </div>
    </body>
</html>
