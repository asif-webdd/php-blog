<?php require_once "templates/header.php"; ?>
<!--/header-->
<div class="content">
	 <div class="container">
		 <div class="content-grids">
			 <div class="col-md-8 content-main">
				 <div class="content-grid">
                    <?php
                        $query = " SELECT * FROM posts";
                        $posts = mysqli_query($con, $query);

                        while($post = mysqli_fetch_assoc($posts)){
                    ?>
					 <div class="content-grid-info">
						 <img src="images/post1.jpg" alt=""/>
						 <div class="post-info">
                             <h4><a href="single.php?id=<?php echo $post['post_id']; ?>"><?php echo $post['post_title']; ?></a>  <?php echo date('F j, Y', strtotime($post['post_date'])); ?> / 27 Comments</h4>
                             <p><?php echo $post['post_excerpt']; ?></p>
                             <a href="single.php?id=<?php echo $post['post_id']; ?>"><span></span>READ MORE</a>
						 </div>
					 </div>
					 <?php } ?>

				 </div>
			  </div>

             <!-- Sidebar -->
            <?php require_once "templates/sidebar.php"; ?>
<!---->
<?php require_once "templates/footer.php"; ?>

	
