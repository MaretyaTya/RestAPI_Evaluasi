<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Recipes</title>
    <style>
        /* ====GLOBAL STYLE==== */
        body {
            background-color: #F8F8F8;
        }

        div.container {
            width: 960px;
            padding: 10px 50px 50px;
            background-color: white;
            margin: 20px auto;
            box-shadow: 1px 0px 10px, -1px 0px 10px;
        }

        h1 {
            text-align: center;
            font-family: Cambria, "Times New Roman", serif;
            clear: both;
        }

        /* ======TABLE====== */
        table {
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px black solid;
            width: 100%
        }

        th,
        td {
            padding: 8px 15px;
            border: 1px black solid;
        }

        tr:nth-child(2n+3) {
            background-color: #F2F2F2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Unofficial Masak Apa Hari Ini</h1>
        <table border="1">
            <tr>
                <th>title</th>
                <th>image</th>
                <th>key</th>
                <th>times</th>
                <th>serving</th>
                <th>difficulty</th>
            </tr>

            @foreach ($collection as $item)
                <tr>
                    <th>{{ $item['title'] }}</th>
                    <th><img src="{{ $item['thumb'] }}" alt="gambar"></th>
                    <th>{{ $item['key'] }}</th>
                    <th>{{ $item['times'] }}</th>
                    <th>{{ $item['serving'] }}</th>
                    <th>{{ $item['difficulty'] }}</th>
                </tr>
            @endforeach


        </table>

    </div>
</body>

</html>
