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
                        <div id="chart_div"><div style="position: relative;"><div style="position: relative; width: 319px; height: 314px;" dir="ltr"><div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" aria-label="A chart."><svg width="319" height="314" style="overflow: hidden;" aria-label="A chart."><defs id="_ABSTRACT_RENDERER_ID_2"><clipPath id="_ABSTRACT_RENDERER_ID_3"><rect x="0" y="0" width="319" height="314"></rect></clipPath></defs><rect x="0" y="0" width="319" height="314" stroke="none" stroke-width="0" fill="#008ffb"></rect><g><rect x="0" y="0" width="319" height="314" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(file:///home/irvan/Downloads/startuiadmin-131/startuiadmin-131/build/index.html#_ABSTRACT_RENDERER_ID_3)"><g><rect x="0" y="313" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="291" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="268" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="246" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="224" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="201" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="179" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="157" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="134" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="112" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="89" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="67" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="45" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="22" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect><rect x="0" y="0" width="319" height="1" stroke="none" stroke-width="0" fill="#1ba0fc"></rect></g><g><g><path d="M0.5,313.5L0.5,313.5L0.5,197.24285714285713L40.25,197.24285714285713L80,152.52857142857144L119.75,157L159.5,134.64285714285714L199.25,161.4714285714286L239,89.92857142857144L278.75,116.75714285714287L318.5,116.75714285714287L318.5,313.5L318.5,313.5Z" stroke="none" stroke-width="0" fill-opacity="0.18" fill="#ffffff"></path></g></g><g><rect x="0" y="313" width="319" height="1" stroke="none" stroke-width="0" fill="#16b4fc"></rect></g><g><path d="M0.5,197.24285714285713L40.25,197.24285714285713L80,152.52857142857144L119.75,157L159.5,134.64285714285714L199.25,161.4714285714286L239,89.92857142857144L278.75,116.75714285714287L318.5,116.75714285714287" stroke="#ffffff" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g><circle cx="0.5" cy="197.24285714285713" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="40.25" cy="197.24285714285713" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="80" cy="152.52857142857144" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="119.75" cy="157" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="159.5" cy="134.64285714285714" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="199.25" cy="161.4714285714286" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="239" cy="89.92857142857144" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="278.75" cy="116.75714285714287" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle><circle cx="318.5" cy="116.75714285714287" r="3.5" stroke="none" stroke-width="0" fill="#ffffff"></circle></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Day</th><th>Values</th></tr></thead><tbody><tr><td>MON</td><td>130</td></tr><tr><td>TUE</td><td>130</td></tr><tr><td>WED</td><td>180</td></tr><tr><td>THU</td><td>175</td></tr><tr><td>FRI</td><td>200</td></tr><tr><td>SAT</td><td>170</td></tr><tr><td>SUN</td><td>250</td></tr><tr><td>MON</td><td>220</td></tr><tr><td>TUE</td><td>220</td></tr></tbody></table></div></div></div><div style="display: none; position: absolute; top: 324px; left: 329px; white-space: nowrap; font-family: Proxima Nova; font-size: 11px; font-weight: bold;" aria-hidden="true">...</div><div></div></div></div>
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
        </div>
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
        <div class="col-xl-6 dahsboard-column">
            <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                <header class="box-typical-header panel-heading">
                    <h3 class="panel-title">Recent orders</h3>
                </header>
                <div class="box-typical-body panel-body">
                    <table class="tbl-typical">
                        <tr>
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
                            <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 8:30</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary">Paid</span>
                                <span class="label label-success">Active</span>
                            </td>
                            <td>Thomas Bayer</td>
                            <td align="center">3435362</td>
                            <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 16:30</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary">Paid</span>
                                <span class="label label-default">Inactive</span>
                            </td>
                            <td>Nicolas Karabat</td>
                            <td align="center">3435362</td>
                            <td class="color-blue-grey" nowrap align="center"><span class="semibold">Yesterday</span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-default">Unpaid</span>
                                <span class="label label-default">Inactive</span>
                            </td>
                            <td>Alexandre Pome</td>
                            <td align="center">3435362</td>
                            <td class="color-blue-grey" nowrap align="center">23th May</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary">Paid</span>
                                <span class="label label-success">Active</span>
                            </td>
                            <td>John Doe</td>
                            <td align="center">3435362</td>
                            <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 8:30</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary">Paid</span>
                                <span class="label label-success">Active</span>
                            </td>
                            <td>Thomas Bayer</td>
                            <td align="center">3435362</td>
                            <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 16:30</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary">Paid</span>
                                <span class="label label-default">Inactive</span>
                            </td>
                            <td>Nicolas Karabat</td>
                            <td align="center">3435362</td>
                            <td class="color-blue-grey" nowrap align="center"><span class="semibold">Yesterday</span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-default">Unpaid</span>
                                <span class="label label-default">Inactive</span>
                            </td>
                            <td>Alexandre Pome</td>
                            <td align="center">3435362</td>
                            <td class="color-blue-grey" nowrap align="center">23th May</td>
                        </tr>
                    </table>
                </div><!--.box-typical-body-->
            </section><!--.box-typical-dashboard-->
            <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                <header class="box-typical-header panel-heading">
                    <h3 class="panel-title">Comments</h3>
                </header>
                <div class="box-typical-body panel-body">
                    <article class="comment-item">
                        <div class="user-card-row">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-photo">
                                    <a href="#">
                                        <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
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
                    </article>
                    <article class="comment-item">
                        <div class="user-card-row">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-photo">
                                    <a href="#">
                                        <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
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
                    </article>
                </div><!--.box-typical-body-->
            </section>
        </div><!--.col-->
        <div class="col-xl-6 dahsboard-column">
            <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                <header class="box-typical-header panel-heading">
                    <h3 class="panel-title">Recent tickets</h3>
                </header>
                <div class="box-typical-body panel-body">
                    <table class="tbl-typical">
                        <tr>
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
                            <td nowrap align="center"><span class="semibold">Today</span> 8:30</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-success">Open</span>
                            </td>
                            <td>Restoring default settings</td>
                            <td align="center">Support</td>
                            <td nowrap align="center"><span class="semibold">Today</span> 16:30</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-warning">Progress</span>
                            </td>
                            <td>Loosing control on server</td>
                            <td align="center">Support</td>
                            <td nowrap align="center"><span class="semibold">Yesterday</span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-danger">Closed</span>
                            </td>
                            <td>Authorizations keys</td>
                            <td align="center">Support</td>
                            <td nowrap align="center">23th May</td>
                        </tr>
                    </table>
                </div><!--.box-typical-body-->
            </section><!--.box-typical-dashboard-->
            <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                <header class="box-typical-header panel-heading">
                    <h3 class="panel-title">Contacts</h3>
                </header>
                <div class="box-typical-body panel-body">
                    <div class="contact-row-list">
                        <article class="contact-row">
                            <div class="user-card-row">
                                <div class="tbl-row">
                                    <div class="tbl-cell tbl-cell-photo">
                                        <a href="#">
                                            <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
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
                                            <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
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
                                            <img src="{{asset('img/photo-64-3.jpg')}}" alt="">
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
                                            <img src="{{asset('img/photo-64-4.jpg')}}" alt="">
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
                                            <img src="{{asset('img/photo-64-2.jpg')}}" alt="">
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
                                            <img src="{{asset('img/photo-64-1.jpg')}}" alt="">
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
                                            <img src="{{asset('img/photo-64-3.jpg')}}" alt="">
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
                                            <img src="{{asset('img/photo-64-4.jpg')}}" alt="">
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
                    </div>
                </div><!--.box-typical-body-->
            </section><!--.box-typical-dashboard-->
        </div><!--.col-->
    </div>
@endsection

@push('scripts')
<script src="{{ asset('js/custom/lobipanel.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.panel').each(function () {
            try {
                $(this).lobiPanel({
                    sortable: true
                }).on('dragged.lobiPanel', function(ev, lobiPanel){
                    $('.dahsboard-column').matchHeight();
                });
            } catch (err) {}
        });

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var dataTable = new google.visualization.DataTable();
            dataTable.addColumn('string', 'Day');
            dataTable.addColumn('number', 'Values');
            // A column for custom tooltip content
            dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
            dataTable.addRows([
                ['MON',  130, ' '],
                ['TUE',  130, '130'],
                ['WED',  180, '180'],
                ['THU',  175, '175'],
                ['FRI',  200, '200'],
                ['SAT',  170, '170'],
                ['SUN',  250, '250'],
                ['MON',  220, '220'],
                ['TUE',  220, ' ']
            ]);

            var options = {
                height: 314,
                legend: 'none',
                areaOpacity: 0.18,
                axisTitlesPosition: 'out',
                hAxis: {
                    title: '',
                    textStyle: {
                        color: '#fff',
                        fontName: 'Proxima Nova',
                        fontSize: 11,
                        bold: true,
                        italic: false
                    },
                    textPosition: 'out'
                },
                vAxis: {
                    minValue: 0,
                    textPosition: 'out',
                    textStyle: {
                        color: '#fff',
                        fontName: 'Proxima Nova',
                        fontSize: 11,
                        bold: true,
                        italic: false
                    },
                    baselineColor: '#16b4fc',
                    ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
                    gridlines: {
                        color: '#1ba0fc',
                        count: 15
                    }
                },
                lineWidth: 2,
                colors: ['#fff'],
                curveType: 'function',
                pointSize: 5,
                pointShapeType: 'circle',
                pointFillColor: '#f00',
                backgroundColor: {
                    fill: '#008ffb',
                    strokeWidth: 0,
                },
                chartArea:{
                    left:0,
                    top:0,
                    width:'100%',
                    height:'100%'
                },
                fontSize: 11,
                fontName: 'Proxima Nova',
                tooltip: {
                    trigger: 'selection',
                    isHtml: true
                }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(dataTable, options);
        }
        $(window).resize(function(){
            drawChart();
            setTimeout(function(){
            }, 1000);
        });
    });
</script>
@endpush
