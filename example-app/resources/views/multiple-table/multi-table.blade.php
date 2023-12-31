<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/multitable.css')}}">

    <title>Multiplication table of {{ $multiply }} | P. Natnawat</title>
</head>

<body>
    <div class="multiple-space">
        <h1>Multiple Table of {{ $multiply }} </h1>
        <div class="multiple-table">
            <table>
                <tbody>
                    <?php
                    for ($i=1; $i <= 24; $i++) { 
                        $result = $multiply * $i;
                        echo "<tr><td>" . $multiply . "</td>";
                        echo "<td>" . " x " . "</td>";
                        echo "<td>" . $i ."</td>";
                        echo "<td>" . " = " . "</td>";
                        echo "<td>". $result . "</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <style>

    </style>
</body>
</html>