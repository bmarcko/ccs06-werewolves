<html>
<head>
    <style>
        .bg {
            background-color: #e8d8b7;
        }
        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }
        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }
        .px-lg-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }
        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }
        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-0.5 * var(--bs-gutter-x));
            margin-left: calc(-0.5 * var(--bs-gutter-x));
        }
        .gx-4 {
            --bs-gutter-x: 1.5rem;
        }
        .gx-lg-5 {
            --bs-gutter-x: 3rem;
        }
        .align-items-center {
            align-items: center !important;
        }
        .col-md-6 {
            flex: 0 0 auto;
            width: 50%;
        }
        .card-img-top {
            width: 90%;  
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }
        .mb-5 {
            margin-bottom: 3rem !important;
        }
        .mb-md-0 {
            margin-bottom: 0 !important;
        }
        .col-md-6 {
            flex: 0 0 auto;
            width: 50%;
        }
        .display-5 {
            font-size: calc(1.425rem + 2.1vw);
            font-weight: 300;
            line-height: 1.2;
        }
        .fw-bold {
        font-weight: 700 !important;
        }
        .fw-bolder {
        font-weight: bolder !important;
        }
        .small {
            font-size: 1.875em;
        }
        .mb-1 {
            margin-bottom: 0.25rem !important;
        }
        .lead {
            font-size: 1.25rem;
            font-weight: 300;
        }
        .fw-idk {
            font-size: 2.00rem;
            font-weight: 400;
            text-align:center;
        }
        .center {
            
        }

        
    </style>
<title>Web Reader</title>
</head>
<body class="bg">

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://www.sacred-texts.com/goth/bow/img/werewolf.jpg" alt="..." /></div>
            <div class="col-md-6">            
                <h1 class="display-5 fw-bolder">THE BOOK OF WERE-WOLVES</h1>
                <div class="small mb-1">by Sabine Baring-Gould</div>
                <p class="lead">Sabine Baring-Gould (1834-1924) was a Vicar in the Church of England in Devon, an archaeologist, folklorist, historian and a prolific author. Baring-Gould was also a bit eccentric. He reputedly taught classes with a pet bat on his shoulder. He is best known for writing the hymn 'Onward Christian Soldiers'.</p>
                <p class="lead">This book is one of the most cited references about werewolves. The Book of the Were-Wolf takes a rationalistic approach to the subject.</p>
            </div>
        </div>
    </div>
</section>

@for($i = 1; $i <= $book_chapters; $i++)
<h3 class="fw-idk">
    <p><a href="/chapter/{{ $i }}">CHAPTER {{ $i }}</a></p>
</h3>
@endfor

<h3 class="fw-idk">
    <p><a href="/read-all">READ ALL CHAPTER</a></p>
</h3>


</body>
</html>