<x-admin-master>

    @section('content')

    <h1>Create New Release</h1>
    @if (Session::has('release-created-message'))
        <div class="alert alert-success"> {{Session::get('release-created-message')}}</div>
        @endif

        
        <form method="post" action="{{route('release.store')}}" enctype="multipart/form-data" >
        @csrf
        
            <div class="form-group">
                <label for="release_name">Release Name</label>
                <input type="text"
                       name="release_name"
                       class="form-control"
                       id="release_name"
                       aria-describedby=""
                       placeholder="Enter Release Name">
            </div>

            <div class="form-group">
              <h5>  <label for="status" >Status:</label></h5>

                <select name="status" id="status">              
                  <option value="review">Review</option>
                  <option value="Test Cases Review">Test Cases Review</option>
                  <option value="IOT">IOT</option>
                  <option value="E2E">E2E</option>
                  <option value="UAT">UAT</option>
                  <option value="Deployment">Deployment</option>
                </select>
            
            </div>

            <div class="form-group">
                <h5>  <label for="status" >System :</label></h5>
  
                  <select name="system_id" id="system_id">

                  @foreach ($systems as $system)
                  <option value="{{$system->id}}">{{$system->name}}</option>
                  @endforeach
                                 
                   
                  </select>
              
              </div>

            
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

<br>

<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Current Releases</h6>
  </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
                  
                  <th>Release Name</th>
                  <th>System</th>
                  <th>Status</th>
                  <th>Deactivate Release</th>
                  
                 
               
              </tr>
              </thead>
             
              <tbody>
                  
              @foreach($releases as $release)    
<tr>
    <td>{{$release->release_name}}</td>
    <td>{{$release->system->name}}</td>
    <td class="text-success">{{$release->status}}</td>
    
    
    
    
   <td>
        <form method="POST" action="{{route('release.deactivate',$release->id)}}" enctype="multipart/form-data">

              @csrf
             

          <button type="submit" class="btn btn-danger" >Deactivate</button>
      
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

    @section('scripts')

    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  
    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
  
          @endsection

</x-admin-master>
