<?php
class info extends ACore {
	
	public $page_title = 'Информация';
	
	public function get_content() {
			
		$result = $this->m->get_info_content();
		return $result;
	
	}

}
?>