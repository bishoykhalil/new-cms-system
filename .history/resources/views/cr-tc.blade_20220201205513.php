<x-home-master>

    @section('content')

        <!-- Title -->
        <h1 class="mt-5">{{$cr->name}}</h1>

        <!-- Author -->
        <p class="lead">

        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$cr-> created_at}}</p>

        <hr>

        <!-- add TCs -->
        
        <br>
        <form class="media-body" method="post" action="{{route('tc.store',['cr'=>$cr,'view_name'=>$view_name])}}" enctype="multipart/form-data" >
          <h4 >Add New Test Case </h4>
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
              <div class="form-group">
                  <label for="status" >Status</label>
                  <br>
                  <select class="form-group" name="status" id="status">  
                  <option value="Not Started">Not Started</option>            
                    <option value="Passed">Passed</option>
                    <option value="Blocked">Blocked</option>
                    <option value="Failed">Failed</option>
                    <option value="Invalied">Invalied</option>
                    <option value="Execluded">Execluded</option>                   
                  </select>               
              </div>
              <div>
              <label for="scope" >Scope</label>
              <br>
              <select class="form-group" name="scope" id="status">  
              <option value="e2e">E2E</option>            
                <option value="iot">IOT</option>
                <option value="uat">UAT</option>
                                
              </select>
                      </div>

                      <br>
          <button type="submit" class="btn btn-primary">Add Test Case</button>
        {{-- <img class="img-fluid rounded" src="{{$post->post_image}}" alt=""> --}}

        <hr>

        <!-- Post Content -->
        <p> {{$cr->name}}</p>

        <blockquote class="blockquote">
          <p class="mb-0"></p>
          <footer class="blockquote-footer">Current Status 
            <cite title="Source Title">{{$cr->status}}</cite>
          </footer>
        </blockquote>


        <hr>
 <!-- show all TCs for CR -->
 <br>
 <div class="card shadow mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Test Cases List for CR : {{$cr->name}}</h6>
   </div>
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
               <tr>
                   <th>Test Case Name</th>
                   <th>Scope</th>
                   <th>Status</th>
               </tr>
               </thead>
              
               <tbody>
                  
                @foreach ($tcs->where('crs_id',$cr->id) as $tc)    
             
 <tr>
      <td>{{$tc->name}}</td>    
     <td>{{$tc->scope}}</td>
     <td class="text-fail" >

      <div >
  
        <select class="form-group" name="status" id="status">  
        <option value="Not Started">Not Started</option>            
          <option value="Passed">Passed</option>
          <option value="Blocked">Blocked</option>
          <option value="Failed">Failed</option>
          <option value="Invalied">Invalied</option>
          <option value="Execluded">Execluded</option>                   
        </select>               
    </div>

     </td>
    
 
 </tr>
 
 @endforeach 
               </tbody>
           </table>
       </div>
   </div>
 </div>

 @section('scripts')

 <!-- Page level plugins -->
 <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

 <!-- Page level custom scripts -->
 <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

       @endsection
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

          </div>
        </div>



    @endsection


</x-home-master>
