<x-admin-master>
    @section('content')

    <h1>Create New CR</h1>
    @if (Session::has('cr-created-message'))
    <div class="alert alert-success"> {{Session::get('cr-created-message')}}</div>
    @endif

    <form method="post" action="{{route('cr.store')}}" enctype="multipart/form-data" >
        @csrf


        <div class="form-group">
          <label for="release_name">CR Name</label>
          <input type="text"
                 name="name"
                 class="form-control"
                 id="release_name"
                 aria-describedby=""
                 placeholder="Enter CR Name">
      </div>
       
        <div class="form-group">
          <label for="release_id" >Select Release :</label>
           <select class="form-control" name="release_id" id="release_id">
           @foreach ($releases->where('active',1)  as $release)
           <option value="{{$release->id}}">{{$release->system->name."-".$release->release_name }}</option>
           @endforeach                                                    
           </select>
</div>

<div class="form-group">
  <h5>  <label for="status" >Status:</label></h5>

    <select  class="form-control" name="status" id="status">              
      <option value="review">Review</option>
      <option value="Test Cases Review">Test Cases Review</option>
      <option value="IOT">IOT Execution</option>
      <option value="E2E">E2E Execution</option>
      <option value="UAT">UAT</option>
      <option value="Deployment">Deployment</option>
    </select>

</div>

<h5><div class="form-group"><label for="hasIOT">HAS IOT</label>  <input  type="checkbox" id="IOT" name="hasIOT" value="1"></div>

  <div class="form-group"><label for="hasE2E">HAS E2E</label>  <input  type="checkbox" id="e2e" name="hasE2E" value="1"></div></h5>
 
                      <button type="submit" class="btn btn-primary">Create CR</button>

    </form>
  @endsection

  <br>

<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Current CRs</h6>
  </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
                  
                  <th>Release Name</th>
                  <th>CR Name</th>
                  <th>Add Test Cases</th>
                 
                  
                 
               
              </tr>
              </thead>
             
              <tbody>
                  
              @foreach($releases->where('active',1) as $release)    
<tr>
    <td>{{$release->release_name}}</td>
    <td>{{$release->system->name}}</td>
    <td class="text-success">{{$release->status}}</td>
    
    
    
    
   <td>
        <form method="POST" action="{{route('release.deactivate',$release->id)}}" enctype="multipart/form-data">

              @csrf
              @method('PATCH')

          <button   type="submit" class="btn btn-danger" >Deactivate</button>
      
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