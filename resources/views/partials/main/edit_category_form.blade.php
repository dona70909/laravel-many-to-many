<section class="container-fluid">
    <div class="row justify-content-center p-5">
        <div class="col-8">
            <form action="{{route('categories.update',$category)}}" method="POST">
                @csrf

                @method('PUT')

                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input value="{{$category->name}}" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter category name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="color">Colour</label>
                    <input  value="{{$category->color}}" type="color" class="form-control" id="color" name="color" >
                </div>


                <button type="submit" class="btn btn-primary  fw-bolder">Edit category</button>
            </form>
        </div>
    
    </div>
</section>