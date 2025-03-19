@extends('website.layouts.master')

@section('title','Team')

@section('hero')
@include('website.layouts.sub-hero',['pageName' => 'Team'])

@endsection

@section('content')

<!-- Team Start -->
<livewire:website.components.teams-component />
<!-- Team End -->
@endsection