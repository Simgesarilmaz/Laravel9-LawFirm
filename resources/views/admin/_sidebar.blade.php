<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        Jhon Deo Alex
                        <br />

                        <a href="/logoutuser" class="text-uppercase">Logout</a>

                    </div>
                </div>
            <li>
                <a class="active-menu" href="index.html"><i class="fa fa-home "></i>Dashboard</a>
            </li>

            </li>
            <li>
                <a href="">
                    <i class="fa fa-calendar-o text-blue "></i>
                    Appointments
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>New Appointments</a>
                    </li>
                    <li>
                        <a href="notification.html"><i class="fa fa-bell "></i>Accepted Appointments</a>
                    </li>
                    <li>
                        <a href="progress.html"><i class="fa fa-circle-o "></i>Pending Appointments</a>
                    </li>
                    <li>
                        <a href="buttons.html"><i class="fa fa-code "></i>Completed Appointments</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/admin/category">
                    <i class="fa fa-sitemap "></i>
                    Category</a>
            </li>
            <li>
                <a href="/admin/service">
                    <i class="fa fa-envelope"></i>
                    Services</a>
            </li>
            <li>
                <a href="{{route('admin.comment.index')}}"><i class="fa fa-comment "></i>Comments</a>
            </li>
            <li>
                <a href="/admin/images"><i class="fa fa-image "></i>Images</a>
            </li>
            <li>
                <a href="{{route('admin.message.index')}}">
                    <i class="fa fa-envelope"></i>
                    Messages</a>
            </li>

            <li>
                <a href="{{route('admin.faq.index')}}">
                    <i class="fa fa-question "></i>
                    FAQ</a>
            </li>
            <li>
                <a href="/admin/users"><i class="fa fa-users"></i>Users</a>
            </li>
            <li>
                <a href="/admin/profile"><i class="fa fa-sitemap "></i>Profile</a>
            </li>
            <li>
                <a href="/admin/settings">
                    <i class="fa fa-gears"></i>
                    Settings</a>
            </li>

        </ul>
            </li>
        </ul>
    </div>
</nav>
