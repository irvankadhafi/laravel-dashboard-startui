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
                            <span class="name">Monica Parrish</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt writing">Monica Parrish changes the image on the page</div>
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
                            <span class="name">Monica Parrish</span>
                        </div>
                        <div class="chat-list-item-date">05 Aug</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt writing">Monica Parrish changes the image on the page</div>
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
                            <span class="name">Matthew Heath</span>
                        </div>
                        <div class="chat-list-item-date">16:59</div>
                    </div>
                    <div class="chat-list-item-cont">
                        <div class="chat-list-item-txt">Anything that's easy or has no difficulty; something that is a certaint</div>
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
                        <div class="chat-list-item-txt writing">Yes</div>
                        <div class="chat-list-item-dot"></div>
                    </div>
                </div>
            </div><!--.chat-list-in-->
        </section><!--.chat-list-->

        <section class="chat-area">
            <div class="chat-area-in">
                <div class="chat-area-header">
                    <div class="chat-list-item online">
                        <div class="chat-list-item-photo">
                            <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                        </div>
                        <div class="chat-list-item-name">
                            <span class="name">Thomas Bryan</span>
                        </div>
                        <div class="chat-list-item-txt writing">Last seen 05 aug 2015 at 18:04</div>
                    </div>
                    <div class="chat-area-header-action">
                        <div class="dropdown dropdown-typical">
                            <a class="dropdown-toggle dropdown-toggle-txt" id="dd-chat-action" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="lbl">Actions</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-chat-action">
                                <a class="dropdown-item no-nowrap" href="#">Delete&nbsp;conversation</a>
                                <a class="dropdown-item no-nowrap" href="#">Report spam</a>
                            </div>
                        </div>
                    </div>
                </div><!--.chat-area-header-->

                <div class="chat-dialog-area scrollable-block">
                    <div class="chat-message">
                        <div class="checkbox-bird">
                            <input type="checkbox" id="mess-1"/>
                            <label for="mess-1"></label>
                        </div>
                        <div class="chat-message-photo">
                            <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                        </div>
                        <div class="chat-message-header">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-name">Felix Lane</div>
                                <div class="tbl-cell tbl-cell-date">04.07.15</div>
                            </div>
                        </div>
                        <div class="chat-message-content">
                            <div class="chat-message-txt">Yes, I will alter it</div>
                        </div>
                    </div><!--.chat-message-->

                    <div class="chat-message">
                        <div class="checkbox-bird">
                            <input type="checkbox" id="mess-2"/>
                            <label for="mess-2"></label>
                        </div>
                        <div class="chat-message-photo">
                            <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                        </div>
                        <div class="chat-message-header">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-name">Felix Lane</div>
                                <div class="tbl-cell tbl-cell-date">04.07.15</div>
                            </div>
                        </div>
                        <div class="chat-message-content">
                            <div class="chat-message-txt">All did not get to that</div>
                        </div>
                    </div><!--.chat-message-->

                    <div class="chat-message">
                        <div class="checkbox-bird">
                            <input type="checkbox" id="mess-3"/>
                            <label for="mess-3"></label>
                        </div>
                        <div class="chat-message-photo">
                            <img src="{{asset('img/photo-64-3.jpg')}}" alt="">
                        </div>
                        <div class="chat-message-header">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-name">Vasilisa</div>
                                <div class="tbl-cell tbl-cell-date">04.07.15</div>
                            </div>
                        </div>
                        <div class="chat-message-content">
                            <div class="chat-message-txt">yeeeeees!</div>
                        </div>
                    </div><!--.chat-message-->

                    <div class="chat-message">
                        <div class="checkbox-bird">
                            <input type="checkbox" id="mess-4"/>
                            <label for="mess-4"></label>
                        </div>
                        <div class="chat-message-photo">
                            <img src="{{asset('img/photo-64-3.jpg')}}" alt="">
                        </div>
                        <div class="chat-message-header">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-name">Vasilisa</div>
                                <div class="tbl-cell tbl-cell-date">04.07.15</div>
                            </div>
                        </div>
                        <div class="chat-message-content">
                            <div class="chat-message-txt">yes it would be nice to have the cursor just stood there</div>
                        </div>
                    </div><!--.chat-message-->

                    <div class="chat-message">
                        <div class="checkbox-bird">
                            <input type="checkbox" id="mess-5"/>
                            <label for="mess-5"></label>
                        </div>
                        <div class="chat-message-photo">
                            <img src="{{asset('img/photo-64-3.jpg')}}" alt="">
                        </div>
                        <div class="chat-message-header">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-name">Vasilisa</div>
                                <div class="tbl-cell tbl-cell-date">04.07.15</div>
                            </div>
                        </div>
                        <div class="chat-message-content">
                            <div class="chat-message-txt">I just realized</div>
                        </div>
                    </div><!--.chat-message-->

                    <div class="chat-message">
                        <div class="checkbox-bird">
                            <input type="checkbox" id="mess-6"/>
                            <label for="mess-6"></label>
                        </div>
                        <div class="chat-message-photo">
                            <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                        </div>
                        <div class="chat-message-header">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-name">Thomas Bryan</div>
                                <div class="tbl-cell tbl-cell-date">04.07.15</div>
                            </div>
                        </div>
                        <div class="chat-message-content">
                            <div class="chat-message-txt">I talked about it</div>
                            <div class="chat-message quote">
                                <div class="chat-message-photo">
                                    <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                                </div>
                                <div class="chat-message-header">
                                    <div class="tbl-row">
                                        <div class="tbl-cell tbl-cell-name">Thomas Bryan</div>
                                        <div class="tbl-cell tbl-cell-date">04.07.15</div>
                                    </div>
                                </div>
                                <div class="chat-message-content">
                                    <div class="chat-message-txt">It is necessary that when you open a chat <br/> cursor was already in the input field</div>
                                </div>
                            </div>
                        </div>
                    </div><!--.chat-message-->

                    <div class="chat-message">
                        <div class="checkbox-bird">
                            <input type="checkbox" id="mess-7"/>
                            <label for="mess-7"></label>
                        </div>
                        <div class="chat-message-photo">
                            <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
                        </div>
                        <div class="chat-message-header">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-name">Charles Adams</div>
                                <div class="tbl-cell tbl-cell-date">04.07.15</div>
                            </div>
                        </div>
                        <div class="chat-message-content">
                            <div class="chat-message-txt">Refresh the page has already been done</div>
                        </div>
                    </div><!--.chat-message-->

                    <div class="chat-message">
                        <div class="checkbox-bird">
                            <input type="checkbox" id="mess-8"/>
                            <label for="mess-8"></label>
                        </div>
                        <div class="chat-message-photo">
                            <img src="{{asset('img/photo-64-3.jpg')}}" alt="">
                        </div>
                        <div class="chat-message-header">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-name">Vasilisa</div>
                                <div class="tbl-cell tbl-cell-date">04.07.15</div>
                            </div>
                        </div>
                        <div class="chat-message-content">
                            <div class="chat-message-txt">Lorem ipsum dolor sit amet, oblique omittantur eu vel, mucius recteque ex pro. Melius facilis similique sea ex, sit eu ignota suscipit senserit, in vide scaevola vim. Omnesque luptatum sed eu. Eu meis iudico pri, ea qui meliore facilis, eu facer quaeque urbanitas sed.</div>
                        </div>
                    </div><!--.chat-message-->
                </div><!--.chat-dialog-area-->

                <div class="chat-area-bottom">
                    <form class="write-message">
                        <div class="avatar">
                            <img src="{{asset('img/photo-64-3.jpg')}}" alt="">
                        </div>
                        <div class="form-group">
                            <textarea rows="2" class="form-control" placeholder="Type a message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-rounded float-left">Send</button>
                        <button type="reset" class="btn btn-rounded btn-default float-left">Clear</button>
                        <div class="dropdown dropdown-typical dropup attach">
                            <a class="dropdown-toggle dropdown-toggle-txt"
                               id="dd-chat-attach"
                               data-target="#"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">
                                <span class="lbl">Attach</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-chat-attach">
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-photo"></i>Photo</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-video"></i>Video</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-sound"></i>Audio</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-page"></i>Document</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-earth"></i>Map</a>
                            </div>
                        </div>
                    </form>
                </div><!--.chat-area-bottom-->
            </div><!--.chat-area-in-->
        </section><!--.chat-area-->
    </div><!--.chat-container-->
@endsection
