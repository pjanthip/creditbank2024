<?php $this->load->view('admin/codegen/includes/header.php'); ?>
<?php $this->load->view('admin/codegen/includes/navbar.php', array('active' => 'table')); ?>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">        
            <button class="btn" id="viewTable"><i class="icon-th-list"></i> ตาราง</button>
            <div id="divTableName" style="display: none;">
                <ul class="nav nav-tabs nav-stacked">
                    <?php
                    $i = 1;
                    foreach ($table as $tname) {
                        ?>
                        <li><a href="#" onClick="loadField('<?= $tname ?>');"><?= $i ?>. <?= $tname ?></a></li> 
                        <?php
                        $i++;
                    }
                    ?>                    
                </ul>  
            </div>
        </div>
        <div class="span9">
            
            <div class="well">
                <div class="row-fluid ">

                    <div class="span3">
                        <label class="control-label" for="devname">กรอกชื่อผู้พัฒนา เช่น Wichian</label>
                        <input type="text" id="author" name="author" > 
                    </div>
                    <div class="span5 offset3">
                        <h3>
                            <span id="showTableName">ชื่อตาราง</span>
                            <input type="hidden" id="tableNameNow">
                        </h3>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs " id="myTab">
                <li class="active"><a href="#fields">Fields</a></li>
                <li><a href="#controller" onClick="loadController();">Controller</a></li>
                <li><a href="#model" onClick="loadModel();">Model</a></li>
                <li><a href="#views" onClick="clearView();loadViewList();">Views</a></li>
                <li><a href="#comment" onClick="loadComment();">Comment</a></li>
                <li><a href="#other" onClick="loadOther();">Other HTML,JS</a></li>
                <li><a href="#other_php" onClick="loadOtherPhp();">PHP</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="fields">Are you ready? ^_^</div>
                <div class="tab-pane" id="controller"></div>
                <div class="tab-pane" id="model"></div>
                <div class="tab-pane" id="views">

                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="brand" href="#">Views</a>
                            <ul class="nav">
                                <li><a href="#" onClick="loadViewList();">List All</a></li>
                                <li><a href="#" onClick="loadViewAddnew();">Add New</a></li>
                                <li><a href="#" onClick="loadViewEdit();">Edit</a></li>
                                <li><a href="#" onClick="loadViewPreview();">Preview</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="viewContent"></div>

                </div>
                <div class="tab-pane" id="comment"></div>
                <div class="tab-pane" id="other"></div>
                <div class="tab-pane" id="other_php"></div>
            </div>

        </div>
    </div>
</div>

<script>
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    
    $('#viewTable').click(function (e) {
        $('#divTableName').slideToggle();
    });
    
    function loadField(table){
        clearDivAll();
        $('#myTab a:first').tab('show');
        $('#showTableName').text(table);
        $('#tableNameNow').val(table);
        var fdata = {
            table : table
        }
        $('#fields').load('<?= site_url('admin/codegen/loadField') ?>' , fdata );
    }
    
    function loadController(){
        clearDivAll();
        
        if ($('#tableNameNow').val() == '') {
            $('#controller').text("เลือกตารางด้วย").css("color","red");
            return false;
        }
        var fdata = {
            table : $('#tableNameNow').val()
            ,author : $('#author').val()
        }
        $('#controller').load('<?= site_url('admin/codegen/loadController') ?>' , fdata );
    }
    
    function loadModel(){
        clearDivAll();
        
        if ($('#tableNameNow').val() == '') {
            $('#model').text("เลือกตารางด้วย").css("color","red");
            return false;
        }
        var fdata = {
            table : $('#tableNameNow').val()
            ,author : $('#author').val()
        }
        $('#model').load('<?= site_url('admin/codegen/loadModel') ?>' , fdata );
    }
    
    function clearDivAll(){
        $('#controller').text('');
        $('#model').text('');
        $('#viewContent').text('');
        $('#comment').text('');
        $('#other').text('');
        $('#other_php').text('');
    }
    //----------------------- View -----------------------------------
    
    function clearView() {
        $('#viewContent').text('');
    }
    
    function loadViewList(){
        clearDivAll();
        if ($('#tableNameNow').val() == '') {
            $('#viewContent').text("เลือกตารางด้วย").css("color","red");
            return false;
        }
        var fdata = {
            table : $('#tableNameNow').val()
            ,author : $('#author').val()
        }
        $('#viewContent').load('<?= site_url('admin/codegen/loadViewList') ?>' , fdata );
    }
    
    function loadViewAddnew(){
        clearDivAll();
        if ($('#tableNameNow').val() == '') {
            $('#viewContent').text("เลือกตารางด้วย").css("color","red");
            return false;
        }
        var fdata = {
            table : $('#tableNameNow').val()
            ,author : $('#author').val()
        }
        $('#viewContent').load('<?= site_url('admin/codegen/loadViewAddnew') ?>' , fdata );
    }
    
    function loadViewEdit(){
        clearDivAll();
        if ($('#tableNameNow').val() == '') {
            $('#viewContent').text("เลือกตารางด้วย").css("color","red");
            return false;
        }
        var fdata = {
            table : $('#tableNameNow').val()
            ,author : $('#author').val()
        }
        $('#viewContent').load('<?= site_url('admin/codegen/loadViewEdit') ?>' , fdata );
    }
    
    function loadViewPreview(){
        clearDivAll();
        if ($('#tableNameNow').val() == '') {
            $('#viewContent').text("เลือกตารางด้วย").css("color","red");
            return false;
        }
        var fdata = {
            table : $('#tableNameNow').val()
            ,author : $('#author').val()
        }
        $('#viewContent').load('<?= site_url('admin/codegen/loadViewPreview') ?>' , fdata );
    }
    
    function loadComment(){
        clearDivAll();        
        var fdata = { 
            author : $('#author').val()
        }
        $('#comment').load('<?= site_url('admin/codegen/loadComment') ?>' , fdata );
    }

    function loadOther(){
        clearDivAll();
        if ($('#tableNameNow').val() == '') {
            $('#other').text("เลือกตารางด้วย").css("color","red");
            return false;
        }
        var fdata = {
            table : $('#tableNameNow').val()
            ,author : $('#author').val()
        }
        $('#other').load('<?= site_url('admin/codegen/loadOther') ?>' , fdata );
    }
    
    function loadOtherPhp(){
        clearDivAll();
        if ($('#tableNameNow').val() == '') {
            $('#other_php').text("เลือกตารางด้วย").css("color","red");
            return false;
        }
        var fdata = {
            table : $('#tableNameNow').val()
            ,author : $('#author').val()
        }
        $('#other_php').load('<?= site_url('admin/codegen/loadOtherPhp') ?>' , fdata );
    } 
</script>

<?php $this->load->view('admin/codegen/includes/footer.php'); ?>