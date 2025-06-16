<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>

<body>
    <h1>Blog</h1>
    <p>Welcome to our blog! Here you will find the latest articles and updates.</p>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>

    <section>
        <h2>Latest Posts</h2>
        <article>
            <h3>Post Title 1</h3>
            <p>This is a summary of the first post. It contains interesting information about various topics.</p>
            <a href="#">Read more</a>
        </article>
        <article>
            <h3>Post Title 2</h3>
            <p>This is a summary of the second post. It discusses recent developments in our field.</p>
            <a href="#">Read more</a>
        </article>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} My Website</p>
    </footer>

</body>

</html>