<!-- Newsletter Start -->
<div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span>
                </p>
                <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos
                    labore. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>

                @if (session()->has('success'))
                <div class=" alert alert-primary success-alert">{{ session('success') }}</div>
                @endif

                <form wire:submit='submit'>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                            placeholder="Enter Your Email" style="height: 48px;" wire:model='email'>
                        <div class="mt-2">
                            <x-input-error :messages="$errors->get('email')" />
                        </div>

                        <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
</div>

<!-- Newsletter End -->