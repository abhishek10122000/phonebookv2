@extends('admin.layout')
@section('content')
<div class="">
    <div class="flex justify-around p-4 bg-green-500">
        <a href="" class="font-bold text-xl ml-4">PhoneBooks</a>
        <form action="{{route('adminlogout')}}" method="post">
            @csrf
            <input type="submit" class="p-2 mx-32 bg-red-500 rounded font-semibold" value="Logout">
        </form>
    </div>
</div>
<div class="flex">
    <div class="w-1/6 bg-black h-screen w- text-center">
        @include('admin.side')
    </div>
    <div class="w-5/6">
        <div class="flex p-7 mx-10">
            <div class="w-2/4 bg-red-600 rounded-xl h-44 ">
                <div class="p-4">
                    <h1 class="text-3xl font-bold">Users</h1>
                    <h1 class="text-6xl font-bold text-center">{{$user}}</h1>
                </div>
            </div>
            <div class="w-2/4 mx-7   bg-red-600 rounded-xl h-44">
                <div class="p-4">
                    <h1 class="text-3xl font-bold">Contact</h1>
                    <h1 class="text-6xl font-bold text-center">{{$vcard}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection