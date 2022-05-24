<section class="container-fluid">
    <div class="row justify-content-center p-2">
        <div class="col-12">
            @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
        </div>
        <div class="col-8">
            <img class="card-img-top img-fluid" src="{{$post->post_img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$post->post_title}}</h5>
                <h6>{{$post->created_at}}</h6>
                <p class="card-text">
                    {{$post->post_text}}
                </p>
                <p>
                    @foreach ($post->categories as $category)
                    <a  href="{{route('categories.show',$category)}}"> 
                        <strong>Category: </strong> <em class="text-uppercase">{{$category->name}}</em>
                    </a>
                    @endforeach
                </p>
                <a href="{{route('posts.edit',$post)}}" class="btn btn-primary">Edit </a>
            </div>
        </div>
    </div>
</section>