@extends("layouts.app")
@section('content')

   <div class="container">
     
   <form  method="post" class="my-20" action="/posts/{{$post->id}}">
    @csrf
    @method('PUT') 

    <h1 class="text-center">Add a new post</h1>
           <div class="form-group row">
               <label for="title">Title</label>
               <input name="title" id ="title" type="text" class="form-control mb-3"  value="{{$post->title}} ">
            </div>

           <div class="form-group row" >
               <label for="content">Content :</label>
               <input id="content" type="text" name="content" class="form-control mb-3" value="{{$post->content}} ">
            </div>
            @if($errors->any())
                 <ul class="list-group unstyled ">
                     @foreach ($errors->all() as $error)
                         <li class=" list-group-item alert alert-danger">{{$error}}  </li>
 
                     @endforeach
                 </ul>
            @endif

            <div class="form-group row" >
                <input id="content" type="submit" value="publish" class="form-control btn btn-primary mb-6">
            </div>

       </form>
   </div>
@endsection