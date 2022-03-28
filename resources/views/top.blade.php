@extends('layouts.main')

@section('content')

<p class="font-weight-bold w-50 p-3 text-warning">Top 10 </p>

<div class="container">
  <div class="row">
    
    @foreach ($topMovies as $movie)     
            
        <div class="col-md-2 p-0 mb-2 bg-warning" >
        <div class="row">
            <div class="col-md-12">
            <a href="<?php echo "/movies/".$movie['id']; ?>">
                <img src="{{ 'https://image.tmdb.org/t/p/w500/' .$movie['poster_path']}}" width="190" height="270" class="rounded" alt="poster">
            </a>
            </div>
            <div class="col-md-12 pl-3 pr-3 pt-3 pb-3">
            <a href="<?php echo "/movies/".$movie['id']; ?>"> <class="text-xl-left text-white">"{{ $movie['title'] }}"</a>
            <button type="button" class="btn btn-sm btn-success float-right"><span class="text-xl text-white"><span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="yellow" class="bi bi-star-fill" viewBox="0 0 20 20">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>  
            </span>{{ $movie['vote_average'] }}</span></button>
            </div>
            <div class="col-md-12">
            <button class="btn btn-sm btn-primary rounded-2">VER</button>
            </div>

        </div>
        </div>
    
    @endforeach
   
  </div>
</div> 

@endsection