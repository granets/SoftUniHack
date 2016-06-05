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
        <div class="panel panel-default" style="position:relative; top:150px;">
            <div class="panel-heading">
                Зададени мисии:
            </div>

            <div class="panel-body" style="position:relative;">
                <table class="table table-striped task-table" style="postion:absolute; top:20px;">

                    <!-- Table Headings -->
                    <thead>
                    <th>Мисия</th>
                    <th>Точки</th>
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
                                <!-- TODO: Delete Button -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection