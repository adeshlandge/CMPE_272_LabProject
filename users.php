<?php ?>

<!DOCTYPE html>
<html>

<body>
    <?php require 'header_logged_out.php' ?>
   
    <div class="row">
        <div class="container" style="margin-top: 80px; padding: 20px; background-color:whitesmoke; border: 3px solid  #bbb ">
            <div class="row-style-login-page-pannel">
                <div class="col-sm-9 col-xs-12">
                    <h2><b><u>USERS</u></b></h2>
                </div>

            </div>
        </div>
    </div>
    <br/><br/>
    <section class="main-section alabaster" id="users">
        <div class="container fullsize">           
            <br />
            <br />
            <center>
                <a class="link animated fadeInUp delay-2s servicelink" href="signup.php" >ADD USER</a>&nbsp;&nbsp;&nbsp;
                <a class="link animated fadeInDown delay-1s servicelink" href="search2.php" >SEARCH USER</a>&nbsp;&nbsp;&nbsp;
                <a class="link animated fadeInDown delay-1s servicelink" href="fetchAllUsers.php" >CURL USERS</a>&nbsp;&nbsp;&nbsp;
                
            </center>
        </div>
    </section>   

</body>

</html>