<!DOCTYPE html>
<?php include("../apis/func.php");?>
<html>
<head>
	<title>Members details</title>
    <script src="https://kit.fontawesome.com/acf7311159.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
     @font-face {
    font-family: josefin;
    src: url(..\fonts\josefin\JosefinSans-MediumItalic.ttf);
  }
  
  * {
    font-family : josefin;
  }
        body {
  background-color:  #e2ebf0;
   
        }

    </style>
</head>
<body>
	

 <div class="container my-2" >
<div class="card" >
     <div class="card-body" >
        

                 <div class="row" >
               <div class="col-6 col-md-4">
                            <a href="../entry-pages/admin-panel.php" class="btn btn-secondary ">Go Back</a>
                        </div>
             <h3 class="col-6 col-md-4">MEMBER DETAILS</h3>
                     <div class="col-md-3 ml-md-auto">
                            <a href="../add/reg-newmembers.php" class="btn btn-success ">ADD NEW MEMBER</a>
                        </div>
                        </div>
   </div> 
     <div class="card-body" >
         <div class="card-body">
    <table class="table table-hover table-success table-striped">
        <thead>
     <tr>
            <th>Gym Id</th>
             <th> Name</th>
            <th>Father Name</th>
         <th>Email id</th>
          <th>Date Of Joining</th>
         <th>Contact</th>
         <th>Last Payment</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_patient_details(); ?>
        </tbody>
    </table>
     </div>
    </div>
    </div>
    
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </div>
    </body>
</html>