@extends('website.layouts.master')

@section('title','Testimonial')

@section('hero')
    @include('website.layouts.sub-hero',['pageName' => 'Testimonial'])
@endsection

@section('content')
<!-- Testimonial Start -->
<livewire:website.components.testimonial-component />
<!-- Testimonial End -->
@endsection