<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">БТИ</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li {!! $link->activePath('/') !!}><a href="{{ url('/') }}">HOME</a></li>
                <li {!! $link->activePath('about') !!}><a href="{{ url('/about') }}">ABOUT</a></li>
                <li {!! $link->activePath('contact') !!}><a href="{{ url('/contact') }}">CONTACT</a></li>
                {{--<li {!! $link->activePath('login') !!}><a href="{{ url('/login') }}">LOGIN</a></li>--}}
                @if(Auth::user() && Auth::user()->isAdmin())
                    <li {!! $link->activePath('admin') !!}><a href="{{ url('/admin') }}">ADMIN PANEL</a></li>
                @endif
                @if(Auth::user())
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            {{--<img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image"/>--}}
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
{{--                                <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />--}}
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            {{--<!-- Menu Body -->--}}
                            {{--<li class="user-body">--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Followers</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Sales</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Friends</a>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            LOGIN
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="login-box-body">
                                <form role="form" action="{{ url('/login') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="InputName1">Email address</label>
                                        <input name="email" type="email" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputEmail1">Password</label>
                                        <input name="password" type="password" class="form-control" id="exampleInputPassword">
                                    </div>
                                    <button type="submit" class="btn btn-theme">Отправить</button>
                                    <div class="register-msg">
                                        <a href="{{ url('/register') }}">Регистрация</a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="blog.html">BLOG</a></li>--}}
                        {{--<li><a href="single-post.html">SINGLE POST</a></li>--}}
                        {{--<li><a href="portfolio.html">PORTFOLIO</a></li>--}}
                        {{--<li><a href="single-project.html">SINGLE PROJECT</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
            {{--<div class="navbar-custom-menu">--}}
                {{--<ul class="nav navbar-nav">--}}

                    {{--<li class="dropdown user user-menu">--}}
                        {{--<!-- Menu Toggle Button -->--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                            {{--<!-- The user image in the navbar-->--}}
                            {{--<img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image"/>--}}
                            {{--<!-- hidden-xs hides the username on small devices so only the image appears. -->--}}
                            {{--<span class="hidden-xs">Alexander Pierce</span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<!-- The user image in the menu -->--}}
                            {{--<li class="user-header">--}}
                                {{--<img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />--}}
                                {{--<p>--}}
                                    {{--Alexander Pierce - Web Developer--}}
                                    {{--<small>Member since Nov. 2012</small>--}}
                                {{--</p>--}}
                            {{--</li>--}}
                            {{--<!-- Menu Body -->--}}
                            {{--<li class="user-body">--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Followers</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Sales</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Friends</a>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<!-- Menu Footer-->--}}
                            {{--<li class="user-footer">--}}
                                {{--<div class="pull-left">--}}
                                    {{--<a href="#" class="btn btn-default btn-flat">Profile</a>--}}
                                {{--</div>--}}
                                {{--<div class="pull-right">--}}
                                    {{--<a href="#" class="btn btn-default btn-flat">Sign out</a>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div><!--/.nav-collapse -->
    </div>
</div>