@extends('layouts.main')

@section('content')

<div class="form-group">
    <button type="button" class="btn btn-warning">Ação</button>
    <button type="button" class="btn btn-warning">Aventura</button>
    <button type="button" class="btn btn-warning">Animação</button>
    <button type="button" class="btn btn-warning">Comédia</button>
    <button type="button" class="btn btn-warning">Crime</button>
    <button type="button" class="btn btn-warning">Documentário</button>
    <button type="button" class="btn btn-warning">Drama</button>
    <button type="button" class="btn btn-warning">Família</button>
    <button type="button" class="btn btn-warning">Fantasia</button>
    <button type="button" class="btn btn-warning">História</button>
    <button type="button" class="btn btn-warning">Terror</button>
    <button type="button" class="btn btn-warning">Música</button>
    <button type="button" class="btn btn-warning">Mistério</button>
    <button type="button" class="btn btn-warning">Romance</button>
    <button type="button" class="btn btn-warning">Ficção científica</button>
    <button type="button" class="btn btn-warning">Cinema TV</button>
    <button type="button" class="btn btn-warning">Thriller</button>
    <button type="button" class="btn btn-warning">Guerra</button>
    <button type="button" class="btn btn-warning">Faroeste</button>
</div>

<p class="font-weight-bold w-50 p-3 text-warning">Populares</p>

<div class="container">
  <div class="row">
    
    {{--  @foreach ($collection as $item)
        --}}
        
    
    <div class="col-md-3 p-0 mb-3 bg-warning" >
      <div class="row">
        <div class="col-md-12">
          <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/725WE0Qb1BbUF7aGvjiQqzzffpg.jpg" width="275" height="150" class="rounded" alt="red:crescer é uma fera">
        </div>
        <div class="col-md-12 pl-3 pr-3 pt-3 pb-3">
          <a href="#" class="text-xl-left text-white">Red:Crescer é Uma Fera</a>
          <button type="button" class="btn btn-sm btn-success float-right"><span class="text-xl text-white"><span>*</span>8,4</span></button>
        </div>
        <div class="col-md-12">
          <button class="btn btn-sm btn-primary rounded-2">VER</button>
        </div>

      </div>
    </div>

    {{--  @endforeach
        --}}

      
    
  </div>
</div> 
@endsection

