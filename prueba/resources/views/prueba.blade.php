<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Prueba</title>
</head>
<body>
    <main class="container">
        <h1>Vista de prueba</h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore similique expedita beatae est, adipisci qui itaque cum eligendi?
            Consequatur incidunt itaque sint possimus praesentium aliquid optio vitae perferendis nam magnam?
        </p>

        <ul class="list-group">
            @for ($i=1; $i < 13; $i++)
                <li class="list-group-item"> Item de lista {{ $i }}</li>
            @endfor
        </ul>
    </main>
</body>
</html>
