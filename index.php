<?php
// phpinfo();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login System - PHP - OOP & PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
</head>
    <body class="container text-center">
        <header class="my-5">
            <h1>Login System - PHP - OOP & PDO</h1>
        </header>
        <main class="form-signin">
            <div class="mb-4">
                <form class="form-control" action="includes/signup.inc.php" method="post">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
                    <div class="form-floating">
                        <input type="text" class="form-control" id="username" name="uid" placeholder="Nome">
                        <label for="username">Name</label>
                    </div>
    
                    <div class="form-floating my-2">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
    
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
    
                    <div class="form-floating my-2">
                        <input type="password" class="form-control" id="repeatPassword" name="pwdrepeat" placeholder="Repeat Password">
                        <label for="repeatPassword">Repeat Password</label>
                    </div>
    
                    <button class="w-100 btn btn-sm btn-primary" type="submit" name="submit">Sign in</button>
                </form>
            </div>
            <div>
                <form class="form-control" action="includes/login.inc.php" method="post">
                    <h1 class="h3 mb-3 fw-normal">Log in</h1>
    
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
    
                    <div class="form-floating my-2">
                        <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
    
                    <button class="w-100 btn btn-sm btn-primary" type="submit" name="submit">Log in</button>
                </form>
            </div>
        </main>
        <footer>
            <p class="mt-5 mb-3 text-muted">&copy; 2022 - Julio O.</p>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>