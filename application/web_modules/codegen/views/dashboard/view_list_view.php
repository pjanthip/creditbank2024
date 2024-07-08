<pre class="prettyprint linenums languague-php">
    <?php
    $myDate = gmdate("Y-m-d", time());
    $table_full_name = $table;
    $table_str = explode('.', $table);
    $table = $table_str[1];
    echo "------------[View File name : list_all_view.php ]---------------\n";
    echo htmlspecialchars("
<?php \$this->load->view('path_name/$table/includes/header'); ?>
<?php \$this->load->view('path_name/$table/includes/navbar', array('active' => 'list')); ?>
    \n");

    echo htmlspecialchars(" <div class = \"container\">\n");
    echo htmlspecialchars("     <div class = \"page-header\">\n");
    echo htmlspecialchars("         <h4>แสดงข้อมูล $table</h4>\n");
    echo htmlspecialchars("     </div>\n");

    echo htmlspecialchars("     <div>\n");
    echo htmlspecialchars("         <form class=\"form-inline well well-sm\" name=\"formSearch\" method=\"post\" action=\"<?php echo site_url('path_name/$table/search'); ?>\">\n");

    echo htmlspecialchars("              <a href=\"<?php echo site_url('path_name/$table');?>\" class=\"btn btn-default\">ทั้งหมด</a>\n");
    echo htmlspecialchars("              <div class=\"form-group\">\n");
    echo htmlspecialchars("                 <select  class=\"form-control\" name=\"task\" class=\"span2\">
                    <option value=\"0\">ตามชื่อ</option>
                    <option value=\"1\">รหัส</option>
                 </select>\n ");
    echo htmlspecialchars("              </div>\n");
    echo htmlspecialchars("              <div class=\"form-group\">\n");
    echo htmlspecialchars("                 <input type=\"text\" class=\"form-control col-md-3\" id=\"txtSearch\" name=\"txtSearch\">\n");
    echo htmlspecialchars("              </div>\n");
    echo htmlspecialchars("             <button type=\"submit\" name=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span> ค้นหา</button>\n");
    echo htmlspecialchars("        </form>\n");
    //echo htmlspecialchars("        </div>\n");
    echo htmlspecialchars("    </div>\n");

    //echo htmlspecialchars("     <div id=\"centents\">\n\n");
    echo htmlspecialchars("         <div class=\"row\">\n");
    echo htmlspecialchars("             <div class=\"pull-left col-md-9\">\n");
    echo htmlspecialchars("             <?php echo (\$is_search) ? \"<span class='label label-warning'> แสดงการค้นหาโดย [ '\$txt_search' ]  พบ \" . \$search_row .  \" แถว</span>\" : \"\";?>\n");
    echo htmlspecialchars("              จำนวนทั้งหมด <span class=\"badge badge-info\"> <?php echo \$total_row;?></span> แถว\n");
    echo htmlspecialchars("             </div>\n");
    echo htmlspecialchars("             <div class=\"pull-right col-md-2\">
                <a href=\"<?php echo site_url('path_name/$table/add');?>\" class=\"btn btn-primary btn-sm pull-right\" data-toggle=\"tooltip\" title=\"เพิ่มข้อมูลใหม่\">
                    <span class=\"glyphicon glyphicon-plus\"></span> Add New
                </a>
            </div>\n");
    echo htmlspecialchars("         </div>\n");


    //pagination 
    //echo htmlspecialchars("         <div>\n");
    echo htmlspecialchars("         <?php echo \$this->pagination->create_links();?>\n");
    //echo htmlspecialchars("         </div>\n");
    // Table Header 
    echo htmlspecialchars("         <table class=\"table table-striped table-hover\">\n");
    echo htmlspecialchars("             <thead class=\"info\">\n");
    echo htmlspecialchars("                 <tr>\n");
    echo htmlspecialchars("                     <th width=\"20px;\">#</th>\n");

    foreach ($fields as $field) {
        echo htmlspecialchars("                     <th>" . ucfirst($field) . "</th>\n");
    }

    echo htmlspecialchars("                     <th><div style=\"text-align:center; width: 180px;\">จัดการข้อมูล</div></th>\n");
    echo htmlspecialchars("                 </tr>\n");
    echo htmlspecialchars("             </thead>\n");

    //Table Body 
    echo htmlspecialchars("             <tbody>\n");
    echo htmlspecialchars("             <?php\n");
    echo htmlspecialchars("              \$i_row = \$start_row + 1;\n");
    echo htmlspecialchars("              foreach (\$recData->result_array() as \$row) {\n");
    echo htmlspecialchars("             ?>\n");
    echo htmlspecialchars("                 <tr>\n");
    echo htmlspecialchars("                     <td style=\"text-align:center;\">[<?php echo \$i_row;?>]</td>\n");

    foreach ($fields as $field) {
        echo htmlspecialchars("                     <td><?php echo \$row['$field'];?></td>\n");
    }

    echo htmlspecialchars("                     <td>\n");
    echo htmlspecialchars("                        <div class=\"btn-group pull-right\">\n");

    echo htmlspecialchars("                             <a href=\"#\" onclick=\"loadPreview('<?php echo \$row['id'];?>');\" \n");
    /* echo htmlspecialchars("                             <a href=\"<?php echo site_url('path_name/$table/preview/' . \$row['id']);?>\" \n"); */
    echo htmlspecialchars("                              class=\"my-tooltip btn btn-success btn-sm\"\n");
    echo htmlspecialchars("                              data-toggle=\"tooltip\" title=\"แสดงข้อมูล\">\n");
    echo htmlspecialchars("                                 <span class=\"glyphicon glyphicon-eye-open\"></span>\n");
    echo htmlspecialchars("                                 view\n");
    echo htmlspecialchars("                             </a>\n");

    echo htmlspecialchars("                             <a href=\"<?php echo site_url('path_name/$table/edit/' . \$row['id']);?>\" \n");
    echo htmlspecialchars("                              class=\"my-tooltip btn btn-warning btn-sm\"\n");
    echo htmlspecialchars("                              data-toggle=\"tooltip\" title=\"แก้ไขข้อมูล\">\n");
    echo htmlspecialchars("                                 <span class=\"glyphicon glyphicon-edit\"></span>\n");
    echo htmlspecialchars("                                 Edit\n");
    echo htmlspecialchars("                             </a>\n");


    /*  echo htmlspecialchars("                             <?= anchor('path_name/$table/preview/' . \$row->id, '<i class=\"icon-eye-open icon-white\"></i> view', 'class=\"btn btn-success btn-mini\"') ?>\n");
      echo htmlspecialchars("                             <?= anchor('path_name/$table/edit/' . \$row->id, '<i class=\"icon-pencil  icon-white\"></i> edit', 'class=\"btn btn-warning btn-mini\"') ?>\n");

     */
    echo htmlspecialchars("                             <a href=\"#\" class=\"my-tooltip btn btn-danger btn-sm\"\n");
    echo htmlspecialchars("                               data-toggle=\"tooltip\" title=\"ลบข้อมูล\"\n");
    echo htmlspecialchars("                              onclick=\"getDelete(<?php echo \$row['id'];?>, <?php echo \$i_row;?>);\">\n");
    echo htmlspecialchars("                                 <span class=\"glyphicon glyphicon-trash\"></span>\n");
    echo htmlspecialchars("                                 Delete\n");
    echo htmlspecialchars("                             </a>\n");
    echo htmlspecialchars("                        </div>\n");
    echo htmlspecialchars("                     </td>\n");
    echo htmlspecialchars("                 </tr>\n");
    echo htmlspecialchars("             <?php\n");
    echo htmlspecialchars("                     \$i_row++;\n");
    echo htmlspecialchars("                 }\n");
    echo htmlspecialchars("             ?>\n");
    echo htmlspecialchars("             </tbody>\n");
    echo htmlspecialchars("         </table>\n");

    //pagination 
    // echo "\n";
    // echo htmlspecialchars("         <div>\n");
    echo htmlspecialchars("      <?php echo \$this->pagination->create_links(); ?>\n");
    // echo htmlspecialchars("         </div>\n");
    //echo "\n";
    //echo htmlspecialchars("     </div><!--content-->");
//    echo "\n";
//    echo htmlspecialchars("     <!-- Modal -->\n");
//    echo htmlspecialchars("     <div class = \"modal hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">\n");
//    echo htmlspecialchars("         <div class = \"modal-header\">\n");
//    echo htmlspecialchars("             <button type = \"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>\n");
//    echo htmlspecialchars("             <h3 id = \"myModalLabel\">ลบข้อมูล</h3>\n");
//    echo htmlspecialchars("         </div>\n");
//    echo htmlspecialchars("         <div class=\"modal-body\">\n");
//    echo htmlspecialchars("             <p>ยืนยันการลบข้อมูล</p>\n");
//    echo htmlspecialchars("             <h4>***  ข้อมูลแถวที่ <span id=\"xrow\"></span>  ***</h4>\n");
//    echo htmlspecialchars("         </div>\n");
//    echo htmlspecialchars("         <div class=\"modal-footer\">\n");
//    echo htmlspecialchars("             <button class = \"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>\n");
//    echo htmlspecialchars("             <button class = \"btn btn-danger\" onclick=\"myDelete();\">Delete</button>\n");
//    echo htmlspecialchars("         </div>\n");
//    echo htmlspecialchars("     </div>\n");

    echo "\n";
    echo htmlspecialchars(" <!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">ลบข้อมูล</h4>
      </div>
      <div class=\"modal-body\">
		<p>ยืนยันการลบข้อมูล</p>
		<h4>***  ข้อมูลแถวที่ <span id=\"xrow\"></span>  ***</h4>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-danger\"  onclick=\"myDelete();\">Delete</button>	 
      </div>
    </div>
  </div>
</div>  \n");

    //----- MODAL PREVIEW ---
       echo "\n";
    echo htmlspecialchars(" <!-- Modal -->
<div class=\"modal fade\" id=\"modalPreview\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">แสดงข้อมูล</h4>
      </div>
      <div class=\"modal-body\">
		<div id=\"divPreview\"></div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button> 
      </div>
    </div>
  </div>
</div>  \n");


//    echo "\n";
//    echo htmlspecialchars("     <!-- Modal -->\n");
//    echo htmlspecialchars("     <div class = \"modal hide fade\" id=\"modalPreview\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"width:90%\">\n");
//    echo htmlspecialchars("         <div class = \"modal-header\">\n");
//    echo htmlspecialchars("             <button type = \"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>\n");
//    echo htmlspecialchars("             <h3 id = \"myModalLabel\">แสดงข้อมูล</h3>\n");
//    echo htmlspecialchars("         </div>\n");
//    echo htmlspecialchars("         <div class=\"modal-body\">\n");
//    echo htmlspecialchars("             <div id=\"divPreview\"></div>\n");   
//    echo htmlspecialchars("         </div>\n");
//    echo htmlspecialchars("         <div class=\"modal-footer\">\n");
//    echo htmlspecialchars("             <button class = \"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>\n");
//    echo htmlspecialchars("         </div>\n");
//    echo htmlspecialchars("     </div>\n");
    //---Clost div Container 
    echo "\n";
    echo htmlspecialchars(" </div><!--cotrainer-->\n");
    ?>
</pre>

<pre class="prettyprint linenums languague-php">
    <?php
    echo htmlspecialchars("
<script type=\"text/javascript\">  
    //Variable for Delete 
    var del_id  = 0;
    var del_i_row = 0;
    var start_row = Math.abs(<?php echo \$start_row;?>);
     
    function getDelete(id,irow){
        del_id = id;
        del_i_row = irow;
        \$('#xrow').text(del_i_row);
        \$('#myModal').modal('show');
    }
    
    // delete by ajax jquery 
    function myDelete(){
        var faction = \"<?php echo site_url('path_name/$table/del');?>\"; 
        var fdata = {
             id : del_id
        }       
 
        \$.post(faction, fdata, function(rdata){
            //var json = jQuery.parseJSON(rdata);           
            \$(window.location).attr('href', '<?php echo site_url('path_name/$table/index');?>/'+ start_row);
        });              
    } 
    
    // load preview to modal 
    function loadPreview(id){ 
        \$('#divPreview').load('<?php echo site_url('path_name/$table/preview');?>/'+ id);
        \$('#modalPreview').modal('show');
    }
    
      \$(document).ready(function(){       
        \$('.my-tooltip').tooltip('hide');         
    });    
</script>
\n");

    echo htmlspecialchars("<?php \$this->load->view('path_name/$table/includes/footer');?>\n");
    ?>
</pre>

<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>