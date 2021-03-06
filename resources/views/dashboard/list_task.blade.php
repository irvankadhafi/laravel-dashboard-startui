@extends('layouts.app', ['body_class' => 'with-side-menu'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom/tasks.min.css') }}">
@endpush

@section('content')
    <div class="tasks-grid">
        <div class="tasks-grid-col red">
            <div class="tasks-grid-col-title">New tasks <strong>1</strong></div>

            <section class="box-typical task-card">
                <div class="task-card-create">
                    <input type="text" placeholder="Create new task"/>
                </div>
                <div class="task-card-footer text-center">
                    <button type="button" class="btn btn-rounded">Create task</button>
                </div>
            </section><!--.task-card-->

            <div class="sortable">
                <section class="box-typical task-card task">
                    <div class="task-card-photo">
                        <img src="{{asset('img/img-task.jpg')}}" alt="">
                    </div>
                    <div class="task-card-in">
                        <div class="btn-group task-card-menu">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-icon-dots-vert-square"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-pencil"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-archive"></i>Archive</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-trash"></i>Delete</a>
                            </div>
                        </div>
                        <div class="task-card-title">
                            <a href="#">Create new webpage for sales and marketing stuff</a>
                            <span class="task-card-title-label">(BIG)</span>
                        </div>
                        <div class="progress-compact-style">
                            <div class="progress">
                                <span class="progress-bar" style="width: 25%;">25%</span>
                            </div>
                            <div class="progress-compact-style-label">37% done</div>
                        </div>
                        <div class="task-card-tags">
                            <a href="#" class="label label-light-grey">Default</a>
                            <a href="#" class="label label-light-grey">Primary</a>
                            <a href="#" class="label label-light-grey">Success</a>
                        </div>
                    </div>
                    <div class="task-card-footer">
                        <div class="task-card-meta-item"><i class="font-icon font-icon-comments-2"></i>10</div>
                        <div class="task-card-meta-item"><i class="font-icon font-icon-clip"></i>24</div>
                        <div class="avatar-preview avatar-preview-32">
                            <a href="#">
                                <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </section><!--.task-card-->

            </div>
        </div><!--.tasks-grid-col-->

        <div class="tasks-grid-col green">
            <div class="tasks-grid-col-title">In progress <strong>10</strong></div>

            <div class="sortable">
                <section class="box-typical task-card task">
                    <div class="task-card-photo">
                        <img src="{{asset('img/img-task.jpg')}}" alt="">
                    </div>
                    <div class="task-card-in">
                        <div class="btn-group task-card-menu">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-icon-dots-vert-square"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-pencil"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-archive"></i>Archive</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-trash"></i>Delete</a>
                            </div>
                        </div>
                        <div class="task-card-title">
                            <a href="#">Create new webpage for sales and marketing stuff</a>
                            <span class="task-card-title-label">(BIG)</span>
                        </div>
                        <div class="progress-compact-style">
                            <div class="progress">
                                <span class="progress-bar" style="width: 25%;">25%</span>
                            </div>
                            <div class="progress-compact-style-label">37% done</div>
                        </div>
                        <div class="task-card-tags">
                            <a href="#" class="label label-light-grey">Default</a>
                            <a href="#" class="label label-light-grey">Primary</a>
                            <a href="#" class="label label-light-grey">Success</a>
                        </div>
                    </div>
                    <div class="task-card-footer">
                        <div class="task-card-meta-item"><i class="font-icon font-icon-comments-2"></i>10</div>
                        <div class="task-card-meta-item"><i class="font-icon font-icon-clip"></i>24</div>
                        <div class="avatar-preview avatar-preview-32">
                            <a href="#">
                                <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </section><!--.task-card-->

                <section class="box-typical task-card task">
                    <div class="task-card-photo">
                        <img src="{{asset('img/img-task.jpg')}}" alt="">
                    </div>
                    <div class="task-card-in">
                        <div class="btn-group task-card-menu">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-icon-dots-vert-square"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-pencil"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-archive"></i>Archive</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-trash"></i>Delete</a>
                            </div>
                        </div>
                        <div class="task-card-title">
                            <a href="#">Create new webpage for sales and marketing stuff</a>
                            <span class="task-card-title-label">(BIG)</span>
                        </div>
                        <div class="progress-compact-style">
                            <div class="progress">
                                <span class="progress-bar" style="width: 25%;">25%</span>
                            </div>
                            <div class="progress-compact-style-label">37% done</div>
                        </div>
                        <div class="task-card-tags">
                            <a href="#" class="label label-light-grey">Default</a>
                            <a href="#" class="label label-light-grey">Primary</a>
                            <a href="#" class="label label-light-grey">Success</a>
                        </div>
                    </div>
                    <div class="task-card-footer">
                        <div class="task-card-meta-item"><i class="font-icon font-icon-comments-2"></i>10</div>
                        <div class="task-card-meta-item"><i class="font-icon font-icon-clip"></i>24</div>
                        <div class="avatar-preview avatar-preview-32">
                            <a href="#">
                                <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </section><!--.task-card-->

            </div>
        </div><!--.tasks-grid-col-->

        <div class="tasks-grid-col">
            <div class="tasks-grid-col-title">Review <strong>15</strong></div>

            <div class="sortable">
                <section class="box-typical task-card task">
                    <div class="task-card-photo">
                        <img src="{{asset('img/img-task.jpg')}}" alt="">
                    </div>
                    <div class="task-card-in">
                        <div class="btn-group task-card-menu">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-icon-dots-vert-square"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-pencil"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-archive"></i>Archive</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-trash"></i>Delete</a>
                            </div>
                        </div>
                        <div class="task-card-title">
                            <a href="#">Create new webpage for sales and marketing stuff</a>
                            <span class="task-card-title-label">(BIG)</span>
                        </div>
                        <div class="progress-compact-style">
                            <div class="progress">
                                <span class="progress-bar" style="width: 25%;">25%</span>
                            </div>
                            <div class="progress-compact-style-label">37% done</div>
                        </div>
                        <div class="task-card-tags">
                            <a href="#" class="label label-light-grey">Default</a>
                            <a href="#" class="label label-light-grey">Primary</a>
                            <a href="#" class="label label-light-grey">Success</a>
                        </div>
                    </div>
                    <div class="task-card-footer">
                        <div class="task-card-meta-item"><i class="font-icon font-icon-comments-2"></i>10</div>
                        <div class="task-card-meta-item"><i class="font-icon font-icon-clip"></i>24</div>
                        <div class="avatar-preview avatar-preview-32">
                            <a href="#">
                                <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </section><!--.task-card-->

                <section class="box-typical task-card task">
                    <div class="task-card-photo">
                        <img src="{{asset('img/img-task.jpg')}}" alt="">
                    </div>
                    <div class="task-card-in">
                        <div class="btn-group task-card-menu">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-icon-dots-vert-square"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-pencil"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-archive"></i>Archive</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-trash"></i>Delete</a>
                            </div>
                        </div>
                        <div class="task-card-title">
                            <a href="#">Create new webpage for sales and marketing stuff</a>
                            <span class="task-card-title-label">(BIG)</span>
                        </div>
                        <div class="progress-compact-style">
                            <div class="progress">
                                <span class="progress-bar" style="width: 25%;">25%</span>
                            </div>
                            <div class="progress-compact-style-label">37% done</div>
                        </div>
                        <div class="task-card-tags">
                            <a href="#" class="label label-light-grey">Default</a>
                            <a href="#" class="label label-light-grey">Primary</a>
                            <a href="#" class="label label-light-grey">Success</a>
                        </div>
                    </div>
                    <div class="task-card-footer">
                        <div class="task-card-meta-item"><i class="font-icon font-icon-comments-2"></i>10</div>
                        <div class="task-card-meta-item"><i class="font-icon font-icon-clip"></i>24</div>
                        <div class="avatar-preview avatar-preview-32">
                            <a href="#">
                                <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </section><!--.task-card-->

            </div>
        </div><!--.tasks-grid-col-->

        <div class="tasks-grid-col purple">
            <div class="tasks-grid-col-title">Done <strong>100</strong></div>

            <div class="sortable">
                <section class="box-typical task-card task">
                    <div class="task-card-photo">
                        <img src="{{asset('img/img-task.jpg')}}" alt="">
                    </div>
                    <div class="task-card-in">
                        <div class="btn-group task-card-menu">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-icon-dots-vert-square"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-pencil"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-archive"></i>Archive</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-trash"></i>Delete</a>
                            </div>
                        </div>
                        <div class="task-card-title">
                            <a href="#">Create new webpage for sales and marketing stuff</a>
                            <span class="task-card-title-label">(BIG)</span>
                        </div>
                        <div class="progress-compact-style">
                            <div class="progress">
                                <span class="progress-bar" style="width: 25%;">25%</span>
                            </div>
                            <div class="progress-compact-style-label">37% done</div>
                        </div>
                        <div class="task-card-tags">
                            <a href="#" class="label label-light-grey">Default</a>
                            <a href="#" class="label label-light-grey">Primary</a>
                            <a href="#" class="label label-light-grey">Success</a>
                        </div>
                    </div>
                    <div class="task-card-footer">
                        <div class="task-card-meta-item"><i class="font-icon font-icon-comments-2"></i>10</div>
                        <div class="task-card-meta-item"><i class="font-icon font-icon-clip"></i>24</div>
                        <div class="avatar-preview avatar-preview-32">
                            <a href="#">
                                <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </section><!--.task-card-->

                <section class="box-typical task-card task">
                    <div class="task-card-photo">
                        <img src="{{asset('img/img-task.jpg')}}" alt="">
                    </div>
                    <div class="task-card-in">
                        <div class="btn-group task-card-menu">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-icon-dots-vert-square"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-pencil"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-archive"></i>Archive</a>
                                <a class="dropdown-item" href="#"><i class="font-icon font-icon-trash"></i>Delete</a>
                            </div>
                        </div>
                        <div class="task-card-title">
                            <a href="#">Create new webpage for sales and marketing stuff</a>
                            <span class="task-card-title-label">(BIG)</span>
                        </div>
                        <div class="progress-compact-style">
                            <div class="progress">
                                <span class="progress-bar" style="width: 25%;">25%</span>
                            </div>
                            <div class="progress-compact-style-label">37% done</div>
                        </div>
                        <div class="task-card-tags">
                            <a href="#" class="label label-light-grey">Default</a>
                            <a href="#" class="label label-light-grey">Primary</a>
                            <a href="#" class="label label-light-grey">Success</a>
                        </div>
                    </div>
                    <div class="task-card-footer">
                        <div class="task-card-meta-item"><i class="font-icon font-icon-comments-2"></i>10</div>
                        <div class="task-card-meta-item"><i class="font-icon font-icon-clip"></i>24</div>
                        <div class="avatar-preview avatar-preview-32">
                            <a href="#">
                                <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </section><!--.task-card-->

            </div>
        </div><!--.tasks-grid-col-->
    </div><!--.tasks-grid-->
@endsection

@push('scripts')
    <script src="{{ asset('js/custom/html.sortable.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.sortable').sortable({
                connectWith: 'connected'
            });
        });
    </script>
@endpush
