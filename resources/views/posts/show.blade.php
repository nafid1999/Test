@extends("layouts.app")
@section('content')

        <div class="container ">
            <a href="/posts" class="btn btn-secondary">Go back</a>

            <h1 class="text-center bold"> {{$post->title.''}}</h1>
            <div class="card ">
                <p class="card-body"><em>{{$post->content}}</em></p>
            </div> 
            
            <a href="/posts/{{$post->id}}/edit " class="btn btn-primary">Edit</a>

            <form action="{{route('posts.destroy',$post->id)}} " method="Post"  class="float-right">
               @csrf
                <div class="form-group row" >
                    <input id="content" type="submit" value="delete" class="form-control btn btn-danger">
                </div>
                 @method('DELETE') 

            </form>

        </div>
    
  
@endsection