{{-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Posts</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Posts</h6>
        <a class="collapse-item" href="{{route('post.create')}}">Create a Post</a>
        <a class="collapse-item" href="{{route('post.index')}}">View all Posts</a>
      </div>
      
    </div>
  </li> --}}
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Manage Release</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Manage Release</h6>
        <a class="collapse-item" href="{{route('system.create')}}">Create New System</a>
        <a class="collapse-item" href="{{route('release.create')}}">Create New Release</a>
        <a class="collapse-item" href="{{route('cr.create')}}">Create New CR</a>
        <a class="collapse-item" href="{{route('tc.create')}}">Add Test Cases</a>
        <a class="collapse-item" href="{{route('post.index')}}">View all Posts</a>
      </div>
      
    </div>
  </li>