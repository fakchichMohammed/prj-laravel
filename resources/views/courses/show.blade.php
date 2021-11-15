@extends('dashboard')

@section('content')
<div class="bg-white p-3 post-card">
  <form action="" method="">
    @csrf
    @method('PUT')

    <!-- course info -->
    <div class="form-group">
      <label for="">Title</label>
      <input type="text" class="form-control" name="title" require value="{{$course->title}}">
    </div>
    <div class="form-group">
      <label for="">Content</label>
      <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{$course->content}}</textarea>
    </div>

    <!-- course category -->
    @foreach($course->categories as $category)
    <div class="form-group">
      <label for="">Category</label>
      <select class="form-control">
        <option>{{$category->title}}</option>
      </select>
    </div>
    @endforeach

    <!-- course type -->
    @foreach($course->types as $type)
    <div class="form-group">
      <label for="">Type</label>
      <select class="form-control">
        <option>{{$type->title}}</option>
      </select>
    </div>
    @endforeach

    <!-- course chapters -->
    @foreach($course->chapters as $chapter)
    <label for="">Chapters</label>
    <div id="accordion">
      <div class="card">
        <div class="card-header" id="heading{{$loop->index+1}}">
          <h5 class="mb-0">
            <div class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$loop->index+1}}" aria-expanded="true" aria-controls="collapse{{$loop->index+1}}">
              {{$chapter->title}}
            </div>
          </h5>
        </div>

        <div id="collapse{{$loop->index+1}}" class="collapse show" aria-labelledby="heading{{$loop->index+1}}" data-parent="#accordion">

          <textarea class="form-control" name="content" rows="5">
          {{$chapter->content}}
          </textarea>

        </div>
      </div>
    </div>
    @endforeach

    <p class="card-text"><small v-pre class="text-muted">{{ link_to_route('users.show') }}</small></p>
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="submit" class="btn btn-danger">Delete</button>

  </form>

 <!--  <h1 v-pre>{{ $course->title }}</h1>
  <P>
    <span>{{$course->content}}</span>
  </P>

  <h3>Course category : </h3>
  <div>
    @foreach($course->categories as $category)
    <P>
      <span>{{$category->title}}</span>
    </P>
    @endforeach
  </div>

  <h3>Course type : </h3>
  <div>
    @foreach($course->types as $type)
    <P>
      <span>{{$type->title}}</span>
    </P>
    @endforeach
  </div>

  <h3>Chapters : </h3>
  <div>
    @foreach($course->chapters as $chapter)

    <div id="accordion">
      <div class="card">
        <div class="card-header" id="heading{{$loop->index+1}}">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$loop->index+1}}" aria-expanded="true" aria-controls="collapse{{$loop->index+1}}">
              {{$chapter->title}}
            </button>
          </h5>
        </div>

        <div id="collapse{{$loop->index+1}}" class="collapse show" aria-labelledby="heading{{$loop->index+1}}" data-parent="#accordion">
          <div class="card-body">
            {{$chapter->content}}
            test
          </div>
        </div>
      </div>
    </div>

    @endforeach
  </div>
</div> -->


@endsection