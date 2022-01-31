<x-admin-master>
    @section('content')
    <h4>Add New Test Case</h1>
    <h3 > <strong> {{$cr->name}} </h3></strong>
    
  <br> 
        <form method="post" action="{{route('tc.store',$cr->id)}}" enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <label for="title">Test Case Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           id="systemName"
                           aria-describedby=""
                           placeholder="Enter System Name">
                </div>
                <div class="form-group">
                    <label for="status" >Status</label>
                    <br>
                    <select class="form-group" name="status" id="status">  
                    <option value="Not Started">Not Started</option>            
                      <option value="Passed">Passed</option>
                      <option value="Blocked">Blocked</option>
                      <option value="Failed">Failed</option>
                      <option value="Invalied">Invalied</option>
                      <option value="Execluded">Execluded</option>                   
                    </select>               
                </div>
                <div>
                <label for="scope" >Scope</label>
                <br>
                <select class="form-group" name="scope" id="status">  
                <option value="e2e">E2E</option>            
                  <option value="iot">IOT</option>
                  <option value="uat">UAT</option>
                                  
                </select>
                        </div>

                        <br>
            <button type="submit" class="btn btn-primary">Add Test Case</button>

 <!-- show all TCs for CR -->
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
                  <th>Test Case Name</th>
                  <th>Status</th>
                  <th>Update</th>
              </tr>
              </thead>
             
              <tbody>
                 
               @foreach ($tcs->where('cr_id',$cr->id) as $tc)    
               @if($cr->release->active == 1)
<tr>
     <td>{{$cr->release->system->name."-".$cr->release->release_name}}</td> 
    <td>{{$cr->name}}</td>
    <td ><a href="{{route('tc.create',$cr->id)}}">Add TestCase</a></td>

</tr>
@endif
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
            

@endsection
</x-admin-master>   