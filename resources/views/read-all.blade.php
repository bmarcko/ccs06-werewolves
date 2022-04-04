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

    <a href="/">Home</a>
</section>

<hr>

@for($i = 1; $i <= $book_chapters; $i++)
<h3>Chapter {{ $i }}</h3>
<pre>
@include("ch{$i}")
</pre>
@endfor

<p class="center"><a href="/read-all">Back to Top</a></p>

</body>
</html>