<?php

/*-------------------------------------------------------------------------------------

TABLE OF CONTENTS

- Hero Background Image 
- LKBG Head Style 
- Hero Text Block 
- Loading Balls 
- Content Header Function 
- Background ACF Declaration 
- Stretch Background Image 
- Post Style Header Call 

-------------------------------------------------------------------------------------*/

function heroBackgroundImage($url){
    echo '#masthead-photo { background: url("' . $url . '") center center no-repeat #111 !important; }';
}
// End heroBackgroundImage()


function lkbg_head_style(){
  $linkedinIcon = get_field('linkedin_icon', 'option');
  $facebookIcon = get_field('facebook_icon', 'option');
  
  function social_icon_style($selector, $url){
    echo ' .' . $selector . '{ background: url("' . $url . '") center center; }';
  } ?>
  
  <style type="text/css">
    <?php
      social_icon_style('linkedin', $linkedinIcon);  
      social_icon_style('facebook', $facebookIcon);  
    ?>

  <?php 

    if (is_page('home') ):

      $image = wp_get_attachment_image_src( get_post_thumbnail_id( 36 ), 'single-post-thumbnail' );    
      echo heroBackgroundImage($image[0]);

    endif;
  
  ?>

  </style>

    <!-- <img src="<?php //echo $url ?>" alt="" id="headerImage" style="display: none;"> -->

  <?php
}
// End lkbg_head_style()

function header_text_block_template($content) {
  echo '<div> <h1 class="text-left hero-text">' . $content . '</h1></div>';
}

function hero_text_block(){

    
    if (is_post_type_archive('success-story')):

      $hero_text_content = get_field('archive_success_story_head', 'option');
      header_text_block_template ($hero_text_content);

    elseif  (is_category('press-release') ):    
      $hero_text_content = get_field('blog-category_press_release_head', 'option');
      header_text_block_template ($hero_text_content);   
    elseif  (is_category('event-appearances') ):    
      $hero_text_content = get_field('blog-category_event_appearance_head', 'option');
      header_text_block_template ($hero_text_content);   
    elseif  (is_category('industry-news') ):     
      $hero_text_content = get_field('blog-category_industry_news_head', 'option');
      header_text_block_template ($hero_text_content);
    elseif  (is_category('blog') ):     
      $hero_text_content = get_field('blog-category_blog_text', 'option');
      header_text_block_template ($hero_text_content);

    elseif (get_field('hero_title_line_1')):

      $hero_text_content = get_field('hero_title_line_1');
      header_text_block_template ($hero_text_content);

    else:

      $hero_text_content = get_field('blog_all_post_feed_head', 'option');
      header_text_block_template ($hero_text_content);

    endif;
}
// End hero_text_block()

function loading_balls(){
    echo '<div class="windows8" id="windows8">';
    for ( $i = 0; $i < 5; $i++ ){
      echo '<div class="wBall" id="wBall_' . $i . '">';
      echo '<div class="wInnerBall"></div>';
      echo '</div>';
    }
  ?> 
  </div>
<?php }
// End loading_balls()

function content_header_function(){ ?>
  <div class="content hero-row row">
    <div class="main large-12 masthead-background"> 
      <?php loading_balls(); ?>
      <div class="masthead-photo h300" id="masthead-photo">
        <div class="s9999 masthead-photo-extension image-wrapper" id="masthead-photo-extension">
          <div class="masthead-photo-content" id="masthead-photo-content">
            <?php
            
            if(is_page('home')){
              if(get_field('home_section_title')){
                echo '<div class="text-center"> <h1 class="text-center hero-text">' . get_field('home_section_title') . '</h1><br>';
              }
              if(get_field('hero_para_1')){
                echo '</div>';
              }
            }
            else {
              hero_text_block(); 
            }
            ?>
          </div>  
        </div>
      </div>
    </div>
  </div>  
  <?php
}
//End content_header_function()

function postHeaderStyleCall(){

  if(is_page()):
    $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );
  endif;
  ?>
  <style type="text/css">
    .masthead-photo {
      background: url("<?php echo $image[0]; ?>") center center no-repeat #FAF8F6;
    }
    <?php
      if ( get_field('background_2000')){
        echo '.masthead-photo{ background-size: 2000px; }';
      }
    ?>
  </style>

  <?php
}

function inlineCSScall(){
  
  if (has_post_thumbnail() ):
  $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); 
  else:
    
  endif;

  echo '<style type="text/css">';
  echo '.masthead-photo { background: url("';
  echo $image[0];
  echo '") center center no-repeat #FAF8F6;';
  echo '}';
  echo '</style>';
}

function defaultNewsHeader(){

  $url = get_field('default_-_single_post_-_hero_image', 'option');
  heroBackgroundImage($url);
}

function archiveConditionalStyleCalls(){

   if (is_category('press-release') ):    
      $url = get_field('blog-category_press_release_image', 'option');
      heroBackgroundImage($url);   
    elseif  (is_category('event-appearances') ):    
      $url = get_field('blog-category_event_appearance_image', 'option');
       heroBackgroundImage($url);    
    elseif  (is_category('industry-news') ):     
      $url = get_field('blog-category_industry_news_image', 'option');
      heroBackgroundImage($url);
    elseif  (is_category('blog') ):     
      $url = get_field('blog-category_blog_image', 'option');
      heroBackgroundImage($url);
    else :   
      defaultNewsHeader(); 
    endif;
}

?>