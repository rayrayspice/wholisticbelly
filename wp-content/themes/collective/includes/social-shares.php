<?php function addSocialShareButtons_projects($socialBox) { 
		global $post;
        setup_postdata($post);		
	if(!$socialBox):
		$socialBox = array();
	endif;?>

  
	<?php if(in_array("facebook",$socialBox)):?>
	<li>
		  <a href="http://www.facebook.com/share.php?u=<?php the_permalink();?>">
			<i class="fa fa-facebook"></i>
			<span>facebook</span>
		  </a>
	</li>
	<?php endif;?>
	<?php if(in_array('twitter',$socialBox)):?>
	<li>
	  <a href="http://twitter.com/home?status=<?php the_permalink();?>">
		<i class="fa fa-twitter"></i>
		<span>twitter</span>
	  </a>
	</li>
	<?php endif;?>
	<?php if(in_array('google',$socialBox)):?>
	<li>
	  <a href="https://plus.google.com/share?url=<?php the_permalink();?>">
		<i class="fa fa-google-plus"></i>
		<span>Google+</span>
	  </a>     
	</li>	  
	<?php endif;?>	
	<?php if(in_array('linkedin',$socialBox)):?>	
	<li>	
	  <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink();?>">
		<i class="fa fa-linkedin"></i>
		<span>LinkedIn</span>
	  </a>	
	</li>  
	<?php endif;?>	
	<?php if(in_array('pinit',$socialBox)):?>	
	<li>	
	  <a href="http://pinterest.com/pin/create/link/?url=<?php the_permalink();?>">
		<i class="fa fa-pinterest"></i>
		<span>Pinterest</span>
	  </a>
	</li>  
	<?php endif;?>
   
<?php } ?>
<?php function addSocialShareButtons_blog($socialBox) { 
		global $post;
        setup_postdata($post);		
	if(!$socialBox):
		$socialBox = array();
	endif;?>

  
	<?php if(in_array("facebook",$socialBox)):?>
	<li>
		  <a href="http://www.facebook.com/share.php?u=<?php the_permalink();?>">
		  	<span>facebook</span>
			<i class="fa fa-facebook"></i>
		  </a>
	</li>
	<?php endif;?>
	<?php if(in_array('twitter',$socialBox)):?>
	<li>
	  <a href="http://twitter.com/home?status=<?php the_permalink();?>">
		<span>twitter</span>
		<i class="fa fa-twitter"></i>
	  </a>
	</li>
	<?php endif;?>
	<?php if(in_array('google',$socialBox)):?>
	<li>
	  <a href="https://plus.google.com/share?url=<?php the_permalink();?>">
		<span>Google+</span>
		<i class="fa fa-google-plus"></i>
	  </a>     
	</li>	  
	<?php endif;?>	
	<?php if(in_array('linkedin',$socialBox)):?>	
	<li>	
	  <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink();?>">
		<span>LinkedIn</span>
		<i class="fa fa-linkedin"></i>
	  </a>	
	</li>  
	<?php endif;?>	
	<?php if(in_array('pinit',$socialBox)):?>	
	<li>	
	  <a href="http://pinterest.com/pin/create/link/?url=<?php the_permalink();?>">
		<span>Pinterest</span>
		<i class="fa fa-pinterest"></i>
	  </a>
	</li>  
	<?php endif;?>
   
<?php } ?>