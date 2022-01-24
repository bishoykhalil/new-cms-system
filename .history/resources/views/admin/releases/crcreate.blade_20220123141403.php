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

            <h5><div class="form-group"><label for="hasIOT"> IOT</label>  <input type="checkbox" id="IOT" name="hasIOT" value="1"></div>

            <div class="form-group"><label for="hasE2E"> E2E</label>  <input type="checkbox" id="e2e" name="hasE2E" value="1"></div></h5>
            

              
          
              
           
             <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

<br>


               
    @endsection

   

</x-admin-master>
