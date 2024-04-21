@extends('layouts.main')

@section('content')

<h2>New track</h2>
      <form method="post" action="{{route('projects.tracks.store',['project'=>$project])}}">
        @csrf
        <div class="mb-3">
          <label class="form-label" for="name">Track name</label>
          <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="">
          @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
        </div>

        <div class="mb-3">
          <label class="form-label" for="file">Audio file</label>
          <input name="filename" type="file" class="form-control @error('filename') is-invalid @enderror" id="file" placeholder="">
          @error('filename')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
        </div>

        <div class="mb-3">
          <label class="form-label" for="color">Color</label>
          <input name="color" type="color" class="form-control form-control-color @error('color') is-invalid @enderror" id="color" placeholder="">
          @error('color')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
        </div>

        <label class="form-label">Filters</label>
        <div class="mb-3 d-flex flex-wrap row-gap-3 column-gap-3">
          <div>
            <input type="checkbox" class="btn-check" id="btn-check-outlined1" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btn-check-outlined1">Filter1</label>
          </div>
          <div>
            <input type="checkbox" class="btn-check" id="btn-check-outlined2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btn-check-outlined2">Filter2</label>
          </div>
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Add new track</button>
        </div>

      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection