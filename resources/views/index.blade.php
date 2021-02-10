    @extends('layout.master')

    @section('content')
    
    <?php 
    use \App\Http\Controllers\ProjectController;
    ?>
    
        <div class="columns">
            <div class="column is-12">
                <div class="box">
                    <a href="show.php">
                        
                    <?php preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/?(showcase\/)*([0-9))([a-z]*\/)*([0-9]{6,11})[?]?.*/", $bestproject->url, $output_array); ?>
                    <img class="ontop-image" style="" src="{{ ProjectController::getVimeoThumb("$output_array[6]") }}">

                    </a>
                    <div class="columns">
                        <div class="column is-7">
                            <h1 class="is-size-5 is-size-6-mobile is-uppercase is-family-code">{{ $bestproject->title }}</h1>
                        <div class="h4 is-size-7 is-size-7-mobile">{{ $bestproject->published_at }}</div></div>
                        <div class="column is-1 is-offset-3">
                            <span class="tag is-light is-info">Music Video</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      
        <div class="columns is-multiline">

            @foreach ($projects as $p)
                
            <div class="column is-3">
                <div class="box">
                    <?php preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/?(showcase\/)*([0-9))([a-z]*\/)*([0-9]{6,11})[?]?.*/", $p->url, $output_array); ?>
                    <img class="thumbnail-img" src="{{ ProjectController::getVimeoThumb("$output_array[6]") }}">
                    <br><a href="{{ $p->slug }}" class="is-size-7 is-uppercase is-size-6-mobile has-text-weight-medium">{{ $p->title }}</a>
                    <span class="tag is-light mt-2">Music Video</span>
                </div>
            </div>

            @endforeach

        </div>


        <div class="box">
            
        </div>

@endsection