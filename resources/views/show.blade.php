@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-segundary">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="https://br.web.img3.acsta.net/pictures/19/05/13/23/30/5582450.jpg" alt="euphoria" class="w-96" style="width: 24rem">
            <div class="ml=24">
                <h2 class="text-xl font-semibold text-white">Euphoria (2019)</h2>
                <div class="flex items-center text-white text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <polygon points="50,0 19.49,100 100,37.93 0,37.93 80.51,100"  fill="yellow"/>
                    </svg>
                       <span class="mt-1">84%</span>
                       <span class="mt-1">|</span>
                       <span>16 de Junho 2019</span>
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
                <butoon class="flex items-center text-black rounded font-semibold px-1
                py-4 hover:bg-orange transition ease-in-out duration-100">
                <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48
                10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                </svg>
                <span class="ml-2">Play Trailer</span>
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