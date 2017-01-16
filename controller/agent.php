<?php
class agent extends ACore {
	
	public $page_title = 'Таможенный представитель';

	public function get_content() {
			
		$result = $this->m->get_main_content();
		return $result;
	
	}

}
?>