<pre class="prettyprint linenums languague-php">
    <?php
    $myDate = gmdate("Y-m-d", time());
    $table_full_name = $table;
    $table_str = explode('.', $table);
    $table = $table_str[1];    
    echo "------------[View File name : add_view.php ]---------------\n";
    echo htmlspecialchars("
<?php \$this->load->view('path_name/$table/includes/header');?>
<?php \$this->load->view('path_name/$table/includes/navbar', array('active' => 'add'));?> \n");
    echo htmlspecialchars("
<div class='container'> 
    <div class='panel panel-default'>
        <div class='panel-heading'>
          <h3 class='panel-title'>กรอกข้อมูล $table</h3>
        </div>
        <div class='panel-body'>
            <form class='form-horizontal' id='formEdit' accept-charset='utf-8'>  
");

    $fix_no_show2 = array('date_record', 'date_update', 'record_note', 'add_user_id', 'edit_user_id');

    foreach ($fields as $field) {
        if (!in_array($field, $fix_no_show2)) {
            echo htmlspecialchars("
                <div class='form-group'>           
                    <label class='col-sm-2 control-label' for='$field'>" . ucfirst($field) . "  :</label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' id='$field' name='$field'>                            
                    </div>        
                </div>\n");
        }
    }

    echo htmlspecialchars(" 
            <div class='form-group'>    
                <div id='success' class='row' style='display: none'>              
                    <div id='successMessage' class='alert alert-success col-md-11'></div>             
                </div>
                <div id='error' class='row' style='display: none'>               
                    <div id='errorMessage' class='alert alert-danger col-md-11'></div>               
                </div>
            </div>\n"
    );

    echo htmlspecialchars("
            <div class='form-group'>
               <div class='col-sm-offset-2 col-sm-10'>                           
                    <button type=\"button\"  class='btn btn-primary'  data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-ok'></span> บันทึก</button>                          
                </div>
            </div> 
            
        </form>     
    </div> <!--panel-body-->
 </div> <!--panel-->
</div> <!--contrainer-->\n");

//    echo htmlspecialchars("
//<!-- Modal -->
//<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
//    <div class='modal-header'>
//        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
//        <h3 id='myModalLabel'>บันทึกข้อมูล</h3>
//    </div>
//    <div class='modal-body'>
//        <h4>ยืนยันการบันทึกข้อมูล ?</h4>       
//    </div>
//    <div class='modal-footer'>
//        <button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>
//        <button class='btn btn-primary' id='btnSave'>Save</button>
//    </div>
//</div>\n");


    echo htmlspecialchars("
<!-- Modal -->
  <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
          <h4 class='modal-title' id='myModalLabel'>บันทึกข้อมูล</h4>
        </div>
        <div class='modal-body'>
              <h4>ยืนยันการบันทึกข้อมูล ?</h4>       
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          <button type='button' class='btn btn-primary' id='btnSave'>OK</button>
        </div>
      </div>
    </div>
  </div>
");



    echo htmlspecialchars("
<script>
    $(document).ready(function() {
        
        $('#btnSave').click(function() {            
            $('#myModal').modal('hide');
            $('#formEdit button').button('loading');
            $('#success').hide();
            $('#error').hide();

            var faction = '<?php echo site_url('path_name/$table/save');?>';
            var fdata = $('#formEdit').serialize();
            $.post(faction, fdata, function(jdata){             
                if(jdata.is_successful){
                    $('#successMessage').html(jdata.message);
                    $('#success').show();                    
                    $('#formEdit').reset(); 
                    $('#success').fadeOut(2000);
                }else{
                    $('#errorMessage').html(jdata.message);
                    $('#error').show();                  
                }
                $('#formEdit button').button('reset');
            },'json');
                
            return false;            
        });//click
  
        jQuery.fn.reset = function () {
            $(this).each (function() { this.reset(); });
        }  
        
    }); //ready
</script>

<?php \$this->load->view('path_name/$table/includes/footer'); ?>
\n");
    ?>
</pre>

<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>