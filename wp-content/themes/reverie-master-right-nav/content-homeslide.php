<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>
<style>
h4.subheader{
  display:inline-block;
  border-top: 5px solid #9a373f;
  color: #333;
}
#sidebar h4.subheader{
  border-top:none !important;
}
  .orbit-next, .orbit-prev, .orbit-slide-number, .orbit-timer{ display:none; }
  .masthead-photo {
overflow: hidden;
width: 100%;
border-right: none;
-webkit-box-shadow: inset 0px 0px 20px black;
box-shadow: inset 0px 0px 20px black;
height:200px;
}
#masthead-photo{

}
@media only screen and (min-width: 1000px){
.home .masthead-photo-content {
margin-top: 60px;
}
}
</style>	
 <li class="active text-left article-title" data-orbit-slide="headline-1">
   <div id="post-<?php the_ID(); ?>">
      <div class="large-12 small-12 column pl98">
       <header>
        <div class="row">
        <p style="margin-top:0em;">
          <a href="<?php the_permalink(); ?>" data-orbit-slide="headline-2" class="secondary">
            <?php the_title(); ?>
          </a>
        </p> 
        </div>
    	</header>
    		<div class="row">
        <p>
          <?php
            $excerpt = get_the_excerpt();
            echo string_limit_words($excerpt,25);
          ?>... 
          <a href="<?php the_permalink(); ?>">Read More ›</a>
        </p>  
        </div>
    	<footer>
    		<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
    	</footer>
    </div>
  </div>
</li> 