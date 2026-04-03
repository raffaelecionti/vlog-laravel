<x-layout>
    <div class="container-fluid movies-header">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-12 col-md-6 text-center text-white">
                
                <h2 class="display-4 mb-4">Scrivici una mail</h2>
                @if(session('emailsent'))
    <div class="alert alert-success">
        {{ session('emailsent') }}
    </div>
@endif
                {{-- INIZIO FORM --}}
                <form method="POST" action="{{ route('contactUs') }}" class="shadow p-5 bg-dark rounded-4 text-start">
                    @csrf 

                    <div class="mb-3">
                        <label for="user" class="form-label">Inserisci il tuo nome:</label>
                        <input type="text" name="user" id="user" class="form-control" placeholder="Es. Mario Rossi" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua mail:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="nome@esempio.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Messaggio:</label>
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Scrivi qui il tuo messaggio..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fs-5">Invia Messaggio</button>
                </form>
                {{-- FINE FORM --}}

                {{-- Sezione Social  --}}
                <div class="mt-5 d-flex justify-content-center gap-4">
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-instagram fs-3"></i> Instagram</a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-facebook fs-3"></i> Facebook</a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-whatsapp fs-3 text-success"></i> Scrivici su WhatsApp</a>
                </div>

            </div>
        </div>
    </div>
</x-layout>