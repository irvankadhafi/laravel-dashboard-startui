@extends('layouts.app', ['body_class' => 'with-side-menu control-panel control-panel-compact'])

@push('styles')

@endpush

@section('content')
    <section class="box-typical box-typical-max-280 scrollable">
        <header class="box-typical-header">
            <div class="tbl-row">
                <div class="tbl-cell tbl-cell-title">
                    <h3>Bootstrap Table Examples</h3>
                </div>
            </div>
        </header>
        <div class="box-typical-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-1"/>
                                <label for="tbl-check-1"></label>
                            </div>
                        </td>
                        <td><a href="#">State</a></td>
                        <td>Text</td>
                        <td width="150">
                            <div class="progress-with-amount">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-with-amount-number">25%</div>
                            </div>
                        </td>
                        <td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-2"/>
                                <label for="tbl-check-2"></label>
                            </div>
                        </td>
                        <td><a href="#">Value</a></td>
                        <td>Revene for last quarter in state America.</td>
                        <td width="150">
                            <div class="progress-with-amount">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-with-amount-number">50%</div>
                            </div>
                        </td>
                        <td nowrap="nowrap">27.051<span class="caret caret-up color-green"></span></td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td colspan="2" width="40%">
                            <div class="bar-chart-wrapper">
                                <span class="bar-chart">2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,1</span>
                                <div class="val left">0</div>
                                <div class="val right">1,57 м</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-3"/>
                                <label for="tbl-check-3"></label>
                            </div>
                        </td>
                        <td><a href="#">Assignee</a></td>
                        <td>Text</td>
                        <td width="150">
                            <div class="progress-with-amount">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-with-amount-number">75%</div>
                            </div>
                        </td>
                        <td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-4"/>
                                <label for="tbl-check-4"></label>
                            </div>
                        </td>
                        <td><a href="#">Data Create</a></td>
                        <td>Revene for last quarter in state America.</td>
                        <td width="150">
                            <div class="progress-with-amount">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-with-amount-number">15%</div>
                            </div>
                        </td>
                        <td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td colspan="2">
                            <div class="bar-chart-wrapper">
                                <span class="bar-chart">2,5,3,6,2,1,2,1,2,1,2,5,3,1,2,1,4,1,2,1,2,5,3,6,2,1,1,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,1,1,2,1,4,1,2,1,2,1,1,1,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,1</span>
                                <div class="val left">0</div>
                                <div class="val right">1,57 м</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-5"/>
                                <label for="tbl-check-5"></label>
                            </div>
                        </td>
                        <td><a href="#">In Progress</a></td>
                        <td>Text</td>
                        <td width="150">
                            <div class="progress-with-amount">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-with-amount-number">25%</div>
                            </div>
                        </td>
                        <td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    <tr class="table-active">
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-6"/>
                                <label for="tbl-check-6"></label>
                            </div>
                        </td>
                        <td><a href="#">State</a></td>
                        <td>Text</td>
                        <td width="150">
                            <div class="progress-with-amount">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-with-amount-number">25%</div>
                            </div>
                        </td>
                        <td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    <tr class="table-success">
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-7"/>
                                <label for="tbl-check-7"></label>
                            </div>
                        </td>
                        <td><a href="#">Value</a></td>
                        <td>Revene for last quarter in state America.</td>
                        <td width="150">
                            <div class="progress-with-amount">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-with-amount-number">25%</div>
                            </div>
                        </td>
                        <td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td colspan="2">
                            <div class="bar-chart-wrapper">
                                <span class="bar-chart">2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,1</span>
                                <div class="val left">0</div>
                                <div class="val right">1,57 м</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-warning">
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-8"/>
                                <label for="tbl-check-8"></label>
                            </div>
                        </td>
                        <td><a href="#">Assignee</a></td>
                        <td>Text</td>
                        <td width="150">
                            <div class="progress-with-amount">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-with-amount-number">25%</div>
                            </div>
                        </td>
                        <td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    <tr class="table-danger">
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-9"/>
                                <label for="tbl-check-9"></label>
                            </div>
                        </td>
                        <td><a href="#">Data Create</a></td>
                        <td>Revene for last quarter in state America.</td>
                        <td width="150">
                            <div class="progress-with-amount">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-with-amount-number">25%</div>
                            </div>
                        </td>
                        <td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td colspan="2">
                            <div class="bar-chart-wrapper">
                                <span class="bar-chart">2,5,3,6,2,1,2,1,2,1,2,5,3,1,2,1,4,1,2,1,2,5,3,6,2,1,1,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,1,1,2,1,4,1,2,1,2,1,1,1,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,1</span>
                                <div class="val left">0</div>
                                <div class="val right">1,57 м</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-10"/>
                                <label for="tbl-check-10"></label>
                            </div>
                        </td>
                        <td><a href="#">In Progress</a></td>
                        <td>Text</td>
                        <td width="150">
                            <div class="progress-with-amount">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-with-amount-number">25%</div>
                            </div>
                        </td>
                        <td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!--.box-typical-body-->
    </section><!--.box-typical-->

    <section class="box-typical box-typical-max-280 scrollable">
        <header class="box-typical-header">
            <div class="tbl-row">
                <div class="tbl-cell tbl-cell-title">
                    <h3>Bootstrap Table Examples</h3>
                </div>
            </div>
        </header>
        <div class="box-typical-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-2-1"/>
                                <label for="tbl-check-2-1"></label>
                            </div>
                        </td>
                        <td><a href="#">State</a></td>
                        <td>Text example here lorem ipsum</td>
                        <td nowrap="nowrap">
                            <div class="progress-steps-block">
                                <div class="progress-steps">
                                    <div class="progress-step active"></div>
                                    <div class="progress-step"></div>
                                    <div class="progress-step"></div>
                                </div>
                                <div class="progress-steps-caption">1/3 Steps Complete</div>
                            </div>
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-2-2"/>
                                <label for="tbl-check-2-2"></label>
                            </div>
                        </td>
                        <td><a href="#">State</a></td>
                        <td>Text example here lorem ipsum</td>
                        <td nowrap="nowrap">
                            <div class="progress-steps-block">
                                <div class="progress-steps">
                                    <div class="progress-step active"></div>
                                    <div class="progress-step active"></div>
                                    <div class="progress-step"></div>
                                </div>
                                <div class="progress-steps-caption">2/3 Steps Complete</div>
                            </div>
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-2-3"/>
                                <label for="tbl-check-2-3"></label>
                            </div>
                        </td>
                        <td><a href="#">State</a></td>
                        <td>Text example here lorem ipsum</td>
                        <td nowrap="nowrap">
                            <div class="progress-steps-block">
                                <div class="progress-steps">
                                    <div class="progress-step active"></div>
                                    <div class="progress-step active"></div>
                                    <div class="progress-step active"></div>
                                </div>
                                <div class="progress-steps-caption">3/3 Steps Complete</div>
                            </div>
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-2-4"/>
                                <label for="tbl-check-2-4"></label>
                            </div>
                        </td>
                        <td><a href="#">State</a></td>
                        <td>Text example here lorem ipsum</td>
                        <td nowrap="nowrap">
                            <div class="progress-steps-block">
                                <div class="progress-steps">
                                    <div class="progress-step active"></div>
                                    <div class="progress-step"></div>
                                    <div class="progress-step"></div>
                                    <div class="progress-step"></div>
                                </div>
                                <div class="progress-steps-caption">1/4 Steps Complete</div>
                            </div>
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-2-5"/>
                                <label for="tbl-check-2-5"></label>
                            </div>
                        </td>
                        <td><a href="#">State</a></td>
                        <td>Text example here lorem ipsum</td>
                        <td nowrap="nowrap">
                            <div class="progress-steps-block">
                                <div class="progress-steps">
                                    <div class="progress-step active"></div>
                                    <div class="progress-step active"></div>
                                    <div class="progress-step"></div>
                                </div>
                                <div class="progress-steps-caption">2/3 Steps Complete</div>
                            </div>
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="tbl-check-2-6"/>
                                <label for="tbl-check-2-6"></label>
                            </div>
                        </td>
                        <td><a href="#">State</a></td>
                        <td>Text example here lorem ipsum</td>
                        <td nowrap="nowrap">
                            <div class="progress-steps-block">
                                <div class="progress-steps">
                                    <div class="progress-step active"></div>
                                    <div class="progress-step active"></div>
                                    <div class="progress-step active"></div>
                                </div>
                                <div class="progress-steps-caption">3/3 Steps Complete</div>
                            </div>
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
                            0%
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
                            72
                        </td>
                        <td>
                            <div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
                            Florida (13%)
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!--.box-typical-body-->
    </section><!--.box-typical-->

    <section class="box-typical">
        <header class="box-typical-header">
            <div class="tbl-row">
                <div class="tbl-cell tbl-cell-title">
                    <h3>23 Reports</h3>
                </div>
                <div class="tbl-cell tbl-cell-action-bordered">
                    <button type="button" class="action-btn"><i class="font-icon font-icon-pencil"></i></button>
                </div>
                <div class="tbl-cell tbl-cell-action-bordered">
                    <button type="button" class="action-btn"><i class="font-icon font-icon-re"></i></button>
                </div>
                <div class="tbl-cell tbl-cell-action-bordered">
                    <button type="button" class="action-btn"><i class="font-icon font-icon-trash"></i></button>
                </div>
            </div>
        </header>
        <div class="box-typical-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="table-check-head"/>
                                <label for="table-check-head"></label>
                            </div>
                        </th>
                        <th>Name</th>
                        <th>Description</th>
                        <th class="table-icon-cell">
                            <i class="font-icon font-icon-heart"></i>
                        </th>
                        <th class="table-icon-cell">
                            <i class="font-icon font-icon-comment"></i>
                        </th>
                        <th>Date Created</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="table-check-1"/>
                                <label for="table-check-1"></label>
                            </div>
                        </td>
                        <td>
                            Last quarter revene
                            <span class="hint-circle"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="Help">?</span>
                        </td>
                        <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
                        <td class="table-icon-cell">
                            <i class="font-icon font-icon-heart"></i>
                            5
                        </td>
                        <td class="table-icon-cell">
                            <i class="font-icon font-icon-comment"></i>
                            24
                        </td>
                        <td class="table-date">6 minutes ago <i class="font-icon font-icon-clock"></i></td>
                        <td class="table-photo">
                            <img src="{{asset('img/photo-64-1.jpg')}}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="table-check-2"/>
                                <label for="table-check-2"></label>
                            </div>
                        </td>
                        <td>
                            Expenses in 2013
                            <span class="hint-circle red"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="Sample tips with long text into multiple lines. Sample tips with long text into multiple lines.">?</span>
                        </td>
                        <td class="color-blue-grey-lighter"></td>
                        <td class="table-icon-cell">
                            <i class="font-icon font-icon-heart"></i>
                            5
                        </td>
                        <td class="table-icon-cell">
                            <i class="font-icon font-icon-comment"></i>
                            24
                        </td>
                        <td class="table-date">2 hours ago <i class="font-icon font-icon-clock"></i></td>
                        <td class="table-photo">
                            <img src="{{asset('img/photo-64-2.jpg')}}" alt="" data-toggle="tooltip" data-placement="bottom" title="Todd<br/>Fox">
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="table-check-3"/>
                                <label for="table-check-3"></label>
                            </div>
                        </td>
                        <td>
                            Accounting
                            <span class="hint-circle green"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="Help">?</span>
                        </td>
                        <td class="color-blue-grey-lighter">Lorem ipsum dolor sit amet</td>
                        <td class="table-icon-cell">
                            <i class="font-icon font-icon-heart"></i>
                            5
                        </td>
                        <td class="table-icon-cell">
                            <i class="font-icon font-icon-comment"></i>
                            24
                        </td>
                        <td class="table-date">5 hour ago <i class="font-icon font-icon-clock"></i></td>
                        <td class="table-photo">
                            <img src="{{asset('img/photo-64-3.jpg')}}" alt="" data-toggle="tooltip" data-placement="bottom" title="Raina<br/>Cabrera">
                        </td>
                    </tr>
                    <tr>
                        <td class="table-check">
                            <div class="checkbox checkbox-only">
                                <input type="checkbox" id="table-check-4"/>
                                <label for="table-check-4"></label>
                            </div>
                        </td>
                        <td>
                            Srtarbucks orders
                            <span class="hint-circle blue"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="Help">?</span>
                            <span class="hint-circle orange"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="Help">?</span>
                            <span class="hint-circle purple"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="Help">?</span>
                        </td>
                        <td class="color-blue-grey-lighter">Ut euismod augue ut nulla aliquam? eu congue ipsum eusmod</td>
                        <td class="table-icon-cell">
                            <i class="font-icon font-icon-heart"></i>
                            5
                        </td>
                        <td class="table-icon-cell">
                            <i class="font-icon font-icon-comment"></i>
                            24
                        </td>
                        <td class="table-date">12 hours ago <i class="font-icon font-icon-clock"></i></td>
                        <td class="table-photo">
                            <img src="{{asset('img/photo-64-4.jpg')}}" alt="" data-toggle="tooltip" data-placement="bottom" title="Lilian<br/>Leon">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!--.box-typical-body-->
    </section><!--.box-typical-->

    <table id="table-edit" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th width="1">
                #
            </th>
            <th>Name</th>
            <th>Description</th>
            <th class="table-icon-cell">
                <i class="font-icon font-icon-heart"></i>
            </th>
            <th class="table-icon-cell">
                <i class="font-icon font-icon-comment"></i>
            </th>
            <th width="120">Date Created</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td class="table-date">6 minutes ago</td>
            <td class="table-photo">
                <img src="{{asset('img/photo-64-1.jpg')}}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td class="table-date">6 minutes ago</td>
            <td class="table-photo">
                <img src="{{asset('img/photo-64-1.jpg')}}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td class="table-date">6 minutes ago</td>
            <td class="table-photo">
                <img src="{{asset('img/photo-64-1.jpg')}}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td class="table-date">6 minutes ago</td>
            <td class="table-photo">
                <img src="{{asset('img/photo-64-1.jpg')}}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td class="table-date">6 minutes ago</td>
            <td class="table-photo">
                <img src="{{asset('img/photo-64-1.jpg')}}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td class="table-date">6 minutes ago</td>
            <td class="table-photo">
                <img src="{{asset('img/photo-64-1.jpg')}}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
            </td>
        </tr>
        </tbody>
    </table>

    <br>
    <p>Example of mini table sizing using <code>.table-sm</code> class added to the <code>.table</code>.</p>
    <table id="table-sm" class="table table-bordered table-hover table-sm">
        <thead>
        <tr>
            <th width="1">
                #
            </th>
            <th>Name</th>
            <th>Description</th>
            <th class="table-icon-cell">
                <i class="font-icon font-icon-heart"></i>
            </th>
            <th class="table-icon-cell">
                <i class="font-icon font-icon-comment"></i>
            </th>
            <th width="120">Date Created</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td>6 minutes ago</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td>6 minutes ago</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td>6 minutes ago</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td>6 minutes ago</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td>6 minutes ago</td>
        </tr>
        </tbody>
    </table>

    <br>
    <p>Example of extra mini table sizing using <code>.table-xs</code> class added to the <code>.table</code>.</p>

    <table id="table-xs" class="table table-bordered table-hover table-xs">
        <thead>
        <tr>
            <th width="1">
                #
            </th>
            <th>Name</th>
            <th>Description</th>
            <th class="table-icon-cell">
                <i class="font-icon font-icon-heart"></i>
            </th>
            <th class="table-icon-cell">
                <i class="font-icon font-icon-comment"></i>
            </th>
            <th width="120">Date Created</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td>6 minutes ago</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td>6 minutes ago</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td>6 minutes ago</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td>6 minutes ago</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Last quarter revene</td>
            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
            <td class="table-icon-cell">5</td>
            <td class="table-icon-cell">24</td>
            <td>6 minutes ago</td>
        </tr>
        </tbody>
    </table>
@endsection

@push('scripts')
    <script src="{{ asset('js/custom/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('js/custom/jquery.tabledit.min.js') }}"></script>
    <script>
        $(function () {
            $(".bar-chart").peity("bar",{
                delimiter: ",",
                fill: ["#919fa9"],
                height: 16,
                max: null,
                min: 0,
                padding: 0.1,
                width: 384
            });

            $('#table-edit').Tabledit({
                url: 'example.php',
                columns: {
                    identifier: [0, 'id'],
                    editable: [[1, 'name'], [2, 'description']]
                }
            });
        });
    </script>
@endpush
