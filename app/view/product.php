<?php

use app\Model\Product;
use app\Model\Comment;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <link rel="stylesheet" type="text/css" href="public/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<header class="header">
  <div class="container">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#">Admin</a>
      </li>
    </ul>
  </div>
</header>
  <div class="container-fluid">
    <div class="row">
      <div class="column col-lg-4 col-md-6">
          <div class="grid-container">
          <?php
                $product = new Product();
                $products = $product->select();
                foreach($products as $p):
                ?>
            <div class="grid-item">
                  <a target="_blank" href="<?= $p['image']  ?>">
                    <img src="<?= $p['image']  ?>" alt="Cinque Terre" class="img" width="100" height="150">
                  </a>
                  <div class="desc"><h2><?= $p['title']  ?></h2></div>
                  <p><?= $p['description']  ?></p>
            </div>
            <?php endforeach; ?> 
        </div>
      </div>
  </div>
<br>
  <div class="container">
		<div class="row">
			<?php
				$comment = new Comment();
        $rows  = $comment->select();
        foreach($rows as $row): ?>
				<div class="card mt-1 mb-1">
					<div class="card-body">
					<h4 class="card-title"><?= $row['name']; ?></h4>
  					  <h6 class="card-subtitle mb-2 text-muted"><?= $row['email']; ?></h6>
						<p class="card-text"><?= $row['text'] ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
  </div>
  <br>
  <div class="container mt-5 mb-5 border p-3">
    <div class="row">
        <div class="col-12">
      
            <h3>Leave your comment</h3>
            <form action="app/view/insert.php" method="post" id="form">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="text" name="text" rows="3" placeholder="Enter text..."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit" name="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </form>

         

        </div>
    </div>
</div>

</body>
</html>