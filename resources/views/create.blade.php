@extends('layout')
@section('content')



  <main class="container">
      
    <form action="{{route('diaries.store')}}"  method="POST">
        @csrf
        <div class="starter-template py-5 px-3">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Author</label>
                <input type="text" name="author" class="form-control"" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Diary or note!</label>
                <textarea class="form-control" name="diary" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Save</button>
              </div>
        </div>
    </form>

  </main>



@endsection