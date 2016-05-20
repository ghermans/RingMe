@extends('layouts.app')
@section('content')
<div class="container">
        <ul class="breadcrumb">
            <li><a href="{{url('')}}">{!! trans('app.home') !!}</a></li>
            <li><a href="{{url('callbacks')}}">{!! trans('app.callbacks') !!}</a></li>
            <li class="active">Details</li>
        </ul>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('callbacks.details') }} 
                     <span class="pull-right">
                      <div class="dropdown">
                       <button class="btn btn-default btn-xs dropdown-toggle " type="button" data-toggle="dropdown"> <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                         <li><a href="#">Start call</a></li>
                         <li><a href="#">End call</a></li>
                         <li><a href="#">Add comment</a></li>
                        </ul>
                      </div>

                     </span>
                     </div>
                    <div class="panel-body">
                        <form action="{{ url('customers') }}" method="post" class="form-horizontal">
                            
                                <div class="form-group form-sep">
                                    <label for="company"
                                           class="col-md-3 control-label">{{ trans('callbacks.customer') }}</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> Telenet NV </p>
                                    </div>
                                </div>

                                <div class="form-group form-sep">
                                    <label for="company"
                                           class="col-md-3 control-label">{{ trans('callbacks.phone') }}</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"><a href="callto:+3215666666">+3215666666</a></p>
                                    </div>
                                </div>

                                <div class="form-group form-sep">
                                    <label for="firstname"
                                           class="col-md-3 control-label">{{ trans('callbacks.type') }}</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"><a href="">Administration</a> </p>
                                    </div>
                                </div>

                                <div class="form-group form-sep">
                                    <label for="firstname"
                                           class="col-md-3 control-label">{{ trans('callbacks.queue') }}</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static text-danger"> 12 min</p>
                                    </div>
                                </div> 

                                <div class="form-group form-sep">
                                    <label for="firstname"
                                           class="col-md-3 control-label">{{ trans('callbacks.assigned') }}</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"><a href="">Glenn Hermans</a> </p>
                                    </div>
                                </div>                                

                                <div class="form-group">
                                    <label for="firstname"
                                           class="col-md-3 control-label">{{ trans('callbacks.status') }}</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"><a href="">Open</a></p>
                                    </div>
                                </div>                                
                        </form>
                    </div>
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('callbacks.activity') }}</div>
                    <div class="panel-body">
                    <ul class="notifications">

                            <li class="notification">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="media-object">
                                            <img src="{{ asset('img/user-icon.png') }}" width="50" height="50"
                                                 class="img-circle" alt="Name">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <strong class="notification-title"><a href="#">Telenet NV</a> requested a call with
                                            <a href="#">Glenn Hermans</a></strong>
                                        <p class="notification-desc">I would like to ask if it is possible to call us back regarding our latest invoice</p>

                                        <div class="notification-meta">
                                            <small class="timestamp">19/05/2016, 15:00</small>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="notification">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="media-object">
                                            <img src="{{ asset('img/user-icon.png') }}" width="50" height="50"
                                                 class="img-circle" alt="Name">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <strong class="notification-title"><a href="#">Glenn Hermans</a> started a call with <a href="#">Telenet NV</a></strong>
                                        <div class="notification-meta">
                                            <small class="timestamp">19/05/2016, 15:00</small>
                                        </div>
                                    </div>
                                </div>
                            </li>                           

                            <li class="notification">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="media-object">
                                            <img src="{{ asset('img/user-icon.png') }}" width="50" height="50"
                                                 class="img-circle" alt="Name">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <strong class="notification-title"><a href="#">Glenn Hermans</a> ended call with
                                            <a href="#">Telenet NV</a></strong>
                                        <p class="notification-desc">Made credit note for latest invoice..</p>

                                        <div class="notification-meta">
                                            <small class="timestamp">19/05/2016, 15:30</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                      </ul>                       
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
