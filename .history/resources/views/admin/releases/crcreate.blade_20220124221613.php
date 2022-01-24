<x-admin-master>
    @section('content')

    <h1>Create New System</h1>

    <form method="post" action="{{route('cr.store')}}" enctype="multipart/form-data" >
        @csrf
       
        <div class="form-group">
          <label for="release_id" >Select Release :</label>
           <select name="release_id" id="release_id">
           @foreach ($releases as $release)
           <option value="{{$release->id}}">{{$release->system->name."-".$release->release_name }}</option>
           @endforeach                                                    
           </select>
</div>




    </form>
  @endsection
</x-admin-master>