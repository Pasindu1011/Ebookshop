<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="resource/css">
    <title>BookShop</title>
    <link rel="icon" href="resource/logo.png">
</head>
<body class ="main-body">
<div class="container-fluid vh-100 d-flex justify-content-center">
    <div class="row align-content-center">

    <!--header -->
    <div class="col-12">
        <div class="row">
            <div class="col-12 logo"></div>
            <div class="col-12">
                <p class="text-center title1">Hi, Welcome to BookShop</p>
            </div>
        </div>
    </div>

    <!-- header-->

    <!--content-->
    <div class="col-12 p-3">
        <div class="row">
            <div class="col-6 d-none d-lg-block background"></div>
            <div class="col-12 col-lg-6 d-none" id="signupBox">
                <div class="row g-2">
                    <div class="col-12">
                        <p class="title2">Create New Account</p>
                    </div>
                    <div class="col-6">
                        <label class="form-label">First Name</label>
                        <input type="text" class ="form-control"/>

                    </div>
                    <div class="col-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class ="form-control"/>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input type="Email" class ="form-control"/>
                    </div>
                    <div class="col-12">
                        <label class="form-label">PassWord</label>
                        <input type="password" class ="form-control"/>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Mobile</label>
                        <input type="text" class ="form-control"/>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Gender</label>
                        <select class="form-select">
                            <option value="">Male</option>
                            <option value="">Female</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-6 d-grid">
                        <button class="btn btn-primary">Sign Up</button>
                    </div>
                    <div class="col-12 col-lg-6 d-grid">
                        <button class="btn btn-dark">Already have an account?Sign In</button>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6"id="signIngBox">
                <div class="row g-2">
                    <div class="col-12">
                        <p class="title2">Sign In</p>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input type="email"class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label">Password</label>
                        <input type="password"class="form-control" />
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" >
                            <label class="form-check-label">Remember Me</label>
                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <a href="#"class="link-primary">Forgot Password?</a>
                    </div>
                    <div class="col-12 col-lg-6 d-grid">
                        <button class="btn btn-success">Sign In</button>
                    </div>
                    <div class="col-12 col-lg-6 d-grid">
                        <button class="btn btn-danger">New to Eshop? join Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--content-->


    </div>
</div>
    

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>