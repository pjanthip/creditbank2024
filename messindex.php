<?php
    $postdata = http_build_query(
                array(
                    'method' => 'remain',
                    'username' => 'crrucr',
                    'password' => 'TmYLS8PQ6+',            
                    'sender' => 'CRRU'
        ));
        $opts = array('http' => array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
        ));
        $context = stream_context_create($opts);
        $result = file_get_contents('http://smsapi.cat4sms.com/cat4api/api.php', false, $context);
        echo $result;
		echo "sdsdsd";
?>