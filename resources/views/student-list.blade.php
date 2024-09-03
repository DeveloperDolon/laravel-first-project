<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->

    <h1>The students lists in the bellow :- </h1>

    <table border="1">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </thead>

        <tbody>
            @foreach ($students as $item)
                <tr>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>{{$item['password']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
