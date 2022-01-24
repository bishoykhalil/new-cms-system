<x-admin-master>
    @section('content')

    <h1>Create New System</h1>

    <form method="post" action="{{route('cr.store')}}" enctype="multipart/form-data" >
        @csrf
        <div class="form-group" >
          <h5>  <label for="status" >CR Name :</label>  <input type="text" name="name" class="form-control" >
      </div> 
    </form>
  @endsection
</x-admin-master>