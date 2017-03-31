
<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background" id="content5-11"
         style="background-image: url(./files/images/background/pam-info.jpg);">

    <div class="mbr-section__container container mbr-section__container--first">
        <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(40, 50, 78);"></div>
        <div class="mbr-header mbr-header--wysiwyg row" style="color: white; z-index: 5;">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text">

                    </h3>
            </div>
        </div>
    </div>

    <div class="mbr-section__container container mbr-section__container--middle">
        <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(40, 50, 78); z-index: -5;"></div>
        <div class="row">
                 <?php foreach($content as $row) :?>
                    <div style='margin:2%;border-bottom:2px solid #c2c2c2; color: whitesmoke;'>
                        <p style='font-size:18px; color: limegreen;'><?php echo $row['title']?></p>
                        <p style="text-align: justify"> <?php echo $row['description']?></p>
                        <p><a style='color:cyan' href='view/<?php echo $row['id']?>/'>Читать далее...</a></p>

                    </div>
                <?php endforeach;?>
        </div>
    </div>

</section>
