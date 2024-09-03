@foreach ($booking as $b)
<tr>
    <th scope="row">{{ $b->id }}</th>
    <td>{{ $b->mr_name }}</td>
    <td>{{ $b->miss_name }}</td>
    <td>{{ $b->service_name }}</td>
    <td>{{ $b->email }}</td>
    <td>{{ $b->phone }}</td>
    <td>{{ $b->date }}</td>
    <td>{{ $b->status }}</td>
    <td class="d-flex">
        <form action="{{ route('booking#accept', $b->id) }}" method="POST" class="mx-2">
            @csrf
            <button type="submit" class="btn btn-success">Accept</button>
        </form>
        <form action="{{ route('booking#reject', $b->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Reject</button>
        </form>
    </td>
</tr>
@endforeach
