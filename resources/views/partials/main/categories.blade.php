<section class="container-fluid">
    <div class="row d-flex g-2 justify-content-center">
        
        @foreach ($categories as $category)
            <div  style="background-color:{{$category->color}} " class="card mx-2 col-4">
                <div class="card-body">
                    <h5 class="card-title text-white text-uppercase fw-bolder">{{$category->name}}</h5>
                    <a href="{{route('categories.show',$category)}}" class="btn btn-secondary bt-sm text-white fs-6 text-uppercase fw-bolder">Category</a>

                    <a href="{{route('categories.edit',$category)}}" class="btn btn-secondary bt-sm text-white fs-6 text-uppercase fw-bolder">Edit category</a>
                </div>
            </div>
        @endforeach
        
    </div>
</section>