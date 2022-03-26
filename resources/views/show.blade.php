@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-segundary">
        <div class="container mx-auto px-4 py-16 flex">  
        <div class="row">
              <div class="col-md-6">
            <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/725WE0Qb1BbUF7aGvjiQqzzffpg.jpg" alt="red:crescer é uma fera" class="w-50" style="width: 24rem">
              </div>
                <div class="col-md-6">
                    <div class="row"
           <div class="ml=24">
                <h2 class="text-xl font-semibold text-white">"Red:Crescer é Uma Fera"</h2>
                <div class="flex items-center text-white text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="yellow" class="bi bi-star-fill" viewBox="0 0 20 20">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                       <span class="mt-1">8,4</span>
                       <span class="mt-1">|</span>
                       <span>10 de Maio 2022</span>
                       <span>Animação, Família, Comédia, Fantasia</span>
                </div>

                <p class="text-white mt-4 text-left">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged.
                </p>
                
                <div class="col-md-3 mt-4">
                    <h4 class="text-white font-semibold">Direção</h4>
                    <div class="flex mt-8">
                            <div class="text-white ">Domee Shi</div> 
                    </div>
                </div>
            <div class="col-md-3 mt-4">
                <h4 class="text-white font-semibold">Roteiro</h4>
                <div class="flex mt-8">
                        <div class="text-white ">Julia Cho</div> 
                </div> 
            </div>
            <div class="col-md-3 mt-4">
                <h4 class="text-white font-semibold">Historia</h4>
                <div class="flex mt-8">
                        <div class="text-white ">Sarah Streicher</div> 
                </div>
            </div>
        </div>
                
        
             <div class="mt-4">
                <butoon class="btn btn-warning duration-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                    <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
                  </svg>
                <span class="ml-2">Play Trailer</span>
                </butoon>
             </div>  
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
</div>
        <!-- Elenco -->

    <div class="movie-cast border-primary">
        <div class="container mt-2 mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold text-white">Cast</h2>
        
    <div class="container">
    <div class="row">
    <div class="col-md-3">
        <div class="thumbnail">
        <a href="#">
            <img src="https://www.themoviedb.org/t/p/w138_and_h175_face/cbEWkQM0FS9vzv07JFErCk0YKkx.jpg" class="w-15" alt="rosalie chiang" class="width 12px"></a>
                <h6><a href="#" class="text-lg mt-2 text-white">Rosalie Chiang</a></h6>
            <div class="flex items-center text-white">
                <span class="mt-1">Meilin 'Mei' Lee</span>
                <span class="mt-1">(Voz)</span>
                
                </div> 
            </div>
    </div>
    <div class="col-md-3">
        <div class="thumbnail">
            <a href="#">
                <img src="https://www.themoviedb.org/t/p/w138_and_h175_face/zU8vjebHxcP60ESEL5Ok68KWZvj.jpg" class="w-15" alt="Sandra oh" class="width 12px"></a>
                <h6><a href="#" class="text-lg-left mt-0 text-white">Sandra Oh</a></h6>
                <div class="flex items-center text-white">
                    <span class="mt-1">Ming</span>
                    <span class="mt-1">(Voz)</span>
                </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="thumbnail">
            <a href="#">
                <img src="https://www.themoviedb.org/t/p/w138_and_h175_face/e3bkf5MHPzqvSrJALr78pp0DCWt.jpg" class="w-15" alt="Ava Morse" class="width 12px"></a>
                <h6><a href="#" class="text-lg-left mt-0 text-white">Ava Morse</a></h6>
                <div class="flex items-center text-white">
                    <span class="mt-1">Miriam</span>
                    <span class="mt-1">(Voz)</span>
                </div>
        </div>
    </div>
        <div class="col-md-3">
        <div class="thumbnail">
            <a href="#">
            <img src="https://www.themoviedb.org/t/p/w138_and_h175_face/zU8vjebHxcP60ESEL5Ok68KWZvj.jpg" class="w-15" alt="Sandra Oh" class="width 12px"></a>
                <h6><a href="#" class="text-lg mt-2 text-white">Sandra Oh</a></h6>
                <div class="flex items-center text-white">
                    <span class="mt-1">Ming</span>
                    <span class="mt-1">(Voz)</span>
                    
                    </div> 
                </div>
        </div>
    </div>
    </div>


@endsection