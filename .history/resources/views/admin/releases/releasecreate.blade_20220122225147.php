<x-admin-master>

    @section('content')

    <h1>Create New Release</h1>
    @if (Session::has('system-created-message'))
        <div class="alert alert-success"> {{Session::get('system-created-message')}}</div>
        @endif

        <table>
        <form method="post" action="{{route('release.store')}}" enctype="multipart/form-data" >
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
                       id="vendormName"
                       aria-describedby=""
                       placeholder="Enter Vendor Name">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>





    @endsection

    @section('scripts')

    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  
    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
  
          @endsection

</x-admin-master>
