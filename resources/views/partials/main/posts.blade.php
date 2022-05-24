<section class="container-fluid">
   
    <div class="row d-flex justify-content-center wrapper-posts">
        <div class="col-12">
            @if(session('deleted-message'))
                <div class="alert alert-danger">
                    {{session('deleted-message')}}
                </div>
            @endif
        </div>
        @foreach ($posts as $post)
            <div class="card col-3">
                <img class="card-img-top img-fluid py-2" src="{{$post->post_img}}" alt="This image should respresent:  {{$post->post_title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$post->post_title}}</h5>
                    <h6>{{$post->category}}</h6>
                    
                    <p> 
                        @foreach ($post->categories as $category)
                            <strong>Category: </strong> <em class="text-uppercase">{{$category->name}}</em>
                        @endforeach
                    </p>
                    
                    <div class="links d-flex justify-content-between">
                        
                        <button type="button" class="btn btn-info">
                            <a href="{{route('posts.show',$post)}}" >More info</a>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <a href="{{route('posts.edit',$post)}}">Edit </a>
                        </button>
                        
                        {{-- route("posts.destroy", $post --}}
                        <form action="{{route('posts.destroy', $post)}}" method="POST" class="post-destroyer  m-1" post-title="{{ucfirst($post->post_title)}}">
                        @csrf
                        @method('DELETE')
    
                        <button type="submit" class="btn btn-danger btn-md">
                            Delete
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<script defer>
    const deleteForms = document.querySelectorAll('.post-destroyer');
    deleteForms.forEach(singleForm => {
        singleForm.addEventListener('submit', function (event) {
            event.preventDefault(); // § blocchiamo l'invio del form
            userConfirmation = window.confirm(`Are you sure to delete ${this.getAttribute('post-title')}?` );
            if (userConfirmation) {
                this.submit();
            }
        })
    });
</script>