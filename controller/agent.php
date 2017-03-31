<?php
class agent extends ACore {

	public $page_title = 'Таможенный представитель';

    public $page_title_full = "Таможенный представитель Парк Авеню Моторс";
    public $page_keywords = "таможенный представитель, декларант, агент, таможенный агент, таможенный брокер, таможенные услуги, декларант, Минск, РБ, Беларусь";
    public $page_description = "Таможенный представитель, агент, декларант, брокер, таможенные услуги, логистика Минск, Беларусь";


    public function get_content() {
			
		$result = $this->m->get_main_content();
		return $result;
	
	}

}
?>