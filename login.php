<?php
    session_start();
    // if(!empty($_SESSION['username'])) {
    //     header('location: login.php');
    // }
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="./include_book/jquery-3.5.1.min-cb-ngqyxctuyyypyq778izlo0vuklgdyde.js"></script>
<link rel="stylesheet" type="text/css" href="./parsley.css">
<link rel="stylesheet" type="text/css" href="./style.css">
<script src="parsley.min.css"></script>
</head>
<body>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="./login_img.svg" alt="" /></div>
        <div class="formBx">
          <form action="javascript:;" onsubmit="login()" id="login-form">
            <h2>Sign In</h2>
            <input type="text" name="username" id="username" placeholder="Username" />
            <input type="password" name="password" id="password" placeholder="Password" />
            <input type="submit" id="login_button" name="" value="Login" />
            
            <p class="Forgot">
           
            
            </p>
            <p class="signup">
            Don't have an account ?
              
              <a href="#" onclick="toggleForm();">Sign Up.</a>
              <br>
              Forgot Account Password ?

              <a href="./forgot.php" class="signup">Forgot Password.</a>
              
              
            </p>
          </form>
        </div>
      </div>
     
      <div class="user signupBx">
        <div class="formBx">
        <form action="#"  id="register-form">
          
            <h2>Create an account</h2>
            <input type="text" name="username" id="username1"  placeholder="Username" data-parsley-trigger="change" required />
            <input type="email" name="email" id="email" value="" data-parsley-trigger="change"  placeholder="Email Address" required />
            <input type="password" name="password" id="password1" data-parsley-trigger="change" minlength="6" placeholder="Create Password" required />
            <input type="password" name="confirm-password" id="confirm-password" data-parsley-trigger="change" placeholder="Confirm Password" minlength="6" required  />
            <input type="button" onclick="test()" name="register" id="register-submit" value="Register" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
          
        </div>
        <div class="imgBx"><img src="./login_img.svg" alt="" /></div>
      </div>
    </div>
  </section>
</body>
<script>const toggleForm = () => {
  const container = document.querySelector('.container');
  container.classList.toggle('active');
};</script>

<script>
function test(){
  if(!document.referrer){
    Object.defineProperty(document, "referrer", {get : function(){ return "./index.php"; }});

  }
  
  
  var username = $('#username1').val();  
      
           var password = $('#password1').val(); 
        
           var email = $('#email').val();
           
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"pdo.php",  
                     method:"POST",  
                     data: {username:username, password:password,email:email},  
                     success:function(data)  
                     {  
                      if(data == 'Yes'){ 
                            
                            window.location=document.referrer;

                            
                            }
                          }  
                          
                     });  
                }  
             
           else  
           {  
                alert("Les deux champs sont obligatoires");  
           }  
      }
      


function login(){
  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"pdo.php",  
                     method:"POST",  
                     data: {username:username, password:password},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          { 
                               alert("utilisateur ou mot de passe incorrecte");  
                               
                          }  
                          else  
                          { 
                            window.location=document.referrer;
                            
                            

                               
                          }  
                          
                     }  
                });  
           }  
           else  
           {  
                alert("Les deux champs sont obligatoires");  
           }  
      }
      

 
  </script>
