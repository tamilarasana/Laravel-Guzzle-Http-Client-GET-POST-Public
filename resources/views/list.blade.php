<html>
    <body>
        <h1>User List</h1>
        <table border="1">
            <tr>
            <th>Id</th>
            <th>User ID</th>
            <th>Title</th>
            <th>Body</th>
            </tr>
            <tbody>
                @foreach ($response as  $item)
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['userId'] }}</td> 
                            <td>{{ $item['title'] }}</td> 
                            <td>{{ $item['body'] }}</td> 
                        </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>




