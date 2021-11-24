<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            a {
                margin: 5vh auto;
                padding: 15px;
                border: 1px #000 solid;
                display: block;
                text-align: center;
                width: 100px;
                background-color: #f2f2f2;
            }

            a:hover {
                text-decoration: none;
                background-color: #f3f2f3;
            }
            
            h1 {
                margin: 5vh auto;
                text-align: center;
            }

            h3 {
                text-align: center;
                font-size: 12px;
            }

            .form {
                display: block;
                margin: 5vh auto;
                text-align: center;
                width: 60%;
                background-color: #f2f2f2;
                border: 1px #000 solid;
                padding: 15px;
            }

            .prev {
                width: 80%;
                margin: 5vh auto;
                text-align: center;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Halaman Utama</h1>
        <a href="/upload">Upload File</a>

        <div class="prev">
            @for ($i = 0; $i < count($types); $i++)
                @if (str_contains($types[$i], 'audio'))
                    <audio controls><source id="aud" src="{{ $urls[$i] }}" width="80%"></audio>
                    {{-- <a class="aud" id="aud" href="{{ $urls[$i] }}" onclick="return playAudio();"></a> --}}
                    <br>
                    <h3>{{ $names[$i] }}</h3>
                    <br><br>
                @elseif (str_contains($types[$i], 'video'))
                    <video id="vid" src="{{ $urls[$i] }}" width="80%" controls></video>
                    <br>
                    <h3>{{ $names[$i] }}</h3>
                    <br><br>
                @else
                    <img src="{{ $urls[$i] }}" width="80%">
                    <br>
                    <h3>{{ $names[$i] }}</h3>
                    <br><br>
                @endif
            @endfor 
        </div>

        <!-- Scripts -->        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    </body>

    {{-- <script type="text/javascript">
        var x = document.getElementById('next'); 
        //alert(x);
        function playAudio() {
            x.play(); 
        } 
    </script> --}}
</html>
