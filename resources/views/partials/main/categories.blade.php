<section class="container-fluid">
    <div class="row d-flex g-2 justify-content-center">
        
        @foreach ($categories as $category)
            <div  style="background-color:{{$category->color}} " class="card mx-2 col-4">
                <div class="card-body">
                    <h5 class="card-title text-white text-uppercase fw-bolder">{{$category->name}}</h5>
                    <div class="btuttons-wrapper d-flex justify-content-between">
                        <a href="{{route('categories.show',$category)}}" class="btn btn-secondary btn-sm text-white fs-6 text-uppercase fw-bolder">Category</a>

                        <a href="{{route('categories.edit',$category)}}" class="btn btn-secondary btm-sm text-white fs-6 text-uppercase fw-bolder">Edit category</a>

                        <form action="{{route('categories.destroy', $category)}}" method="POST" class="category-form-destroyer" category-name="{{$category->name}}">
                            @csrf
                            @method('DELETE')

                            <button type="submit"  class="btn btn-danger btn-sm text-white fs-6 text-uppercase fw-bolder">Delete</a>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</section>

<script defer>
    const deleteForms = document.querySelectorAll('.category-form-destroyer');
    console.log(deleteForms);
    deleteForms.forEach(singleForm => {
        singleForm.addEventListener('submit', function (event) {
            event.preventDefault(); // § blocchiamo l'invio del form
            userConfirmation = window.confirm(`Are you sure  ${this.getAttribute('category-name')}?` );
            if (userConfirmation) {
                this.submit();
            }
        })
    });
</script>