<x-admin-master>

    @section('content')

    <h1>Create New System</h1>
    @if (Session::has('system-created-message'))
        <div class="alert alert-success"> {{Session::get('system-created-message')}}</div>
        @endif

        <form method="post" action="{{route('system.store')}}" enctype="multipart/form-data" >
        @csrf
            <div class="form-group">
                <label for="title">System Name</label>
                <input type="text"
                       name="name"
                       class="form-control"
                       id="systemName"
                       aria-describedby=""
                       placeholder="Enter System Name">
            </div>
            <div class="form-group">
                <label for="title">Vendor</label>
                <input type="text"
                       name="vendor"
                       class="form-control"
                       id="vendormName"
                       aria-describedby=""
                       placeholder="Enter Vendor Name">
            </div>
             
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

// show Systems 

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Current CRs</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    
                    <th>System Name</th>
                    <th>Vendor</th>
                    <th>Created At</th>
                    <th>Created By</th>
                    <th>Delete</th>
                   
                 
                </tr>
                </thead>
               
                <tbody>
                @foreach($systems as $post)    
  <tr>
      <td>{{$system->name}}</td>
      <td>{{$system->vendor}}</td>
      <td>{{$System->created_at->diffForHumans()}}</td>
      <td>{{$post->user->name}}</td>
      
      
      {{-- <td>
          <form method="POST" action="{{route('post.destroy',$post->id)}}" enctype="multipart/form-data">

                @csrf
                @method('DELETE')

            <button type="submit" class="btn btn-danger" >Delete</button>
        
        </form>
      </td> --}}
      
  </tr>
@endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    @endsection

</x-admin-master>
