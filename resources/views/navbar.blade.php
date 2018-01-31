<nav class="navbar-default navbar-fixed-top" id="nav">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" id="homeBtn" href="/">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav" ng-controller="myCtrl">
        <li id="link1"><a href="#" ng-click="searchFunction(1)">Link <span class="sr-only">(current)</span></a></li>
        <li id="link2" ><a href="#" ng-click="searchFunction(2)">Link</a></li>
        <li class="dropdown" id="link3" ng-mouseover="dropdown(3)">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
        </ul>
        </li>
    </ul>
    <form class="navbar-form navbar-right">
        <div class="form-group">
        <input type="text" class="form-control transparent-input" id="searchBox" placeholder="Search here...">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
    </form>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>