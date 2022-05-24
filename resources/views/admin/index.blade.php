@extends('layouts.app')

@section('title','All your posts')

@section('header-content')
    @include('partials.header.header_nav')
@endsection

@section('content')
    @include('partials.main.posts')
@endsection