@extends('layouts.app')

{{-- modificare con slug --}}
@section('title','Post')

@section('header-content')
    @include('partials.header.header_nav')
@endsection

@section('content')
    @include('partials.main.post')
@endsection