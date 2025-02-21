<div>
    <div>
        <p>Cast with id {{ $cast->id }}</p>
        <form method="post" action="{{ route('update',$cast->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label" >Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="{{ $cast->name }}">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="{{ $cast->age }}">
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <textarea name="bio" id="bio" cols="30" rows="10" placeholder="{{ $cast->bio}}"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
