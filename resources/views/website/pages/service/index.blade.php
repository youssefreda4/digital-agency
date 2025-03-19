@extends('website.layouts.master')

@section('title','Service')

@section('hero')
@include('website.layouts.sub-hero',['pageName' => 'Service'])

@endsection

@section('content')
<!-- Service Start -->
<livewire:website.components.services-component />
<!-- Service End -->

<!-- Newsletter Start -->
<livewire:website.components.newsletter-component />
<!-- Newsletter End -->

<!-- Testimonial Start -->
<livewire:website.components.testimonial-component />
<!-- Testimonial End -->
@endsection