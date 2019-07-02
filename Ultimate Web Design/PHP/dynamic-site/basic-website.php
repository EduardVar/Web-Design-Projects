<?php
include("includes/header.php");
include("includes/posts.php");
?>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-3 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>

      <?php foreach ($posts as $post) { ?>
        <div class="blog-post">
          <h2 class="blog-post-title"><?php echo $post['post-title']; ?></h2>
          <p class="blog-post-meta"><?php echo $post['post-date']; ?>
          by <?php echo $post['post-author']; ?></p>

          <?php echo $post['post-content']; ?>
        </div><!--/.blog-post -->
      <?php } ?>



      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    <?php include("includes/sidebar.php"); ?>

  </div><!-- /.row -->

</main><!-- /.container -->

<?php include("includes/footer.php"); ?>
