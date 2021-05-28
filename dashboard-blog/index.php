<?php
require('database.php');
require "./articles.php";
$article = new Articles();
$results = $article->get();

session_start();
//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	header('location:log-in.php');
}
 
include_once('User.php');
 
$user = new User();
 
//fetch user data
$row = $user->find($_SESSION['user']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<header>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-light bg-light fixed-top  p-3 mb-5 bg-white">
                <a class="navbar-brand" href="./index.php">Dashboard</a>
                <a href="./logout.php" name=logout class="btn btn-danger">logout</a>
            </nav>
        </div>
    </div>
</div>
</header>
<body class="pt-5">

<div class="container mt-5  py-3">
    <div class="row d-flex align-items-center">
        <div class="col">
            <h4>Articles</h4>
        </div>
        <div class="col-auto">
            <a href="./add.php" class="btn btn-primary">Add Article</a>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5 p-3 pt-0">
                
                <table id="example" class="table table-hover w-100">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Content</th>
                                <th>date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($results as $key=>$result){ ?>
                                <tr data-id="<?= $result['id']; ?>">
                                <td><?= $result['title']; ?></td>
                                <td><?= $result['author']; ?></td>
                                <td><?php if (strlen($result['content']) > 35)
                                    echo  substr(urldecode($result['content']), 0, 30) . '...';  ?></td>
                                <td><?= $result['date']; ?></td>
                                <td>
                                    <a  href="./edite.php?id=<?= $result['id']; ?>"  class="btn btn-primary">Update</a>
                                    <button  onclick="deleteUser(<?= $result['id']; ?>)" class="btn btn-danger">Delete</button>
                                </td>
                                </tr>
                            <?php }?>
                                    </td>
                                </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Content</th>
                                <th>date</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="./js/main.js"></script>

</body>
</html>