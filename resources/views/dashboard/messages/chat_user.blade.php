@extends('layouts.app', ['body_class' => 'with-side-menu control-panel control-panel-compact'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom/chat.min.css') }}">
@endpush

@section('content')
    <div class="box-typical chat-container">
        <section class="chat-list">
            <div class="chat-list-search">
                <input type="text" class="form-control form-control-rounded" placeholder="Search"/>
            </div><!--.chat-list-search-->
            <div class="chat-list-in scrollable-block">
                <div class="chat-list-item online">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Matt McGill</span>
                        </div>
                        <div class="chat-list-item-date">16:59</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt writing">
                            <div class="icon">
                                <i class="font-icon font-icon-pencil-thin"></i>
                            </div>
                            Matt McGill typing a message
                        </div>
                        <div class="chat-list-item-count">3</div>
                    </div>
                </div>
                <div class="chat-list-item">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Matthew Heath</span>
                        </div>
                        <div class="chat-list-item-date">16:59</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt">Anything that's easy or has no difficulty; something that is a certainty</div>
                        <div class="chat-list-item-count">100</div>
                    </div>
                </div>
                <div class="chat-list-item selected">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-3.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Vasilisa</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt">no</div>
                        <div class="chat-list-item-dot"></div>
                    </div>
                </div>
                <div class="chat-list-item online">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-4.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Administration</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt">You can run!</div>
                    </div>
                </div>
                <div class="chat-list-item">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Matthew Heath</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt writing">Matthew Heath changes the image on the page</div>
                        <div class="chat-list-item-dot"></div>
                    </div>
                </div>
                <div class="chat-list-item online">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Matt McGill</span>
                        </div>
                        <div class="chat-list-item-date">16:59</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt writing">
                            <div class="icon">
                                <i class="font-icon font-icon-pencil-thin"></i>
                            </div>
                            Matt McGill typing a message
                        </div>
                    </div>
                </div>
                <div class="chat-list-item">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Thomas Bryan</span>
                        </div>
                        <div class="chat-list-item-date">16:59</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt">Anything that's easy or has no difficulty; something that is a certainty</div>
                    </div>
                </div>
                <div class="chat-list-item">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-3.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Vasilisa</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt">no</div>
                        <div class="chat-list-item-dot"></div>
                    </div>
                </div>
                <div class="chat-list-item online">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-4.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Administration</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt">You can run!</div>
                    </div>
                </div>
                <div class="chat-list-item">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Felix Lane</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt writing">Felix Lane changes the image on the page</div>
                        <div class="chat-list-item-dot"></div>
                    </div>
                </div>
                <div class="chat-list-item online">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Matt McGill</span>
                        </div>
                        <div class="chat-list-item-date">16:59</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt writing">
                            <div class="icon">
                                <i class="font-icon font-icon-pencil-thin"></i>
                            </div>
                            Matt McGill typing a message
                        </div>
                    </div>
                </div>
                <div class="chat-list-item">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Matt McGill</span>
                        </div>
                        <div class="chat-list-item-date">16:59</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt">Matt McGill changes the image on the page</div>
                    </div>
                </div>
                <div class="chat-list-item">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-3.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Vasilisa</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt">no</div>
                        <div class="chat-list-item-dot"></div>
                    </div>
                </div>
                <div class="chat-list-item online">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-4.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Administration</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt">You can run!</div>
                    </div>
                </div>
                <div class="chat-list-item">
                    <div class="chat-list-item-photo">
                        <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                    </div>
                    <div class="chat-list-item-header">
                        <div class="chat-list-item-name">
                            <span class="name">Matt McGill</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt writing">Matt McGill</div>
                        <div class="chat-list-item-dot"></div>
                    </div>
                </div>
            </div><!--.chat-list-in-->
        </section><!--.chat-list-->

        <section class="chat-area">
            <div class="chat-area-in">
                <div class="chat-area-header">
                    <div class="clean">Conversation with the user</div>
                </div><!--.chat-area-header-->

                <div class="chat-dialog-area">
                    <div class="chat-dialog-clean">
                        <div class="chat-dialog-clean-in">
                            <i class="font-icon font-icon-mail-2"></i>
                            <div class="caption">Select a friend</div>
                            <div class="txt">To start a conversation, select a friend on the left in the list or use search box.</div>
                        </div>
                    </div>
                </div><!--.chat-dialog-area-->
            </div><!--.chat-area-in-->
        </section><!--.chat-area-->
    </div><!--.chat-container-->
@endsection
