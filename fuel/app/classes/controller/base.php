<?php

namespace Controller;

class Base extends \Controller_Template{
    public function before(){
        parent::before();
        $this->template->header = \View::forge('partial/header');
		$this->template->footer = \View::forge('partial/footer');;
    }
}