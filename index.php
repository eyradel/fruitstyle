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
                
                margin:auto auto auto 35px;
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
      
 
        

              
              <?php   
              require __DIR__.'/query.php';
              
              $user = [
    'id' => '',
    'u_name' => '',
    'bname' => '',
    'tel' => '',
    'order' => '',
    'co' => '',
    'date' => '',
    'OP' => '',
    'cd' => '',
];

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);
     $user = createUser($_POST);

    
if ($user)
{
    
 echo "<div class=' card alert alert-success'>Order sent</div>" ;  
    
}
     else
     {
echo "<div class=' card alert alert-danger'>Order failed to send</div>" ;  
     }
 }

              
              
              
              
              ?>
    
     <?php
          if(isset($_GET['go']))
          {
              $ad_name =htmlentities($_GET['ad_name']);
              $pass =htmlentities($_GET['ad_pass']);
              if($ad_name=="administrator" & $pass=="edem")
              {
                  header("location:real.php");
                  
              }
              else
              {
             header("location:index.php");
             echo "<div class=' card alert alert-warning'>Wrong credentials</div>" ; 

              }
              
              
              
              
              
              
          }
          
          
          
          ?>

    <div class=" justify-content-between">
      
  <div class="container" id="con">
      
    <div class="card h-100">
        
                  <form method="post"  enctype="multipart/form-data" >
      <div class="card-body">
            

        <p class="card-text ">
            <img src="img.png" class="logo" ></p>
             
            <input type="text" class="card form-control" placeholder="Name" name="u_name" required>
             <input type="text" class="card form-control" placeholder="Delivery Location" name="b_name" required maxlength="10" min="10" >
             <input type="tel" class="card form-control" placeholder="Phone" name="tel">
             <select class="form-control card btn" name="order" required>
            
            <option>Type of order</option>
                 <option>Golden Sensation</option>
                 <option>Aluvial Extraordinaire</option>
                 <option>Customised</option>
              
            
            </select>
            
             <select class="form-control card btn" name="co"  >
            
            <option>Customize</option>
                 <option>Watermelon</option>
                 <option>Pineapple</option>
                 <option>Grapes</option>
                 <option>Mango</option>
                 <option>Pawpaw</option>
                 <option>Orange</option>
                  <option>Strawberry</option>
                 <option>Banana</option>
                 <option>BlackBerry</option>   
                 

              
            
            </select>
           <select class="form-control card btn" name="op"  required>
            
            <option>Method of Payment</option>
                 
                 <option>MOMO</option>  
               <option>CASH</option>  

              
            
            </select>
          
          
          <select class="form-control card btn" name="cd" required >
            
            <option>Condiment</option>
                 <option>Honey</option>
                 <option>milk</option>
                 <option>chocolate</option>
                   
                 

              
            
            </select>
                 <br>
                
                 
          
      
          
        
      </div>
      <div class="card-footer">
           
        <div class="btn-group" role="group" aria-label="Basic example">
 
 <button type="submit"  class="btn btn-success"   >Send</button>
  <button type="button" class="btn btn-outline-success"   
  data-mdb-toggle="modal"
  data-mdb-target="#staticBackdrop">Admin</button>
      </div></div>
               </form>

          
   
    </div>
  </div>

        
      
    </div>
    
  
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
        <h5 class="modal-title" id="staticBackdropLabel"><p style="font-family: cursive">Administrator</p></h5>
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
            <input class="form-control card " type="text" placeholder="Username" name="ad_name">
            
            </div>
        <div class=" container">
            <input class="form-control card" type="password" placeholder="Pasword" name="ad_pass">
            
            </div>
       
        
        
        
      
        </div>
      <div class="modal-footer ">
          <div class="btn-group">
        <button type="button" class="btn btn-success" data-mdb-dismiss="modal">
          Close
        </button>
        <button type="submit" name="go" class="btn btn-outline-success" >LOgin</button>
      </div></div>  </form>
        
           
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
    
  
</html>