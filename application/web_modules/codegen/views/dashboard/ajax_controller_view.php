<pre class="prettyprint linenums languague-php">
    <?php
    $myDate = gmdate("Y-m-d", time());
    $table_full_name = $table;
    $table_str = explode('.', $table);
    $table = $table_str[1];
    echo "------------[Controller File name : $table.php ]---------------\n";
    echo htmlentities("<?php\n");
    echo "if (!defined('BASEPATH'))  exit('No direct script access allowed');\n";
    echo "\n";
    echo "class " . ucfirst($table) . " extends CI_Controller {\n";
    echo "\n";
    echo "   public function __construct()\n";
    echo "   {\n";
    echo "       parent::__construct();\n";
    echo "   }\n";
    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";

    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "   public function index()\n";
    echo "   {\n";
    echo "      \$this->manage();\n";
    echo "   }\n";
    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";

    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function manage() {\n";
    echo "      \$this->session->unset_userdata('$table" . "_task');\n";
    echo "      \$this->session->unset_userdata('$table". "_value');\n\n";
    echo "      \$data['start_row'] = \$this->uri->segment(4 ,'0');\n";
    echo "      \$data['total_row'] = \$this->db->get('$table_full_name')->num_rows();\n";
    echo "\n";
    echo "      \$this->load->library('pagination');\n";
    echo "      \$config['base_url'] = site_url('path_name/$table/index');\n";
    echo "      \$config['total_rows'] = \$data['total_row'];\n";
    echo "      \$config['per_page'] = 30;\n";
    echo "      \$config['num_links'] = 6;\n";
    echo "      \$config['uri_segment'] = 4;\n";
    echo htmlentities("      \$config['full_tag_open'] = '<div class=\"text-center\"><ul class=\"pagination\">';\n");
    echo "      \$this->pagination->initialize(\$config);\n";
    echo "\n";
    echo "      \$start = \$data['start_row'];\n";
    echo "      \$limit = \$config['per_page'];\n";
    echo "\n     //Edit To Do --> ORDER BY id       ให้เปลี่ยน field id เป็น field ที่ต้องการเรียงลำดับ \n";
    echo "      \$sql = \"SELECT * FROM $table_full_name  ORDER BY id  LIMIT \$limit OFFSET \$start\";\n";
    echo "      \$data['recData'] = \$this->db->query(\$sql);\n\n";
    echo "      \$data['is_search'] = FALSE;\n";
    echo "      \$data['txt_search'] = '';\n";
    echo "\n";
    echo "      \$this->load->view('path_name/$table/list_all_view', \$data);\n";
    echo "  }\n";
    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";

    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function add()
    { 
        //\$this->load->library('form_validation');
        \$this->load->view('path_name/$table/add_view'); 
    }\n";
    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";
    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function del() 
    {
        //------- Begin Edit  PK  of  $table_full_name  ให้เปลี่ยน id \$id เป็น  Primary Key ของตาราง
        \$id = \$this->input->post('id');
        \$condition = array('id' => \$id);
         //------- End Edit  PK  of  $table_full_name  
        //\$this->db->delete('$table_full_name', \$condition);
    }\n";

    //=================================
    //
    //                     EDIT   
    //
    //=================================   

    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";
    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function edit(\$id = '')\n";
    echo "  {\n";
    echo "      if (\$id == '') {\n";
    echo "          \$data['msg'] = 'ไม่พบข้อมูล';\n";
    echo "          \$this->load->view('path_name/$table/message', \$data);\n";
    echo "      } else {\n";
    echo "          //แก้ไข id เป็น fields  Primary  key \n";
    echo "          \$conditions = array('id' => \$id);\n";
    echo "\n";
    echo "          if (\$this->db->get_where('$table_full_name',\$conditions)->num_rows() == 0) {\n";
    echo "              \$data['msg'] = 'ไม่พบข้อมูล';\n";
    echo "              \$this->load->view('path_name/$table/message', \$data);\n";
    echo "           } else {\n";
    echo "              \$data['rsData'] = \$this->db->get_where('$table_full_name',\$conditions)->row_array();\n";
    echo "              //\$this->load->library('form_validation');\n";
    echo "              \$this->load->view('path_name/$table/edit_view', \$data);\n";
    echo "          }\n";
    echo "       }\n";
    echo "   }\n";

    //=================================
    //
    //                     SAVE  
    //
    //=================================    

    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";
    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function save()\n";
    echo "  {\n"; 
    echo "      \$this->load->library('form_validation');\n";
    echo "      \$frm = \$this->form_validation;\n";
    echo "\n";

     $fix_no_show1 = array  ('date_record' , 'date_update' , 'record_note' , 'edit_user_id');
     $fix_no_show2 = array  ('date_record' , 'date_update' , 'record_note' , 'add_user_id' , 'edit_user_id');

    foreach ($fields as $field) {
         if (! in_array($field , $fix_no_show2)) {
            echo "      \$frm->set_rules('$field', '" . ucfirst($field)  .  "', 'trim|required');\n";
         }
    }

    echo "\n";
    echo "      \$frm->set_message('required', 'กรุณากรอก %s');\n";
    echo "\n";

    echo "      if (\$frm->run() == FALSE) {\n";

//===== Message Error
    echo "          \$message  = '';\n";
    foreach ($fields as $field) {
         if (! in_array($field , $fix_no_show2)) {
             echo "          \$message .= form_error('$field');\n";
         }
    }

    echo "          \$json = json_encode(array(
                'is_successful' => FALSE,
                'message' => \$message     
            ));\n";
    echo "          echo \$json;\n";

    echo "      } else {\n";
    echo "\n";

    
    foreach ($fields as $field) {       
        if (! in_array($field , $fix_no_show2)) {
            echo "          \$$field = \$this->input->post('$field');\n";
        }
    }

    echo "\n";
//    echo "          \$data = array();\n";
//    foreach ($fields as $field) {
//        if (! in_array($field , $fix_no_show1)) {
//            switch ($field) {
//                case 'add_user_id' : echo "          \$data['$field'] = \$this->session->userdata('session_user_id');\n"; break;          
//                default : echo "          \$data['$field'] = \$$field;\n"; break;
//            }      
//        }
//    }
    
     echo "          \$data = array(\n";
    $is_step1 = TRUE;
    foreach ($fields as $field) {
        if (! in_array($field , $fix_no_show1)) {
            if ($is_step1) { 
                $is_step1 = FALSE;
                echo "              ";
            } else {
                echo "              ,";
            }
            switch ($field) {
                case 'add_user_id' : echo "'$field'  => \$this->session->userdata('session_user_id')\n"; break;          
                default : echo "'$field' => \$$field\n"; break;
            }      
        }
    }
    echo "           );\n";

    echo "\n";
    echo "          \$this->db->insert('$table_full_name',\$data);\n";

    echo htmlspecialchars("          \$json = json_encode(array(
                'is_successful' => TRUE,
                'message' => '<strong>บันทึกข้อมูลเรียบร้อย</strong>'  
            ));\n");
    echo "          echo \$json;\n";

    echo "      }\n";
    echo "  }\n";


    //=================================
    //
    //                    UPDATE 
    //
    //=================================    

    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";
    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function update()\n";
    echo "  {\n"; 
    echo "      \$this->load->library('form_validation');\n";
    echo "      \$frm = \$this->form_validation;\n";
    echo "\n";

    $fix_no_show1 = array  ('date_record'  , 'record_note' , 'add_user_id');
    $fix_no_show2 = array  ('date_record' , 'date_update' , 'record_note' , 'add_user_id' , 'edit_user_id');
     
    foreach ($fields as $field) {
        if (! in_array($field , $fix_no_show2)) {
            echo "      \$frm->set_rules('$field', '" . ucfirst($field)  .  "', 'trim|required');\n";
        }
    }

    echo "\n";
    echo "      \$frm->set_message('required', 'กรุณากรอก %s');\n";
    echo "\n";

    echo "      if (\$frm->run() == FALSE) {\n";

//===== Message Error
    echo "          \$message  = '';\n";
    foreach ($fields as $field) {
        if (! in_array($field , $fix_no_show2)) {
            echo "          \$message .= form_error('$field');\n";
        }
    }

    echo "          \$json = json_encode(array(
                'is_successful' => FALSE,
                'message' => \$message     
            ));\n";
    echo "          echo \$json;\n";

    echo "      } else {\n";
    echo "\n";

    foreach ($fields as $field) {
        if (! in_array($field , $fix_no_show2)) {
            echo "          \$$field = \$this->input->post('$field');\n";
        }
    }

    echo "\n";
//    echo "          \$data = array();\n";
//
//    foreach ($fields as $field) {      
//         if (! in_array($field , $fix_no_show1)) {
//            switch ($field) {
//                case 'date_update' :  echo "          \$data['$field'] = 'now()';\n"; break;
//                case 'edit_user_id' : echo "          \$data['$field'] = \$this->session->userdata('session_user_id');\n"; break;          
//                default : echo "          \$data['$field'] = \$$field;\n"; break;
//            }      
//        }
//        
//    }
    
    echo "          \$data = array(\n";
    $is_step1 = TRUE;
    foreach ($fields as $field) {
        if (! in_array($field , $fix_no_show1)) {
            if ($is_step1) { 
                $is_step1 = FALSE;
                echo "              ";
            } else {
                echo "              ,";
            }
            switch ($field) {
                case 'date_update' :  echo "'$field' => 'now()'\n"; break;
                case 'add_user_id' : echo "'$field'  => \$this->session->userdata('session_user_id')\n"; break;          
                default : echo "'$field' => \$$field\n"; break;
            }      
        }
    }
    echo "              );\n";
    

    echo "\n";
    echo "         //----แก้ไข id เป็น fields ที่เป็น Primary key ทั้งสองข้าง \n";
    echo "          \$conditions = array('id' => \$id);\n";
    echo "\n";

    echo "          \$this->db->update('$table_full_name', \$data, \$conditions);\n";

    echo htmlspecialchars("          \$json = json_encode(array(
                'is_successful' => TRUE,
                'message' => '<strong>บันทึกข้อมูลเรียบร้อย</strong>'  
            ));\n");
    echo "          echo \$json;\n";
    echo "      }\n";
    echo "  }\n";


    //=================================
    //
    //                     Preview  
    //
    //=================================
    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";
    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment     
    echo "     public function preview(\$id = \"\") {
          if (\$id == \"\") {
            \$data['msg'] = \"ไม่พบข้อมูล\";
            \$this->load->view('path_name/$table/message', \$data);
        } else {      
	    // Edit Pramary To do 
            \$conditions = array('id' => \$id);
          
            if (\$this->db->get_where('$table_full_name',\$conditions)->num_rows() == 0) {
                \$data['msg'] = \"ไม่พบข้อมูล\";
                \$this->load->view('path_name/$table/message', \$data);
            } else {          
                \$data['rsData'] = \$this->db->get_where('$table_full_name',\$conditions)->row_array();   
                \$this->load->library('form_validation');
                \$this->load->view('path_name/$table/preview_view', \$data);
            }
        }
    } \n";


    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function search() {\n";

    echo "      if (isset(\$_POST['submit'])) {
        \$task =  \$this->input->post('task');
        \$value = \$this->input->post('txtSearch');

        \$this->session->set_userdata(array ('$table" . "_task' => \$task, '$table" . "_value' => \$value ));
     } else {
         \$task = \$this->session->userdata('$table" . "_task');
         \$value = \$this->session->userdata('$table". "_value'); 
     }

     switch (\$task) {
         case '0' : \$where = \"WHERE  name_field LIKE '%\$value%' \";    //**ให้เปลี่ยนชื่อ fields ใหม่
             \$order_by = \" ORDER BY name_field\";
             break;
         case '1' :  
             \$value += 0;  //กรณีเป็นตัวเลขให้ปรับตัวหนังสือให้เป็นตัวเลข
             \$where = \"WHERE  id = \$value   \";
             \$order_by = \" ORDER BY id\";
             break;
     }

       \$sql = \"SELECT  * FROM $table_full_name\";
\n ";

    echo "     \$data['start_row'] = \$this->uri->segment(4 ,'0');\n";
   // echo "      \$data['total_row'] = \$this->db->get('$table_full_name')->num_rows();\n";
    echo "      \$data['total_row'] = \$this->db->query(\$sql)->num_rows();\n";
    echo "      \$sql = \"SELECT  * FROM $table_full_name  \$where \";\n";
    echo "      \$data['search_row'] = \$this->db->query(\$sql)->num_rows();\n";
    echo "\n";
    echo "      \$this->load->library('pagination');\n";
    echo "      \$config['base_url'] = site_url('path_name/$table/search');\n";
    echo "      \$config['total_rows'] =  \$data['search_row'];\n";
    echo "      \$config['per_page'] = 30;\n";
    echo "      \$config['num_links'] = 6;\n";
    echo "      \$config['uri_segment'] = 4;\n";
    echo htmlentities("      \$config['full_tag_open'] = '<div class=\"text-center\"><ul class=\"pagination pagination-centered\">';\n");
    echo "      \$this->pagination->initialize(\$config);\n";
    echo "\n";
    echo "      \$start = \$data['start_row'];\n";
    echo "      \$limit = \$config['per_page'];\n";
    echo "\n     //Edit To Do --> ORDER BY id       ให้เปลี่ยน field id เป็น field ที่ต้องการเรียงลำดับ \n";
    echo "      \$sql = \$sql . \" \$order_by LIMIT \$limit OFFSET \$start\";\n";
    echo "      \$data['recData'] = \$this->db->query(\$sql);\n\n";
    echo "      \$data['is_search'] = TRUE;\n";
    echo "      \$data['txt_search'] = \$value;\n";
    echo "\n";
    echo "      \$this->load->view('path_name/$table/list_all_view', \$data);\n";
    echo "  }\n";


    //Close Class 
    echo "}\n// ---------------------------- END Controller Class --------------------------------\n";
    ?>
</pre>

<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>