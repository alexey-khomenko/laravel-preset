@extends('user::layouts.master')

@section('content')
    {{ Breadcrumbs::render('reset') }}
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('user.name') !!}
    </p>
@endsection
