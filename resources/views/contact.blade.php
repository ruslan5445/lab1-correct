<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контакт</title>
</head>
<body>
    <form method="post" action="{{ 'telephon' }}">
        @csrf
        <label for="phone">Номер телефона:</label>
        <input type="tel" id="phone" name="phone">

        <label for="name">Текст:</label>

        <input type="text" id="name" name="text" required/>

        <button type="submit" submit="button"> Отправить </button>
    </form>
</body>
</html>