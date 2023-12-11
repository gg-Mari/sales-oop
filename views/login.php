<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
  <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h5 class="modal-title">LOGIN<i class="fa-solid fa-right-to-bracket"></i></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <div class="container w-50">
    <h1 class="text-primary text-center mt-3">LOGIN<i class="fa-solid fa-right-to-bracket"></i></h1>
    <form action="" method="post">
      <div class="row">
          <label for="" class="col-3">Usename</label>
          <input type="text" id="username" name="username" class="col-9 form-control" placeholder="Username">
      </div>
      <div class="col">
            Password<input type="password" name="password" id="password" class="form-control">
      </div>
      <div class="col">
            <a href="" class="btn btn-primary w-100">Login</a>
            <a data-toggle="modal" data-target="#myModal" class="btn btn-danger" href="registration.php">Create an Account</a>
                
            </button>

            <!-- Modal Form -->
            <div class="modal fade" id="ModalForm" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content w-100">
                    <h1 class="text-danger text-center mb-5"><i class="fa-solid fa-user-plus"></i> Registration</h1>
                    <!-- Login Form -->
                    <form action="" method="post">
                        <div class="row">
                        <div class="col-6 mb-3">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" required autofocus>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-12 mb-3">
                            <label for="">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                      </div>
                      <div class="col-12 mb-5">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" area-describedby="password-info" required>
                      </div>
                      <div class="col-12 mb-5">
                            <button type="submit" class="btn btn-danger w-100">Register</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
      </div>
    </form>
    
  </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>