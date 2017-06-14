<?php

/**
 * Created by PhpStorm.
 * User: linyu
 * Date: 2017/06/15
 * Time: 1:13
 */
class Pre_list extends CI_Model
{
    private $table = 'pre_list';

    public function __construct()
    {
    }

    public function get_list()
    {
        $query = $this->db->get($this->table, 10);
        return $query->result_array();
    }

    public function add_order($table_id, $food_id)
    {
        $create_date = date('Y-m-d H:i:s');

        $sql = $this->db->insert_string($this->table, compact('table_id', 'food_id', 'create_date'));
        $this->db->query($sql);
    }
}