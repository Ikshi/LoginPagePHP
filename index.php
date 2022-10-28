<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <link rel="stylesheet" href="login.css">
    <script type="text/javascript" src="login.js"></script>
</head>
<body>

    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="images/panda.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="login.php" method="POST" >
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-paw fa-2x me-3" style="color: #B76E79;"></i>
                          <span class="h1 fw-bold mb-0">Logo</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
      
                        <div class="form-floating mb-3">
                          <input type="email" name="email" id="form2Example17" class="form-control form-control-lg"  />
                        <label class="form-label" for="form2Example17">Email address</label> 
                        </div>
      
                        <div class="form-floating mb-3">
                          <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">Password</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block"   name= "login" type="login">Login</button>
                        </div>
      
                        <a class="small text-muted" href="#!">Forgot password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                            style="color: #393f81;">Register here</a></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>
</html>
