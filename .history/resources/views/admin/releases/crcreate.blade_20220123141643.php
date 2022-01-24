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
                       id="cr_name"
                       aria-describedby=""
                       placeholder="Enter CR Name">
            </div>

              
          
              
           
             <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

<br>


               
    @endsection

   

</x-admin-master>
