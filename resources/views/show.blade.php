@extends('layout.master')

@section('content')

<?php 
use \App\Http\Controllers\ProjectController;
?>

  <section class="section">

    
    <div class="container">

        <div class="columns">
            <div class="column is-10 is-offset-1">
                <div class="box has-text-centered">

                  <h1 class="is-size-5 is-size-6-mobile is-uppercase is-family-code">{{ $project->title }}</h1>
                  <h4 class="h4 is-size-7 is-size-7-mobile mb-3">Publié le {{ $project->published_at }}</h4>
                  <iframe src="https://player.vimeo.com/video/<?php if(preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/?(showcase\/)*([0-9))([a-z]*\/)*([0-9]{6,11})[?]?.*/", $project->url, $output_array)) {
                    echo $output_array[6];} ?>" 
                  style="max-width:100%;max-height:50%" 
                  width="970" 
                  height="546" 
                  frameborder="0" 
                  allow="autoplay; fullscreen; picture-in-picture" 
                  allowfullscreen="">
                  </iframe>
                
                </div>

                <div class="box has-text-centered">
                  
                  <h2 class="is-size-5 is-uppercase">Crédits</h2>

                  <hr>
                  <div class="columns has-text-centered">
    
                    <div class="column is-12">
                      
                      <p class="">
                        Uploaded by <a href="{{ ProjectController::getVimeoAuthorUrl("$output_array[6]") }}">{{ ProjectController::getVimeoAuthor("$output_array[6]") }}</a>
                      </p>

                    </div>
                  </div>
                </div>
            </div>
        </div>
@endsection