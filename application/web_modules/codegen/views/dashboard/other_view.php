 
    <div class="panel-group" id="accordion">
        <!---------------------------------------- 1 ------------------------------------------------>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel1">
                         jQuery   $('#ID').val();
                    </a>
                </h4>
            </div>
            <div id="panel1" class="panel-collapse collapse in">
                <div class="panel-body">
                      <pre class="prettyprint linenums languague-php">
                        <?php
                        echo "\n";
                        foreach ($fields as $field) {
                            echo htmlspecialchars("\$('#$field').val();\n");
                        }
                        ?>
                    </pre>
                </div>
            </div>
        </div>
        
         <!---------------------------------------- 2  ------------------------------------------------>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel2">
                         jQuery     var  xx  =    $('#ID').val();
                    </a>
                </h4>
            </div>
            <div id="panel2" class="panel-collapse collapse">
                <div class="panel-body">
                       <pre class="prettyprint linenums languague-php">
                        <?php
                        echo "\n";
                        foreach ($fields as $field) {
                            echo htmlspecialchars("var $field = \$('#$field').val();\n");
                        }
                        ?>
                    </pre>
                </div>
            </div>
        </div>
        
         <!--------------------------------------3---------------------------------------------------------------->
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel3">
                          jQuery  Clear Value   ex.   $('#ID').val('');   for Input object
                    </a>
                </h4>
            </div>
            <div id="panel3" class="panel-collapse collapse">
                <div class="panel-body">
                       <pre class="prettyprint linenums languague-php">
                        <?php
                        echo "\n";
                        foreach ($fields as $field) {
                            echo htmlspecialchars("\$('#$field').val('');\n");
                        }
                        ?>
                    </pre>
                </div>
            </div>
        </div>
         
           <!-------------------------------------- 4 ---------------------------------------------------------------->
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel4">
                            jQuery  Clear Text   ex.   $('#ID').text('');   for   div , span 
                    </a>
                </h4>
            </div>
            <div id="panel4" class="panel-collapse collapse">
                <div class="panel-body">
                       <pre class="prettyprint linenums languague-php">
                        <?php
                        echo "\n";
                        foreach ($fields as $field) {
                            echo htmlspecialchars("\$('#$field').text('');\n");
                        }
                        ?>
                    </pre>
                </div>
            </div>
        </div>
           
           <!-------------------------------------- 5 ---------------------------------------------------------------->
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel5">
                              jQuery Set Value  ex.   $('#ID').val('xxxx');   for   input object 
                    </a>
                </h4>
            </div>
            <div id="panel5" class="panel-collapse collapse">
                <div class="panel-body">
                       <pre class="prettyprint linenums languague-php">
                        <?php
                        echo "\n";
                        foreach ($fields as $field) {
                            echo htmlspecialchars("\$('#$field').val('$field');\n");
                        }
                        ?>
                    </pre>
                </div>
            </div>
        </div>
           
           <!-------------------------------------- 6 ---------------------------------------------------------------->
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel6">
                               HTML  ==>   input object 
                    </a>
                </h4>
            </div>
            <div id="panel6" class="panel-collapse collapse">
                <div class="panel-body">
                       <pre class="prettyprint linenums languague-php">
                      <?php
                        echo "\n";
                        foreach ($fields as $field) {
                            echo htmlspecialchars("<input type=\"text\" class=\"form-control\" id=\"$field\" name=\"$field\" />\n");
                        }
                        ?>
                    </pre>
                </div>
            </div>
        </div>
           
            <!--------------------------------------7---------------------------------------------------------------->
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel7">
                        jQuery Set Value  ex.   $('#ID').val(jdata.xxxx);   for   input object 
                    </a>
                </h4>
            </div>
            <div id="panel7" class="panel-collapse collapse">
                <div class="panel-body">
                       <pre class="prettyprint linenums languague-php">
                          <?php
                        echo "\n";
                        foreach ($fields as $field) {
                            echo htmlspecialchars("\$('#$field').val(jdata.$field);\n");
                        }
                        ?>
                    </pre>
                </div>
            </div>
        </div>
        
    </div>
 
    <script>
        $(document).ready(function() {
            //$('.collapse').collapse()
            prettyPrint();
        });
    </script>