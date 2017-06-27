<?php

/**
 * Class: BaseController.php
 * Author: xiaopihang
 * Date: 2017/06/25
 */
class BaseController extends CI_Controller
{
    /**
     * 共通ヘッダーとフッター囲まれたビュー
     *
     * @param $page
     * @param $data
     */
    protected function view($page, $data = null)
    {
        $this->load->view('header');
        $this->load->view($page, $data);
        $this->load->view('footer');
    }

}