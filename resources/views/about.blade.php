<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>

<body>
    <h1>About Us</h1>
    <p>We are a company dedicated to providing the best services to our customers.</p>
    <p>Our mission is to deliver quality and excellence in everything we do.</p>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>

    <footer>
        <p>&copy; {{ date('Y') }} My Website</p>
    </footer>

</body>

</html>