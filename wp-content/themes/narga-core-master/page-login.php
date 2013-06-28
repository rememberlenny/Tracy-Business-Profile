<?php
/*
Template Name: Login Page
*/
?>
<?php get_header(); ?>

<div class="column">
  <div class="">
    
    <div class="large-centered large-5 column">
      <div id="archive">
      <h2><?php the_title(); ?></h2>

      <form name="loginform" id="loginform" action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
        <p>
          <label>Username<br />
          <input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" /></label>
        </p>
        <p>

          <label>Password<br />
          <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" /></label>
        </p>
        <p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> Remember Me</label></p>
        <p class="submit">
          <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" />
          <input type="hidden" name="redirect_to" value="<?php echo get_option('home'); ?>/wp-admin/" />

          <input type="hidden" name="testcookie" value="1" />
        </p>
      </form>

      <p id="nav">
      <a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a>
      </p>
      </div>
    </div>
  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>