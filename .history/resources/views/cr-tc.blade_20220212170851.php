<x-home-master>

    @section('content')

        <!-- Title -->
        <h1 class="mt-5">{{$cr->name}}</h1>

        <!-- Author -->
        <p class="lead">
        {{$cr->release->system->name}}-{{$cr->release->release_name}}
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$cr-> created_at}}</p>

        <hr>

        <!-- add TCs -->

        <br>

        <form class="media-body" method="post" action="{{route('tc.store',['cr'=>$cr,'view_name'=>$view_name])}}" enctype="multipart/form-data" >

          @if (Session::has('cr-creat-message'))
          <div class="alert alert-success"> {{Session::get('cr-creat-message')}}</div>
          @elseif (Session::has('tc-updated-message'))
       <div class="alert alert-success"> {{Session::get('tc-updated-message')}}</div>
       @elseif (Session::has('comment message'))
          <div class="alert alert-success"> {{Session::get('comment message')}}</div>
        
          @endif
          <h4 >Add New Test Case </h4>
          @csrf
              <div class="form-group">
                  <label for="title">Test Case Name</label>
                  <input type="text"
                         name="name"
                         class="form-control"
                         id="systemName"
                         aria-describedby=""
                         placeholder="Enter Test Case Name">
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
              <option value="E2E">E2E</option>
                <option value="IOT">IOT</option>
                <option value="UAT">UAT</option>

              </select>
                      </div>

                      <br>
          <button type="submit" class="btn btn-primary">Add Test Case</button>
        </form>
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

 <!-- Cards of Status -->

 <div class="row">
  <div class="col-lg-6 mb-4">
    <div class="card bg-primary text-white shadow">
      <div class="card-body">
        Total Number of Test Cases
        <div class="text-Black-50 large"><strong>{{$tcs->where('crs_id',$cr->id)->count()}}</strong></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-success text-white shadow">
      <div class="card-body">
        Passed Test Cases
        <div class="text-Black-50 large"><strong>{{$tcs->where('status','Passed')->count()}}</strong></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-info text-white shadow">
      <div class="card-body">
       Not Started Test Cases
        <div class="text-Black-50 large"><strong>{{$tcs->where('status','Not Started')->count()}}</strong></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-warning text-white shadow">
      <div class="card-body">
        Blocked Test Cases
        <div class="text-Black-50 large"><strong>{{$tcs->where('status','Blocked')->count()}}</strong></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-danger text-white shadow">
      <div class="card-body">
        Failed Test Cases
        <div class="text-Black-50 large">{{$tcs->where('status','Failed')->count()}}</div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-secondary text-white shadow">
      <div class="card-body">
        Invalied  Test Cases
        <div class="text-white-50 small">{{$tcs->where('status','Invalied')->count()}}</div>
      </div>
    </div>
  </div>
</div>

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
                   <th>Update Status</th>
               </tr>
               </thead>

               <tbody>

                @foreach ($tcs->where('crs_id',$cr->id) as $tc)

 <tr>
      <td>{{$tc->name}}</td>
     <td>{{$tc->scope}}</td>
     <td class="  btn-info btn-icon-split"><Strong>{{$tc->status}}</Strong></td>
     <td class="text-fail" >


        <form method="post" action="{{route('tc.updateStatus',['tc'=>$tc,'view_name'=>$view_name])}}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
         <select class="animated--fade-in" name="status" id="status">
         <option value="Not Started">Not Started</option>
          <option value="Passed">Passed</option>
          <option value="Blocked">Blocked</option>
          <option value="Failed">Failed</option>
          <option value="Invalied">Invalied</option>
          <option value="Execluded">Execluded</option>
        </select>
         <select class="form-group" name="scope" id="status">
                      <option value="E2E">E2E</option>
                        <option value="IOT">IOT</option>
                        <option value="UAT">UAT</option>

                      </select>
        <span  class="" >
<br>
        <button   type="submit"  class="btn-circle btn-sm" >Update</button>
      </span>

    </form>


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
            <form method="post" action="{{route('comment.store')}}">
            @csrf

              <input type="hidden" name="cr_id" value="{{$cr->id}}">

              <div class="form-group">
                <textarea name="body" class="form-control" rows="3"></textarea>
              </div><br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        @foreach($comments as $comment)
        <div class="media mb-4">

          <div class="media-body">
            <h4 class="mt-0"><strong>{{$comment->author}}</h4></strong>
            {{$comment->body}}
          </div>
          <br>
          <footer class="blockquote-footer">Posted on
            <cite title="Source Title">{{$comment->created_at}}</cite>
          </footer>
        </div>
@endforeach
      
    @endsection


</x-home-master>
