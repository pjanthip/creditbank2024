<pre class="prettyprint linenums languague-php">
<?php
    $myDate = gmdate("Y-m-d", time());
    $table_full_name = $table;
    $table_str = explode('.', $table);
    $table = $table_str[1];    
    echo "------------[View File name : edit_view.php ]---------------\n";
    echo htmlspecialchars("
<?php \$this->load->view('bos/$table/includes/header'); ?>
<?php \$this->load->view('bos/$table/includes/navbar', array('active' => 'xxx')); ?> \n");
    echo htmlspecialchars("
<div class=\"container\">
    <div class=\"page-header\">
        <h4>แก้ไขข้อมูล $table</h4>
    </div>
    <div id=\"contents\">
        <form class=\"form-horizontal well\" id=\"formEdit\"  accept-charset=\"utf-8\">  
");
    
   $fix_no_show2 = array('date_record', 'date_update', 'record_note', 'add_user_id', 'edit_user_id');
       
    foreach ($fields as $field) {
       if (!in_array($field,$fix_no_show2)) {
            echo htmlspecialchars("
                <div class=\"control-group\">           
                    <label class=\"control-label\" for=\"$field\">" . ucfirst($field) . "  :</label>
                    <div class=\"controls\">
                        <input type=\"text\" id=\"$field\" name=\"$field\" value=\"<?=\$rsData['$field']?>\" class=\"span4\">                            
                    </div>        
                </div>\n");
       }      
    }
   
     echo htmlspecialchars(" 
            <div class=\"control-group\">    
                <div id=\"success\" class=\"row\" style=\"display: none\">              
                    <div id=\"successMessage\" class=\"alert alert-success span11\"></div>             
                </div>
                <div id=\"error\" class=\"row\" style=\"display: none\">               
                    <div id=\"errorMessage\" class=\"alert alert-error span11\"></div>               
                </div>
            </div>\n"
   );
    
    echo htmlspecialchars("
            <div class=\"form-actions\">
                <div class=\"control-group\">
                    <div class=\"controls\">            
                        <button  class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#myModal\" ><i class=\" icon-ok icon-white\"></i> บันทึก</button>      
                    </div>
                </div>
            </div> 
            
        </form>     
    </div> <!--contents-->
</div> <!--contrainer-->\n");

    echo htmlspecialchars("
<!-- Modal -->
<div class=\"modal hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h3 id=\"myModalLabel\">บันทึกข้อมูล</h3>
    </div>
    <div class=\"modal-body\">
        <h4>ยืนยันการบันทึกข้อมูล ?</h4>       
    </div>
    <div class=\"modal-footer\">
        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
        <button class=\"btn btn-primary\" id=\"btnSave\">Save</button>
    </div>
</div>\n");
    
echo htmlspecialchars("
<script type=\"text/javascript\">
    $(document).ready(function() {
        
        $('#btnSave').click(function() {
            
            $('#myModal').modal('hide');
            $(\"#formEdit button\").button('loading');
            $(\"#success\").hide();
            $(\"#error\").hide();

            var faction = \"<?= site_url('bos/$table/update') ?>\";
            var fdata = $(\"#formEdit\").serialize();
            $.post(faction, fdata, function(rdata){
                var json = jQuery.parseJSON(rdata);
                if(json.isSuccessful){
                    $(\"#successMessage\").html(json.message);
                    $(\"#success\").show();                    
                    //$('#formEdit').reset(); 
                    //$(\"#success\").fadeOut(2000);
                    $(window.location).attr('href', '<?= site_url('bos/$table/index')?>');
                }else{
                    $(\"#errorMessage\").html(json.message);
                    $(\"#error\").show();                  
                }
                $(\"#formEdit button\").button('reset');
            });
                
            return false;            
        });//click
                 
         jQuery.fn.reset = function () {
            $(this).each (function() { this.reset(); });
        }  
        
        loadPage();
    }); //ready
    
      function loadPage() {
            //กรณีที่ต้องการกระทำตอน Onload Page  *** แก้ < ?  ให้ถูกต้องด้วย ***  loadPage ต้องไว้ก่อน select2
            //$(\"#ObjectID).val(\"< ?= \$rsData['ID'] ?>\");
       }

</script>

<?php \$this->load->view('bos/$table/includes/footer'); ?>
\n");
    
?>
</pre>
 
<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>