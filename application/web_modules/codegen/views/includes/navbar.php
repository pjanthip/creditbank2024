<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color: #f21c30;">Code Generator</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li <?php echo ($active=='TABLE') ?   'class="active"' : '';?>>
              <a href="<?php echo site_url('codegen/dashboard');?>">
                  <span class="glyphicon glyphicon-th-large"></span> Table
              </a>
          </li>
          <li <?php echo ($active=='SQL') ?   'class="active"' : '';?>>
              <a href="<?php echo site_url('codegen/dashboard/sql');?>"><span class="glyphicon glyphicon-edit"></span> SQL</a>
          </li>
          <li <?php echo ($active=='DOCUMENT') ?   'class="active"' : '';?>><a href="#"><span class="glyphicon glyphicon-book"></span> Document</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Admin <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Logout</a></li>          
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
