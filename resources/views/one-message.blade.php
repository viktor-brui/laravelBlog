@extends('layouts.app')

@section('title-block'){{ $data->subject }}
@endsection
@section('content')
    <h1>{{ $data->subject }}</h1>
        <div class="alert alert-info">
            <p>{{ $data->message }}</p>
            <p>{{ $data->email }}</p>
            <p><smal>{{ $data->created_at }}</smal></p>
            <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-warning">Редактировать</button></a>
        </div>
@endsection

