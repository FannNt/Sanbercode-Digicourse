<div>
    <p>Name: {{ $cast->name }}</p>
    <p>age: {{ $cast->age }}</p>
    <p>Bio: {{ $cast->bio }}</p>

    <form action="{{ route('delete',$cast->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
</div>
