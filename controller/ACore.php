<?php

abstract class ACore
{

    public $page_title = "Парк Авеню Моторс";
    public $page_title_full = "Парк Авеню Моторс - таможенный представитель, декларант, агент, брокер, таможенные услуги, логистика Минск";
    public $page_keywords = "таможенный представитель, декларант, таможенный агент, таможенный брокер, таможенные услуги, декларант, Минск, РБ, Беларусь";
    public $page_description = "Таможенный представитель, декларант, агент, брокер, таможенные услуги, логистика Минск, Беларусь";

    protected $m;

    public function __construct()
    {
        $this->m = new model();;
    }

    protected function get_header()
    {
        return TRUE;
    }

    protected function get_left_bar()
    {
        $result = $this->m->get_left_bar();
        return $result;
    }

    protected function get_menu()
    {
        $row = $this->m->menu_array();
        return $row;
    }


    protected function get_footer()
    {
        $row = $this->m->menu_array();
        return $row;
    }


    public function get_body($tpl)
    {
        //if($_POST || $_GET['del']) {
        //	$this->obr();
        //}
        $page_title = $this->page_title;
        $this->get_header();
        $left_bar = $this->get_left_bar();
        $menu_top = $this->get_menu();
        $content = $this->get_content();
        $footer = $this->get_footer();
        //$tpl - template
        include "tpl/index.php";
    }

    abstract function get_content();

}

?>