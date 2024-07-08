<pre class="prettyprint linenums languague-php">
    <?php
    $myDate = gmdate("Y-m-d", time());
    $table_full_name = $table;
    $table_str = explode('.', $table);
    $table = $table_str[1];
    echo "------------[Model File name : $table" . "_model.php ]---------------\n";
    echo htmlentities("<?php\n");
    echo "if (!defined('BASEPATH'))  exit('No direct script access allowed');\n";
    echo "\n";

    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@generate by  $author\n";
    echo "  *@date $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 
    echo "\n";
    echo "class " . ucfirst($table) . "_model extends CI_Model {\n";
    echo "\n";

    echo "   public function __construct()\n";
    echo "   {\n";
    echo "      parent::__construct();\n";
    echo "   }\n";
    
//        echo "   public function __construct()\n";
//        echo "   {\n";
//        echo "      \$this->_dbName = 'default';  //default , edms , regdb \n";
//        echo "      \$this->_table = '$table';\n";
//        echo "      parent::__construct();\n";
//        echo "   }\n";
    echo "\n}\n// ---------------------------- END Model Class --------------------------------";
    ?>
</pre>

<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>