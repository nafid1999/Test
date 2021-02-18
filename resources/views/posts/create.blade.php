@extends("layouts.app")
@section('content')

   <div class="container">
     
   <form  method="post" class="my-20" action="{{route('posts.store')}}">
    @csrf
    <h1 class="text-center">Add a new post</h1>
           <div class="form-group row">
               <label for="title">Title</label>
               <input name="title" id ="title" type="text" class="form-control mb-3">
            </div>

           <div class="form-group row" >
               <label for="content">Content :</label>
               <input id="content" type="text" name="content" class="form-control mb-3 ">
            </div>
            @if($errors->any())
                 <ul class="unstyled">
                     @foreach ($errors->all() as $error)
                         <li class="alert alert-danger">{{$error}}  </li>
 
                     @endforeach
                 </ul>
            @endif

            <div class="form-group row" >
                <input id="content" type="submit" value="publish" class="form-control btn btn-primary mb-6">
            </div>
       </form>
   </div>
@endsection