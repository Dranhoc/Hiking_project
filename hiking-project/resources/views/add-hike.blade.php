<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container">

    <div>
        <h1>Add a new hike</h1>
    </div>

    <form action="{{ route('create') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="distance" class="form-label">Distance</label>
            <input type="text" class="form-control" id="distance" name="distance">
        </div>
    
        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration">
        </div>
    
        <div class="mb-3">
            <label for="elevation_gain" class="form-label">Elevation</label>
            <input type="text" class="form-control" id="elevation_gain" name="elevation_gain">
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" class="form-control" name="description" rows="4" cols="50" maxlength="500" placeholder="Enter description"></textarea>
        </div>
    
        {{-- <div class="mb-3"><button type="submit" class="btn btn-primary">Add Picture</button></div> --}}

        <div class="mb-3"><button type="submit" class="btn btn-primary">Save Hike</button></div>

    </form>
</div>