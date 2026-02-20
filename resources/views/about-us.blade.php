 <x-layout>
    
<header> 
    
    <div class="container-fluid header">
   <div class="row h-100 justify-content-around align-items-center">
   <div class="col-6">
    <h2 class=" text-white text-color text-center">Chi Siamo</h2>
    <p class="text-white text-color">Siamo un team appassionato di cinema e film. Il nostro obiettivo è condividere le ultime notizie, recensioni e informazioni sul mondo del cinema con il nostro pubblico.</p>
   </div>
   <div class="col-6">
    <img src="/media/foto cinema.webp" alt="foto cinema" class="shadow rounded">
   </div>
   </div>
    </div>
</header>
<section>
    <div class="container userHeight">
        <div class="row h-100 justify-content-around align-items-center">
            @foreach ($users as $user)
           <div class="col-12 col-md-4">
            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $user['name'] . " " . $user['surname'] }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $user['role'] }} </h6>
    <a href="{{ route('about-us-detail', ['name' => $user['name']]) }}" class="card-link">Leggi di piu</a>
  </div>
</div>
           </div>
            @endforeach
        </div>
    </div>
</section>
</x-layout>
    