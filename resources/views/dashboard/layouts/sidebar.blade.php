<div class="mobile-menu-left-overlay"></div>
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Dashboard</span>
	            </span>
            <ul>
                <li><a href="{{ route('DashboardHome') }}"><span class="lbl">Home</span><span class="label label-custom label-pill label-danger">new</span></a></li>
            </ul>
        </li>
        <li class="purple with-sub">
	            <span>
	                <i class="font-icon font-icon-comments active"></i>
	                <span class="lbl">Messages</span>
	            </span>
            <ul>
                <li><a href="{{route('DashboardMessenger')}}"><span class="lbl">Messenger</span></a></li>
                <li><a href="{{route('DashboardChat')}}"><span class="lbl">Messages</span><span class="label label-custom label-pill label-danger">8</span></a></li>
                <li><a href="{{route('ChatWrite')}}"><span class="lbl">Write Message</span></a></li>
                <li><a href="{{route('ChatUser')}}"><span class="lbl">Select User</span></a></li>
            </ul>
        </li>
        <li class="red">
            <a href="{{ route('DashboardMail') }}">
                <i class="font-icon glyphicon glyphicon-send"></i>
                <span class="lbl">Mail</span>
            </a>
        </li>
        <li class="blue-dirty">
            <a href="{{route('DashboardTables')}}">
                <span class="glyphicon glyphicon-th"></span>
                <span class="lbl">Tables</span>
            </a>
        </li>


    </ul>

    <section>
        <header class="side-menu-title">Tags</header>
        <ul class="side-menu-list">
            <li>
                <a href="#">
                    <i class="tag-color green"></i>
                    <span class="lbl">Website</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tag-color grey-blue"></i>
                    <span class="lbl">Bugs/Errors</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tag-color red"></i>
                    <span class="lbl">General Problem</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tag-color pink"></i>
                    <span class="lbl">Questions</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tag-color orange"></i>
                    <span class="lbl">Ideas</span>
                </a>
            </li>
        </ul>
    </section>
</nav><!--.side-menu-->
