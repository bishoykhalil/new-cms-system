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

              
<!-- Cards of Status -->

<div class="row">
  <div class="col-lg-6 mb-4">
    <div class="card bg-primary text-white shadow">
      <div class="card-body">
        Total Number of Test Cases
        <div class="text-Black-50 large"><strong>{{$tcs->where('crs_id',$cr->id)->count()}}</strong></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-success text-white shadow">
      <div class="card-body">
        Passed Test Cases
        <div class="text-Black-50 large"><strong>{{$tcs->where('crs_id',$cr->id)->where('status','Passed')->count()}}</strong></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-info text-white shadow">
      <div class="card-body">
       Not Started Test Cases
        <div class="text-Black-50 large"><strong>{{$tcs->where('crs_id',$cr->id)->where('status','Not Started')->count()}}</strong></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-warning text-white shadow">
      <div class="card-body">
        Blocked Test Cases
        <div class="text-Black-50 large"><strong>{{$tcs->where('crs_id',$cr->id)->where('status','Blocked')->count()}}</strong></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-danger text-white shadow">
      <div class="card-body">
        Failed Test Cases
        <div class="text-Black-50 large"><strong>{{$tcs->where('crs_id',$cr->id)->where('status','Failed')->count()}}</strong></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-secondary text-white shadow">
      <div class="card-body">
        Invalied  Test Cases
        <div class="text-Black-50 large">{{$tcs->where('crs_id',$cr->id)->where('status','Invalied')->count()}}</div>
      </div>
    </div>
  </div>
</div>




            <a href="{{route('tc.show',$cr->id)}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            By {{$cr->user->name}}
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
