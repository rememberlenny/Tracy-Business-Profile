<?php

/*-------------------------------------------------------------------------------------

TABLE OF CONTENTS

- Reverie Entry Meta
- Excerpt Length

-------------------------------------------------------------------------------------*/

// return entry meta information for posts, used by multiple loops.
function reverie_entry_meta() {
  echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'reverie'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
  echo '<p class="byline author">'. __('Written by', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
}

//
// Excerpt length
//
 
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

function replace_excerpt($content) {
       return str_replace('[...]',
               '<a href="'. get_permalink() .'">...Continue Reading</a>',
               $content
       );
}
add_filter('the_excerpt', 'replace_excerpt');

?>
