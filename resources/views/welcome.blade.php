<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Стильная Форма Ссылок</title>
    <style>
        .button {
            background-color: rgba(225, 98, 8, 0.85); /* Зеленый */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 350px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .button:hover {
            background-color: #45a049;
        }

        .link-container {
            text-align: center;
            margin: 20px;
        }
    </style>
</head>
<body>
<div class="link-container">
    <a href="/upload" class="button">Загрузить картинки</a>
    <a href="/images" class="button">Список картинок</a>
</div>
</body>
</html>