<div class="mini">

    <div class="panel-group" id="accordion">
        <!---------------------------------------- 1 ------------------------------------------------>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                         jQuery   $('#ID').val();
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
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
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                         jQuery   $('#ID').val();
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
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
        
        
    </div>


    <div class="accordion" id="myAccordion">

        <!-------------------------------------------1----------------------------------------------------------->         
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#myAccordion" href="#panel1">
                    jQuery   $('#ID').val();
                </a>
            </div>
            <div id="panel1" class="accordion-body collapse in">
                <div class="accordion-inner">
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
        <!------------------------------------------2------------------------------------------------------------>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#myAccordion" href="#panel2">
                    jQuery     var  xx  =    $('#ID').val();
                </a>
            </div>
            <div id="panel2" class="accordion-body collapse">
                <div class="accordion-inner">
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
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#myAccordion" href="#panel3">
                    jQuery  Clear Value   ex.   $('#ID').val('');   for Input object
                </a>
            </div>
            <div id="panel3" class="accordion-body collapse">
                <div class="accordion-inner">
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
        <!---------------------------------------4--------------------------------------------------------------->
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#myAccordion" href="#panel4">
                    jQuery  Clear Text   ex.   $('#ID').text('');   for   div , span 
                </a>
            </div>
            <div id="panel4" class="accordion-body collapse">
                <div class="accordion-inner">
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
        <!-----------------------------------------5------------------------------------------------------------->
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#myAccordion" href="#panel5">
                    jQuery Set Value  ex.   $('#ID').val('xxxx');   for   input object 
                </a>
            </div>
            <div id="panel5" class="accordion-body collapse">
                <div class="accordion-inner">
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

        <!-----------------------------------------6------------------------------------------------------------->
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#myAccordion" href="#panel6">
                    HTML  ==>   input object 
                </a>
            </div>
            <div id="panel6" class="accordion-body collapse">
                <div class="accordion-inner">
                    <pre class="prettyprint linenums languague-php">
                        <?php
                        echo "\n";
                        foreach ($fields as $field) {
                            echo htmlspecialchars("<input type=\"text\" id=\"$field\" name=\"$field\" />\n");
                        }
                        ?>
                    </pre>
                </div>
            </div>
        </div>

        <!-----------------------------------------7------------------------------------------------------------->
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#myAccordion" href="#panel7">
                    jQuery Set Value  ex.   $('#ID').val(jdata.xxxx);   for   input object 
                </a>
            </div>
            <div id="panel7" class="accordion-body collapse">
                <div class="accordion-inner">
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

    </div><!--myAccordion-->

    <script>
        $(document).ready(function() {
            prettyPrint();
        });
    </script>