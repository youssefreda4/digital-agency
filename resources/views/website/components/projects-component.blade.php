<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our
                Projects<span></span></p>
            <h1 class="text-center mb-5">Recently Completed Projects</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Web Design</li>
                    <li class="mx-2" data-filter=".second">Graphic Design</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
           @if (count($projects) > 0)
            @foreach ($projects as $project )
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset($project->image) }}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1"
                                href="{{ asset('front-assets') }}/img/portfolio-2.jpg" data-lightbox="portfolio"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2">{{ $project->name }}</p>
                        <h5 class="lh-base mb-0">{{ $project->description }}</a>
                    </div>
                </div>
            </div>
         @endforeach
            @else
            <div class="text-center">
                <span class="text-primary">No projects yet!</span>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- Projects End -->