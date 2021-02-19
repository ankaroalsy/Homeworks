<!DOCTYPE html>
<html lang="en-EN">
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/libraries/bootstrap.css">
    <link rel="stylesheet" href="view/libraries/bootstrap-glyphicon.css">
    <link rel="stylesheet" href="view/css/style.css">
    <script src="view/libraries/jquery.js"></script>
    <script src="view/libraries/jquery.validate.js"></script>
    <script src="view/libraries/jquery.validate.methods.js"></script>
    <script src="view/libraries/bootstrap.js"></script>
    <title>Ejercicio 2</title>
</head>
<body> 
    <section class='wrapper' style="margin-top:30px;">
        <form action="controller/controller.php" method="post" name='formulary' id='formulary'>  
            <div class="container">
                <div class="row">
                    <div class="col-12 ta-c">
                        <h1>Welcome back,</h1>
                        <p>We are a digital bank account creator service. You are paying a fixed fee of 1.00 USD for use our services.</p>
                    </div>
                    <div class="col-12 offset-0 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3" style="margin-top:10px;">
                        <div class="creator-content">
                            <label for="username">Account Name</label>
                            <input type="text" class="form-control" name="username" id="username">
                            <div class="info-section ta-r pt-2"><span class="gly-icon glyphicon glyphicon-user"></span></div>
                        </div>
                    </div>
                    <div class="col-12 offset-0 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3" style="margin-top:10px;">
                        <div class="creator-content">
                            <label for="key">Password</label>
                            <input type="password" class="form-control" name="key" id="key">
                            <div class="info-section ta-r pt-2"><span class="gly-icon glyphicon glyphicon-lock"></span></div>
                        </div>
                    </div> 
                    <div class="col-12 offset-0 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3" style="margin-top:10px;">
                        <div class="creator-content">
                            <label for="price">Price USD</label>
                            <input type="text" class="form-control" name="price" id="price" value="1.00" readonly>
                            <div class="info-section ta-r pt-2"><span class="gly-icon glyphicon glyphicon-question-sign"></span></div>
                        </div>
                    </div>
                    <div class="col-12 offset-0 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3" style="margin-top:10px;">
                        <div class="creator-content">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                            <div class="info-section ta-r pt-2"><span class="gly-icon glyphicon glyphicon-envelope"></span></div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-12 offset-0 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3" style="margin-top:10px;"> 
                        <div class="mt-3">
                            <button class="btn btn-send" name="create" id="create">Create Account</button>
                        </div>
                    </div>
                </div>
            </div> 
        </form> 
    </section>
    <footer class="footer" style="min-height:2.5rem;"> 
        <div class="container-fluid">
            <div class="row pt-2 pb-2">
            <div class="col-12 ta-c" style='margin-top: 5px;'>&copy; Elaborado por Jose De Marzo.</div>
            </div>
        </div>
    </footer>
    <script src="view/js/validator.js"></script>
</body>
</html>