<!-- resources/views/contact.blade.php -->
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact</title>
</head>

<body>
    <form action="/submit-contact" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your name">
        <button type="submit">Send</button>
    </form>
</body>

</html>
