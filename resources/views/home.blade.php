<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home1</title>
</head>
<body>

    @foreach ($LINKS as $link => $key)
        <a href="{{route($link)}}">
            {{$key}} 
        </a>
    @endforeach
    
    <div>

        @if (isset($VAR2))
            {{$VAR2}}
        @else Номера нет
        @endif
    </div>
    <div>
        @if (isset($VAR3))
        {{$VAR3}}
        @else Текста нет
        @endif
    </div>
</body>
</html>