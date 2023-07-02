@extends('layout.app')

@section('content')
<h1>You are on the Package Page</h1>

@if(auth()->check())
<div>
    Para lang sa mga nakalogin
</div>
@endif
@endsection

@section('title')
    Package Page
@endsection