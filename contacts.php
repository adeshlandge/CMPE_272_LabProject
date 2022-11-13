<?php ?>

<!DOCTYPE html>
<html>
<body>
<?php require 'header_logged_out.php' ?>

<div class="row" >
	<div class="container" style="margin-top: 80px; padding: 20px; background-color:whitesmoke; border: 3px solid  #bbb ">
	<div class="row-style-login-page-pannel">
		<div class="col-sm-9 col-xs-12">
                    <h2><b><u>OUR CONTACTS</u></b></h2>			
			</div>

		</div>
	</div>
</div>





    <div class="row">
    <div class="container" style="margin-top: 20px; margin-bottom: 50px;">

    <?php
       $myfile = file("./data/companycontacts.txt");
    ?>  
    <ol type="1">
        <?php foreach ($myfile as $line) { ?>
        <li><?php echo $line ?></li>
        <?php }  ?>
    </ol>
    </div>
    </div>





<div style="background-color: #333;position: fixed;left: 0; bottom: 0;   width: 100%; color:white ;">
<?php require 'foot.php' ?>
</div>
</body>
</html>