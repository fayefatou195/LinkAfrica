<x-guest-layout>
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 flex justify-center  bg-white border-b border-gray-200">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" > 
<script src="https://cdn.tailwindcss.com"></script>

   <section class="form" >
    

       <h1 class="text-4xl text-blue-800">Entrez l'URL à raccourcir</h1>
       @if (session('success_message'))
           {!! session('success_message') !!}
       @endif
     <form method="POST" action="{{ route('short.url') }}">
             @csrf
             @auth
             <input class="border border-gray-300 rounded-lg " type="text" id="nom" name="nom" placeholder="Entrez un nom" />
             @endauth

             @if($nom = '')
             <input class="border border-gray-300 rounded-lg " type="text" id="nom" name="nom" placeholder="Entrez un nom" />
            @endif

             <input class="border border-gray-300 rounded-lg" type="url" name="original_url" placeholder="Entrez le lien ici"/>
        
           @error('original_url')
           <span class="text-red-400 m-2 p-2">{{ $message}}</span>
           @enderror
           <button class="m-2 px-6 py-2 bg-blue-400 hover:bg-blue-300 rounded-lg" type="submit">Raccourcir l'URL</button>

       

         


       </form>
       <button class="m-2 px-6 py-2 bg-blue-400 hover:bg-blue-300 rounded-lg fs-5" type="submit" >  
          <a href="{{ route('user.links') }}" id="links">Voir plus de détails sur les liens et le nombre de visiteurs</a>
        </button> 

      <style>
        .form{
          background-color:	#f0f8ff;
          padding: 40px;
          left: 300px;
          height: 300px;
        
        }
        #champ{
        outline: none;
        padding: 8px;
        }
        #links{
          color: #ffff;
        }
       </style>

    </section>
                
       </div>
     </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 
</x-guest-layout>
