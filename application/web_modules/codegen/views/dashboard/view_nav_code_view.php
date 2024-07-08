<pre class="prettyprint linenums languague-php">
<?php 
    $table_full_name = $table;
    $table_str = explode('.', $table);
    $table = $table_str[1];
     echo htmlspecialchars("
 <div class=\"container\">
    <ul class=\"nav nav-pills\">
        <li <?php if (\$active == 'list') echo 'class=\"active\"';?>><?php  anchor(\"path_name/$table/\", '<span class=\"glyphicon glyphicon-list-alt\"></span> แสดงข้อมูล');?><li>
        <li <?php if (\$active == 'add') echo 'class=\"active\"';?>><?php anchor(\"path_name/$table/add\", '<span class=\"glyphicon glyphicon-plus\"></span> เพิ่มข้อมูลใหม่');?><li>
    </ul>
</div>
 ");
?>
</pre>

<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>