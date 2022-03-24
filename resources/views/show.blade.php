@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-segundary">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="https://br.web.img3.acsta.net/pictures/19/05/13/23/30/5582450.jpg" alt="euphoria" class="w-96" style="width: 24rem">
            <div class="ml=24">
                <h2 class="text-xl font-semibold text-white">Euphoria (2019)</h2>
                <div class="flex items-center text-white text-sm">
                    <svg class =""fill="yellow""md-5"" viewBox="0 0 24 24"><g data-name="
                        Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 
                        01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                        0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 
                        01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
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