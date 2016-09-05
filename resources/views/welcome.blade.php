@extends('layouts.app')

@section('content')


@forelse($articles as $article)
@include('elements.home',['article'=>$article])
@empty
<div class="alert alert-warning">
    <strong>Warning!</strong> News not exists. Register, verify account and write something.
</div>

@endforelse

@endsection