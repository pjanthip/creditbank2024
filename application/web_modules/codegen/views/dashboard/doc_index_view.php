<?php $this->load->view('admin/codegen/includes/header.php'); ?>
<?php $this->load->view('admin/codegen/includes/navbar.php', array('active' => 'doc')); ?>

<div class="container">
    <div class="page-header">
        <h2>Document</h2>
    </div>

    <div class="row">
        <div class="span6">
            <h3>เดิม HTML 4</h3>
            <pre class="prettyprint linenums languague-php">             
&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot;&gt;
&lt;title&gt;ORASIS TITLE&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Hello, world!&lt;/h1&gt; 
&lt;/body&gt;
&lt;/html&gt;
            </pre>
        </div>

        <div class="span6">
            <h3>ใหม่ HTML 5</h3>
            <pre class="prettyprint linenums languague-php">               
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;title&gt;ORASIS TITLE&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;   
  &lt;/body&gt;
&lt;/html&gt;     
            </pre>
        </div>
    </div>

    <div clas="row">
     
            <h3>JavaScript  Tag</h3>
            <pre class="prettyprint linenums languague-php">               
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;title&gt;ORASIS TITLE&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;   
  &lt;/body&gt;
&lt;/html&gt;     
            </pre>
        
    </div>
    
    <div>
        <h3>Coding Style</h3>
        
    </div>

</div>
</div> <!--contrainer-->

<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>

<?php $this->load->view('admin/codegen/includes/footer.php'); ?>