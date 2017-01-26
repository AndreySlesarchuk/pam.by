<?php
class operator extends ACore {
	
	public $page_title = 'Уполномоченный экономический оператор';

    public $page_title_full = "Уполномоченный экономический оператор Парк Авеню Моторс";
    public $page_keywords = "Уполномоченный экономический оператор, агент, таможенные услуги, логистика, Минск, РБ, Беларусь";
    public $page_description = "Уполномоченный экономический оператор, агент, таможенные услуги, логистика Минск, Беларусь";
	
	public function get_content() {
			
		$result = $this->m->get_store_content();
		return $result;
	
	}

}
?>