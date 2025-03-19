@extends('website.layouts.master')

@section('title','Contact')

@section('hero')
@include('website.layouts.sub-hero',['pageName' => 'Contact'])

@endsection

@section('content')
<!-- Contact Start -->
<livewire:website.components.contact-component />
<!-- Contact End -->
@endsection

<script>
    document.addEventListener('livewire:init' , ()=> {
        Livewire.hook('morph.updated', ({ el, component }) => {
            const mySuccessAlert = document.querySelector('.success-alert');
            
            if(mySuccessAlert){
                setTimeout(() => {
                    mySuccessAlert.style.display = 'none'
                }, 2000);
            }
        })
    })
</script>