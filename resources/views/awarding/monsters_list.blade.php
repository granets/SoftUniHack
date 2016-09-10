@extends('layouts.master-admin')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('monsters.points') }}</div>
                <div class="panel-body">
                    
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th> {{ trans('monsters.table_monster') }}</th>
                            <th> {{ trans('monsters.table_pic') }}</th>
                            <th> {{ trans('monsters.table_class') }}</th>
                            <th> {{ trans('monsters.table_level') }}</th>
                            <th> {{ trans('monsters.table_points') }}</th>
                            <th> {{ trans('monsters.table_details') }}</th>
                            <th> {{ trans('monsters.update')}}</th>
                            <th>{{ trans('monsters.table_delete') }}</th>
                        </tr>
                        @foreach ($all_monsters as $monster)
                           <tr>
                                    <td>{{ $monster->name }}</td>
                                    <td><img src='{{asset("img/$monster->picture")}}' class="img img-responsive" width="128" alt="{{ $monster->name }}"/></td>
                                    <td> {{$monster->class}}</td>
                                    <td> {{$monster->level}}</td>
                                    <td> {{$monster->points}} {{ trans('monsters.td_points_str') }}</td>
                                    <td><a href='{{url("/awarding/$monster->id")}}'> {{ trans('monsters.td_details') }}</a></td>
                                    <td width="10%">
                                        <?php echo link_to_route('monster-edit',  $title = e(trans('monsters.update')), $parameters = array($monster->id), $attributes = array('class' => 'btn btn-success fa fa-edit')); ?>
                            </td>
                               <td width="10%;">
                                   <form action="{{ url('monsters/'.$monster->id) }}" method="POST">
                                       {{ csrf_field() }}
                                       {{ method_field('DELETE') }}

                                       <button type="submit" class="btn btn-danger">
                                           <i class="fa fa-trash"></i> {{ trans('monsters.td_delete') }}
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

                        

                       