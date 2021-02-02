<?php require_once "templates/header.php"; ?>

<!--/header-->
<div class="single">
	 <div class="container">
		  <div class="col-md-8 single-main">

              <?php
                if(isset($_GET['id'])){
                    $sp_id = $_GET['id'];
                }
                $query = "SELECT * FROM posts WHERE post_id = $sp_id";
                $sp_result = mysqli_query($con, $query);

                while ($spost = mysqli_fetch_assoc($sp_result)){

              ?>

			  <div class="single-grid">
					<img src="images/post1.jpg" alt=""/>
                    <h4><?php echo $spost['post_title']; ?></h4>
					<p><?php echo $spost['post_content']; ?></p>
			  </div>

              <?php } ?>

			 <ul class="comment-list">
		  		   <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
		  		   <li><img src="images/avatar.png" class="img-responsive" alt="">
		  		   <div class="desc">
		  		   <p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
		  		   </div>
		  		   <div class="clearfix"></div>
		  		   </li>
		  	  </ul>
			  <div class="content-form">
					 <h3>Leave a comment</h3>
					<form>
						<input type="text" placeholder="Name" required/>
						<input type="text" placeholder="Email" required/>
						<input type="text" placeholder="Phone" required/>
						<textarea placeholder="Message"></textarea>
						<input type="submit" value="SEND"/>
				   </form>
						 </div>
		  </div>

		 <?php require_once "templates/sidebar.php"; ?>
<!---->
<?php require_once "templates/footer.php"; ?>

	
