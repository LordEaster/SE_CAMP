<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST">
        <div class="multiple-space">
        <h1>Multiple Table 
            <?php 
                if(isset($_POST["multi"])) {
                    $_POST["multi"] = sprintf("%d", $_POST["multi"]);
                    echo "of " . $_POST["multi"];
                }
            ?>
        </h1>
        <div style="display: flex; ">
            <input type="number" name="multi" value="">
            <button type="submit">submit</button>
        </div>
            <div class="multiple-table">
                <table>
                    <tbody>
                        <?php
                            if (isset($_POST["multi"])) {
                                for ($i=1; $i <= 24; $i++) { 
                                    $result = $_POST["multi"] * $i;
                                    echo "<tr><td>" . $_POST["multi"] . "</td>";
                                    echo "<td>" . " x " . "</td>";
                                    echo "<td>" . $i ."</td>";
                                    echo "<td>" . " = " . "</td>";
                                    echo "<td>". $result . "</td></tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        </form>
    <style>
        table {
            width: 90%;
            height: 265px;
            text-align: center;
            border-color: transparent;
        }

        .multiple-table {
            height: 300px;
            overflow: scroll;
            display: flex;
            justify-content: center;
            margin: auto;
        }

        button {
            width: 100%;
            background-color: transparent;
            border-color: #000;
            border-radius: 0.5rem;
        }

        td {
            text-align: center !important;
        }
        
        tr:nth-child(even) {
            background-color: aliceblue;
        }
        
        tr {
            border-radius: 0.5rem;
        }

        tr:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .multiple-space {
            background-color: white;
            margin-top: 3rem;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</body>
</html>