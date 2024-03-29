<header>
    <div class="col-md-7">
        <nav class="navbar-default pull-left">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </nav>
        <div class="search hidden-xs hidden-sm">
            <input type="text" placeholder="Search" id="search">
        </div>
    </div>
    <div class="col-md-5">
        <div class="header-rightside">
            <ul class="list-inline header-top pull-right">
                <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                <li>
                    <a href="#" class="icon-info">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        <span class="label label-primary">3</span>
                    </a>
                </li>
                <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</header>