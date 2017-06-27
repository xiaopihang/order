<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends BaseController
{
    public function display()
    {
        $this->view('menu/display');
    }
}
