<?php
$sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$schema_name';";        
$query = $this->db->query($sql);
$table = $query->result_array();
sort($table);

$i = 1;
foreach ($table as $tname) {
    ?>
    <a  class="list-group-item" href="#" onClick="loadField('<?php echo $schema_name.'.'.$tname['table_name']; ?>');">
        <span class="label label-default"><?php echo $i; ?></span> <?php echo $schema_name.'.'.$tname['table_name']; ?>
    </a>  
    <?php
    $i++;
}
?>    
