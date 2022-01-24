<x-admin-master>

    @section('content')

    <h1>Create New CR</h1>
        <form method="Post"
        action="{{route('cr.store')}}"
        enctype="multipart/form-data" >

        @csrf
           

            
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




            <button type="submit" class="btn btn-primary">Create</button>
        </form>


    @endsection

   

</x-admin-master>
