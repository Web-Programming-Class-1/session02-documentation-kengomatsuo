<!DOCTYPE html>
<html>

<head>
    <title>Test Submit</title>
</head>

<body>
    <form action="/submit" method="POST">
        @csrf
        <button type="submit">Send</button>
    </form>
    <!-- PUT Form -->
    <form action="/update" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">Update</button>
    </form>

    <!-- DELETE Form -->
    <form action="/remove" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Remove</button>
    </form>
</body>

</html>
