@extends('layouts.app')

@section('title','Form-Edit')

@section('header-content')
    @include('partials.header.header_nav')
@endsection

@section('content')
    @include('partials.main.edit_post_form')
@endsection