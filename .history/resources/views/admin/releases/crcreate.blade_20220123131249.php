<x-admin-master>

    @section('content')

    <h1>Create New CR</h1>
    @if (Session::has('system-created-message'))
        <div class="alert alert-success"> {{Session::get('system-created-message')}}</div>
        @endif

        <form method="post" action="{{route('cr.store')}}" enctype="multipart/form-data" >
        @csrf
            <div class="form-group">
                <label for="title">CR Name</label>
                <input type="text"
                       name="cr_name"
                       class="form-control"
                       id="systemName"
                       aria-describedby=""
                       placeholder="Enter CR Name">
            </div>
            <h5><label for="iot"> IOT</label>  <input type="checkbox" id="IOT" name="iot" value="iot">

                <label for="iot"> E2E</label>  <input type="checkbox" id="e2e" name="e2e" value="e2e"></h5>
            
            <div class="form-group">
                <h5>  <label for="status" >Select Release :</label></h5>
  
                  <select name="release_id" id="release_id">

                  @foreach ($releases as $release)
                  <option value="{{$release->id}}">{{$release->system->name."-".$release->release_name }}</option>
                  @endforeach
                                 
                   
                  </select>

              
              </div>
              <div class="form-group">
                <h5>  <label for="status" >Status:</label></h5>
  
                  <select name="status" id="status">              
                    <option value="review">Review</option>
                    <option value="Test Cases Review">Test Cases Review</option>
                    <option value="IOT">IOT Execution</option>
                    <option value="E2E">E2E Execution</option>
                    <option value="UAT">UAT</option>
                    <option value="Deployment">Deployment</option>
                  </select>
              
              </div>
              
           
             <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

<br>


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
