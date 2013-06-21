<?php

/*-------------------------------------------------------------------------------------

TABLE OF CONTENTS

- Sidebar Stuff

-------------------------------------------------------------------------------------*/

// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
  register_sidebar(array('name'=> $sidebar,
    'before_widget' => '<hr class="show-for-small"><div class="products-link-block large-12  small-12 column"><div id="%1$s" class="s9999 products-link-extension fl %2$s"><div class="rgtcont pl98g pr98g products-link-content content-sec fl">',
    'after_widget' => '</div></div></div>',
    'before_title' => '<h4 class="subheader">',
    'after_title' => '</h4>'
  ));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
  register_sidebar(array('name'=> $sidebar,
    'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
    'after_widget' => '</article>',
    'before_title' => '<h6><strong>',
    'after_title' => '</strong></h6>'
  ));
}
?>