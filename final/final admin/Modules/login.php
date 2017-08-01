<?php
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
//    echo $_SESSION['id'];
    header('Location:../dashboard/index.php');
}

include ("validation.php");
include("register.php");
if(isset($_POST["submit"]))
  {
      $user=$_POST['username'];
      $password=$_POST['password'];
    validate($user,$password);

  }
  if(isset($_POST["register"]))
{   $user=$_POST['username'];
    $company=$_POST['companyname'];
    $password=md5($_POST['password']);
    $email=$_POST['user_email'];
    $company_email=$_POST['company_email'];
    $license_number=$_POST['license'];
    $license_validity=$_POST['date'];
    $pincode=$_POST['location'];
    register($user,$password,$company,$company_email,$email,$license_number,$license_validity,$pincode);
}?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MINISTRY OF AYUSH</title>


    <link href="Content/css/bootstrap.min.css" rel="stylesheet">

    <link href="Content/css/font-awesome.min.css" rel="stylesheet">

    <link href="Content/css/nprogress.css" rel="stylesheet">

    <link href="Content/css/animate.min.css" rel="stylesheet">

    <link href="Content/css/custom.css" rel="stylesheet">
      <script src="Scripts/jquery-1.11.3-jquery.min.js"></script>
      <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />


  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="post" action="<?php echo$_SERVER['PHP_SELF']; ?>" id="login-form">
                        <h1>User Login</h1>
                        <div id="error">
                            <!-- error will be shown here ! -->
                        </div>
                        <div>
                            <input type="text"  name="username"  class="form-control" placeholder="Username" required="" />

                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="" />

                        </div>
                        <div class="alignright">
                            <input class="btn btn-default submit" id="btn-login" type="submit" name="submit" value="Login">
                        </div>
                        <div>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">Haven't registerd your organization?
                                <a href="#signup" class="to_register"> Register </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1>Ministry of Ayush</h1>
                            </div>
                        </div>
                    </form>
                </section>
            </div>




        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="<?php echo$_SERVER['PHP_SELF']; ?>" id="signup">
              <h1>Register</h1>
                <div>
                    <input type="text" name="companyname" class="form-control" placeholder="Companyname" required="" />
                </div>
              <div>
                <input type="email" name="company_email" class="form-control" placeholder="CompanyEmail" required="" />
              </div>

              <div>
                <input type="text" name="license" class="form-control" placeholder="License number" required="" />
              </div>
                <div>
                    <input class="form-control" id="date" name="date" placeholder="License validity " type="text"/>
                </div>
              <div>
                <input type="text" name="location" class="form-control" placeholder="Pincode" required="" />
              </div>
                <hr>
                <h4>Create a admin for your company</h4>
                <h6>Note:This user will be a superadmin of your company </h6>
                <div>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                </div>
                <div>
                    <input type="email" name="user_email" class="form-control" placeholder="Email" required="" />
                </div>
                <div>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                </div>
                  <div>
                      <label class="align-left checkbox-inline">
                          <input type="checkbox" name="cert" value="">I hereby declare that the information entered are true and I m willing to send the details for approval.
                      </label>
                  </div>
                <br>
              <div class="alignright">
                  <input class="btn btn-default submit" id="btn-login" type="submit" name="register" value="Register">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>Ministry of Ayush</h1>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="Scripts/datepicker.js"></script>
    <link rel="stylesheet" href="Content/css/bootstrap-datepicker3.css"/>

    <script>
        $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
	pos: [20,20]
            })
        })
    </script>
  </body>
</html>
