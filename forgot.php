<!DOCTYPE html>
<?php
    
    // if(!empty($_SESSION['username'])) {
    //     header('location: login.php');
    // }
   


    
?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">




  <section>
    <div class="container">
</head>
<body>


      <div class="user signinBx">
        <div class="imgBx"><img src="./login_img.svg" alt="" /></div>
        <div class="formBx">
          <form action="#" id="login-form">
            <h2>Please Specify Email</h2>
            <input type="text" name="email" id="email" placeholder="Email" />

            <input type="button" name="reset" id="reset-submit" value="Reset" />
           
            <p class="signup">
           Already have an account ?
              
              
            <a href="./login.php" class="signup">Login.</a>
            </p>
                          
              
            </p>
          </form>
        </div>
      </div>
     
          </div>
    </div>
  </section>
  <script src="parsley.min.css"></script>
 
  <script src="./include_book/jquery-3.5.1.min-cb-ngqyxctuyyypyq778izlo0vuklgdyde.js"></script>
<link rel="stylesheet" type="text/css" href="./parsley.css">
<link rel="stylesheet" type="text/css" href="./style.css">
<script>
    $(document).ready(function(){  
 
  $('#reset-submit').click(function(){  
    var email= $('#email').val();
        $.ajax({  
             url:"forgotemail.php",  
             method:"POST",  
             data:{email:email},  
             success:function()  
             {  
               
                  location.reload();  
                  
             }  
        });  
   });  
  });
 
    </script>

</body>
</html>

