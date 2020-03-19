<?php get_header() ?>
<?php the_post() ?>
      <div class="main-content">
        <div class="content-wrapper">
          <div class="content">
            <div class="article-title title-page"><?php the_title() ?></div>
            <?php if (has_post_thumbnail()): ?>
                <div class="article-image"><?php the_post_thumbnail('large') ?></div>
            <?php endif; ?>
            <div class="article-info">
              <div class="post-date"><?php the_time('d.m.Y') ?></div>
            </div>
            <div class="article-text"><?php the_content() ?></div>
          </div>
          <?php get_sidebar() ?>
        </div>
      </div>
<?php get_footer() ?>