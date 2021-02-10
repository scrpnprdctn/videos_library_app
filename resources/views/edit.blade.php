@extends('layout.master')

@section('content')
 
<?php 
use \App\Http\Controllers\ProjectController;
?>

        <div class="columns">

            <div class="column is-10 is-offset-1">
                
              <div class="box">

                <h1 class="title is-uppercase has-text-weight-medium is-size-3 has-text-centered">Edit</h1>

                <hr>

                <form action="{{ route('project.update', [$project->slug]) }}" method="post" class="box">
                    @csrf
                    @method('PUT')

                  <div class="field">
                      <label class="label">Title</label>
                      <div class="control has-icons-left">
                          <input type="text" name="title" class="input is-small" placeholder="" value="{{ $project->title }}">
                          <span class="icon is-small is-left">
                              <i class="fa fa-heading"></i>
                          </span>
                      </div>
                  </div>

                  <?php if(preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/?(showcase\/)*([0-9))([a-z]*\/)*([0-9]{6,11})[?]?.*/", $project->url, $output_array)) ?>

                  <div class="field">
                    <label class="label">Original Title</label>
                    <div class="control has-icons-left">
                        <input type="text" disabled name="url" class="input is-small" placeholder="" value="{{ ProjectController::getVimeoTitle("$output_array[6]") }}">
                        <span class="icon is-small is-left">
                            <i class="fa fa-link"></i>
                        </span>
                    </div>
                </div>

                
                  <div class="field">
                      <label class="label">URL</label>
                      <div class="control has-icons-left">
                          <input type="text" name="url" class="input is-small" placeholder="" value="{{ $project->url }}">
                          <span class="icon is-small is-left">
                              <i class="fa fa-link"></i>
                          </span>
                      </div>
                  </div>

                  <div class="field">
                    <label class="label">SLUG</label>
                    <div class="control has-icons-left">
                        <input type="text" name="slug" class="input is-small" placeholder="" value="{{ $project->slug }}">
                        <span class="icon is-small is-left">
                            <i class="fa fa-link"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Keywords</label>
                    <div class="control has-icons-left">
                        <input type="text" name="meta_keywords" class="input is-small" placeholder="Comma separated" value="{{ old('meta_keywords') }}">
                        <span class="icon is-small is-left">
                            <i class="fa fa-tag"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Description</label>
                    <div class="control has-icons-left">
                        <input type="text" name="meta_description" class="input is-small" placeholder="Description" value="{{ old('meta_description') }}">
                        <span class="icon is-small is-left">
                            <i class="fa fa-tag"></i>
                        </span>
                    </div>
                </div>


                  {{-- <div class="field">
                      <label class="label">Crédits</label>
                      <div class="control">
                      <textarea class="textarea is-small" placeholder="e.g. Hello world">Directed by blabla DOP by blabla</textarea>
                      </div>
                  </div> --}}

                  <div class="field">
                      <label class="checkbox is-size-7">
                        <input type="hidden" name="published" value="0">
                        <input type="checkbox" @if($project->published) : checked="checked" ? '' @endif name="published" value="1">
                        Published
                      </label>
                  </div>
                  <div class="field">
                    <label class="checkbox is-size-7">
                      <input type="hidden" name="bestcontent" value="0">
                      <input type="checkbox" @if($project->bestcontent) : checked="checked" ? '' @endif name="bestcontent" value="1">
                      Top Of The Month
                    </label>
                </div>
                  
                  <div class="field">
                      <button type="submit" class="button is-small is-light is-success">
                          Edit
                      </button>
                  </div>

                </form>
                
                

              </div>
            </div>
        </div>

@endsection