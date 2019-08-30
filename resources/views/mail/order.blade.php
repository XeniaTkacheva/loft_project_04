<!DOCTYPE html>
<html lang="ru">
<head>
    <title>РозаМаркет</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
    <div class="main-wrapper">
        <h3>Поступил заказ {{}}</h3>

        @foreach($data as $item)
            <p>Номер заказа {{$item->id}}</p>
            <p>Товар {{$item->plant_id}}</p>
            <p>Цена {{$item->pзшсу}}</p>
        @endforeach
    </div>
</body>
</html>
