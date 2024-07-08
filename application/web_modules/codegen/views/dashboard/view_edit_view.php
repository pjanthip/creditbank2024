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
        <h4>กรอกข้อมูล $table</h4>
    </div>
    <div id=\"contents\" style=\"display:none\">
        <form class=\"form-horizontal well\" id=\"formEdit\"  action=\"<?= site_url('bos/$table/update') ?>\" method=\"post\" >  
");
    
    foreach ($fields as $field) {
        echo htmlspecialchars("
            <div class=\"control-group\">           
                <label class=\"control-label\" for=\"$field\">" . ucfirst($field) . "  :</label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"$field\" name=\"$field\" placeholder=\"$field\" 
                           value=\"<?php echo isset(\$rsData['$field']) ?  \$rsData['$field']  : ''; ?><?php echo set_value('$field'); ?>\" />
                           <?php echo form_error('$field', '<span class=\"label label-important\">', '</span>'); ?>
                </div>        
            </div>\n");
    }
    
    
    echo htmlspecialchars("
            <div class=\"form-actions\">
                <div class=\"control-group\">
                    <div class=\"controls\">            
                        <button type=\"button\"  class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#myModal\" ><i class=\" icon-ok icon-white\"></i> บันทึก</button>      
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
            $('#formEdit').submit();            
        });
        
        $('#contents').slideDown(300);
    }); 
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