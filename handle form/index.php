
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Handle Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <!--    Nav bar-->
    <nav class="main-navigation">
        <div class="navbar-header animated fadeInUp">
            <a class="navbar-brand" href="#">Handle Form</a>
        </div>
        <ul class="nav-list">
            <li class="nav-list-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-list-item">
                <a href="#" class="nav-link">Blog</a>
            </li>
            <li class="nav-list-item">
                <a href="#" class="nav-link">Works</a>
            </li>
            <li class="nav-list-item">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

    </nav>
    
    <!--Masthead-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/snow_girl.jpg" class="d-block w-100" alt="snow_girl">
        </div>
        <div class="carousel-item">
          <img src="./img/mountain.jpg" class="d-block w-100" alt="mountain">
        </div>
        <div class="carousel-item">
          <img src="./img/green_lake.jpg" class="d-block w-100" alt="green_lake">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

   
   
   
    <!--  Contact Form-->
   <section class="wrapper">
     <div class="container">
        <form name="myForm" action="index.php"  method="get">
         <div class="row">
             <div class="col col-sm-12 col-md-12 col-lg-12">
              <label>Form Assignment</label>
                
                 <div class="row">
                  <div class="col-md-6 col-lg-6">
                      <p>Full Name</p>
                  <input type="text" name="fullname" class="form-control" id="fullname">
                  </div>
                  <div class="col-md-6 col-lg-6">
                  <p>Email</p>
                  <input type="text" name="email" class="form-control" id="email">
                  </div>
                </div>
                
              </div>
          </div>
          
          
          <div class="row">
              <div class="col col-sm-12 col-md-12 col-lg-12"> 
                  <p id="text-message">Message</p>
                  <textarea name="textArea" id="message" class="form-control"></textarea>
                  <br><br>
              </div>
          </div>
          
          <div class="row">
              <div class="col-md-3 col-lg-2">
                <input type="submit" name="submit" value="Submit" id="submit-button" class="form-control">
              </div>
          </div>
      </form>
     </div> 
    </section> 
    
    
    <?php
  /* Declare variable $success and assign it with value false.
   Use this variable as condition to keep user input in the 
 form as long as form is not properly filled out. */
$success = false;

/* Declare variable $err. Use this variable to collect error 
   messages along the way. $err can be a string or array -
   whatever you decide. */

$err=[];

/* if submit button is clicked: */
	
   /* Validate full name (either collect a value of full name from 
      $_GET or pass corresponding error message to $err) */
	
   /* Validate email (either collect a value of email from 
      $_GET or pass corresponding error message to $err) */
	
   /* Validate message (either collect a value from $_GET or pass 
      corresponding error message to $err) */
	
   /* If full name, email and message are not empty: */

      /* Turn $success to true and create feedback */

   /* End if */
//$value = array_key_exists('fullname', $_GET) ? $_GET['fullname'] : '';
$feedback="";
if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET["fullname"]) && $_GET["fullname"]!="") {
        $success=true;
        $feedback = "Hello ".$_GET['fullname'].". ".'<br/>';
    } else{
        $err['fullname'] = 'Your name?';
    }
    
    if(isset($_GET["textArea"]) && $_GET["textArea"]!="") {
        $success=true;
        $feedback .= "Thanks for your message: ".$_GET['textArea'].'<br/>';
    } else{
        $err['message'] = 'Your message?';
    }
    
    if(isset($_GET["email"]) && $_GET["email"]!="") {
        $success=true;
        $feedback .= "We are going to email you at ".$_GET['email']."if any changes happen in your program.".'<br/>';
    } else{
        $err['email'] = 'Your email?';
    }
    
}

/* End if submit button is clicked. */
//Print the error(s) or feedback below the form.

/* if feedback exists: */
   /* Print feedback */
    if($success){
        echo $feedback;
    }
/* End if */

/* if error(s) exists: */
   /* Print error(s) */
    if(!empty($err)){
        echo '<pre>';
        print_r($err);
        echo '</pre>';
    }
    
/* End if */
    
    
?>



    
    
    
    
    
<!--Footer-->
<div class="footer">
        <div class="text-center center-block">
                <a href="https://www.facebook.com"><i id="social-fb" class="fab fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com"><i class="fab fa-3x fa-twitter-square social" id="social-tw"></i></a>
	            <a href="https://www.instagram.com"><i class="fab fa-3x fa-instagram social" id="social-ins"></i></a>
	            <a href="mailto:1065061394jessica@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
        
        <div class="footer-copyright text-center py-3">© 2019 Copyright: Jessica Gao
        </div>

</div>
   
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>





