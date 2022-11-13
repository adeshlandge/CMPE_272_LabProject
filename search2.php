<?php
include 'connect_db.php';
$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from users where name like '%$search%' or contact like '%$search%' or email like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
    }
    else
    {
        $searchErr = "Please enter the information!";
    }
    
}
 
?>
<html>
<head>

<link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
<!--
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

-->
<style>
.container{
    width:70%;
    height:30%;
    padding:20px;
}


table, th, td {
  border: 1px solid black;
}

</style>
</head>
 
<body>
<?php require 'header_logged_out.php' ?>
<br/><br/>
<br/><br/>
    <div class="container">   
    <br/><br/>
    <form class="form-horizontal" action="#" method="post">
    <div class="row">
        <div class="form-group">
            <label for="email"><b>Search Users :</b></label>
            <div >
              <input type="text" class="form-control" name="search" placeholder="name/email/phone here">
            </div><br/>
            <div >
              <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchErr;?></span>
        </div>
         
    </div>
    </form>
    <br/><br/>
    <h3><u>Search Result</u></h3><br/>
    <div class="table-responsive">          
      <table class="table" >
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone No</th>
            <th>Email</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
                <?php
                 if(!$employee_details)
                 {
                    echo '<tr><b>Sorry, No data found</b></tr>';
                 }
                 else{
                    foreach($employee_details as $key=>$value)
                    {
                        ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['name'];?></td>
                        <td><?php echo $value['contact'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['address'];?></td>
                    </tr>
                         
                        <?php
                    }
                     
                 }
                ?>
             
         </tbody>
      </table>
    </div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>