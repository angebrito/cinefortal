<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MoviesController extends Controller

{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $popularMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJiNmVjZGRhYTc5YTRlNTA5MzM4M2UyZGEyYzhlMWQ2NiIsInN1YiI6IjYyM2I2YzMzNTgzNjFiMDA0YWEyOTA5NyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.9dwDtS1ICPMSpw_ijwNrskmUyK-uqOXJ9U5B-AGMn-4')
       ->get('https://api.themoviedb.org/3/movie/popular')
       ->json()['results'];
       
        return view('index', [
            'popularMovies' => $popularMovies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJiNmVjZGRhYTc5YTRlNTA5MzM4M2UyZGEyYzhlMWQ2NiIsInN1YiI6IjYyM2I2YzMzNTgzNjFiMDA0YWEyOTA5NyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.9dwDtS1ICPMSpw_ijwNrskmUyK-uqOXJ9U5B-AGMn-4')
       ->get('https://api.themoviedb.org/3/movie/' .$id.'?append_to_response=credits,videos,images')
       ->json();
       
        return view('show', [
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
