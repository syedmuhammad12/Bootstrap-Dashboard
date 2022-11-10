<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">


                                        <?php
					if (isset($_POST['login'])){
					// Connecting to database
					$servername = "fdb31.freehostingeu.com";
					$username = "4097275_project";
					$password = "abcd12345";
					$database = "4097275_project";

					// Connecting to dbms
					$conn = mysqli_connect($servername, $username, $password, $database);



					// Inserting Data

					$email = mysqli_real_escape_string($conn,$_POST['email']);
					$password = mysqli_real_escape_string($conn,$_POST['pswd']); 
					$sql = "SELECT * FROM `Accounts` WHERE Email = '$email' and Password = '$password'";
					$result = mysqli_query($conn,$sql);
				
					$total_rows = mysqli_num_rows($result);
					$products = array(); 
					if($total_rows>0){
						while($row = mysqli_fetch_assoc($result)){
							// $temp = array();
                            echo "<script type=\"text/javascript\">
                            localStorage.setItem('fname', '$row['fname']');
      </script> ";
							// array_push($products, $temp);
							}
							// $_COOKIE['userdata'] = $products;
                            echo("<script>location.href = 'http://groupproject.eu3.biz/dashboard.php?msg=$msg';</script>");
                           
						}
					else{
						echo  '<div class="error">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">Close X</a>
                <p><strong>Alerta!</strong></p>
                Email or password wrong! Please try again!.
            </div>';
					}
						
				    }
				?>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name = "email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="pswd" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Forgot Password?</a>
                                                <input class="btn btn-primary" type="submit" name="login" value="Login" />
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
