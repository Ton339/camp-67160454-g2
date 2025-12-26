<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Airline</th>
            <th>Number of Planes</th>
            <th>Price per Ticket</th>
            <th>เเก้ไข / ลบ</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($flights as $flight)
            <tr>
                <td>{{ $flight->id }}</td>
                <td>{{ $flight->name }}</td>
                <td>{{ $flight->airline }}</td>
                <td>{{ $flight->number_of_planes }}</td>
                <td>{{ $flight->price_per_ticket }}</td>
                <td>
                <a href="/flight/{{ $flight->id }}/edit">Edit</a>
                <form action="/flight/{{ $flight->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
