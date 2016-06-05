@extends('layouts.master-admin')



@section('content')
    <!--Start Content-->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Дашборд</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-trophy fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">&nbsp;</div>
                                <div>Точкуване</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('/awarding')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Виж Повече</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">&nbsp;</div>
                                <div>Нива</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('/level')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Виж Повече</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-road fa-inverse fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">&nbsp;</div>
                                <div>Мисии</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('/mission')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Виж Повече</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-paw fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">&nbsp;</div>
                                <div>Чудовища</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('/monsters')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Виж Повече</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">

                <!-- /.panel -->

                <!-- /.panel -->

                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">

                <!-- /.panel -->

                <!-- /.panel -->

                <!-- /.panel .chat-panel -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
<!--End Content-->

@endsection