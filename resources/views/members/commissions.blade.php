@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/footable/footable.css">
@endsection

@section('content')
    <div class="content">
        <div class="col-md-12">
            <div class="row"> {{-- tablas --}}
                <div id="list" class="col-md-12 col-md-offset-0">
                    <!-- Panel Filtering -->
                    <div class="panel">
                        <header class="panel-heading">
                            <h3 class="panel-title">CashOut</h3>
                        </header>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
                                <thead>
                                <tr>
                                    <th data-toggle="true">First Name</th>
                                    <th>Last Name</th>
                                    <th data-hide="phone, tablet">Job Title</th>
                                    <th data-hide="phone, tablet">DOB</th>
                                    <th data-hide="phone, tablet">Status</th>
                                </tr>
                                </thead>
                                <div class="form-inline padding-bottom-15">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Status</label>
                                                <select id="filteringStatus" class="form-control">
                                                    <option value="">Show all</option>
                                                    <option value="active">Active</option>
                                                    <option value="disabled">Disabled</option>
                                                    <option value="suspended">Suspended</option>
                                                    <option value="Hola">Hola</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <div class="form-group">
                                                <input id="filteringSearch" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <tbody>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 2015</td>
                                    <td>
                                        <span class="label label-table label-success">Hola</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td>Goodlow</td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 2014</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 2014</td>
                                    <td>
                                        <span class="label label-table label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 2013</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 2014</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 2014</td>
                                    <td>
                                        <span class="label label-table label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 2015</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td>Woldt</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>17 Oct 2014</td>
                                    <td>
                                        <span class="label label-table label-dark">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 2014</td>
                                    <td>
                                        <span class="label label-table label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 2013</td>
                                    <td>
                                        <span class="label label-table label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 2013</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 2014</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 2014</td>
                                    <td>
                                        <span class="label label-table label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 2015</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td>Woldt</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>17 Oct 2014</td>
                                    <td>
                                        <span class="label label-table label-dark">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 2014</td>
                                    <td>
                                        <span class="label label-table label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 2013</td>
                                    <td>
                                        <span class="label label-table label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 2013</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 2014</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 2014</td>
                                    <td>
                                        <span class="label label-table label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 2015</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td>Woldt</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>17 Oct 2014</td>
                                    <td>
                                        <span class="label label-table label-dark">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 2014</td>
                                    <td>
                                        <span class="label label-table label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 2015</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td>Woldt</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>17 Oct 2014</td>
                                    <td>
                                        <span class="label label-table label-dark">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 2014</td>
                                    <td>
                                        <span class="label label-table label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 2015</td>
                                    <td>
                                        <span class="label label-table label-danger">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td>Woldt</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>17 Oct 2014</td>
                                    <td>
                                        <span class="label label-table label-dark">Disabled</span>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <div class="text-right">
                                            <ul class="pagination"></ul>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div> <!-- End Panel Filtering -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/vendor/switchery/switchery.min.js"></script>
    <script src="/vendor/intro-js/intro.js"></script>
    {!! HTML::script('vendor/footable/footable.all.min.js') !!}{{--tablas--}}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}{{--tablas--}}
@endsection
