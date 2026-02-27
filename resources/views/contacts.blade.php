 <x-layout>
  <div class="container-fluid movies header">
    <div class="row min-vh-100 align-items-center justify-content-center">

        <!-- WhatsApp -->
        <div class="col-md-3 text-center text-white">
            <i class="bi bi-whatsapp fs-1 text-success"></i>
            <p>scrivici su whatsapp</p>
        </div>

        <!-- Form -->
        <div class="col-md-6 text-white">
            <h2 class="text-center mb-4">o scrivici una mail</h2>

            <form method="post" action="{{ route('contactUs') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Inserisci il tuo nome</label>
                    <input type="text" class="form-control" name="user">
                </div>

                <div class="mb-3">
                    <label class="form-label">Inserisci la tua mail</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Messaggio</label>
                    <textarea class="form-control" name="message"></textarea>
                </div>

                <button class="btn btn-primary w-100">Invia</button>
            </form>
        </div>

        <!-- Instagram -->
        <div class="col-md-3 text-center text-white">
            <i class="bi bi-instagram fs-1"></i>
            <p>scrivici su instagram</p>
        </div>

        <!-- Facebook -->
        <div class="col-md-3 text-center text-white">
            <i class="bi bi-facebook fs-1"></i>
            <p>scrivici su facebook</p>
        </div>

    </div>
</div>  

</x-layout>