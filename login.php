<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Hello, world!</title>
</head>

<body>
    <?php
    include('menu.php');
    include('header.php');

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-p-4">
                    <form action="login_sub.php" method="POST" class="row-g-3">
                        <h4>Welcome</h4>
                        <div class="col-12">
                            <label>UserName</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary mx-auto w-100" name="submit" value="Login">
                        </div>
                    </form>
                    <div class="mt-4">
                        <div class="col-12">
                            <p class="text-center mb-0">
                                Not have an Account? <a href="reg.php">Register here!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>