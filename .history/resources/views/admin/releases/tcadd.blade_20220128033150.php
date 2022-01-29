<x-admin-master>
    @section('content')
    <h4>Add New Test Case</h1>
    <h3 > <strong> {{$crName}} </h3></strong>
  <br> 
        <form method="post" action="{{route('system.store')}}" enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <label for="title">Test Case Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           id="systemName"
                           aria-describedby=""
                           placeholder="Enter System Name">
                </div><div class="form-group">
                    <label for="status" >Status</label>
    
                    <select name="status" id="status">              
                      <option value="review">Passed</option>
                      <option value="Test Cases Review">Blocked</option>
                      <option value="IOT">Failed</option>
                      <option value="E2E">Invalied</option>
                      <option value="UAT">Execluded</option>
                      
                    </select>
                
                </div>
                


@endsection
</x-admin-master>   