<?php
class view extends ACore {
	
	public function get_content() {


        echo  '<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background" id="content5-11"
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
        <div style=\'margin:2%;border-bottom:2px solid #c2c2c2; color: whitesmoke;\'>';

		//echo '<div id="main">';
		
		if(!$_GET['id_text']) {
			echo 'Не правильные данные для вывода статьи';
		}
		else {
			$id_text = (int)$_GET['id_text'];
			if(!$id_text) {
				echo 'Не правильные данные для вывода статьи';
			}
			else {
				$query = "SELECT title,text,date,id,img_src FROM articles WHERE id='$id_text'";
				$result = mysql_query($query);
				if(!$result) {
					exit(mysql_error());
				}
				$row = mysql_fetch_array($result,MYSQL_ASSOC);
				/*printf("<p style='font-size:18px'>%s</p>
						<p>%s</p>
						<p><img style='margin-right:5px' width='150px' align='left' src='%s'>%s</p>"
						,$row['title'],$row['date'],$row['img_src'],$row['text']);*/
                printf("<p style='font-size:18px; color: limegreen;'>%s</p>
						<p>%s</p>"
                    ,$row['title'],$row['text']);
			}
		}
		echo '</div>
			</div></section>';
	}
}
?>