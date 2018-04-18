<nav class="navbar navbar-inverse sidebar"  role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="stockbalance"><?php if(@$user){echo $user->first;}?></a>
        </div> 
        <!--Navigation links collection for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="stockbalance">Stok Balance<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon-home"></span></a></li>
                <li ><a href="sales">Sales<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon-share-alt"></span></a></li>
                <li ><a href="users">Users<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon-user"></span></a></li>                      
                <li ><a href="employees">Employees<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon-user"></span></a></li>
                <li ><a href="customers">Customers<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon-envelope"></span></a></li>
                <li ><a href="orders">Orders<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon-shopping-cart"></span></a></li>
                <li ><a href="criticalstock">Critical Stock<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon-minus-sign"></span></a></li>
                <li ><a href="addstock">Add Stock<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon glyphicon-plus-sign"></span></a></li>
                 <li ><a href="addstock">Charts<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon glyphicon-plus-sign"></span></a></li>
                <li ><a href="register/logout">Logout<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon glyphicon-off"></span></a></li>
            </ul>
        </div>
    </div>
</nav>