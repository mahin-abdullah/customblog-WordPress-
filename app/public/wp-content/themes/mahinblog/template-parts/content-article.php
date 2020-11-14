<div class="container">
				<header class="content-header">
					<div class="meta mb-3"><span class="date">
            <?php $post_date = get_the_date('dS M Y');
             echo $post_date;
            ?></span>
            <?php 
              the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>')
            ?>
           
            <a href="#comments"><i class='fa fa-comment'></i><?php echo comments_number(); ?></a></span></div>
				</header>

<?php  
  the_content();
?>

<?php
  comments_template();
?>

</div>