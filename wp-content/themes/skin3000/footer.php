<footer class="main-footer">
    <div class="content-footer">
        <?php
        wp_nav_menu([
            'theme_location' => 'botmenu',
            'container_class' => 'bottom-menu',
            'menu_class' => 'b-menu__list',
            'depth' => 1,
        ]);
        ?>
        <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool <?=date('Y');?></a></div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->
<?php wp_footer() ?>
</body>
</html>