@extends('layout')
@section('content')

@foreach ($diary as $item)
  <div class="card w-100">
    <div class="card-body">
      <h5 class="card-title">{{$item->author}}</h5>
      <p class="card-text">{{$item->diary}}</p>
      <a href="{{route('edit',$item->id)}}" class="btn btn-primary">edit</a>
      <a href="{{route('show',$item->id)}}" class="btn btn-primary">show</a>
      <form action="{{route('destroy', $item->id)}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">show</button>
      </form>
    </div>
  </div>
@endforeach
{!!$diary->links()!!}
      <main class="container">

        <div class="starter-template py-5 px-3">
          <h1>Bootstrap starter template</h1>
          <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        </div>
      <div>********************</div>
      </main><!-- /.container -->
        
        @if ($message = Session::get('success'))
        {{$message}}
        @endif
    @endsection