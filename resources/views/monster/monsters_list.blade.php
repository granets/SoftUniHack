@extends('layouts.master-admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Чудовища</div>
                <div class="panel-body">
                    <form class="form form-horizontal" role="form" method="POST" action="{{ url('/monsters') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>Име на чудовището:</label>
                                <input type="text" class="form-control" name="name" placeholder="Име">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>Код:</label>
                                <input type="text" class="form-control" name="code" placeholder="Код">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>Клас:</label>
                                <input type="text" class="form-control" name="class" placeholder="Клас">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>Предмет:</label>
                                <input type="text" class="form-control" name="subject" placeholder="Предмет">
                            </div>
                        </div>
                        <div class="form-group input-group">
        <span class="input-group-btn">
            <button class="btn btn-primary" name="missionenter" type="submit" style="border-radius: 3px;">Добави чудовище
            </button>
        </span>
                        </div>
                    </form>
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th> Чудовище</th>
                            <th> Картинка</th>
                            <th> Клас</th>
                            <th> Ниво</th>
                            <th> Общо точки</th>
                            <th> </th>
                            <th>Изтрий</th>
                        </tr>
                        @foreach ($all_monsters as $monster)
                           <tr>
                                    <td>{{ $monster->name }}</td>
                                    <td><img src='{{asset("img/$monster->picture")}}' class="img img-responsive" width="128" alt="{{ $monster->name }}"/></td>
                                    <td>2 Б</td>
                                    <td> {{$monster->level}}</td>
                                    <td> {{$monster->total_points}} т</td>
                                    <td><a href='{{url("/awarding/$monster->id")}}'> Подробности</a></td>
                               <td width="10%;">
                                   <form action="{{ url('monsters/'.$monster->id) }}" method="POST">
                                       {{ csrf_field() }}
                                       {{ method_field('DELETE') }}

                                       <button type="submit" class="btn btn-danger">
                                           <i class="fa fa-trash"></i> Изтрий
                                       </button>
                                       <input type="hidden" name="_method" value="DELETE">
                                   </form>
                               </td>
                            </tr>
                        @endforeach
                    </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

                        

                       