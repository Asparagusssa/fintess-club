<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css','resources/js/app.js')
</head>
<body class="bg-background text-text min-h-screen">
    <div class="px-10">
        <nav class="p-5 flex items-center justify-between bg-white mx-[-2.5rem] sticky top-0 shadow-md">
            <div class="w-[300px]">
                <a href="/">
{{--                    <img src="{{ Vite::asset('/resources/images/logo.svg') }}" alt="logo">--}}
                    <p class="text-3xl font-bold text-accent">SportClubPenguin</p>
                </a>
            </div>
            <div class="flex grow justify-center">
                <ul class="flex items-center space-x-5 font-bold text-xl text-accent">
                    <li>
                        <a href="#">
                            О нас
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Тарифы
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Акции
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Тренеры
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Новости
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Контакты
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-[300px]">
                <ul class="flex items-center justify-end text-lg font-bold">
                    <li class="px-5 py-3 my-[-1rem] text-accent"><a href="/">Войти</a></li>
                    <li class="px-5 py-3 my-[-1rem] bg-accent rounded-full text-background"><a href="/">Зарегистрироваться</a></li>
                </ul>
            </div>
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto ">

        </main>
    </div>
</body>
</html>
