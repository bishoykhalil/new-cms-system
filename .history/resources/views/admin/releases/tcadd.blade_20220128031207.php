<x-admin-master>
    @section('content')
    <h4>Add New Test Case</h1>
    <h3 > <> {{$crName}}
  <br> <br> <br> 
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
                </div>



@endsection
</x-admin-master>   