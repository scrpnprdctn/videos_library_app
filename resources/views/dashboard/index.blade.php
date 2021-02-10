@extends('layout.master')

@section('content')

        <div class="columns">
            <div class="column is-10 is-offset-1">
                
            <div class="box">

              <h1 class="title is-uppercase has-text-weight-medium is-size-3 has-text-centered">Dashboard</h1>

              <hr>

              @if (\Session::has('success'))
                  <div class="notification is-info is-small is-size-7 is-light">
                    <button class="is-small delete"></button>
                    {!! \Session::get('success') !!}
                  </div>
              @endif

              <a href="{{ route('admin.create')}}" class="button is-small mb-3">Create a new project</a>

              <table class="table is-fullwidth is-striped is-size-7">
                <tbody>
                  @foreach ($projects as $p)
                    <tr>
                        <td width="5%">@if($p->bestcontent)<i class="fa fa-trophy"></i> @endif</td>
                        <td>{{ $p->title }}</td>
                        <td>{{ $p->published_at }}</td>
                        <td>@if($p->published)<span class="tag is-success is-light">Published</span>
                        @else <span class="tag is-danger is-light">Not Published</span>
                        @endif
                        </td>
                        <td width="5%"><a class="button is-light is-small is-primary" href="../edit/{{$p->slug}}">Edit</a></td>
                        <td width="5%"><a href="#" class="button is-light is-small">  
                          <form method="post" action="{{ route('admin.destroy', ['id' => $p->id]) }}">
                            <!-- here the '1' is the id of the post which you want to delete -->
                            @csrf
                            @method('DELETE')
                        
                            <button type="submit" class="button is-small fa fa-trash"></button>
                        </form>
                      </td>

                      
                    </tr>
                    @endforeach
                </tbody>
            </table>

            </div>

            </div>
        </div>

@endsection