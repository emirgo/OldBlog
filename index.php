<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>doeppler</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css"> -->

</head>

<body>

<?php include('nav.php') ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Welcome.</h1>
            <span class="subheading">You have successfully installed this software.</span>
            <span class="subheading">Congratulations!</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <?php
      try {

        $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
        while($row = $stmt->fetch()){
          
          echo '<div class="post-preview">';
            echo '<h2 class="post-title"><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
            echo '<p class="post-meta">Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
            echo '<p class="post-subtitle">'.$row['postDesc'].'</p>';       
            echo '<p class="post-meta"><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';       
          echo '</div>';
          echo  '<hr><br>';

        }

      } catch(PDOException $e) {
          echo $e->getMessage();
      }
    ?>
        <!-- Pager -->
       <!--  <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div> -->
        <br>
      </div>
    </div>
  </div>

  <hr>

  <?php include('footer.php') ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
