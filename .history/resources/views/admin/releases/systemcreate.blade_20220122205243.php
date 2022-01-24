<x-admin-master>

    @section('content')

    <h1>Create New System</h1>
        <form method="post" action="{{route('system.store')}}" enctype="multipart/form-data" >
        @csrf
            <div class="form-group">
                <label for="title">System Name</label>
                <input type="text"
                       name="name"
                       class="form-control"
                       id="systemName"
                       aria-describedby=""
                       placeholder="Enter System Name">
            </div>
            <div class="form-group">
                <label for="title">Vendor</label>
                <input type="text"
                       name="vendor"
                       class="form-control"
                       id="systemName"
                       aria-describedby=""
                       placeholder="Enter Vendor Name">
            </div>
             
            <button type="submit" class="btn btn-primary">Create</button>
        </form>



    @endsection

</x-admin-master>
