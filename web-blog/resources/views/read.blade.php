@extends('layouts.app')
@section('title')
    Read
@endsection
@section('content')
<div class="container py-2">
    <div class="card pt-4 pb-4 ps-4 pb-4">
        <h2>{{$novel->title}}</h2>
        <hr>
        <p>{!!($novel->content)!!}</p>
    </div>
    
</div>
@endsection