    <?php 
require_once 'inc/register.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="inc/css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/JPG" href="img/logo.JPG">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="">
        <div id="layoutAuthentication">
            <div id="">
                <main>
                    <div class="container" style="width: 60%;">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <!--Already have an account----------->
                                    <div class="card-footer text-center">
                                        <?php
                                            if(isset($_SESSION['message'])): ?>
                                                <div class="alert alert-<?=$_SESSION['msg_type']?>">
                                                    <?php 
                                                        echo $_SESSION['message'];
                                                        unset($_SESSION['message']);
                                                    ?>
                                                </div>
                                            <?php endif; 
                                        ?>
                                        <div class="small"><a type=""  href=" " data-toggle="modal" data-target="#staticBackdrop">Already have an account? Signin</a>
                                        </div>
                                    </div>
                                    <!-- end of already-->
                                    <div class="card-header"><h5 class="text-center font-weight-light my-4">Create User Account</h5>
                                    </div>
                                    <div class="card-body">

                                        <!-- Registration form--->
                                        <form action="inc/register.php" method="POST">
                                            <div class="form-group">
            
                                                <input class="form-control py-6"  type="text" name="firstname" placeholder="Firstname"required  />
                                            </div>
                                            <div class="form-group">
            
                                                <input class="form-control py-6"  type="text" name="lastname" placeholder="Lastname"required  />
                                            </div>
                                            <div class="form-group">
        
                                                <input class="form-control py-6"  type="email" name="email" placeholder="Email"required  />
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control py-6"  type="password" name="password" placeholder="Password"required  />
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control py-6"  type="password" name="repassword" placeholder="Repeat Password"required  />
                                            </div>

                                            <p>
                                            <input type="checkbox" name="check" value="true" style="margin-right:5px;" required>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
                                          </p>
                                          <div align="center">
                                              <button class=" btn btn-success" type="submit" name="signup">Signup</button>
                                          </div><br><br>
                                            
                                        </form>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

            <!--modal for login form----->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Login<i class="fa fa-user text-secondary ml-2"></i></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="includes/save-member.php" method="POST">
                        <label>Username</label>
                        <input class="form-control" type="text" name="username">

                        <label>Password</label>
                        <input class="form-control" type="password" name="pwd">
                       <br>

                       <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>

                       <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="nav-link small" href="main/member/dist/password-reset.php">Forgot Password? Reset</a>
                        <input class="btn btn-primary" type="submit" name="login" value="Login">
                       </div>
                        <!--div class="float-right"><input type="submit" class="btn btn-info" name="login" value="Login"></div>

                        <div class="float-left"><a class="nav-link" href="#">Forgot password? Reset</a></div-->
                    </form>
                  </div>
                </div>
              </div>
            </div><!-- end of modal-->
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Copyright &copy; wowgh 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    </body>
</html>
