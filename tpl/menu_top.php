<section
        class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse"
        id="menubar">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand btn">
                        <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="index.php"><img
                                        class="mbr-navbar__brand-img mbr-brand__img" src="./files/images/pam-logo.png"
                                        alt="Park Avenue Motors"></a></span>
                        <span class="mbr-brand__name">
                            <a class="mbr-brand__name text-success atmm-brand_name"
                               href="#"><?php echo $page_title ?> </a></span>
                        </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span>
                </div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box btn mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze
                    mbr-buttons--right btn-decorator mbr-buttons--active">
                                <?php foreach ($menu_top as $item) : ?>
                                    <li class='mbr-navbar__item'><a class='mbr-buttons__link btn text-white atmm-image'
                                                                    href='<?php echo $item['name_menu'] ?>'>
                                            <img src=<?php echo $item['img_src'] ?>>
                                            <div class='atmm-image-caption'><?php echo $item['text_menu'] ?></div>
                                        </a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
