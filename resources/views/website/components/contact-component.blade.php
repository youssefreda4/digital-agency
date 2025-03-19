<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span></p>
            <h1 class="text-center mb-5">Contact For Any Query</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="wow fadeInUp" data-wow-delay="0.3s">

                    @if (session()->has('success'))
                    <div class=" alert alert-primary success-alert">{{ session('success') }}</div>
                    @endif

                    <form wire:submit='submit'>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Your Name"
                                        wire:model.blur='name'>
                                    <label for="name">Your Name</label>
                                    <x-input-error :messages="$errors->get('name')" />

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" placeholder="Your Email"
                                        wire:model.blur='email'>
                                    <label>Your Email</label>
                                    <x-input-error :messages="$errors->get('email')" />

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Subject"
                                        wire:model.blur='subject'>
                                    <label>Subject</label>
                                    <x-input-error :messages="$errors->get('subject')" />

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here"
                                        wire:model.blur='message' style="height: 150px"></textarea>
                                    <label>Message</label>
                                    <x-input-error :messages="$errors->get('message')" />

                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    <span wire:loading.remove wire:target='submit'>
                                        Send Message
                                    </span>
                                    <div class="text-center" wire:loading wire:target="submit">
                                        <span class=" spinner-border spinner-border-sm text-white" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->