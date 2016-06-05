@extends ('layouts.app')
@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/mission') }}">
        {{ csrf_field() }}
        <div class="form-group col-md-9 col-md-push-3">
            <label>Здайте мисия</label>
            <textarea class="form-control" name="mission" placeholder="Мисия"> </textarea>
        </div>
        <div class="form-group col-md-9 col-md-push-3">
            <label>Задайте точки</label>
            <input class="form-control" name="points" placeholder="Точки">
        </div>
        <div class="form-group input-group">
        <span class="input-group-btn">
            <button class="btn btn-primary" name="missionenter" type="submit" style="position:relative; top:170px;"><i>Добави мисия</i>
            </button>
        </span>
        </div>
    </form>

    @if (count($missions) > 0)
        <div  style="position:relative; top:100px;">
            <div style="position:relative; top:100px width:100%; text-align:center; font-weight:bold; font-size:2em;">
                <p class="col-md-6 col-md-push-3">Зададени мисии:</p>
            </div>

            <div class="panel-body col-md-9 col-md-push-3" style="position:relative;">
                <table class="table table-striped table-bordered table-hover">

                    <!-- Table Headings -->
                    <thead>
                    <th>Мисия</th>
                    <th>Точки</th>
                    <th>Изтрий</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($missions as $mission)
                        <tr>
                            <!-- Task Name -->
                            <td class="">
                                <div>{{ $mission->mission }}</div>
                            </td>
                            <td class="">
                                <div>{{ $mission->points }} точки</div>
                            </td>

                            <td>
                                <form action="{{ url('mission/'.$mission->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger" style="postion:relative; right:0;">
                                        <i class="fa fa-trash"></i> Изтрий
                                    </button>
                                    <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection