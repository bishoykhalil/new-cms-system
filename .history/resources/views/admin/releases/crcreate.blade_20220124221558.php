<x-admin-master>
    @section('content')

    <h1>Create New System</h1>

    <form method="post" action="{{route('cr.store')}}" enctype="multipart/form-data" >
        @csrf
       
    </form>
  @endsection
</x-admin-master>