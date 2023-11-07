<x-layout title="piante">
   
     
         
     
    <div class="container">
        <div class="row">
            @foreach ($pianteVerde as $piante)
            <x-card :data="$piante" route="piante"/>
                  @endforeach
            </div>
        </div>
    </div>
  </x-layout>
