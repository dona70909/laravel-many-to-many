@extends('layouts.app')

@section('title','Home')

@section('header-content')
    @include('partials.header.header_nav')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div class="p-2">
                    {{-- Route to see all the posts  --}}
                    <a class="btn btn-primary" href="{{route('posts.index')}}"> Show all your posts </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
