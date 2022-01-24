<x-admin-master>

    @section('content')

    <h1>Edit</h1>
        <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data" >
        @csrf
        @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text"
                       name="title"
                       class="form-control"
                       id="title"
                       aria-describedby=""
                       value="{{$post->title}}">
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
            <div class="form-group">
                <textarea class="form-group" name="body" id="body" cols="40" rows="10">{{$post->body}} </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    @endsection

</x-admin-master>