@extends ('layouts.app')
@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/level') }}">
        {{ csrf_field() }}
        <div class="form-group col-md-9 col-md-push-3">
            <label>Задайте ниво</label>
            <p>Номер:</p>
            <input type="text" name="number" placeholder="Номер" class="form-control">
            <p>Ниво:</p>
            <textarea class="form-control" name="levels" placeholder="Ниво"> </textarea>
        </div>
        <div class="form-group input-group">
        <span class="input-group-btn">
            <button class="btn btn-primary" name="levelenter" type="submit" style="position:relative; top:190px;"><i>Добави ниво</i>
            </button>
        </span>
        </div>
    </form>

    @if (count($levels) > 0)
        <div  style="position:relative; top:100px;">
            <div style="position:relative; top:100px; text-align:center; font-weight:bold; font-size:2em;">
                <p class="col-md-6 col-md-push-3">Зададени нива:</p>
            </div>

            <div class="panel-body col-md-9 col-md-push-3">
                <table class="table table-striped table-bordered table-hover">

                    <!-- Table Headings -->
                    <thead>
                    <th>Номер</th>
                    <th>Мисии</th>
                    <th>Нива</th>
                    <th>Изтрий</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($levels as $level)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div class="col-md-6">{{ $level->number }}</div>
                            </td>
                            <td></td>
                            <td class="table-text">
                                <div class="col-md-6">{{ $level->levels }}</div>
                            </td>

                            <td>
                                <form action="{{ url('level/'.$level->id) }}" method="POST">
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