<!DOCTYPE html>
<html>
<head>
    <title>Library System - Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th {
            background-color: #333;
            color: #fff;
            text-align: left;
            padding: 10px;
        }

        td {
            background-color: #fff;
            color: #333;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Library System - Books</h1>
    <table>
        <thead>
            <tr>
                <th>Category</th>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bokks as $bokks)
            <tr>
                <td>{{ $book->Category }}</td>
                <td>{{ $book->Title}}</td>
                <td>{{ $book->Author}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
