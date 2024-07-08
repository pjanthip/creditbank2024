<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    private $_fields_data = array();

    public function __construct() {
        parent::__construct();
      //  if (!$this->is_logged_in()) {
      //      redirect('codegen/login');
      //  }
    }

    private function is_logged_in() {
        return $this->session->userdata('codegen_is_logged_in');
    }

    private function getField($table_name) {
        $fields = $this->db->field_data($table_name);
        $this->_fields_data = array();
        foreach ($fields as $field) {
            $this->_fields_data[] = $field->name;
        }
    }

    public function index() {
        //$table = $this->db->list_tables('hrm');
//        $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'njoys';";        
//        $query = $this->db->query($sql);
//        $table = $query->result_array();
//        sort($table);
        
        $sql = "SELECT schema_name
                    FROM information_schema.schemata";
        $schema_list = $this->db->query($sql)->result_array();
       // print_r($table);
        
       // $data['table'] = $table;
        $data['schema_list'] = $schema_list;
        $this->load->view('codegen/dashboard/main_view',$data);
    }
    
    public function table() {
        $tables = $this->db->list_tables();
        foreach ($tables as $table) {
            echo $table;
            echo "<br>";
        }
    }
    
    public function loadTable() {
        $schema_name = $this->input->post('schema_name');
        $data['schema_name'] = $schema_name;
        
        $this->load->view('codegen/dashboard/view_tables_view', $data);
    }                

    public function loadField() {
        $table_name = $this->input->post('table');
        $data['fields'] = $this->db->field_data($table_name);
        $this->load->view('codegen/dashboard/fields_view', $data);
    }

    public function loadController() {
        $data['author'] = $this->input->post('author');
        $data['table'] = $this->input->post('table');
        $table_name = $this->input->post('table');
//$data['fields'] = $this->db->list_fields($table_name);
        $this->getField($table_name);
        $data['fields'] = $this->_fields_data;
        //$this->load->view('codegen/dashboard/controller_view', $data);
        $this->load->view('codegen/dashboard/ajax_controller_view', $data);
    }

    public function loadModel() {
        $data['author'] = $this->input->post('author');
        $data['table'] = $this->input->post('table');
        $table_name = $this->input->post('table');
//$data['fields'] = $this->db->list_fields($table_name);
        $this->getField($table_name);
        $data['fields'] = $this->_fields_data;
        $this->load->view('codegen/dashboard/model_view', $data);
    }

    public function loadViewList() {
        $data['author'] = $this->input->post('author');
        $data['table'] = $this->input->post('table');
        $table_name = $this->input->post('table');
        $this->getField($table_name);
        $data['fields'] = $this->_fields_data;
        $this->load->view('codegen/dashboard/view_list_view', $data);
    }

    public function loadViewAddnew() {
        $data['author'] = $this->input->post('author');
        $data['table'] = $this->input->post('table');
        $table_name = $this->input->post('table');
        $this->getField($table_name);
        $data['fields'] = $this->_fields_data;
        $this->load->view('codegen/dashboard/ajax_view_addnew_view', $data);
    }

    public function loadViewEdit() {
        $data['author'] = $this->input->post('author');
        $data['table'] = $this->input->post('table');
        $table_name = $this->input->post('table');
        $this->getField($table_name);
        $data['fields'] = $this->_fields_data;
        $this->load->view('codegen/dashboard/ajax_view_edit_view', $data);
    }

    public function loadViewPreview() {
        $data['author'] = $this->input->post('author');
        $data['table'] = $this->input->post('table');
        $table_name = $this->input->post('table');
        $this->getField($table_name);
        $data['fields'] = $this->_fields_data;
        $this->load->view('codegen/dashboard/view_preview_view', $data);
    }
    
    public function loadViewPreviewModal() {
        $data['author'] = $this->input->post('author');
        $data['table'] = $this->input->post('table');
        $table_name = $this->input->post('table');
        $this->getField($table_name);
        $data['fields'] = $this->_fields_data;
        $this->load->view('codegen/dashboard/view_preview_modal_view', $data);
    }
    
    
    ///--------เพิ่มใหม่-----------///
    public function loadViewHeader() { 
        $this->load->view('codegen/dashboard/view_header_code_view');
    }
    
     public function loadViewNav() {
        $data['author'] = $this->input->post('author');
        $data['table'] = $this->input->post('table');
        $table_name = $this->input->post('table');
        $this->getField($table_name);
        $data['fields'] = $this->_fields_data;
        $this->load->view('codegen/dashboard/view_nav_code_view', $data);
    }
    
    public function loadViewFooter() { 
        $this->load->view('codegen/dashboard/view_footer_code_view');
    }
    
    //--------- end เพิ่มใหม่---------//
    

    public function loadComment() {
        $data['author'] = $this->input->post('author');
        $this->load->view('codegen/dashboard/comment_view', $data);
    }

    public function loadOther() {
        $data['author'] = $this->input->post('author');
        $data['table'] = $this->input->post('table');
        $table_name = $this->input->post('table');
        $this->getField($table_name);
        $data['fields'] = $this->_fields_data;
        $this->load->view('codegen/dashboard/other_view', $data);
    }

    public function loadOtherPhp() {
        $data['author'] = $this->input->post('author');
        $data['table'] = $this->input->post('table');
        $table_name = $this->input->post('table');
        $this->getField($table_name);
        $data['fields'] = $this->_fields_data;
        $this->load->view('codegen/dashboard/other_php_view', $data);
    }

//===========================================================
//
//        SQL   to Code generate
//                                   
//===========================================================
    public function checkSql($sql) {
        $sql1 = $this->input->post('sql');
        $sql = strtoupper($this->input->post('sql'));
        echo "<div class=\"alert alert-success\"> $sql1 </div>";

        $i = 0;

        $pos = strstr($sql, 'SELECT');
        if ($pos !== FALSE) {
            $i++;
        }

        $pos = strstr($sql, 'DELETE');
        if ($pos === FALSE) {
            $i++;
        }

        $pos = strstr($sql, 'INSERT');
        if ($pos === FALSE) {
            $i++;
        }

        $pos = strstr($sql, 'UPDATE');
        if ($pos === FALSE) {
            $i++;
        }

        if ($i == 4) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function sql() {
        $this->load->view('codegen/dashboard/sql_index_view');
    }

    public function sql_field() {
        $sql = $this->input->post('sql');
        if (!$this->checkSql($sql)) {
            echo "<div class=\"alert\">กรุณาป้อนคำสั่ง  SELECT เท่านั้น </di>";
        } else {
            $query = $this->db->query($sql);
            $data['fields'] = $query->list_fields();
            $this->load->view('codegen/dashboard/sql_fields_view', $data);
        }
    }

    public function sql_jq() {
        $sql = $this->input->post('sql');
        if (!$this->checkSql($sql)) {
            echo "<div class=\"alert\">กรุณาป้อนคำสั่ง  SELECT เท่านั้น </di>";
        } else {
            $query = $this->db->query($sql);
            $data['fields'] = $query->list_fields();
            $this->load->view('codegen/dashboard/other_view', $data);
        }
    }

    public function sql_php() {
        $sql = $this->input->post('sql');
        if (!$this->checkSql($sql)) {
            echo "<div class=\"alert\">กรุณาป้อนคำสั่ง  SELECT เท่านั้น </di>";
        } else {
            $query = $this->db->query($sql);
            $data['fields'] = $query->list_fields();
            $this->load->view('codegen/dashboard/other_php_view', $data);
        }
    }

    public function sql_html() {
        $sql = $this->input->post('sql');
        if (!$this->checkSql($sql)) {
            echo "<div class=\"alert\">กรุณาป้อนคำสั่ง  SELECT เท่านั้น </di>";
        } else {
            $query = $this->db->query($sql);
            $data['fields'] = $query->list_fields();
            $this->load->view('codegen/dashboard/sql_html_view', $data);
        }
    }

//===========================================================
//
//                                   Document 
//                                   
//===========================================================
    public function doc() {
        $this->load->view('codegen/dashboard/doc_index_view');
    }

    /**
     * ทดสอบเฉยๆ 
     */
    public function test() {
        $sql = "SELECT *  FROM information_schema.columns";
        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            echo $row->column_name . ' ### ' . $row->data_type;
            echo '<br>';
        }
    }

}
// ---------------------------- END Controller Class --------------------------------
