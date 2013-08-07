<?php
/**
* The template used for displaying page content in page.php
*
* @package WordPress
* @subpackage NARGA Framework
* @since NARGA Framework 1.2
*/
?>


<div class="row">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section class="entry-content">
        <div class="large-12 column large-centered mt3em">
          <div class="column mt3em">


            <?php while (have_posts()) : the_post(); ?>
            <h2>Marketing Services</h2>
            <p>Through marketing services, localization, translation and reporting, AdsYolo ensures increased awareness and downloads for brands and app publishers-developers.</p>
            <div class="section-container auto" data-section>
              <section>
                <p class="title"><a href="#section1">App Distribution</a></p>
                <div class="content" data-slug="section1">
                  <div class="section-container auto" data-section>
                    <section>
                      <p class="title" data-section-title><a href="#section2-1">3rd-Party App Stores</a></p>
                      <div class="content" data-section-content>
                        <h3>3rd-Party App Stores</h3>
                        <p>We assist with the uploading and optimizing of apps on popular 3rd-party sites: Eg, Baidu, SnapPea, DCN and more. This list is actively updated.</p>
                      </div>
                    </section>
                    <section>
                      <p class="title" data-section-title><a href="#section2-2">Localization and Translation</a></p>
                      <div class="content" data-section-content>
                        <h3>Localization and Translation</h3>
                        <p>Title, in-app verbiage and descriptions. Chinese natives create the best possible localized content and design to match. AdsYolo will assume the cost of 200 words translated into Mandarin; advertiser will be responsible for any additional cost, $.20 a word.</p>
                      </div>
                    </section>
                    <section>
                      <p class="title" data-section-title><a href="#section2-3">SMS Push Campaigns</a></p>
                      <div class="content" data-section-content>
                        <h3>SMS Push Campaigns</h3>
                        <p>A recent single text blast for developer Addiktive resulted in 27,000 downloads for its Bubble Shooter 3.0 gaming app.</p>
                      </div>
                    </section>
                    <section>
                      <p class="title" data-section-title><a href="#section2-4">Cross-Promotion</a></p>
                      <div class="content" data-section-content>
                        <h3>Cross-Promotion</h3>
                        <p>AdsYolo will strategically cross-promote with developers to generate more downloads and increase brand and app exposure.</p>
                      </div>
                    </section>
                  </div>
                </div>
              </section>
              <section>
                <p class="title"><a href="#section1">Brand Management</a></p>
                <div class="content" data-slug="section1">
                  <div class="section-container auto" data-section>
                    <section>
                      <p class="title" data-section-title><a href="#section1-1">Social Media</a></p>
                      <div class="content" data-section-content>
                        <h3>Social Media</h3>
                        <p>AdsYolo can create accounts on all the important social mediums in China, such as Sina Weibo, RenRen, Tencent Weibo and Qzone. We leverage our experience within the Chinese social media ecosystem and maximize the efficacy of social media marketing campaigns. </p>
                      </div>
                    </section>
                    <section>
                      <p class="title" data-section-title><a href="#section1-2">App Forum Postings</a></p>
                      <div class="content" data-section-content>
                        <h3>App Forum Postings</h3>
                        <p>AdsYolo manages brand engagement on Internet forums to increase market presence. Top forums include WeiPhone, Gfan and Cocoa China.</p>
                      </div>
                    </section>
                    <section>
                      <p class="title" data-section-title><a href="#section1-3">Forum Management</a></p>
                      <div class="content" data-section-content>
                        <h3>Forum Management</h3>
                        <p>The Internet-savvy population in China prefers to ask and answer questions online. Users go to sites like Baidu Zhidao, Zhihu, WenWen and SoSo to express their opinions. AdsYolo will monitor these bulletin boards for inquiries about the developer’s app and respond promptly and appropriately.</p>
                      </div>
                    </section>
                    <section>
                      <p class="title" data-section-title><a href="#section1-4">Press Releases</a></p>
                      <div class="content" data-section-content>
                        <h3>Press Releases</h3>
                        <p>Disseminated to local, national and global trade and consumer publications, editors, publishers, critics, reporters and bloggers.</p>
                      </div>
                    </section>
                  </div>
                </div>
              </section>
            </div>



            <?php //the_content(); ?>
          </div>
        </div>
        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'narga'), 'after' => '</p></nav>' )); ?>
      </section>
  </article>  
</div>


<?php endwhile; // End the loop ?>


<?php // get_template_part( 'module-call-to-action-bar'); ?>

<?php get_template_part( 'module-page-snip'); ?>

<?php get_template_part( 'module-blog-snip'); ?>


<!-- blog insert -->

<!-- service crosssell -->
<?php // get_template_part( 'module-page-additional'); ?>

<!-- action bar -->

<!-- company crosssell -->
