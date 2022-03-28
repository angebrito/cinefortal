@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-segundary">
        <div class="container mx-auto px-4 py-16 flex">  
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/' .$movie['poster_path']}}" alt="poster" class="w-50" style="width: 24rem" />
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="ml=24">
                            <h2 class="text-xl font-semibold text-white">"{{ $movie['title'] }}"</h2>
                            <div class="flex items-center text-white text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="yellow" class="bi bi-star-fill" viewBox="0 0 20 20">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <span class="mt-1">{{ $movie['vote_average'] }}</span>
                                <span class="mt-1">|</span>
                                <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('d M, Y')}}</span>
                                <span> 
                                    @foreach ($movie['genres'] as $genre) 
                                    {{ $genre['name']}} @if (!$loop->last) @endif
                                    @endforeach
                                </span>
                            </div>
                        </div>
                        <p class="text-white mt-4 text-left">
                            {{ $movie['overview']}}
                        </p>

                        <div class="col-md-12 mt-3">
                            <h4 class="text-white font-semibold">Crew</h4>
                            <div class="flex mt-4">
                                @foreach ($movie['credits']['crew'] as $crew)
                                    @if ($loop->index < 2)
                                        <div class="mr-8">
                                            <h4 class="text-white">{{$crew['name']}}</h4>
                                            <div class="text-white mt-2 ">{{$crew['job']}}</div> 
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                
                @if (count($movie['videos']['results']) > 0)
                    <div class="col-md-12 mt-4">
                        <a href="https://youtuber.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="btn btn-warning duration-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                                <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
                            </svg>
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    </div> 
                @endif
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Elenco -->
    <div class="movie-cast">
        <div class="container">  
            <h2 class="text-4xl font-semibold text-white">Cast</h2>
                    <div class="row">
                    @foreach ($movie['credits']['cast'] as $cast)
                        @if ($loop->index < 7)
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="{{ 'https://image.tmdb.org/t/p/w200/' .$cast['profile_path'] }}" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg"/>
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"  class="text-lg mt-4 font-semibold text-white">{{$cast['name']}}</a>
                                        <div class="text-sm text-white">
                                            {{$cast['character']}}
                                        </div>
                                    </div>
                                </div>
                        @endif
                        @endforeach
                    </div>
        </div>
    </div>
    
@endsection