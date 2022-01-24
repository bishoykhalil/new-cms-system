<x-admin-master>
    @section('content')

    <h1>Create New System</h1>
    @if (Session::has('cr-created-message'))
    <div class="alert alert-success"> {{Session::get('cr-created-message')}}</div>
    @endif

    <form method="post" action="{{route('cr.store')}}" enctype="multipart/form-data" >
        @csrf


        <div class="form-group">
          <label for="release_name">CR Name</label>
          <input type="text"
                 name="name"
                 class="form-control"
                 id="release_name"
                 aria-describedby=""
                 placeholder="Enter CR Name">
      </div>
       
        <div class="form-group">
          <label for="release_id" >Select Release :</label>
           <select class="form-control" name="release_id" id="release_id">
           @foreach ($releases as $release)
           <option value="{{$release->id}}">{{$release->system->name."-".$release->release_name }}</option>
           @endforeach                                                    
           </select>
</div>

<div class="form-group">
  <h5>  <label for="status" >Status:</label></h5>

    <select  class="form-control" name="status" id="status">              
      <option value="review">Review</option>
      <option value="Test Cases Review">Test Cases Review</option>
      <option value="IOT">IOT Execution</option>
      <option value="E2E">E2E Execution</option>
      <option value="UAT">UAT</option>
      <option value="Deployment">Deployment</option>
    </select>

</div>

<h5><div class="form-group"><label for="hasIOT">HAS IOT</label>  <input  type="checkbox" id="IOT" name="hasIOT" value="1"></div>

  <div class="form-group"><label for="hasE2E">HAS E2E</label>  <input  type="checkbox" id="e2e" name="hasE2E" value="1"></div></h5>
 
                      <button type="submit" class="btn btn-primary">Create CR</button>

    </form>
  @endsection
</x-admin-master>