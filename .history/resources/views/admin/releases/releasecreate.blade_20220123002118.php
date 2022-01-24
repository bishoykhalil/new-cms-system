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



    @endsection

    @section('scripts')

    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  
    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
  
          @endsection

</x-admin-master>
