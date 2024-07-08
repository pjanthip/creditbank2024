<h3> HTML Table  แบบที่ 1</h3>
<pre class="prettyprint linenums languague-php">
    <?php
    // Table Header 
    echo htmlspecialchars("      <table class=\"table table-bordered table-hover \">\n");
    echo htmlspecialchars("             <thead class=\"well\">\n");
    echo htmlspecialchars("                 <tr>\n");
    echo htmlspecialchars("                     <th width=\"20px;\">#</th>\n");

    foreach ($fields as $field) {
        echo htmlspecialchars("                     <th>" . ucfirst($field) . "</th>\n");
    }
    
    echo htmlspecialchars("                 </tr>\n");
    echo htmlspecialchars("             </thead>\n");

    //Table Body 
    echo htmlspecialchars("             <tbody>\n");
    echo htmlspecialchars("             <?php\n");
    echo htmlspecialchars("             \$i_row = \$start_row + 1;\n");
    echo htmlspecialchars("              foreach (\$rsData->result() as \$row) {\n");
    echo htmlspecialchars("             ?>\n");
    echo htmlspecialchars("                 <tr>\n");
    echo htmlspecialchars("                     <td style=\"text-align:center;\"><?php echo \$i_row;?></td>\n");

    foreach ($fields as $field) {
        echo htmlspecialchars("                     <td><?php echo \$row->$field;?></td>\n");
    }
    echo htmlspecialchars("                 </tr>\n");
    echo htmlspecialchars("             <?php\n");
    echo htmlspecialchars("                     \$i_row++;\n");
    echo htmlspecialchars("                 }\n");
    echo htmlspecialchars("             ?>\n");
    echo htmlspecialchars("             </tbody>\n");
    echo htmlspecialchars("         </table>\n");
    ?>
</pre>

<!-- แบบที่ 2
===========================================================-->
<h3> HTML Table  แบบที่ 2</h3>
<pre class="prettyprint linenums languague-php">
    <?php
    // Table Header 
    echo htmlspecialchars("       <table class=\"table table-bordered table-hover \">\n");
    echo htmlspecialchars("             <thead class=\"well\">\n");
    echo htmlspecialchars("                 <tr>\n");
    echo htmlspecialchars("                     <th width=\"20px;\">#</th>\n");

    foreach ($fields as $field) {
        echo htmlspecialchars("                     <th>" . ucfirst($field) . "</th>\n");
    }
    
    echo htmlspecialchars("                 </tr>\n");
    echo htmlspecialchars("             </thead>\n");

    //Table Body 
    echo htmlspecialchars("             <tbody>\n");
    echo htmlspecialchars("             <?php\n");
    echo htmlspecialchars("             \$i_row = \$start_row + 1;\n");
    echo htmlspecialchars("              foreach (\$rsData  as \$row) {\n");
    echo htmlspecialchars("             ?>\n");
    echo htmlspecialchars("                 <tr>\n");
    echo htmlspecialchars("                     <td style=\"text-align:center;\"><?php echo \$i_row;?></td>\n");

    foreach ($fields as $field) {
        echo htmlspecialchars("                     <td><?php echo \$row['$field'];?></td>\n");
    }
    echo htmlspecialchars("                 </tr>\n");
    echo htmlspecialchars("             <?php\n");
    echo htmlspecialchars("                     \$i_row++;\n");
    echo htmlspecialchars("                 }\n");
    echo htmlspecialchars("             ?>\n");
    echo htmlspecialchars("             </tbody>\n");
    echo htmlspecialchars("         </table>\n");
    ?>
</pre>

<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>

