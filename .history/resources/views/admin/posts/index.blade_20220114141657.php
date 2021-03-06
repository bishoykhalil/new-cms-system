<x-admin-master>
    @section('content')

        <h1>All Posts</h1>

        @if (Session::has('message'))
        <div class="alert alert-danger"> {{Session::get('message')}}</div>
       @elseif (Session::has('post-crerated-message'))
       <div class="alert alert-success"> {{Session::get('post-crerated-message')}}</div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Current CRs</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>title</th>
                            <th>Created At</th>
                            <th>Created By</th>
                            <th>Delete</th>
                           
                         
                        </tr>
                        </thead>
                        {{-- <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>title</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            
                        </tr>
                        </tfoot> --}}
                        <tbody>
                        @foreach($posts as $post)    
          <tr>
              <td>{{$post->id}}</td>
              <td><a href="{{route('post.edit')}}">{{$post->title}}</a></td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->user->name}}</td>
              <td>
                  <form method="POST" action="{{route('post.destroy',$post->id)}}" enctype="multipart/form-data">

                        @csrf
                        @method('DELETE')

                    <button type="submit" class="btn btn-danger" >Delete</button>
                
                </form>
              </td>
              
          </tr>
@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    @endsection

    @section('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

        @endsection

</x-admin-master>
