<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/multitable.css')}}">
    
    <title>Multiplication table | P. Natnawat</title>
</head>
<body>
    <form method="POST" action="/multi-table">
        <div style="display: flex; ">
            @csrf
            <input type="number" name="multiply" placeholder="Enter your multiply">
            <button type="submit">submit</button>
        </div>
    </form>
</body>
</html>