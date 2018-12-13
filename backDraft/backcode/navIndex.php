<!DOCTYPE html>
<html>
<head>
    <title>Student Affairs</title>
           <link rel="shortcut icon" href="icon.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
     <style type="text/css">
         .smallImge{
             height: 49px;
             width: 49px;
              position: relative;
         }
          .Icons_Button{
              height: 150px;
              width: 150px;
              position: relative;
              float: left;
          }  
          .events{
               height: 300px;
              width: 300px;
              position: relative;
              float: left;
              background-color:aquamarine; 
              margin: 100px;
          }
          #events{
              background-color: beige;
              border: solid;
          }
          .buttons{
             border:solid;
            background-color: #800000;
            width: 200px;
             height: 200px;
              border-radius: 50%;
               opacity: 1;
              
              
          }
          .font_button{
            color:#FFFAFA; 
            position: relative;
              float: inherit;
               opacity: 1;
          }
          #rowstyle{
              position: relative;
             margin-top: 15%;
              margin-left: 15%; 
              margin-right: 0;
              
          }
          .Request_order{
              margin-left: 25%;
              margin-top: 10%;
              opacity: 1;
              position: relative;
              float: left;
          }
           .question{
              margin-left: 50%;
              margin-top: 0%;
                opacity: 1 !important ;
                 position: relative;
              float: left;
          }
           .profile{
              margin-left: 75%;
              margin-top: 0px;
                opacity: 1;
                 position: relative;
              float: left;
          }
          .navbar{
              background-color: #800000 !important;
              height: 50px;
          }
          .nav-link{
              font-weight: 700;
              font-size: 18px;
              color: #FFFAFA !important;
              margin-left: 50px;
              
          }
          .nav-item:hover{
              cursor: pointer;
              color: black !important;
          }
          .fa:hover{
              color: black !important; 
          }
          #sign{
            margin-bottom: 30px;  
          }
}
          .bimg{
              opacity: 1;
          }
         .buttons:hover
          {
            border-style: inset !important;
              cursor: pointer;
          }
          .nav-link:hover{
              color: black !important;
          }
                    /*comment*/
          @media only screen and (max-width: 991px){
.dropdown-menu
{
  padding-top: 0px !important;
  margin-top: 0px !important;
}
.passwordinput
{
  margin-top: 5% !important;
}
.signbutton
{
  margin-top: 2% !important;
  margin-bottom: 2% !important;

}
.signupbutton
{
  margin-top: 1% !important;
    margin-bottom: 1% !important;

}
}
@media only screen and (max-width: 765px){
.dropdown-menu
{
  padding-top: 0px !important;
  margin-top: 0px !important;
}
.passwordinput
{
  margin-top: 2% !important;
  margin-left: 142px !important;
}
.signbutton
{
  margin-top: 2% !important;
  margin-bottom: 2% !important;

}
.signupbutton
{
  margin-top: 2% !important;
}
}
@media only screen and (max-width: 575px){
.dropdown-menu
{
/*  padding-top: 0px !important;
*/}
.emailinput
{
  margin-top: 0% !important;
}
.passwordinput
{
  margin-top: 1.5% !important;
  margin-left: 0% !important;
}
.signbutton
{
  margin-top: 2% !important;
  margin-bottom: 2% !important;

}
.signupbutton
{
  margin-top: 1% !important;
    margin-bottom: 1% !important;

}
}
     </style>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <a><img src="studentAfaairs_icon.png" class="smallImge"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      
         <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">About</a>
      </li>
    </ul>
          
               <li style="list-style-type: none; margin-right: 100px;" class="nav-item dropdown" style="" >
        <a onclick="document.getElementById('sign').style.display=''" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign In
        </a>

        <!--end of nav items-->
      

      <!--Sign in & sign Up Drop Down Menu//-->
        <div  class="dropdown-menu" id="sign" aria-labelledby="navbarDropdown" style="width: 220px; padding: 10px; text-align: center;padding-right: 10px;">
            
           <form   class= form-inline" style="text-align: center;" method="post" action="">
            Have An Account ? <br>
          <input class="form-control mr-sm-2" type="textbox" placeholder="Enter Your Email" style="margin-top: 5%" name="E-mail" required> 

          <input class="form-control mr-sm-2" type="Password" placeholder="Enter Your Password"  style="margin-top: 8%" name="Password" required><br>
          <div class="dropdown-divider"></div>
           <button  style=" width: 60%;margin-top: 10%; margin-bottom: 5%;border-radius: 30px; font-size: 18px; background-color: #800000;color: white;border-color: #800000" class="btn btn-secondary btn-sm" type="submit" name="login_students">Sign In</button> 
           </form>
          <p style="margin:0px; font-size: 15px;">Don't Have an Account Yet?</p>

          <button onclick="location.href='RightRegistration.php';" style=" width: 60%;margin-top: 5%;border-radius: 30px;font-size: 18px; background-color: white;color: #800000;border-color: #800000;border-width: 2px;" class="btn btn-secondary btn-sm" type="submit" name="Signup" >Sign Up</button></a>
               
        
        </div>
      </li>
  </div>
</nav>
</body>
</html>