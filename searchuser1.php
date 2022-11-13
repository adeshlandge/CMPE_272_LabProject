<!DOCTYPE html>
<html>

<head>
    <title>Search Bar using PHP</title>
</head>

<body>
    <form method="post">
        <label>Search</label>
        <input type="text" name="search">
        <input type="submit" name="submit">
    </form>
</body>

</html>


<table border="2px" align=center>
    <tr>

        <td class="tableheader"><strong>First Name</strong></td>
        <td class="tableheader"><strong>Last Name</strong></td>
        <td class="tableheader"><strong>Email</strong></td>
        <td class="tableheader"><strong>Home Address</strong></td>
        <td class="tableheader"><strong>Home Phone</strong></td>
        <td class="tableheader"><strong>Cell Phone</strong></td>

    </tr>
    <?php
    $conn = mysqli_connect("localhost:3306", "root", "", "ecommerce1") or die(mysqli_error($conn));
    if (isset($_POST["submit"])) {
        $str = $_POST["search"];	   
        $sql = "SELECT * FROM users WHERE";
        if (isset($_POST["name"]) and $_POST["name"] != "") {
            $sql = $sql . " name LIKE '%" . $_POST["name"] . "%' ";
        } else {
            $sql = $sql . " name = '' ";
        }
        if (isset($_POST["email"]) and $_POST["email"] != "") {
            $sql = $sql . "OR email LIKE '%" . $_POST["email"] . "%'";
        }
        if (isset($_POST["contact"]) and $_POST["contact"] != "") {
            $sql=$sql."OR contact LIKE'%".$_POST["phone"]."%' ";
        }

        $result = $conn->query($sql);
    } else {
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
    }


    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>";
        echo $row["name"];
        echo "</td>";
        echo "<td>";
        echo $row["name"];
        echo "</td>";
        echo "<td>";
        echo $row["email"];
        echo "</td>";
        echo "<td>";
        echo $row["address"];
        echo "</td>";
        echo "<td>";
        echo $row["contact"];
        echo "</td>";
        echo "<td>";
        echo $row["contact"];
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>