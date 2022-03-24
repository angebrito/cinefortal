@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-segundary">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/725WE0Qb1BbUF7aGvjiQqzzffpg.jpg" alt="red:crescer é uma fera" class="w-96" style="width: 24rem">
            <div class="ml=24">
                <h2 class="text-xl font-semibold text-white">Red:Crescer é Uma Fera</h2>
                <div class="flex items-center text-white text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="100" height="100">
                        <polygon points="50,0 19.49,100 100,37.93 0,37.93 80.51,100"  fill="yellow"/>
                    </svg>
                       <span class="mt-1">84%</span>
                       <span class="mt-1">|</span>
                       <span>10 de Maio 2022</span>
                       <span>Drama</span>
                </div>
                <p class="text-white mt-8">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Direção</h4>
                    <div class="flex mt-8">
                            <div class="text-white ">Sam Levinson</div> 
                    </div>
                </div>
            </div>  
             <div class="mt-12">
                <butoon class="btn btn-warning duration-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                    <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
                  </svg>
                <span class="ml-2" >Play Trailer</span>
                </butoon>
                
                
                    </butoon>
             </div>
        </div>
    </div>
</div>     
<div class="movie-cast border-b border-primary">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold text-white">Cast</h2>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                <a href="#">
                    <img src="https://www.themoviedb.org/t/p/w138_and_h175_face/xWOU0S7AqGEkyk8scLwwz66R2GO.jpg" class="w-25 p-3" class="width 12px" alt="Zendaya" class="img-thumbnail">
                </a>  
                 <div class="mt-2 col-sm-3">
                      <a href="#" class="text-lg mt-2 text-white">Zendaya</a>
                     <div class="flex items-center text-white">
                         <span class="mt-1">Rue Bennett</span>
                        
                         </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection