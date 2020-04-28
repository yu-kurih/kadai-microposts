@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            @include('users.favoritelist', ['favorites' => $favorites])
            {{ $favorites->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection