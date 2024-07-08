<?php
class GetDataTablemodel extends CI_Model
{
    public function form_dropdown_tb_training($curriculum_id,$year)
    {
        $sql = "SELECT * FROM tb_training WHERE curriculum_id = '$curriculum_id' ORDER BY training_id ASC ";
        $tb_training = $this->db->query($sql)->result_array();

        $array = [];
        $cc=1;
        foreach ($tb_training as $key => $item) {
            $id = $item['training_id'];
            $st = ($item['showStatus']==1)? "":"";
            $array[$id] = 'ชุดฝึกอบรมที่ '.$cc.' '.$item['training_name'].' / '.$year.' '.$st;
            $cc++;
        }

        return $array;
    }

    public function form_dropdown_tb_teaching_type()
    {
        $sql = "SELECT * FROM tb_teaching_type WHERE showStatus = '1' ORDER BY teaching_type_id ASC ";
        $tb_teaching_type = $this->db->query($sql)->result_array();

        $array = [];
        $cc=1;
        foreach ($tb_teaching_type as $key => $item) {
            $id = $item['teaching_type_id'];
            $array[$id] = $item['teaching_type_name'];
            $cc++;
        }

        return $array;
    }

    public function form_dropdown_tb_card_type()
    {
        $sql = "SELECT * FROM tb_card_type  ORDER BY card_type_id ASC ";
        $tb_card_type = $this->db->query($sql)->result_array();

        $array = [];
        foreach ($tb_card_type as $key => $item) {
            $id = $item['card_type_id'];
            $array[$id] = $item['card_type_name'];
        }

        return $array;
    }

    public function form_dropdown_tb_prefix_name()
    {
        $sql = "SELECT * FROM tb_prefix_name WHERE  prefix_name_id IN('005', '002', '004','54','55','56','504','505','506','507','508')ORDER BY prefix_name_id ASC ";
        $tb_prefix_name = $this->db->query($sql)->result_array();

        $array = [];
        foreach ($tb_prefix_name as $key => $item) {
            $id = $item['prefix_name_id'];
            $array[$id] = $item['prefix_name_full_th'];
        }

        return $array;
    }

    public function form_dropdown_tb_religion()
    {
        $sql = "SELECT * FROM tb_religion ORDER BY religion_id ASC ";
        $tb_religion = $this->db->query($sql)->result_array();

        $array = [];
        foreach ($tb_religion as $key => $item) {
            $id = $item['religion_id'];
            $array[$id] = $item['religion_name'];
        }

        return $array;
    }

    public function form_dropdown_tb_education_level()
    {
        $sql = "SELECT * FROM tb_education_level ORDER BY education_level_id ASC ";
        $tb_education_level = $this->db->query($sql)->result_array();

        $array = [];
        foreach ($tb_education_level as $key => $item) {
            $id = $item['education_level_id'];
            $array[$id] = $item['education_level_name'];
        }

        return $array;
    }

    public function form_dropdown_tb_education_background($education_level_id)
    {
        $sql = "SELECT * FROM tb_education_background WHERE education_level_id = '$education_level_id' ORDER BY education_background_id ASC ";
        $tb_education_background = $this->db->query($sql)->result_array();

       /* $array = [];
        foreach ($tb_education_background as $key => $item) {
            $id = $item['education_background_id'];
            $array[$id] = $item['education_background_code'].' '.$item['education_background_name'];
        }*/

        return $tb_education_background;
    }

    public function load_province()
    {
        $sql 	= "SELECT province_id, province_name FROM province  ORDER BY province_name DESC ";
        $provices = $this->db->query($sql)->result_array();

        return $provices;
    }

    public function form_dropdown_tb_bank()
    {
        $sql = "SELECT * FROM tb_bank ORDER BY bank_id ASC ";
        $tb_bank = $this->db->query($sql)->result_array();

        $array = [];
        foreach ($tb_bank as $key => $item) {
            $id = $item['bank_id'];
            $array[$id] = $item['bank_name'];
        }

        return $array;
    }
}