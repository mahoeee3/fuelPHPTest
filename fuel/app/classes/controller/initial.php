<?php

namespace Controller;

class Initial extends \Controller\Base{
    public function before()
    {
        parent::before();
    }

    public function action_index()
	{
        return \Response::forge(\View::forge('initial/index'));
	}
}