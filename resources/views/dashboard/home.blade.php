@extends('dashboard.layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom/lobipanel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/vendor-lobipanel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/widget.min.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-xl-6">
            <div class="chart-statistic-box">
                <div class="chart-txt">
                    <div class="chart-txt-top">
                        <p><span class="unit">$</span><span class="number">1540</span></p>
                        <p class="caption">Week income</p>
                    </div>
                    <table class="tbl-data">
                        <tbody><tr>
                            <td class="price color-purple">120$</td>
                            <td>Orders</td>
                        </tr>
                        <tr>
                            <td class="price color-yellow">15$</td>
                            <td>Investments</td>
                        </tr>
                        <tr>
                            <td class="price color-lime">55$</td>
                            <td>Others</td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="chart-container">
                    <div class="chart-container-in">
                        <div id="chart_div"><div style="position: relative;"><div style="position: relative; width: 319px; height: 314px;" dir="ltr"><div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" aria-label="A chart."><svg width="319" height="314" style="overflow: hidden;" aria-label="A chart."><defs id="_ABSTRACT_RENDERER_ID_0"><clipPath id="_ABSTRACT_RENDERER_ID_1"><rect x="0" y="0" width="319" height="314"></rect></clipPath></defs><rect x="0" y="0" width="319" height="314" stroke="none" stroke-width="0" fill="#008ffb"></rect><g><rect x="0" y="0" width="319" height="314" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(https://analytics.kazee.id/template/default/index.html#_ABSTRACT_RENDERER_ID_1)"><g><rect x="0" y="313" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="291" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="268" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="246" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="224" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="201" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="179" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="157" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="134" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="112" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="89" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="67" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="45" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="22" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="0" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect></g><g><g><path d="M0.5,313.5L0.5,313.5L0.5,197.24285714285713L40.25,197.24285714285713L80,152.52857142857144L119.75,157L159.5,134.64285714285714L199.25,161.4714285714286L239,89.92857142857144L278.75,116.75714285714287L318.5,116.75714285714287L318.5,313.5L318.5,313.5Z" stroke="none" stroke-width="0" fill-opacity="0.18" fill="#ffffff"></path></g></g><g><rect x="0" y="313" width="319" height="1" stroke="none" stroke-width="0" fill="#16b4fc"></rect></g><g><path d="M0.5,197.24285714285713L40.25,197.24285714285713L80,152.52857142857144L119.75,157L159.5,134.64285714285714L199.25,161.4714285714286L239,89.92857142857144L278.75,116.75714285714287L318.5,116.75714285714287" stroke="#ffffff" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g><circle cx="0.5" cy="197.24285714285713" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="40.25" cy="197.24285714285713" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="80" cy="152.52857142857144" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="119.75" cy="157" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="159.5" cy="134.64285714285714" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="199.25" cy="161.4714285714286" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="239" cy="89.92857142857144" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="278.75" cy="116.75714285714287" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="318.5" cy="116.75714285714287" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Day</th><th>Values</th></tr></thead><tbody><tr><td>MON</td><td>130</td></tr><tr><td>TUE</td><td>130</td></tr><tr><td>WED</td><td>180</td></tr><tr><td>THU</td><td>175</td></tr><tr><td>FRI</td><td>200</td></tr><tr><td>SAT</td><td>170</td></tr><tr><td>SUN</td><td>250</td></tr><tr><td>MON</td><td>220</td></tr><tr><td>TUE</td><td>220</td></tr></tbody></table></div></div></div><div style="display: none; position: absolute; top: 324px; left: 329px; white-space: nowrap; font-family: Proxima Nova; font-size: 11px; font-weight: bold;" aria-hidden="true">...</div><div></div></div></div>
                        <header class="chart-container-title">Income</header>
                        <div class="chart-container-x">
                            <div class="item"></div>
                            <div class="item">tue</div>
                            <div class="item">wed</div>
                            <div class="item">thu</div>
                            <div class="item">fri</div>
                            <div class="item">sat</div>
                            <div class="item">sun</div>
                            <div class="item">mon</div>
                            <div class="item"></div>
                        </div>
                        <div class="chart-container-y">
                            <div class="item">300</div>
                            <div class="item"></div>
                            <div class="item">250</div>
                            <div class="item"></div>
                            <div class="item">200</div>
                            <div class="item"></div>
                            <div class="item">150</div>
                            <div class="item"></div>
                            <div class="item">100</div>
                            <div class="item"></div>
                            <div class="item">50</div>
                            <div class="item"></div>
                        </div>
                    </div>
                </div>
            </div><!--.chart-statistic-box-->
        </div><!--.col-->
        <div class="col-xl-6">
            <div class="row">
                <div class="col-sm-6">
                    <article class="statistic-box red">
                        <div>
                            <div class="number">26</div>
                            <div class="caption"><div>Open tickets</div></div>
                            <div class="percent">
                                <div class="arrow up"></div>
                                <p>15%</p>
                            </div>
                        </div>
                    </article>
                </div><!--.col-->
                <div class="col-sm-6">
                    <article class="statistic-box purple">
                        <div>
                            <div class="number">12</div>
                            <div class="caption"><div>Closes tickets</div></div>
                            <div class="percent">
                                <div class="arrow down"></div>
                                <p>11%</p>
                            </div>
                        </div>
                    </article>
                </div><!--.col-->
                <div class="col-sm-6">
                    <article class="statistic-box yellow">
                        <div>
                            <div class="number">104</div>
                            <div class="caption"><div>New clients</div></div>
                            <div class="percent">
                                <div class="arrow down"></div>
                                <p>5%</p>
                            </div>
                        </div>
                    </article>
                </div><!--.col-->
                <div class="col-sm-6">
                    <article class="statistic-box green">
                        <div>
                            <div class="number">29</div>
                            <div class="caption"><div>Here is an example of a long name</div></div>
                            <div class="percent">
                                <div class="arrow up"></div>
                                <p>84%</p>
                            </div>
                        </div>
                    </article>
                </div><!--.col-->
            </div><!--.row-->
        </div><!--.col-->
    </div><!--.row-->

    <div class="row">
        <div class="col-xl-6 dahsboard-column lobipanel-parent-sortable ui-sortable" data-lobipanel-child-inner-id="OliYfRL5Mv naYfLVJgHa">
            <section class="box-typical box-typical-dashboard panel panel-default scrollable lobipanel lobipanel-sortable" data-inner-id="OliYfRL5Mv" data-index="0">
                <header class="box-typical-header panel-heading ui-sortable-handle">
                    <h3 class="panel-title" style="max-width: calc(100% - 180px);">Recent orders</h3>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-pencil"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-move"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-minus"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-resize-full"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-remove"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="panel-control-icon glyphicon glyphicon-cog"></span></div></div></header>
                <div class="box-typical-body panel-body jspScrollable" style="overflow: hidden; padding: 0px; width: 487px;" tabindex="0">

                    <div class="jspContainer" style="width: 487px; height: 264px;"><div class="jspPane" style="padding: 0px; top: 0px; width: 475px;"><table class="tbl-typical">
                                <tbody><tr>
                                    <th><div>Status</div></th>
                                    <th><div>Clients</div></th>
                                    <th align="center"><div>Orders#</div></th>
                                    <th align="center"><div>Date</div></th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>John Doe</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap="" align="center"><span class="semibold">Today</span> 8:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>Thomas Bayer</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap="" align="center"><span class="semibold">Today</span> 16:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-default">Inactive</span>
                                    </td>
                                    <td>Nicolas Karabat</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap="" align="center"><span class="semibold">Yesterday</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-default">Unpaid</span>
                                        <span class="label label-default">Inactive</span>
                                    </td>
                                    <td>Alexandre Pome</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap="" align="center">23th May</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>John Doe</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap="" align="center"><span class="semibold">Today</span> 8:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>Thomas Bayer</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap="" align="center"><span class="semibold">Today</span> 16:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-default">Inactive</span>
                                    </td>
                                    <td>Nicolas Karabat</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap="" align="center"><span class="semibold">Yesterday</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-default">Unpaid</span>
                                        <span class="label label-default">Inactive</span>
                                    </td>
                                    <td>Alexandre Pome</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap="" align="center">23th May</td>
                                </tr>
                                </tbody></table></div><div class="jspVerticalBar"><div class="jspCap jspCapTop"></div><div class="jspTrack" style="height: 264px;"><div class="jspDrag" style="height: 138px;"><div class="jspDragTop"></div><div class="jspDragBottom"></div></div></div><div class="jspCap jspCapBottom"></div></div></div></div><!--.box-typical-body-->
            </section><!--.box-typical-dashboard-->
            <section class="box-typical box-typical-dashboard panel panel-default scrollable lobipanel lobipanel-sortable" data-inner-id="naYfLVJgHa" data-index="1">
                <header class="box-typical-header panel-heading ui-sortable-handle">
                    <h3 class="panel-title" style="max-width: calc(100% - 180px);">Comments</h3>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-pencil"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-move"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-minus"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-resize-full"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-remove"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="panel-control-icon glyphicon glyphicon-cog"></span></div></div></header>
                <div class="box-typical-body panel-body jspScrollable" style="overflow: hidden; padding: 0px; width: 487px;" tabindex="0">


                    <div class="jspContainer" style="width: 487px; height: 264px;"><div class="jspPane" style="padding: 0px; top: 0px; width: 475px;"><article class="comment-item">
                                <div class="user-card-row">
                                    <div class="tbl-row">
                                        <div class="tbl-cell tbl-cell-photo">
                                            <a href="#">
                                                <img src="{{ asset('img/photo-64-1.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="tbl-cell">
                                            <span class="user-card-row-name"><a href="#">Matt McGill</a></span>
                                        </div>
                                        <div class="tbl-cell tbl-cell-date">
                                            <span class="semibold">Today</span>
                                            12:45
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item-txt">
                                    <p>That’s a great idea! I’m sure we could start this project as soon as possible.</p>
                                    <p>Let’s meet tomorow!</p>
                                </div>
                                <div class="comment-item-meta">
                                    <a href="#" class="star">
                                        <i class="font-icon font-icon-star"></i>
                                    </a>
                                    <a href="#">
                                        <i class="font-icon font-icon-re"></i>
                                    </a>
                                    <!--Реализация кнопками-->
                                    <!--<button type="button" class="star">-->
                                    <!--<i class="font-icon font-icon-star"></i>-->
                                    <!--</button>-->
                                    <!--<button type="button">-->
                                    <!--<i class="font-icon font-icon-re"></i>-->
                                    <!--</button>-->
                                </div>
                            </article><article class="comment-item">
                                <div class="user-card-row">
                                    <div class="tbl-row">
                                        <div class="tbl-cell tbl-cell-photo">
                                            <a href="#">
                                                <img src="{{ asset('img/photo-64-2.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="tbl-cell">
                                            <span class="user-card-row-name"><a href="#">Tim Collins</a></span>
                                        </div>
                                        <div class="tbl-cell tbl-cell-date">
                                            <span class="semibold">Today</span>
                                            12:45
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item-txt">
                                    <p>That’s a great idea! I’m sure we could start this project as soon as possible.</p>
                                    <p>Let’s meet tomorow!</p>
                                </div>
                                <div class="comment-item-meta">
                                    <a href="#" class="star active">
                                        <i class="font-icon font-icon-star"></i>
                                    </a>
                                    <a href="#">
                                        <i class="font-icon font-icon-re"></i>
                                    </a>
                                    <!--Реализация кнопками-->
                                    <!--<button type="button" class="star">-->
                                    <!--<i class="font-icon font-icon-star"></i>-->
                                    <!--</button>-->
                                    <!--<button type="button">-->
                                    <!--<i class="font-icon font-icon-re"></i>-->
                                    <!--</button>-->
                                </div>
                            </article></div><div class="jspVerticalBar"><div class="jspCap jspCapTop"></div><div class="jspTrack" style="height: 264px;"><div class="jspDrag" style="height: 200px;"><div class="jspDragTop"></div><div class="jspDragBottom"></div></div></div><div class="jspCap jspCapBottom"></div></div></div></div><!--.box-typical-body-->
            </section>
        </div><!--.col-->
        <div class="col-xl-6 dahsboard-column lobipanel-parent-sortable ui-sortable" data-lobipanel-child-inner-id="ZKl0HdMQ4P gK9ATAqh6p">
            <section class="box-typical box-typical-dashboard panel panel-default scrollable lobipanel lobipanel-sortable" data-inner-id="ZKl0HdMQ4P" data-index="0">
                <header class="box-typical-header panel-heading ui-sortable-handle">
                    <h3 class="panel-title" style="max-width: calc(100% - 180px);">Recent tickets</h3>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-pencil"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-move"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-minus"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-resize-full"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-remove"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="panel-control-icon glyphicon glyphicon-cog"></span></div></div></header>
                <div class="box-typical-body panel-body jspScrollable" style="overflow: hidden; padding: 0px; width: 487px;" tabindex="0">

                    <div class="jspContainer" style="width: 487px; height: 264px;"><div class="jspPane" style="padding: 0px; top: 0px; width: 475px;"><table class="tbl-typical">
                                <tbody><tr>
                                    <th><div>Status</div></th>
                                    <th><div>Subject</div></th>
                                    <th align="center"><div>Department</div></th>
                                    <th align="center"><div>Date</div></th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-success">Open</span>
                                    </td>
                                    <td>Website down for one week</td>
                                    <td align="center">Support</td>
                                    <td nowrap="" align="center"><span class="semibold">Today</span> 8:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-success">Open</span>
                                    </td>
                                    <td>Restoring default settings</td>
                                    <td align="center">Support</td>
                                    <td nowrap="" align="center"><span class="semibold">Today</span> 16:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-warning">Progress</span>
                                    </td>
                                    <td>Loosing control on server</td>
                                    <td align="center">Support</td>
                                    <td nowrap="" align="center"><span class="semibold">Yesterday</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-danger">Closed</span>
                                    </td>
                                    <td>Authorizations keys</td>
                                    <td align="center">Support</td>
                                    <td nowrap="" align="center">23th May</td>
                                </tr>
                                </tbody></table></div><div class="jspVerticalBar"><div class="jspCap jspCapTop"></div><div class="jspTrack" style="height: 264px;"><div class="jspDrag" style="height: 233px;"><div class="jspDragTop"></div><div class="jspDragBottom"></div></div></div><div class="jspCap jspCapBottom"></div></div></div></div><!--.box-typical-body-->
            </section><!--.box-typical-dashboard-->
            <section class="box-typical box-typical-dashboard panel panel-default scrollable lobipanel lobipanel-sortable" data-inner-id="gK9ATAqh6p" data-index="1">
                <header class="box-typical-header panel-heading ui-sortable-handle">
                    <h3 class="panel-title" style="max-width: calc(100% - 180px);">Contacts</h3>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-pencil"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-move"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-minus"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-resize-full"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon glyphicon glyphicon-remove"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="panel-control-icon glyphicon glyphicon-cog"></span></div></div></header>
                <div class="box-typical-body panel-body jspScrollable" style="overflow: hidden; padding: 0px; width: 487px;" tabindex="0">

                    <div class="jspContainer" style="width: 487px; height: 264px;"><div class="jspPane" style="padding: 0px; top: 0px; width: 475px;"><div class="contact-row-list">
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="{{ asset('img/photo-64-2.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Tim Collins</a></p>
                                                <p class="user-card-row-mail"><a href="#">timcolins@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">Director at Tony’s</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="{{ asset('img/photo-64-1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
                                                <p class="user-card-row-mail"><a href="#">maggysmith@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">PR Manager</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="{{ asset('img/photo-64-3.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
                                                <p class="user-card-row-mail"><a href="#">mollybr@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">Assistan</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="{{ asset('img/photo-64-4.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
                                                <p class="user-card-row-mail"><a href="#">maggysmith@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">PR Manager</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="{{ asset('img/photo-64-2.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Tim Collins</a></p>
                                                <p class="user-card-row-mail"><a href="#">timcolins@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">Director at Tony’s</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="{{ asset('img/photo-64-1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
                                                <p class="user-card-row-mail"><a href="#">maggysmith@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">PR Manager</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="{{ asset('img/photo-64-3.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
                                                <p class="user-card-row-mail"><a href="#">mollybr@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">Assistan</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="{{ asset('img/photo-64-4.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
                                                <p class="user-card-row-mail"><a href="#">maggysmith@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">PR Manager</div>
                                        </div>
                                    </div>
                                </article>
                            </div></div><div class="jspVerticalBar"><div class="jspCap jspCapTop"></div><div class="jspTrack" style="height: 264px;"><div class="jspDrag" style="height: 134px;"><div class="jspDragTop"></div><div class="jspDragBottom"></div></div></div><div class="jspCap jspCapBottom"></div></div></div></div><!--.box-typical-body-->
            </section><!--.box-typical-dashboard-->
        </div><!--.col-->
    </div>
@endsection

@push('scripts')
<script src="{{ asset('js/custom/lobipanel.min.js') }}"></script>
@endpush
