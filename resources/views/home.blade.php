@extends('layouts.app')

@section('title-block')Home main
@endsection
@section('content')
    <h1>Home</h1>
    <p>Классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона «О пределах добра и зла», написанного в 45 году до н. э. на латинском языке, обнаружение сходства приписывается Ричарду МакКлинтоку. Распространился в 1970-х годах из-за трафаретов компании Letraset, a затем - из-за того, что служил примером текста в программе PageMaker. Испорченный текст, вероятно, происходит от его издания в Loeb Classical Library 1914 года, в котором слово dolorem разбито переносом так, что страница 36 начинается с lorem</p>
@endsection

@section('aside')
    @parent
    <p>extra text</p>
@endsection
