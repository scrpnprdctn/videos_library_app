@extends('layout.master')
@section('content')


        <div class="columns">

            <div class="column is-10 is-offset-1">
                
              <div class="box">

                <h1 class="title is-uppercase has-text-weight-medium is-size-3 has-text-centered">Add a new project</h1>

                <hr>

                <form action="{{ route('admin.store') }}" method="post" class="box">
                    @csrf

                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control has-icons-left">
                            <input type="text" name="title" class="input is-small" placeholder="" value="{{ old('title') }}">
                            <span class="icon is-small is-left">
                                <i class="fa fa-heading"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Slug</label>
                        <div class="control has-icons-left">
                            <input type="text" name="slug" class="input is-small" placeholder="" value="{{ old('slug') }}">
                            <span class="icon is-small is-left">
                                <i class="fa fa-heading"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">URL</label>
                        <div class="control has-icons-left">
                            <input type="text" name="url" class="input is-small" placeholder="" value="{{ old('url') }}">
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

                    <div class="field">
                        <label class="checkbox is-size-7">
                            <input type="hidden" name="published" value="0">
                            <input type="checkbox" name="published" value="1">
                            Published
                        </label>
                    </div>

                    <div class="field">
                        <label class="checkbox is-size-7">
                        <input type="hidden" name="bestcontent" value="0">
                        <input type="checkbox" name="bestcontent" value="1">
                        Top Of The Month
                        </label>
                    </div>
                  
                  <div class="field">
                      <button type="submit" class="button is-small is-light is-success">
                          Publish
                      </button>
                  </div>

                </form>
                
                

              </div>
            </div>
        </div>

@endsection