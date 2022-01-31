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

            

@endsection
</x-admin-master>   