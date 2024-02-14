<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>
</head>
<body>
    <nav>
        <a href="/"><button>About Me</button></a>
        <a href="/Skills"><button>Skills</button></a>
        <a href="/Hobbies"><button>Hobbies</button></a>   
    </nav>
    
    <div>
        <h2>My Skills</h2>
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>