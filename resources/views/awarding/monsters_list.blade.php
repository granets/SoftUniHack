@extends('layouts.master-admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Чудовища</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th> Чудовище</th>
                            <th> Картинка</th>
                            <th> Клас</th>
                            <th> Общо точки</th>
                            <th> </th>
                        </tr>
                        @foreach ($all_monsters as $monster)
						    
                           <tr>
                                    <td>{{ $monster->name }}</td>
                                    <td><img src="{{asset('img/monster1.jpg')}}" class="img img-responsive" width="128" alt="{{ $monster->name }}"/></td>
                                    <td>2 Б</td>
                                    <td> 165 т </td>
                                    <td><a href="{{url('/awarding')}}"> Подробности</a></td>
                            </tr>
                        @endforeach
                    </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

                        

                       