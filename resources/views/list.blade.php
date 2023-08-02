<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <title>Laravel Primi Passi</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                        <a class="nav-link" href="#">Lista Della Spesa</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5">
            <div class="card text-center text">
                <ul class="list-group list-group-flush">
                    @foreach($shopping_list as $item)
                    <li class="list-group-item text-uppercase">{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>

</body>

</html>