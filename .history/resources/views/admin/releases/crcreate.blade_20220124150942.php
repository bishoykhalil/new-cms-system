<x-admin-master>
    @section('content')

    <h1>Create New System</h1>

    <form method="post" action="{{route(cr.create)}}" enctype="multipart/form-data" >
        @csrf

        <div class="form-group">
        <input type="text" name="name" class="form-control">
        </div>

    </form>
  @endsection
</x-admin-master>