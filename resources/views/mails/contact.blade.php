<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact from Website</title>
</head>
<body>
    <h2>Contact Form Submitted (thegrasrootswalkers.com)</h2>
    <p>
        <strong>Name:</strong> {{ $name }}<br>
        <strong>Email:</strong> {{ $email }}<br>
        <strong>Subject:</strong> {{ $subject }}<br><br>
        {{ $content }}
    </p>
</body>
</html>
