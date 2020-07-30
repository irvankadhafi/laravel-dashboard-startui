<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body
    @unless(empty($body_class))
    class="{{$body_class}}"
    @endunless
>
<div id="app">
    @if(request()->is('dashboard*'))
        @include('dashboard.layouts.navbar')
        @if(!(request()->is('dashboard/profile')))
            @include('dashboard.layouts.sidebar')
        @endif
    @endif
    <div class="page-content">
        <div
            class="container-fluid
            @unless(empty($container_class))
            {{$container_class}}
            @endunless"
        >
            @yield('content')
        </div>
    </div>
    @if(request()->is('dashboard/home'))
            <div class="control-panel-container">
                <ul>
                    <li class="tasks">
                        <div class="control-item-header">
                            <a href="#" class="icon-toggle">
                                <span class="caret-down fa fa-caret-down"></span>
                                <span class="icon fa fa-tasks"></span>
                            </a>
                            <span class="text">Task list</span>
                            <div class="actions">
                                <a href="#">
                                    <span class="fa fa-refresh"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-cog"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="control-item-content">
                            <div class="control-item-content-text">You don't have pending tasks.</div>
                        </div>
                    </li>
                    <li class="sticky-note">
                        <div class="control-item-header">
                            <a href="#" class="icon-toggle">
                                <span class="caret-down fa fa-caret-down"></span>
                                <span class="icon fa fa-file"></span>
                            </a>
                            <span class="text">Sticky Note</span>
                            <div class="actions">
                                <a href="#">
                                    <span class="fa fa-refresh"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-cog"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="control-item-content">
                            <div class="control-item-content-text">
                                StartUI – a full featured, premium web application admin dashboard built with Twitter Bootstrap 4, JQuery and CSS
                            </div>
                        </div>
                    </li>
                    <li class="emails">
                        <div class="control-item-header">
                            <a href="#" class="icon-toggle">
                                <span class="caret-down fa fa-caret-down"></span>
                                <span class="icon fa fa-envelope"></span>
                            </a>
                            <span class="text">Recent e-mails</span>
                            <div class="actions">
                                <a href="#">
                                    <span class="fa fa-refresh"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-cog"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="control-item-content">
                            <section class="control-item-actions">
                                <a href="#" class="link">My e-mails</a>
                                <a href="#" class="mark">Mark visible as read</a>
                            </section>
                            <ul class="control-item-lists">
                                <li>
                                    <a href="#">
                                        <h6>Welcome to the Community!</h6>
                                        <div>Hi, welcome to the my app...</div>
                                        <div>
                                            Message text
                                        </div>
                                    </a>
                                    <a href="#" class="reply-all">Reply all</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h6>Welcome to the Community!</h6>
                                        <div>Hi, welcome to the my app...</div>
                                        <div>
                                            Message text
                                        </div>
                                    </a>
                                    <a href="#" class="reply-all">Reply all</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h6>Welcome to the Community!</h6>
                                        <div>Hi, welcome to the my app...</div>
                                        <div>
                                            Message text
                                        </div>
                                    </a>
                                    <a href="#" class="reply-all">Reply all</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="add">
                        <div class="control-item-header">
                            <a href="#" class="icon-toggle no-caret">
                                <span class="icon fa fa-plus"></span>
                            </a>
                        </div>
                    </li>
                </ul>
                <a class="control-panel-toggle">
                    <span class="fa fa-angle-double-left"></span>
                </a>
            </div>
    @endif

</div>


<script src="https://use.fontawesome.com/f95760fd61.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
