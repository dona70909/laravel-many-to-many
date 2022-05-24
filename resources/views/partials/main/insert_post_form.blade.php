<section class="container-fluid">
    <div class="row justify-content-center p-5">
        <div class="col-8">
            <form action="{{route('posts.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="post_title" >Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="post_title" name="post_title" placeholder="Enter title">
                    @error('post_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="post_text">Description</label>
                    <textarea rows="3" type="text" class="form-control  @error('post_text') is-invalid @enderror" id="post_text" name="post_text" placeholder="description"></textarea>
                    @error('post_text')
                        <div id="title_error" class="alert alert-danger" >{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="img"> Upload image </label>
                    <input type="text" class="form-control" id="thumb" name="post_img" placeholder="img">
                </div>


                <div class="form-group">
                    
                    <select class="form-select multiple"  name="category_id" >
                        <option value="">Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    
    </div>
</section>

