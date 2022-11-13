<!DOCTYPE html>
<html>

<head>
    <title>GreenLeaf Elektronics | ONLINE ELECTRONICS SHOPPING STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <style type="text/css">
        .btnCls {
            background-color: green;
        }
    </style>
</head>

<body>
    <?php require "connect_db.php" ?>
    <?php require 'header_logged_out.php' ?>
    <br /><br />
    <h3>Electronic Gadgets.</h3>
    <div>
        <a href="./tops.php">Your last five previously visited products.</a>
        </div>
    <div class="container" style="margin-top: 60px; margin-bottom: 100px">
        <div class="row row-style-login-page-pannel">
            <?php
            $sql = "SELECT * FROM products";
            $result = $con->query($sql);
            while ($row = $result->fetch()) {
                echo "<div class=col-md-4 col-sm-6 col-xs-12>";
                echo "<div class='panel panel-default'>";
                echo "<div class='panel-heading'></div>";
                echo "<div class='panel-body'></div>";
                echo "<center><img class='img-responsive'  src = '" . $row["imgUrl"] ."' height='205'>";
                echo "<b>" . $row["name"] ."<br></b>$". $row["price"] ."<br />";
                echo "<a href='./viewproduct.php?id=" . $row["id"] . "' title='login to see full specification'><span></span>View Product Details</a>";                
                echo "</center>";
                #echo "</a>";
                echo "</div></div>";
            }
            ?>

            
        </div>
    </div>

    <?php require 'foot.php' ?>
</body>

</html>