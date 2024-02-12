<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Динамический select в Laravel</title>
</head>
<body>

<div class="container">
    <h1>Динамический select в Laravel</h1>
   
        @csrf
        <div class="form-group">
            <label for="countries">Страна</label>
            <select class="form-control" id="countries">
                <option>Выберите страну</option>
                <option>Россия</option>

                <option>Германия</option>

                <option>Болгария</option>
            </select>
        </div>

        <div class="form-group">
            <label for="city">Город</label>
            <select class="form-control" id="city">
                <option>Выберите город</option>
                <option>Москва</option>
                <option>Берлин</option>
                <option>София</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button><br> 
    </form>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

</body>
</html>