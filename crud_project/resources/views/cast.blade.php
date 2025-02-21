<div>
        <table>
            <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Bio</td>
                <td>Age</td>
            </tr>
            </thead>
            <tbody>

               @foreach($casts as $cast)
                   <tr>
                        <td>{{ $cast->id }}</td>
                        <td>{{ $cast->name }}</td>
                        <td> {{ $cast->bio }}</td>
                        <td> {{ $cast->age }}</td>
                    </tr>
               @endforeach
            </tbody>
        </table>
</div>
