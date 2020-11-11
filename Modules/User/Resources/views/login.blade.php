@extends('user::layouts.master')

@section('content')
    {{ Breadcrumbs::render('login') }}
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('user.name') !!}
    </p>
@endsection
