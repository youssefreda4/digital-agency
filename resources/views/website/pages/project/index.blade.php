@extends('website.layouts.master')

@section('title','Project')

@section('hero')
@include('website.layouts.sub-hero',['pageName' => 'Project'])
@endsection

@section('content')
<!-- Projects Start -->
<livewire:website.components.projects-component />
<!-- Projects End -->
@endsection