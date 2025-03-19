@extends('website.layouts.master')

@section('title','Home')

@section('hero')
@include('website.layouts.hero')
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

<!-- Service Start -->
<livewire:website.components.services-component />
<!-- Service End -->

<!-- Newsletter Start -->
<livewire:website.components.newsletter-component />
<!-- Newsletter End -->

<!-- Projects Start -->
<livewire:website.components.projects-component />
<!-- Projects End -->

<!-- Testimonial Start -->
<livewire:website.components.testimonial-component />
<!-- Testimonial End -->

<!-- Team Start -->
<livewire:website.components.teams-component />
<!-- Team End -->
@endsection