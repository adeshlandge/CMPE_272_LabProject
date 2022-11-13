<?php require "connect_db.php" ?>
<?php
parse_str($_SERVER['QUERY_STRING'], $output);
$id = $output['id'];
$result = $con->query("SELECT * FROM products where id = " . $id . ";");
$prod = $result->fetch();
$hits = $prod["hits"] + 1;
$con->query("UPDATE products SET hits = " . $hits . " WHERE id = " . $id . ";");
//$con->close();
?>
<?php
if (isset($_COOKIE["lastids"])) {
    if (explode(",", $_COOKIE["lastids"])[0] != $prod["id"]) {
        setcookie("lastids", $prod["id"] . "," . $_COOKIE["lastids"], time() + (86400 * 30));
    }
} else {
    setcookie("lastids", $prod["id"], time() + (86400 * 30));
}
?>

<html>

<head>
    <title>GreenLeaf Elektronics | ONLINE ELECTRONICS SHOPPING STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">    
</head>

<body>
    <?php require 'header_logged_out.php' ?>
    <br/><br/><br/>
    <section class="main-section alabaster" id="about">
        <div class="container fullsize">
            <center>
                <h2><?php echo $prod["name"] ?></h2>
                <h3><?php echo $prod["description"] ?></h3>
                <?php echo "<img style='height=205' src = '" . $prod["imgUrl"] . "'>"; ?>
                <br />
                <br />
                <h3>$ <?php echo $prod["price"] ?></h3>

            </center>
        </div>
    </section>
</body>

</html>