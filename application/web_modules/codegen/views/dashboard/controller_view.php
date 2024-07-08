<pre class="prettyprint linenums languague-php">
    <?php
    $myDate = gmdate("Y-m-d", time());
    $table_full_name = $table;
    $table_str = explode('.', $table);
    $table = $table_str[0];

    echo "------------[Controller File name : $table.php ]---------------\n";
    echo htmlentities("<?php\n");
    echo "if (!defined('BASEPATH'))  exit('No direct script access allowed');\n";
    echo "\n";
    echo "class " . ucfirst($table) . " extends CI_Controller {\n";
    echo "\n";
    echo "   public function __construct()\n";
    echo "   {\n";
    echo "       parent::__construct();\n";
    echo "       \$this->load->model('" . $table . "_model');\n";
    echo "   }\n";
    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";

    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  *@date edit $myDate\n";
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
    echo "  *@date edit $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function manage() {\n";
    echo "      \$data['start_row'] = \$this->uri->segment(4) == '' ? 0 : \$this->uri->segment(4);\n";
    echo "      \$data['total_row'] = \$this->db->get('$table')->num_rows();\n";
    echo "\n";
    echo "      \$this->load->library('pagination');\n";
    echo "      \$config['base_url'] = base_url('bos/$table/index');\n";
    echo "      \$config['total_rows'] = \$data['total_row'];\n";
    echo "      \$config['per_page'] = 15;\n";
    echo "      \$config['num_links'] = 10;\n";
    echo "      \$config['uri_segment'] = 4;\n";
    echo htmlentities("      \$config['full_tag_open'] = '<div class=\"pagination pagination-centered\"><ul>';\n");
    echo "      \$this->pagination->initialize(\$config);\n";
    echo "\n";
    echo "      \$start = \$data['start_row'];\n";
    echo "      \$limit = \$config['per_page'];\n";
    echo "\n     //Edit To Do --> ORDER BY id       ให้เปลี่ยน field id เป็น field ที่ต้องการเรียงลำดับ \n";
    echo "      \$sql = \"SELECT * FROM $table  ORDER BY id  LIMIT \$limit OFFSET \$start\";\n";
    echo "      \$data['recData'] = \$this->db->query(\$sql);\n";
    echo "\n";
    echo "      \$this->load->view('bos/$table/list_all_view', \$data);\n";
    echo "  }\n";
    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";

    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  *@date edit $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function add()
    { 
        \$this->load->library('form_validation');
        \$this->load->view('bos/$table/add_view'); 
    }\n";
    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";
    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  *@date edit $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function del() 
    {
        //------- Begin Edit  PK  of  $table  ให้เปลี่ยน id \$id เป็น  Primary Key ของตาราง
        \$id = \$this->input->post('id');
        \$condition = array('id' => \$id);
         //------- End Edit  PK  of  $table  
        \$this->db->delete('$table', \$condition);
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
    echo "  *@date edit $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function edit(\$id = '')\n";
    echo "  {\n";
    echo "      if (\$id == '') {\n";
    echo "          \$data['msg'] = 'ไม่พบข้อมูล';\n";
    echo "          \$this->load->view('bos/$table/message', \$data);\n";
    echo "      } else {\n";
    echo "          //\$this->load->model('$table" . "_model');\n";
    echo "          //แก้ไข id เป็น fields  Primary  key \n";
    echo "          \$conditions = array('id' => \$id);\n";
    echo "\n";
    echo "          if (!\$this->$table" . "_model->isExist(\$conditions) ){\n";
    echo "              \$data['msg'] = 'ไม่พบข้อมูล';\n";
    echo "              \$this->load->view('bos/$table/message', \$data);\n";
    echo "           } else {\n";
    echo "              \$data['rsData'] = \$this->$table" . "_model->getRecord(\$conditions);\n";
    echo "              \$this->load->library('form_validation');\n";
    echo "               \$this->load->view('bos/$table/edit_view', \$data);\n";
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
    echo "  *@date edit $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function save()\n";
    echo "  {\n";
    echo "      sleep(1);\n";
    echo "      \$this->load->library('form_validation');\n";
    echo "      \$frm = \$this->form_validation;\n";
    echo "\n";
    echo "      \$chk_form = array(\n";

    $is_comma = FALSE;
    foreach ($fields as $field) {
        if ($is_comma) {
            echo "          ,";
        } else {
            echo "          ";
        }
        echo "array(  
                    'field' => '$field',
                    'label' => '$field Label',
                    'rules' => 'trim|required'
                )\n";
        $is_comma = TRUE;
    }
    echo "      );\n";

    echo "      \$frm->set_rules(\$chk_form);\n";
    echo "      \$frm->set_message('required', 'กรุณากรอก %s');\n";

    echo "      if (\$frm->run() == FALSE) {\n";
    echo "          \$this->load->view('bos/$table/add_view');\n";
    echo "      } else {\n";
    echo "\n";

    foreach ($fields as $field) {
        echo "          \$$field = \$this->input->post('$field');\n";
    }

    echo "\n";
    echo "          \$data = array();\n";

    foreach ($fields as $field) {
        echo "          \$data['$field'] = \$$field;\n";
    }

    echo "\n";
    echo "          \$this->$table" . "_model->save(\$data);\n";
    echo "          redirect('/bos/$table', 'refresh');\n";
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
    echo "  *@date edit $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "  public function update()\n";
    echo "  {\n";
    echo "      sleep(1);\n";
    echo "      \$this->load->library('form_validation');\n";
    echo "      \$frm = \$this->form_validation;\n";
    echo "\n";
    echo "      \$chk_form = array(\n";

    $is_comma = FALSE;
    foreach ($fields as $field) {
        if ($is_comma) {
            echo "          ,";
        } else {
            echo "          ";
        }
        echo "array(  
                    'field' => '$field',
                    'label' => '$field Label',
                    'rules' => 'trim|required'
                )\n";
        $is_comma = TRUE;
    }
    echo "      );\n";

    echo "      \$frm->set_rules(\$chk_form);\n";
    echo "      \$frm->set_message('required', 'กรุณากรอก %s');\n";

    echo "      if (\$frm->run() == FALSE) {\n";
    echo "          \$this->load->view('bos/$table/edit_view');\n";
    echo "      } else {\n";
    echo "\n";

    foreach ($fields as $field) {
        echo "          \$$field = \$this->input->post('$field');\n";
    }

    echo "\n";
    echo "          \$data = array();\n";

    foreach ($fields as $field) {
        echo "          \$data['$field'] = \$$field;\n";
    }

    echo "\n";
    echo "         //----แก้ไข id เป็น fields ที่เป็น Primary key \n";
    echo "          \$conditions = array('id' => \$id);\n";
    echo "\n";
    echo "          \$this->$table" . "_model->update(\$data,\$conditions);\n";
 
    echo "          redirect('/bos/$table', 'refresh');\n";
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
    echo "  *@date edit $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment     
    echo  "     public function preview(\$id = \"\") {
          if (\$id == \"\") {
            \$data['msg'] = \"ไม่พบข้อมูล\";
            \$this->load->view('bos/$table/message', \$data);
        } else {
            \$this->load->model('$table" . "_model');
	    // Edit Pramary To do 
            \$conditions = array('id' => \$id);
            
            if (!\$this->$table" . "_model->isExist(\$conditions)) {
                \$data['msg'] = \"ไม่พบข้อมูล\";
                \$this->load->view('bos/$table/message', \$data);
            } else {
                \$data['recData'] = \$this->$table" . "_model->getRecord(\$conditions);
                \$this->load->library('form_validation');
                \$this->load->view('bos/$table/preview_view', \$data);
            }
        }
    } \n";   
    
    //Close Class 
     echo "}\n// ---------------------------- END Controller Class --------------------------------\n";
    ?>
</pre>
 
<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>