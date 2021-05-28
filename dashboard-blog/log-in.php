<?php
	//start session
	session_start();
 
	//redirect if logged in
	if(isset($_SESSION['user'])){
		header('location:index.php');
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <title>log in</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="pt-5">
            <section>
                <div class="container mt-5" >
                    <div class="row p-5   justify-center align-items-center"style="height: 80vh;
                    box-shadow: #007bff26 0px 10px 20px;
                    border-radius: 16px;">
                        <div class="col-6 align-self-center">
                            <h2 class="text-center">Log in</h2>
                            <?php
                            if(isset($_GET['message'])){?>
                                <div class="alert alert-danger">
                                    <?= $_GET['message']; ?>
                                </div>
                            <?php }
                            ?>
                            <form action="./login.php" method="post" class=" ">
                                <div class="form-group mb-2">
                                    <label for="email" class="d-block">Email:</label>
                                    <input type="email" name="email" placeholder="Email..." id="email" class="w-100 form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="password" class="d-block ">Password:</label>
                                    <input type="password" placeholder="Password..." name="password" id="password" class="w-100 form-control">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" class="form-check d-inline" name="remember" id="remember">
                                    <label for="remember">Remember me</label>
                                </div>
                                <button type="submit" name='login'class="btn btn-primary btn-lg w-100">Log in</button>
                            </form>
                        </div>
                        <div class="col-6">
                            <img src="./Converted.png" class="w-100 h-auto img-responsive" alt="">
                            
                        </div>
                        
                        
                    </div>
        
                </div>
            </section>
  


    <script src="./js/main.js"></script>
</body>
</html>