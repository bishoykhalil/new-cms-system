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
                 placeholder="Enter CR Name" required>
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
<div class="form-group">
  <label for="release_name">PM/CR Support</label>
  <input type="text"
         name="internal_support"
         class="form-control"
         id="release_name"
         aria-describedby=""
         placeholder="Internal Support" required>
</div>
<div class="form-group">
  <label for="release_name">Vendor Support</label>
  <input type="text"
         name="external_support"
         class="form-control"
         id="release_name"
         aria-describedby=""
         placeholder="External Support" required>
</div>
<div class="form-group">
  <label for="release_name">Depend On : </label>
  <input type="text"
         name="dependOn"
         class="form-control"
         id="release_name"
         aria-describedby=""
         placeholder="Write Prerequisties" required>
</div>

<h5><div class="form-group"><label for="hasIOT">HAS IOT</label>  <input  type="checkbox" id="IOT" name="hasIOT" value="1"></div>

  <div class="form-group"><label for="hasE2E">HAS E2E</label>  <input  type="checkbox" id="e2e" name="hasE2E" value="1"></div></h5>
 
                      <button type="submit" class="btn btn-primary">Create CR</button>

    </form>
 

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
                  <th>Internal Support</th>
                  <th>External Support</th>
                  <th>Depend On</th>
                  <th>CR Status</th>
                  <th>Add Test Cases</th>
              </tr>
              </thead>
             
              <tbody>
                 
               @foreach ($crs as $cr)    
               @if($cr->release->active == 1)
<tr>
     <td>{{$cr->release->system->name."-".$cr->release->release_name}}</td> 
    <td>{{$cr->name}}</td>
    <td>{{$cr->internal_support}}</td>
    <td>{{$cr->external_support}}</td>
    <td>{{$cr->dependOn}}</td>

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

</x-admin-master>