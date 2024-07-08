<pre class="prettyprint linenums languague-php">
<?php
    $myDate = gmdate("Y-m-d", time());
    $table_full_name = $table;
    $table_str = explode('.', $table);
    $table = $table_str[1];    
    echo "------------[View File name : preview_modal_view.php ]---------------\n";
    echo htmlspecialchars("
 
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
    ");
 
?>
</pre>
 
<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>