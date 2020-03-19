<?php get_header() ?>
<?php the_post() ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <h1 class="title-page"><?php the_title() ?></h1>
                <p><img src="<?=get_stylesheet_directory_uri();?>/img/fly1_380x300.png" alt="Image" class="alignleft">Например, рейсы с пересадками стоят дешевле, чем прямые рейсы. Однако, в отдельных случаях пересадка может длиться не час-два, а все 11 часов или даже сутки. То есть, вам придется дополнительный день провести в промежуточном аэропорту, а это очень вымотает. Следите, чтобы пересадка была не слишком короткой, но и не очень длинной, оптимально 2-3 часа.</p>
                <p>Например, рейсы с пересадками стоят дешевле, чем прямые рейсы. Однако, в отдельных случаях пересадка может длиться не час-два, а все 11 часов или даже сутки. То есть, вам придется дополнительный день провести в промежуточном аэропорту, а это очень вымотает. Следите, чтобы пересадка была не слишком короткой, но и не очень длинной, оптимально 2-3 часа.</p><img src="<?=get_stylesheet_directory_uri();?>/img/fly2_380x300.png" alt="Image" class="alignright">
                <ol>
                    <li>
                    При заполнении формы бронирования/покупки внимательно
                    вписывайте все свои данные. После того, как все заполните, перепроверьте:
                    все номера личных документов до цифр, имя, фамилию - до букв, чтобы
                    все было указано точь-в-точь, как в вашем загранпаспорте.
                    </li>
                    <li>
                    Далее вам на e-mail придет "Подтверждение бронирования".
                    Это еще не подтверждение покупки, а просто сведения о бронировании!
                    </li>
                    <li>
                    Вторым электронным документом, пришедшим вам на e-mail,
                    будет "Информация о платеже" - она говорит о том, что деньги сняты
                    с вашей карты и переведены в авиакомпанию.
                    </li>
                </ol>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
<?php get_footer() ?>