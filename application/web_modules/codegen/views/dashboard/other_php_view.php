 
<div class="panel-group" id="accordion">
    <!---------------------------------------- 1 ------------------------------------------------>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#panel1">
                    PHP ==>    $rsData[] = array ( key => value);  แบบที่ 1
                </a>
            </h4>
        </div>
        <div id="panel1" class="panel-collapse collapse in">
            <div class="panel-body">
                <pre class="prettyprint linenums languague-php">
                    <?php
                    echo "\n\$rsData[] =  array (\n";

                    $is_comma = FALSE;
                    foreach ($fields as $field) {
                        if ($is_comma) {
                            echo "          ,";
                        } else {
                            echo "          ";
                        }
                        echo "'$field' => \$row->$field\n";
                        $is_comma = TRUE;
                    }
                    echo ");"
                    ?>
                </pre>
            </div>
        </div>
    </div>


    <!---------------------------------------- 2 ------------------------------------------------>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#panel2">
                    PHP ==>    $rsData[] = array ( key => value);  แบบที่2
                </a>
            </h4>
        </div>
        <div id="panel2" class="panel-collapse collapse">
            <div class="panel-body">
                <pre class="prettyprint linenums languague-php">
                    <?php
                    echo "\n\$rsData[] =  array (\n";

                    $is_comma = FALSE;
                    foreach ($fields as $field) {
                        if ($is_comma) {
                            echo "          ,";
                        } else {
                            echo "          ";
                        }
                        echo "'$field' => \$row['$field']\n";
                        $is_comma = TRUE;
                    }
                    echo ");"
                    ?>
                </pre>
            </div>
        </div>
    </div>

    <!---------------------------------------- 3 ------------------------------------------------>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#panel3">
                    PHP ==>    $field  = $row->field    แบบที่ 1 
                </a>
            </h4>
        </div>
        <div id="panel3" class="panel-collapse collapse">
            <div class="panel-body">
                <pre class="prettyprint linenums languague-php">
                    <?php
                    echo "\n";
                    foreach ($fields as $field) {
                        echo "\$$field = \$row->$field;\n";
                    }
                    ?>
                </pre>
            </div>
        </div>
    </div>

    <!---------------------------------------- 4  ------------------------------------------------>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#panel4">
                    PHP ==>    $field  = $row['field']    แบบที่ 2 
                </a>
            </h4>
        </div>
        <div id="panel4" class="panel-collapse collapse">
            <div class="panel-body">
                <pre class="prettyprint linenums languague-php">
                    <?php
                    echo "\n";
                    foreach ($fields as $field) {
                        echo "\$$field = \$row['$field'];\n";
                    }
                    ?>
                </pre>
            </div>
        </div>
    </div>

    <!---------------------------------------- 5  ------------------------------------------------>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#panel5">
                    PHP ==>   $data['field']  = $field     
                </a>
            </h4>
        </div>
        <div id="panel5" class="panel-collapse collapse">
            <div class="panel-body">
                <pre class="prettyprint linenums languague-php">
                    <?php
                    echo "\n";
                    foreach ($fields as $field) {
                        echo "\$data['$field'] = \$$field;\n";
                    }
                    ?>
                </pre>
            </div>
        </div>
    </div>

    <!---------------------------------------- 6  ------------------------------------------------>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#panel6">
                    PHP ==>   $data['field']  = $field     
                </a>
            </h4>
        </div>
        <div id="panel6" class="panel-collapse collapse">
            <div class="panel-body">
                <pre class="prettyprint linenums languague-php">
                    <?php
                    echo "\n";
                    foreach ($fields as $field) {
                        echo "\$$field = \$this->input->post('$field');\n";
                    }
                    ?>
                </pre>
            </div>
        </div>
    </div>

    <!----------------------------------------  7  ------------------------------------------------>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#panel7">
                    PHP ==>   $data = array (  '$key'   =>  $field     )
                </a>
            </h4>
        </div>
        <div id="panel7" class="panel-collapse collapse">
            <div class="panel-body">
                <pre class="prettyprint linenums languague-php">
                    <?php
                    echo "\n";
                    echo "\$data = array (\n";
           
                     $is_comma = FALSE;
                    foreach ($fields as $field) {
                        if ($is_comma) {
                            echo "          ,";
                        } else {
                            echo "          ";
                        }
                        echo "'$field' => \$$field\n";
                        $is_comma = TRUE;
                    }
                    echo ");"
                    
                    ?>
                </pre>
            </div>
        </div>
    </div>

    <!----------------------------------------  8  ------------------------------------------------>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#panel8">
                    PHP ==>   $data[$key] = array (  '$key'   =>  $field     )
                </a>
            </h4>
        </div>
        <div id="panel8" class="panel-collapse collapse">
            <div class="panel-body">
                <pre class="prettyprint linenums languague-php">
                    <?php
                    echo "\n";

                    foreach ($fields as $field) {
                        echo "\$data['$field'] = \$rowTemp['$field'];\n";
                        //  echo ", '$field' => \$$field\n";                  
                    }
                    echo ");\n";
                    ?>
                </pre>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>