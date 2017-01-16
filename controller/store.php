<?php
class store extends ACore {
	
	public $page_title = 'Таможенный склад';
	
	public function get_content() {
			
		$result = $this->m->get_main_content();
		return $result;
	
	}

}
?>