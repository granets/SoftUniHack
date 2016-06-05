@extends ('layouts.master-admin')
@section('content')
    <div class="container-fluid">
        <form class="form form-horizontal" role="form" method="POST" action="{{ url('/mission') }}">
        {{ csrf_field() }}
<<<<<<< HEAD
        <div class="form-group col-md-9 col-md-push-3">
            <label>Задайте мисия</label>
            <textarea class="form-control" name="mission" placeholder="Мисия"> </textarea>
=======
            <div class="row">
                <div class="form-group col-md-6 col-md-push-3">
                    <label>Здайте мисия</label>
                    <textarea class="form-control" name="mission" placeholder="Мисия"> </textarea>
                </div>
>>>>>>> origin/master
        </div>
            <div class="row">
                <div class="form-group col-md-6 col-md-push-3">
                    <label>Задайте точки</label>
                    <input type="number" class="form-control" name="points" placeholder="Точки">
                </div>
        </div>
        <div class="form-group input-group">
        <span class="input-group-btn">
<<<<<<< HEAD
            <button class="btn btn-primary" name="missionenter" type="submit" style="position:relative; top:190px;"><i>Добави мисия</i>
=======
            <button class="btn btn-primary" name="missionenter" type="submit">Добави мисия
>>>>>>> origin/master
            </button>
        </span>
        </div>
    </form>
    </div>
    @if (count($missions) > 0)
<<<<<<< HEAD
        <div  style="position:relative; top:100px;">
            <div style="position:relative; top:100px; text-align:center; font-weight:bold; font-size:2em;">
                <p class="col-md-6 col-md-push-3">Зададени мисии:</p>
            </div>

            <div class="panel-body col-md-9 col-md-push-3">
                <table class="table table-striped table-bordered table-hover">
=======
        <div class="container-fluid">
            <div>
                <p class="col-md-6 col-md-push-3"><b>Зададени мисии:</b></p>
            </div>

            <div class="panel-body col-md-8 col-md-push-3" style="padding: 0;">
                <table class="table table-striped table-bordered table-striped table-hover">
>>>>>>> origin/master

                    <!-- Table Headings -->
                    <thead>
                    <th>Мисии</th>
                    <th>Точки</th>
                    <th>Изтрий</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($missions as $mission)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div class="col-md-6">{{ $mission->mission }}</div>
                            </td>
                            <td class="">
                                <div>{{ $mission->points }} точки</div>
                            </td>

                            <td width="10%;">
                                <form action="{{ url('mission/'.$mission->id) }}" method="POST">
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
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection