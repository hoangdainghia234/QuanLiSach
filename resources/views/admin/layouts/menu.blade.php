<div id="main-menu" class="main-menu collapse navbar-collapse">
    <ul class="nav navbar-nav">
            <li>
                <a href="{{route('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>
            <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{route('button')}}">Buttons</a></li>
                    <li><i class="fa fa-id-badge"></i><a href="{{route('badges')}}">Badges</a></li>
                    <li><i class="fa fa-bars"></i><a href="{{route('tabs')}}">Tabs</a></li>
                    <li><i class="fa fa-share-square-o"></i><a href="{{route('socialButton')}}">Social Buttons</a></li>
                    <li><i class="fa fa-id-card-o"></i><a href="{{route('cards')}}">Cards</a></li>
                    <li><i class="fa fa-bell"></i><a href="{{route('notifications')}}">Notifications</a></li>
                    <li><i class="fa fa-exclamation-triangle"></i><a href="{{route('alerts')}}">Alerts</a></li>
                    <li><i class="fa fa-spinner"></i><a href="{{route('bars')}}">Progress Bars</a></li>
                    <li><i class="fa fa-fire"></i><a href="{{route('modals')}}">Modals</a></li>
                    <li><i class="fa fa-book"></i><a href="{{route('switches')}}">Switches</a></li>
                    <li><i class="fa fa-th"></i><a href="{{route('grids')}}">Grids</a></li>
                    <li><i class="fa fa-file-word-o"></i><a href="{{route('typography')}}">Typography</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="{{route('basictables')}}">Basic Table</a></li>
                    <li><i class="fa fa-table"></i><a href="{{route('datatables')}}">Data Table</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-th"></i><a href="{{route('basicform')}}">Basic Form</a></li>
                <li><i class="menu-icon fa fa-th"></i><a href="{{route('advancedform')}}">Advanced Form</a></li>
            </ul>
        </li>

        <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{route('fontAwesome')}}">Font Awesome</a></li>
                <li><i class="menu-icon ti-themify-logo"></i><a href="{{route('themefy')}}">Themefy Icons</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('Widgets')}}"> <i class="menu-icon ti-email"></i>Widgets </a>
        </li>
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-line-chart"></i><a href="{{route('Chartjs')}}">Chart JS</a></li>
                <li><i class="menu-icon fa fa-area-chart"></i><a href="{{route('floatChart')}}">Float Chart</a></li>
                <li><i class="menu-icon fa fa-pie-chart"></i><a href="{{route('peitychart')}}">Peity Chart</a></li>
            </ul>
        </li>

        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-map-o"></i><a href="{{route('gmap')}}">Google Maps</a></li>
                <li><i class="menu-icon fa fa-street-view"></i><a href="{{route('vectormap')}}">Vector Maps</a></li>
            </ul>
        </li>
        <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('login')}}">Login</a></li>
                <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('register')}}">Register</a></li>
                <li><i class="menu-icon fa fa-paper-plane"></i><a href="{{route('password.request')}}">Forget Pass</a></li>
            </ul>
        </li>
    </ul>
</div>