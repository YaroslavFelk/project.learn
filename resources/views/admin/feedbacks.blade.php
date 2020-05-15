@extends('admin.layout')

@section('content')
    <h1>Форма обратной связи</h1>
    <table class="table" border="1">
        <tr>
            <th>Email</th>
            <th>Сообщение</th>
            <th>Дата отправки</th>
        </tr>

        @foreach($callbacks as $callback)
            <tr>
                <td>{{$callback->email}}</td>
                <td>{{$callback->text}}</td>
                <td>{{$callback->created_at}}</td>
            </tr>
        @endforeach

    </table>

    <p><a href="{{url('/')}}">На главную</a></p>
@endsection

