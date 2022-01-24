<x-admin-master>

    @section('content')

    <h1>Create New System</h1>
        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data" >
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
                <label for="file">File</label>
                <input type="file"
                       name="title"
                       class="form-control"
                       id="title"
                       aria-describedby=""
                       placeholder="Enter Title">
            </div>
            <select  >omk
            <option value="1"></option>
             <option value="2"></option>
            </select>
            <div class="form-group">
                <textarea class="form-group" name="body" id="body" cols="40" rows="10"> </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    @endsection

</x-admin-master>
