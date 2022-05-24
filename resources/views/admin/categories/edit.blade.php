@extends('layouts.app')

@section('title','Edit-Category')

@section('header-content')
    @include('partials.header.header_nav')
@endsection

@section('content')
    @include('partials.main.edit_category_form')
@endsection