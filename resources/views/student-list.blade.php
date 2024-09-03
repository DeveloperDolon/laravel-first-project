<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <h1>The students lists in the bellow :- </h1>

    <form action="search" method="GET">
        @csrf
        <input type="text" name="search" placeholder="Search here">
        <button type="submit">Search</button>
    </form>

    <table border="1">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </thead>

        <tbody>
            @foreach ($students as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['password'] }}</td>
                    <td>
                        <a href="delete-student/{{ $item->id }}">Delete</a>
                        <a href="update/{{ $item->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$students->links()}}
</div>
<style>
    .w-5.h-5 {
        width: 20px;
        height: 20px;
    }
</style>
