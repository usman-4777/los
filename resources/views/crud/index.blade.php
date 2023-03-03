<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Striped Rows</h2>
    <a href="{{ route('form') }}" class="btn btn-primary"> Add Record</a>
    <p>The .table-striped class adds zebra-stripes to a table:</p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($developers as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{ $item->email }}</td>
            <td> {{ $item->password }} </td>
            <td><a href="" class="btn btn-info">Edit</a> <a href="" class="btn btn-danger">Delete</a> </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
