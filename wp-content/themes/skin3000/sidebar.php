<!-- sidebar-->
<div class="sidebar">
    <?php if ($tags = get_terms(['taxonomy' => 'post_tag', 'hide_empty' => false])) :?>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Теги</div>
        <div class="sidebar-item__content">
            <ul class="tags-list">
                <?php foreach($tags as $tag) : ?>
                    <li class="tags-list__item">
                        <a href="<?=get_term_link($tag->term_id);?>" class="tags-list__item__link">
                            <?=$tag->name; ?>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <?php endif;?>
    <?php if ($cats = get_terms(['taxonomy' => 'category', 'hide_empty' => false])) :?>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <?php foreach($cats as $cat): ?>
                    <?php if ($cat->parent == 0): ?>
                        <li class="category-list__item">
                            <a href="<?=get_term_link($cat->term_id);?>" class="category-list__item__link">
                                <?=$cat->name; ?> (<?=$cat->count; ?>)
                            </a>
                            <ul class="category-list__inner">
                                <?php foreach($cats as $catSub): ?>
                                    <?php if ($catSub->parent == $cat->term_id): ?>
                                        <li class="category-list__item">
                                            <a href="<?=get_term_link($catSub->term_id);?>" class="category-list__item__link">
                                                <?=$catSub->name; ?> (<?=$catSub->count; ?>)
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach;?>
                            </ul>
                        </li>
                    <?php endif; ?>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <?php endif;?>
    <?php echo register_block_core_calendar();?>
</div>