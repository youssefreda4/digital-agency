@extends('website.layouts.master')

@section('title','About')

@section('hero')
@include('website.layouts.sub-hero',['pageName' => 'About Us'])
@endsection

@section('content')
<!-- Feature Start -->
<livewire:website.components.feature-component />
<!-- Feature End -->

<!-- About Start -->
<livewire:website.components.skils-component />
<!-- About End -->

<!-- Facts Start -->
<livewire:website.components.counters-component />
<!-- Facts End -->

<!-- Team Start -->
<livewire:website.components.teams-component />
<!-- Team End -->
@endsection