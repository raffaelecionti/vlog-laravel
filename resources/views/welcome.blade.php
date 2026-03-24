  <x-layout>
   
<header> 
    
    <div class="container-fluid header">
      @if (session()->has('emailSent'))
  <div class="alert alert-success pt-5">{{ session('emailSent') }}</div>
      @endif
       @if (session()->has('emailError'))
  <div class="alert alert-danger pt-5">{{ session('emailError') }}</div>
      @endif
      @if (session()->has('successMessage'))
  <div class="alert alert-success pt-5">{{ session('successMessage') }}</div>
      @endif
      @if (session ()->has('succesMessage'))
         <div class="alert alert-success pt-5">{{ session('succesMessage') }}</div>
      @endif
      @if(session()->has('errorMessage'))
  <div class="alert alert-danger pt-5">{{ session('errorMessage') }}</div>
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
   