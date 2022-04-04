<html>
<head>
<style>
    .bg {
        background-color: #e8d8b7;
    }
    .center {
        text-align: center;
    }
</style>
<title>Web Reader</title>
</head>
<body class="bg">

<section class="center">
    <h1>{{ $book_name }}</h1>
    <h2>by {{ $book_author }}</h2>

    <p><a href="/">Home</a></p>

    @for($i = 1; $i <= $book_chapters; $i++)
    <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
    @endfor
</section>

<hr>

<pre>
@include("ch" . $chapter_number)
</pre>
</body>
</html>