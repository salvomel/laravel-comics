@extends('layouts.app')

@section('page_title')
Comics
@endsection

@section('main_classes')
home-background
@endsection

@section('main_content')
    
    @include('components.comics-list')

@endsection
