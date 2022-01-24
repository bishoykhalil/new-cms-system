<x-admin-master>

    @section('content')

    <h1>Create New CR</h1>
    

        <form method="post" action="{{route('cr.store')}}" enctype="multipart/form-data" >
        @csrf
            <div class="form-group">
                <label for="cr_name">CR Name</label>
                <input type="text"
                       name="cr_name"
                       class="form-control"
                       id="crName"
                       aria-describedby=""
                       placeholder="Enter CR Name">
            </div>
            <h5><label for="hasIOT"> IOT</label>  <input type="checkbox" id="IOT" name="hasIOT" value="1">

            <label for="hasE2E"> E2E</label>  <input type="checkbox" id="e2e" name="hasE2E" value="1"></h5>
            
            <div class="form-group">
                <h5>  <label for="release_id" >Select Release :</label></h5>
  
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


               
    @endsection

   

</x-admin-master>
