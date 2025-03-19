<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our
                Services<span></span></p>
            <h1 class="text-center mb-5">What Solutions We Provide</h1>
        </div>
        <div class="row g-4">
            @if (count($services) > 0)
            @foreach ($services as $service )
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="{{ $service->icon }}"></i>
                    </div>
                    <h5 class="mb-3">{{ $service->name }}</h5>
                    <p class="m-0">{{$service->description}}</p>

                    <a class="btn btn-square" href="">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
            @else
            <div class="text-center">
                <span class="text-primary">No services yet!</span>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- Service End -->