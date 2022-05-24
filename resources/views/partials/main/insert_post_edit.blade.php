<section class="container-fluid">
    <div class="row justify-content-center p-5">
        <div class="col-8">
            <form action="{{route('posts.update', $post)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="post_title" >Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="post_title" name="post_title" value="{{$post->post_title}}" >
                    @error('post_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="post_text">Description</label>
                    <textarea rows="3" type="text" class="form-control  @error('post_text') is-invalid @enderror" id="post_text" name="post_text">{{$post->post_text}}</textarea>
                    @error('post_text')
                        <div id="title_error" class="alert alert-danger" >{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="img"> Upload image </label>
                    <input type="text" class="form-control" id="img" value="{{$post->post_img}}" name="post_img" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    
    </div>
</section>




