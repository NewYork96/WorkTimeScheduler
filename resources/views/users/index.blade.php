@extends('nav')
@section('content')
<div class="container fluid">
    <h1>Felhasználók</h1>
    <div class="col-1">
        <a href="{{route('users.create')}}"><button type="button" class="btn btn-primary m-3">Új</button></a>
    </div>
    <div class="row  m-auto">
        <div class="col-10  m-auto">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Név</th>
                        <th scope="col">E-mail cím</th>
                        <th scope="col">Funkciók</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       @foreach ($users as $model)
                        <tr>
                            <a href=""></a>
                            <th scope="row">{{$model -> name}}</th>
                            <td>{{$model -> email}}</td>
                            <td>
                                <a href="{{ route('users.show', ['user' => $model ->id]) }}"<button type="button" class="btn btn-secondary">Mutat</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>

@endsection