@extends("layouts.app")
@section('content')
    <h1 class="  text-center bold"> Posts</h1>
    <div class="container ">
        @forelse ($post as $p)
        <div class="card ">
             <h3 class="card-header"><a href="/posts/{{$p->id}}">{{$p->title.''}}</a></h3>
             <p class="card-body"><em>{{$p->content}}</em></p>
        </div>     
        @empty
            <h3>No Posts available .</h3>
        @endforelse
        {{$post->links()}}       
   </div>
  
@endsection