<?php 
if(isset($_GET['id'])){
  $id = $_GET['id'];
  require "./articles.php";
$article = new Articles();
$oldarticle = $article->find($id);

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
    <title>Edite article</title>
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
    <div id="update-modal">
        <div class="update-modal container mt-5">
          <form class="col"  action="./update-article.php" method="post" id="edit">
          <?php
          if(isset($_GET['id'])){?>
            <input type="hidden" name="id" value="<?= $_GET['id'];?>">
          <?php }
          ?>
          <div class="form-group">
                <h2>Edite Article:</h2>
          </div>
          <div class="form-group">
            <input id="edit-title" placeholder="Title" name="title" type="text" value="<?=$oldarticle['title']
?>" class="form-control">
          </div>
      
          <div class="form-group">
            <input id="edit-author" placeholder="Author" name="author" type="text" value="<?=$oldarticle['author']
?>" class="form-control">
          </div>
          <div class="form-group">
            <textarea id="edit-content" placeholder="Content" name="content" type="text" style="min-height:300px;" class="form-control"><?=urldecode($oldarticle['content'])?>" </textarea>

          </div>
          <div class="form-group">
            <input id="edit-date" placeholder="xx/xx/xxxx" name="date" type="text" value="<?=$oldarticle['date']
?>" class="form-control">
          </div>
            <div class="form-group d-flex flex-row-reverse">
            <button class="btn btn-primary " name="submit" type="submit">Save</button>
          </div>
         </form>
        </div>
      </div>   


    <script src="./js/main.js"></script>
</body>
</html>