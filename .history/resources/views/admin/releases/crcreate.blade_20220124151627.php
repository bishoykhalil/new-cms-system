<x-admin-master>
    @section('content')

    <h1>Create New System</h1>

    <form method="post" action="{{route('cr.store')}}" enctype="multipart/form-data" >
        @csrf

        <div class="form-group">
        <input type="text" name="name" >
        </div>
        <div class="form-group">
            <input type="text" name="release_id" >
            </div>
            <div class="form-group">
                <input type="text" name="status" >
                </div>
                <div class="form-group">
                    <input type="text" name="hasIOT" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="hasE2E" >
                        </div>
    </form>
  @endsection
</x-admin-master>