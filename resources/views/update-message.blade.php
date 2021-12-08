@extends('layouts.app')

@section('title-block')Обносление записи
@endsection
@section('content')
<h1>Обносление записи</h1>



<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Input name</label>
        <input type="text" name="name" value="{{ $data->name }}" placeholder="input your name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Input email</label>
        <input type="text" name="email" value="{{ $data->email }}" placeholder="input your email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="subject">Input subject</label>
        <input type="text" name="subject" value="{{ $data->subject }}" placeholder="input subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control" placeholder="input message">{{ $data->message }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Обновить</button>
</form>
@endsection
