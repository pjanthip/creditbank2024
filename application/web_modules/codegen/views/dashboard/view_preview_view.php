<pre class="prettyprint linenums languague-php">
<?php
    $myDate = gmdate("Y-m-d", time());
    $table_full_name = $table;
    $table_str = explode('.', $table);
    $table = $table_str[1];    
    echo "------------[View File name : preview_view.php ]---------------\n";
    echo htmlspecialchars("
<?php \$this->load->view('path_name/$table/includes/header'); ?>
<?php \$this->load->view('path_name/$table/includes/navbar', array('active' => 'xxx')); ?>
 
<div class=\"container\">
    <div class=\"page-header\">
        <h4>แสดงข้อมูล Record</h4>
    </div>
 
        <table class=\"table table-bordered table-hover\">
            <thead class=\"well\">
                <tr>
                    <th width=\"180px;\">Label</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>\n");

foreach($fields as $field) {
echo htmlspecialchars("                <tr>
                    <td>" . ucfirst($field) . "</td>
                    <td><?php echo \$rsData['$field'];?></td>
                </tr>\n");           
}

echo htmlspecialchars("             </tbody>
        </table>
 
</div> <!--contrainer-->
 
<script type=\"text/javascript\">
    \$(document).ready(function() {  
 
    }); 
</script>

<?php \$this->load->view('path_name/$table/includes/footer'); ?>\n");
    
?>
</pre>
 
<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>