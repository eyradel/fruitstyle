<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="image/svg+xml" />
		<meta http-equiv="X-UA-Compatible" content="IE=edhe,Chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/mdb.min.css">
        <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<title>SVG</title>
         <script type="text/javascript"
    src="https://kit.fontawesome.com/2641fe0f3e.js"
    crossorigin="anonymous"
  ></script>

        <style>
            @keyframes Fromtop {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateX(0);
  }
}

             @keyframes Fromleft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}

            body{

            
             background: -webkit-radial-gradient(bisque,antiquewhite,lavender,whitesmoke,azure,aliceblue,beige,blanchedalmond);
               
            
            
            
            }
            .img
            {
                  animation: 2s ease-out 0s 1 Fromtop;

             margin:-100px 0px 0px 0px;
                width: 80%;
                
            }
            .btn-group,.card-footer
            {
                
                margin:auto auto auto auto;
                border-radius: 30px;
                animation: 2s ease-out 0s 1 Fromleft;
            }
            #con
            {
margin: auto auto auto auto;
             
            
            
            
            }
            .btn
            {

            border-radius: 30px;
            
            
            }
            .h-100
            {
margin-top: 60px;
            border-radius: 20px;
            
            }
            .logo
            {
                
                animation: 2s ease-out 0s 1 Fromtop;
       margin:-50px 0px 0px 0px;
             
                width: 100%;
                  
                
            }
            .card
            {
                border-radius: 20px;
                margin-top: 40px;
                 
            
            }
            #mod
            {
             margin-top: 40px;
            border-radius: 20px;
            
            
            }
                  


</style>
	

</head>
<body class="container">
      


           

    <div class=" justify-content-between">
      
  <div class="container" id="con">
    <div class="card h-100">
        
                  
      <div class="card-body">
            <center><button class="btn btn-outline-danger sticky-top" onclick="window.location.href='index.php';"><i class="fa fa-power-off"></i></button></center>

        <p class="card-text ">
            <img src="logo.png" class="logo" ></p>
           <div class=" input-group">
  
  <input class="form-control card input-md" id="myInput" type="text" placeholder="Search anything...........">
     

   
  
 
</div>  <br><br>
          <div class="table-responsive">
              
            <table class="  table align-middle">
                 <tbody id='myTable' class=""> 
                <tr class="table-dark">
                    <td>id</td>
                <td>Name</td>
                <td>location</td>
                   <td>Tel</td>
                       <td>Order</td>
                       <td>Customize</td>
                       <td>Date and time</td>
                       <td>Code</td>
                    <td>Payment Method</td>
                     <td>condiments</td>
                    
                </tr>
                 <?php require __DIR__.'/query.php';
                $users = getUsers();
                foreach($users as $user):
             ?>
                
                
                
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['ad_name']; ?></td>
                <td><?php echo $user['b_name']; ?></td>
                <td><?php echo $user['tel']; ?></td>
                <td><?php echo $user['order']; ?></td>
                <td><?php echo $user['co']; ?></td>
                 <td><?php echo $user['date']; ?></td>
                <td><?php echo $user['code']; ?></td>
                <td><?php echo $user['op']; ?></td>
               <td><?php echo $user['cd']; ?></td>
                
                </tr>
               
                <tr></tr>
          
          
          <?php endforeach;?>
          
          
                </tbody>
          
          </table></div>
      
          
        
      </div>
      <div class="card-footer">
           
        <div class="btn-group" role="group" aria-label="Basic example">
 
<!--

  <button type="button" class="btn btn-outline-success"   
  data-mdb-toggle="modal"
  data-mdb-target="#staticBackdrop">Info</button>
-->
      </div>
         
</div>
          
   
    </div>
  </div>

        
      
    </div>
    
    <!----buyer--->

  <div
  class="modal fade"
  id="staticBackdrop"
  data-mdb-backdrop="static"
  data-mdb-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-hidden="true"
>
      
      
  <div class="modal-dialog card">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><p style="font-family: cursive">Buyer SignIn</p></h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
        <form class="form-control container " method="get" action="">
      <div class="modal-body">
        
        <div class=" container">
            <input class="form-control card " type="text" placeholder="Username or Email">
            
            </div>
        <div class=" container">
            <input class="form-control card" type="password" placeholder="Pasword">
            
            </div>
            
        
        
        
      
        </div>
      <div class="modal-footer ">
          <div class="btn-group">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary" >LOgin</button>
      </div></div>  </form>
    </div>
  </div>
      
      
      
</div>
    
    <!---message--->
    <div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog card">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">...</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


	
</body>
    <script  src="js/mdb.min.js"></script>
       <script  src="js/jquery.min.js"></script>
    <script type="text/javascript">
$(function () {
$('#folder-1').click(function () {
toastr.error("Folder 1 has been clicked!", "Folder 1", {
"positionClass": "md-toast-top-right",
});
});
$('#folder-2').click(function () {
// make it not dissappear
toastr.info("Folder 2 has been clicked!", "Folder 2", );
});
$('#folder-3').click(function () {
// make it not dissappear
toastr.info("Folder 3 has been clicked!", "Folder 3", );
});
});
        
      
    </script>
     <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    
  
</html>