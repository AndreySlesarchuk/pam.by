<?php

class store extends ACore
{
    public $page_title = 'Таможенный склад';
    public $page_title_full = "Таможенный склад Парк Авеню Моторс";
    public $page_keywords = "таможенный склад, декларант, агент, логистика, таможенный агент, таможенный брокер, таможенные услуги, декларант, Минск, РБ, Беларусь";
    public $page_description = "Таможенный склад, таможенные услуги, логистика Минск, Беларусь";

    public function get_content()
    {
        $result = $this->m->get_main_content();
        return $result;
    }
}

?>