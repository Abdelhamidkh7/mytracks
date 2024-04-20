@extends('layout.main')

@section('content')

<h2>New track</h2>
      <form>
        
        <div class="mb-3">
          <label class="form-label" for="name">Track name</label>
          <input type="text" class="form-control" id="name" placeholder="">
          <div class="invalid-feedback">
            Please choose a track name.
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="file">Audio file</label>
          <input type="file" class="form-control" id="file" placeholder="">
          <div class="invalid-feedback">
            Some problem with the file.
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="color">Color</label>
          <input type="color" class="form-control form-control-color" id="color" placeholder="">
          <div class="invalid-feedback">
            Please choose a color.
          </div>
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