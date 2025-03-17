<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('dashboard-assets') }}/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('dashboard-assets') }}/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('dashboard-assets') }}/vendor/js/bootstrap.js"></script>
<script src="{{ asset('dashboard-assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ asset('dashboard-assets') }}/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('dashboard-assets') }}/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset('dashboard-assets') }}/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('dashboard-assets') }}/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

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

   // window.addEventListener('createModalToggle' ,(event) => {
   //    $('#createModal').modal('toggle')
   // })

   window.addEventListener('createModalToggle', () => {
    const modalElement = document.getElementById('createModal');
    let modal = bootstrap.Modal.getInstance(modalElement);

    if (modal) {
        modal.toggle();
    } else {
        modal = new bootstrap.Modal(modalElement);
        modal.show();
    }
   });

   window.addEventListener('editModalToggle', () => {
    const modalElement = document.getElementById('editModal');
    let modal = bootstrap.Modal.getInstance(modalElement);

    if (modal) {
        modal.toggle();
    } else {
        modal = new bootstrap.Modal(modalElement);
        modal.show();
    }
   });

   window.addEventListener('deleteModalToggle', () => {
    const modalElement = document.getElementById('deleteModal');
    let modal = bootstrap.Modal.getInstance(modalElement);

    if (modal) {
        modal.toggle();
    } else {
        modal = new bootstrap.Modal(modalElement);
        modal.show();
    }
   });

   window.addEventListener('showModalToggle', () => {
    const modalElement = document.getElementById('showModal');
    let modal = bootstrap.Modal.getInstance(modalElement);

    if (modal) {
        modal.toggle();
    } else {
        modal = new bootstrap.Modal(modalElement);
        modal.show();
    }
   });

</script>