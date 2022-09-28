<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-local" style="background-image: url({{asset('images/image2.jpg')}}); background:cover;">
        <div class="">
            <div class="flex justify-between p-4">
                <a href="" class="font-bold text-xl ml-4">PhoneBooks</a>
                <form action="" method="post" class="flex justify-end">
                    <input type="submit" class="p-1 bg-white gap-0  rounded-l-xl">
                    <input type="text" class="p-1  rounded-r-xl" size="40">
                </form>
                <ul class="flex mr-4">
                    <li class="mr-3 mt-1"><a href="{{route('home')}}" class="p-2 bg-pink-700 px-3 rounded ">home</a></li>
                    @guest
                    <li class="mr-3 mt-1"><a href="{{route('login')}}" class="p-2 bg-pink-700 px-3 rounded ">login</a></li>
        
                    @endguest
                    @auth
                    <li class="mr-3 mt-1"><a href="{{route('logout')}}" class="p-2 bg-pink-700 px-3 rounded ">Logout</a></li>
                    <li class="mr-3 mt-1"><a href="{{route('vcard.index')}}" class="p-2 bg-pink-700 px-3 rounded ">insert contact</a></li>
                    @endauth
                </ul>
            </div>
        </div>
        @section('content')
            
        @show
    </div>
</body>
</html>