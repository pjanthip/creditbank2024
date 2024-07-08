<?php $this->load->view('codegen/includes/header'); ?>
<?php $this->load->view('codegen/includes/navbar', array('active' => 'TABLE')); ?>

<style>
    .tab-pane-x{
        padding: 15px;
        
    }
</style>

<div class="row">
    <div class="col-xs-3">
        <div class="alert alert-info">
            <h4>Schema List</h4>
            <div class="list-group">
                <select id="x_schema_name" name="x_schema_name" class="form-control" >
                    <option value="0">เลือก Schema</option>
                    <?php
                    foreach ($schema_list as $row_sche){
                        ?>
                        <option value="<?php echo $row_sche['schema_name']; ?>">
                            <?php echo $row_sche['schema_name']; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>         
        <div class="alert alert-info">
            <h4>ตารางข้อมูล</h4>
        </div>        
        <div class="list-group" id="div_table_list">

        </div>
    </div>

    <div class="col-xs-9">
        <div class="well well-sm">
            <div class="row ">
                <div class="col-md-3">
                    <label class="control-label" for="devname">กรอกชื่อผู้พัฒนา เช่น Wichian@CrotonDev</label>
                    <input type="text" class="form-control" id="author" name="author" > 
                </div>
                <div class="col-md-7 offset3">
                    <h3>
                        <span id="showTableName">ชื่อตาราง</span>
                        <input type="hidden" id="tableNameNow">
                    </h3>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs " id="myTab" role="tablist">
            <li class="active"><a href="#fields">Fields</a></li>
            <li><a href="#controller" onClick="loadController();">Controller</a></li>
            <li><a href="#model" onClick="loadModel();">Model</a></li>
            <li><a href="#views" onClick="clearView(); loadViewList();">Views</a></li>
            <li><a href="#comment" onClick="loadComment();">Comment</a></li>
            <li><a href="#other" onClick="loadOther();">Other HTML,JS</a></li>
            <li><a href="#other_php" onClick="loadOtherPhp();">PHP</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane table-pane-x active" id="fields">Are you ready? ^_^</div>
            <div class="tab-pane table-pane-x" id="controller"></div>
            <div class="tab-pane table-pane-x" id="model"></div>
            <div class="tab-pane table-pane-x" id="views">
                <nav class="navbar navbar-default" role="navigation">                    
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Views</a>
                        </div>                        
                        <ul class="nav navbar-nav">
                            <li><a href="#" onClick="loadViewList();">List All</a></li>
                            <li><a href="#" onClick="loadViewAddnew();">Add New</a></li>
                            <li><a href="#" onClick="loadViewEdit();">Edit</a></li>
                            <li><a href="#" onClick="loadViewPreview();">Preview</a></li>
                            <li><a href="#" onClick="loadViewPreviewModal();">Preview For Modal</a></li>
                            <li><a href="#" onClick="loadViewHeader();">Include Header</a></li>
                            <li><a href="#" onClick="loadViewNav();">Include Nav</a></li>
                            <li><a href="#" onClick="loadViewFooter();">Include Footer</a></li>
                        </ul>
                </nav>
                <div id="viewContent"></div>
            </div>
            
            <div class="tab-pane table-pane-x" id="comment"></div>
            <div class="tab-pane table-pane-x" id="other"></div>
            <div class="tab-pane table-pane-x" id="other_php"></div>
        </div>
    </div> <!--col-->

</div> <!-- row-->

<script>
    $(function(){
                $('#x_schema_name').change(function(){
                    var sdata = {
                        schema_name : $('#x_schema_name').val()
                    };

                    $('#div_table_list').html('');
                    $('#div_table_list').load('<?php echo site_url('codegen/dashboard/loadTable'); ?>' , sdata);                    
                });
    
                $('#myTab a').click(function(e) {
                    e.preventDefault();
                    $(this).tab('show');
                });

                $('#viewTable').click(function(e) {
                    $('#divTableName').slideToggle();
                });        
    });


                function loadField(table) {
                    clearDivAll();
                    $('#myTab a:first').tab('show');
                    $('#showTableName').text(table);
                    $('#tableNameNow').val(table);
                    var fdata = {
                        table: table
                    };
                    $('#fields').load('<?php echo site_url('codegen/dashboard/loadField'); ?>', fdata);
                }

                function loadController() {
                    clearDivAll();

                    if ($('#tableNameNow').val() == '') {
                        $('#controller').text("เลือกตารางด้วย").css("color", "red");
                        return false;
                    }
                    var fdata = {
                        table: $('#tableNameNow').val()
                                , author: $('#author').val()
                    }
                    $('#controller').load('<?php echo site_url('codegen/dashboard/loadController') ?>', fdata);
                }

                function loadModel() {
                    clearDivAll();

                    if ($('#tableNameNow').val() == '') {
                        $('#model').text("เลือกตารางด้วย").css("color", "red");
                        return false;
                    }
                    var fdata = {
                        table: $('#tableNameNow').val()
                                , author: $('#author').val()
                    }
                    $('#model').load('<?php echo site_url('codegen/dashboard/loadModel') ?>', fdata);
                }

                function clearDivAll() {
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

                function loadViewList() {
                    clearDivAll();
                    if ($('#tableNameNow').val() == '') {
                        $('#viewContent').text("เลือกตารางด้วย").css("color", "red");
                        return false;
                    }
                    var fdata = {
                        table: $('#tableNameNow').val()
                                , author: $('#author').val()
                    }
                    $('#viewContent').load('<?php echo site_url('codegen/dashboard/loadViewList');?>', fdata);
                }

                function loadViewAddnew() {
                    clearDivAll();
                    if ($('#tableNameNow').val() == '') {
                        $('#viewContent').text("เลือกตารางด้วย").css("color", "red");
                        return false;
                    }
                    var fdata = {
                        table: $('#tableNameNow').val()
                                , author: $('#author').val()
                    }
                    $('#viewContent').load('<?php echo site_url('codegen/dashboard/loadViewAddnew');?>', fdata);
                }

                function loadViewEdit() {
                    clearDivAll();
                    if ($('#tableNameNow').val() == '') {
                        $('#viewContent').text("เลือกตารางด้วย").css("color", "red");
                        return false;
                    }
                    var fdata = {
                        table: $('#tableNameNow').val()
                                , author: $('#author').val()
                    }
                    $('#viewContent').load('<?php echo site_url('codegen/dashboard/loadViewEdit'); ?>', fdata);
                }

                function loadViewPreview() {
                    clearDivAll();
                    if ($('#tableNameNow').val() == '') {
                        $('#viewContent').text("เลือกตารางด้วย").css("color", "red");
                        return false;
                    }
                    var fdata = {
                        table: $('#tableNameNow').val()
                                , author: $('#author').val()
                    };
                    $('#viewContent').load('<?php echo site_url('codegen/dashboard/loadViewPreview'); ?>', fdata);
                }
                
               function loadViewPreviewModal() {
                    clearDivAll();
                    if ($('#tableNameNow').val() == '') {
                        $('#viewContent').text("เลือกตารางด้วย").css("color", "red");
                        return false;
                    }
                    var fdata = {
                        table: $('#tableNameNow').val()
                                , author: $('#author').val()
                    };
                    $('#viewContent').load('<?php echo site_url('codegen/dashboard/loadViewPreviewModal');?>', fdata);
                }
                
                /*------- เพิ่มมาใหม่ -------*/
                function loadViewHeader() {
                    clearDivAll(); 
                    $('#viewContent').load('<?php echo site_url('codegen/dashboard/loadViewHeader');?>');
                }

                   function loadViewNav() {
                    clearDivAll();
                    if ($('#tableNameNow').val() == '') {
                        $('#viewContent').text("เลือกตารางด้วย").css("color", "red");
                        return false;
                    }
                    var fdata = {
                        table: $('#tableNameNow').val()
                                , author: $('#author').val()
                    };
                    $('#viewContent').load('<?php echo site_url('codegen/dashboard/loadViewNav');?>', fdata);
                }
                
                function loadViewFooter() {
                    clearDivAll(); 
                    $('#viewContent').load('<?php echo site_url('codegen/dashboard/loadViewFooter');?>');
                }
                
                /*--------------- end เพิ่มใหม่ -----------*/
                

                function loadComment() {
                    clearDivAll();
                    var fdata = {
                        author: $('#author').val()
                    };
                    $('#comment').load('<?php echo site_url('codegen/dashboard/loadComment');?>', fdata);
                }

                function loadOther() {
                    clearDivAll();
                    if ($('#tableNameNow').val() == '') {
                        $('#other').text("เลือกตารางด้วย").css("color", "red");
                        return false;
                    }
                    var fdata = {
                        table: $('#tableNameNow').val()
                                , author: $('#author').val()
                    }
                    $('#other').load('<?php echo site_url('codegen/dashboard/loadOther');?>', fdata);
                }

                function loadOtherPhp() {
                    clearDivAll();
                    if ($('#tableNameNow').val() == '') {
                        $('#other_php').text("เลือกตารางด้วย").css("color", "red");
                        return false;
                    }
                    var fdata = {
                        table: $('#tableNameNow').val()
                                , author: $('#author').val()
                    };
                    $('#other_php').load('<?php echo site_url('codegen/dashboard/loadOtherPhp');?>', fdata);
                }
</script>
<?php $this->load->view('codegen/includes/footer'); ?>