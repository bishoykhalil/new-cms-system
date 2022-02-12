<x-home-master>

@section('content')

<h1 class="my-4">December Release
          <small>Currents CRs</small>
        </h1>

        <!-- Blog Post -->
        @foreach ($crs as $cr)


        <div class="card mb-4">
          {{-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> --}}
          <div class="card-body">
            <h2 class="card-title">{{$cr->name}}</h2>
            <p class="lead">
              {{$cr->release->system->name}}-{{$cr->release->release_name}}
              </p>

              
            <a href="{{route('tc.show',$cr->id)}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            By
            <a href="#"></a>
          </div>
        </div>
@endforeach


        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

     @endsection

</x-home-master>
