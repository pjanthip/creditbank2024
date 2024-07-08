<pre class="prettyprint linenums languague-php">
<?php 
     echo htmlspecialchars("
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"CODE GENERATOR Version 2.0\">
        <meta name=\"author\" content=\"crotondev.com\">
        <!-- Your Favicon -->
        <link rel=\"shortcut icon\" href=\"<?php echo base_url('assets/themes/codegen/ico/favicon.ico') ?>\">
        <title>< CROTON DEV /> :: CODE GENERATOR Version 2.0</title>    
        <!-- Your Bootstrap -->
        <link href=\"<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Font Awesome -->
        <link href=\"<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>\" rel=\"stylesheet\" type=\"text/css\" /> 
        <script src=\"<?php echo base_url('assets/js/jquery.min.js'); ?>\"></script>    
        <script src=\"<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>\"></script>
         
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"<?php echo base_url('assets/js/html5shiv.js'); ?>\"></script>
          <script src=\"<?php echo base_url('assets/js/respond.min.js'); ?>\"></script>
        <![endif]-->     
    </head>
    <body>");
?>
</pre>

<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>