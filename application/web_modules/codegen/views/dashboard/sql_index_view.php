<?php $this->load->view('codegen/includes/header.php'); ?>
<?php $this->load->view('codegen/includes/navbar.php', array('active' => 'SQL')); ?>

<div class="container">
    <div class="row">
        <div class="well">
            <textarea id="txtSql" class="form-control"   rows="6" style="width: 98%;" placeholder="SQL Code for SELECT statement only"></textarea>
            <div class="btn-group">
                <button class="btn btn-primary" id="btnRun" title="Run SQLTesting">        <span class="glyphicon glyphicon-play"></span>                </button> 
                <button class="btn btn-info" id="btnJq">jQuery</button>
                <button class="btn btn-danger" id="btnPhp">PHP</button>
                <button class="btn btn-success" id="btnHtml">HTML</button>
 
            </div>

        </div>

        <div class="alert alert-error" id="msgError" style="display: none;">
            ป้อนคำสั่ง SQL ด้วย
        </div>

        <div id="divCode"></div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('#btnRun').tooltip('hide');
    });
         
    function checkInput(){
        $('#divCode').text('');
        if ($('#txtSql').val() == '') {
            $('#msgError').show();
            $('#msgError').fadeOut(2000);
            return false;
        } else {
            return true;
        }
    }
    
    $('#btnRun').click(function () {
        if (checkInput()) { 
            var fdata = {
                sql : $('#txtSql').val()           
            }        
            $('#divCode').load('<?php echo  site_url('codegen/dashboard/sql_field'); ?>' , fdata );   
        }
    });
    
    $('#btnJq').click(function () {
        if (checkInput()) { 
            var fdata = {
                sql : $('#txtSql').val()           
            }        
            $('#divCode').load('<?php echo  site_url('codegen/dashboard/sql_jq'); ?>' , fdata );   
        }
    });
    
    $('#btnPhp').click(function () {
        if (checkInput()) { 
            var fdata = {
                sql : $('#txtSql').val()           
            };        
            $('#divCode').load('<?php echo  site_url('codegen/dashboard/sql_php'); ?>' , fdata );   
        }
    });
   
    $('#btnHtml').click(function () {
        if (checkInput()) { 
            var fdata = {
                sql : $('#txtSql').val()           
            };        
            $('#divCode').load('<?php echo  site_url('codegen/dashboard/sql_html'); ?>' , fdata );   
        }
    });
    
</script>

<?php $this->load->view('codegen/includes/footer.php'); ?>