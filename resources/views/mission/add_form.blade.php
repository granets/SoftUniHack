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

@endsection