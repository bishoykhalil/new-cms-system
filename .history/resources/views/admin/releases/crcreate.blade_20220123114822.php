<x-admin-master>

    @section('content')

    <h1>Create New CR</h1>
    @if (Session::has('system-created-message'))
        <div class="alert alert-success"> {{Session::get('system-created-message')}}</div>
        @endif

        <form method="post" action="{{route('system.store')}}" enctype="multipart/form-data" >
        @csrf
            <div class="form-group">
                <label for="title">CR Name</label>
                <input type="text"
                       name="cr_name"
                       class="form-control"
                       id="systemName"
                       aria-describedby=""
                       placeholder="Enter CR Name">
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
             
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

<br>


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
