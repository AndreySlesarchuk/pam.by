<?php
class operator extends ACore {
	
	public $page_title = 'Уполномоченный экономический оператор';
	
	public function get_content() {
			
		$result = $this->m->get_store_content();
		return $result;
	
	}

}
?>