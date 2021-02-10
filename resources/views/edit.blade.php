@extends('layout.master')

@section('content')


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
                      <label class="label">Crédits</label>
                      <div class="control">
                      <textarea class="textarea is-small" placeholder="e.g. Hello world">Directed by blabla DOP by blabla</textarea>
                      </div>
                  </div>

                  <div class="field">
                      <label class="checkbox is-size-7">
                        <input type="hidden" name="published" value="0">
                        <input type="checkbox" @if($project->published) : checked="checked" ? '' @endif name="published" value="1">
                        Published
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