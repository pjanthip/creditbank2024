<pre class="prettyprint linenums languague-php">
    <?php
    $myDate = gmdate("Y-m-d", time());

    echo "- Comment แบบต่างๆ \n\n";

    //--------- Begin  Insert Comment 
    echo "  /**\n";
    echo "  *@author $author\n";
    echo "  *@date $myDate\n";
    echo "  *@date edit $myDate\n";
    echo "  */\n";
    //--------- End  Insert Comment 

    echo "\n";

    echo  " - เส้นแบ่ง function  ใน PHP Code \n\n";
 
    echo "\n// ------------------------------------------------------------------------\n";
    echo "\n";
    
     echo  " - เส้นแบ่ง ต่าง ๆ ที่ต้องการอธิบาย ใน  HTML  Code \n\n";
 
   echo htmlspecialchars("<!--  อธิบาย  \n");
   echo htmlspecialchars("  ================================================== -->  \n");
    echo "\n";
    ?>
</pre>

<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>