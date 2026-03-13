  <x-layout>
   
<header> 
    
    <div class="container-fluid header">
      @if (session()->has('emailSent'))
  <div class="alert alert-success">{{ session('emailSent') }}</div>
      @endif
       @if (session()->has('emailError'))
  <div class="alert alert-danger">{{ session('emailError') }}</div>
      @endif
      @if (session()->has('successMessage'))
  <div class="alert alert-success">{{ session('successMessage') }}</div>
      @endif
   <div class="row h-100 justify-content-around align-items-center">
   <div class="col-6">
    <h2 class=" text-white text-color text-center">Home</h2>
   </div>
   <div class="container-fluid header">
    <div class="row h-100 justify-content-around align-items-center">
   <div class="col-6">
    <h2 class=" text-white text-color text-center">Chi siamo</h2>
   </div>
   </div>
   <div class="container-fluid header">
    <div class="row h-100 justify-content-around align-items-center">
   <div class="col-6">
    <h2 class=" text-white text-color text-center">contattaci</h2>
   </div>
   </div>
</header>>
</x-layout>
   