<pre class="prettyprint linenums languague-php">
    <?php
    $myDate = gmdate("Y-m-d", time());
    $table_full_name = $table;
    $table_str = explode('.', $table);
    $table = $table_str[1];
    echo "------------[View File name : list_all_view.php ]---------------\n";
    echo htmlspecialchars("
<?php \$this->load->view('bos/$table/includes/header'); ?>
<?php \$this->load->view('bos/$table/includes/navbar', array('active' => 'list')); ?>
    \n");

    echo htmlspecialchars(" <div class = \"container\">\n");
    echo htmlspecialchars("     <div class = \"page-header\">\n");
    echo htmlspecialchars("         <h4>แสดงข้อมูล $table</h4>\n");
    echo htmlspecialchars("     </div>\n");

    echo htmlspecialchars("     <div>\n");
   // echo htmlspecialchars("        <div class=\"form-inline\">\n");
    echo htmlspecialchars("         <form class=\"form-inline alert\" name=\"formSearch\" method=\"post\" action=\"<?= site_url('bos/$table/search'); ?>\">\n");
    echo htmlspecialchars("             <select name=\"task\" class=\"span2\">
                <option value=\"0\">ตามชื่อ</option>
                <option value=\"1\">รหัส</option>
            </select>\n ");
    echo htmlspecialchars("             <input type=\"text\" class=\"span3\" id=\"txtSearch\" name=\"txtSearch\">\n");
    echo htmlspecialchars("             <button type=\"submit\" name=\"submit\" class=\"btn\"><i class=\" icon-search\"></i> ค้นหา</button>\n");     
     echo htmlspecialchars("        </form>\n");
    //echo htmlspecialchars("        </div>\n");
    echo htmlspecialchars("    </div>\n");

    echo htmlspecialchars("     <div id=\"centents\">\n\n");
   echo htmlspecialchars("         <div class=\"row\">\n");
    echo htmlspecialchars("             <div class=\"pull-left span9\">\n");
    echo htmlspecialchars("             <?=(\$is_search) ? \"<span class='label label-warning'> แสดงการค้นหาโดย [ '\$txt_search' ]  พบ \" . \$search_row .  \" แถว</span>\" : \"\"  ?>\n");
    echo htmlspecialchars("              จำนวนทั้งหมด <span class=\"badge badge-info\"> <?=\$total_row?>  </span> แถว \n");
    echo htmlspecialchars("             </div>\n");
    echo htmlspecialchars("              <?= anchor('bos/$table/add', '<i class=\" icon-plus-sign icon-white\"></i> Add New', 'class=\"btn btn-primary btn-mini pull-right\"')?>\n");
   echo htmlspecialchars("         </div>\n\n");

    // Table Header 
    echo htmlspecialchars("         <table class=\"table table-striped table-hover\">\n");
    echo htmlspecialchars("             <thead class=\"alert alert-info\">\n");
    echo htmlspecialchars("                 <tr>\n");
    echo htmlspecialchars("                     <th width=\"20px;\">#</th>\n");

    foreach ($fields as $field) {
        echo htmlspecialchars("                     <th>". ucfirst($field) . "</th>\n");
    }

    echo htmlspecialchars("                     <th><div style=\"text-align:center; width: 180px;\">จัดการข้อมูล</div></th>\n");
    echo htmlspecialchars("                 </tr>\n");
    echo htmlspecialchars("             </thead>\n");

    //Table Body 
    echo htmlspecialchars("             <tbody>\n");
    echo htmlspecialchars("             <?php\n");
    echo htmlspecialchars("                 \$i_row = \$start_row + 1;\n");
    echo htmlspecialchars("              foreach (\$recData->result() as \$row) {\n");
    echo htmlspecialchars("             ?>\n");
    echo htmlspecialchars("                 <tr>\n");
    echo htmlspecialchars("                     <td style=\"text-align:center;\">[<?= \$i_row ?>]</td>\n");

    foreach ($fields as $field) {
        echo htmlspecialchars("                     <td><?= \$row->$field ?></td>\n");
    }

    echo htmlspecialchars("                     <td>\n");
     echo htmlspecialchars("                        <div calss=\"pull-right\">\n");    
    echo htmlspecialchars("                             <?= anchor('bos/$table/preview/' . \$row->id, '<i class=\"icon-eye-open icon-white\"></i> view', 'class=\"btn btn-success btn-mini\"') ?>\n");
    echo htmlspecialchars("                             <?= anchor('bos/$table/edit/' . \$row->id, '<i class=\"icon-pencil  icon-white\"></i> edit', 'class=\"btn btn-warning btn-mini\"') ?>\n");
    echo htmlspecialchars("                             <a href=\"#\" class=\"btn btn-danger btn-mini\"\n");
    echo htmlspecialchars("                              data-toggle=\"modal\" data-target=\"#myModal\"\n");
    echo htmlspecialchars("                              onclick=\"getDelete(<?= \$row->id ?>, <?= \$i_row ?>);\">\n");
    echo htmlspecialchars("                                 <i class=\"icon-trash icon-white\"></i>\n");
    echo htmlspecialchars("                                 delete\n");
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
    echo "\n";
    echo htmlspecialchars("         <div id=\"page-footer\">\n");
    echo htmlspecialchars("             <?php echo \$this->pagination->create_links(); ?>\n");
    echo htmlspecialchars("         </div>\n");

    echo "\n";
    echo htmlspecialchars("     </div><!--content-->");

    echo "\n";
    echo htmlspecialchars("     <!-- Modal -->\n");
    echo htmlspecialchars("     <div class = \"modal hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">\n");
    echo htmlspecialchars("         <div class = \"modal-header\">\n");
    echo htmlspecialchars("             <button type = \"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>\n");
    echo htmlspecialchars("             <h3 id = \"myModalLabel\">ลบข้อมูล</h3>\n");
    echo htmlspecialchars("         </div>\n");
    echo htmlspecialchars("         <div class=\"modal-body\">\n");
    echo htmlspecialchars("             <p>ยืนยันการลบข้อมูล</p>\n");
    echo htmlspecialchars("             <h4>***  ข้อมูลแถวที่ <span id=\"xrow\"></span>  ***</h4>\n");
    echo htmlspecialchars("         </div>\n");
    echo htmlspecialchars("         <div class=\"modal-footer\">\n");
    echo htmlspecialchars("             <button class = \"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>\n");
    echo htmlspecialchars("             <button class = \"btn btn-danger\" onclick=\"myDelete();\">Delete</button>\n");
    echo htmlspecialchars("         </div>\n");
    echo htmlspecialchars("     </div>\n");

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
    var start_row = Math.abs(<?=\$start_row?>);
     
    function getDelete(id,irow){
        del_id = id;
        del_i_row = irow;
        \$('#xrow').text(del_i_row);
    }
    
    // delete by ajax jquery 
    function myDelete(){
        var faction = \"<?= site_url('bos/$table/del') ?>\"; 
        var fdata = {
             id : del_id
        }       
 
        \$.post(faction, fdata, function(rdata){
            //var json = jQuery.parseJSON(rdata);           
            \$(window.location).attr('href', '<?= site_url('bos/$table/index') ?>/'+ start_row);
        });              
    } 
    
      \$(document).ready(function(){       
       
    });    
</script>
\n");
 
    echo htmlspecialchars("<?php \$this->load->view('bos/$table/includes/footer'); ?>\n");
    
    ?>
</pre>
 
<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>