@extends('user.base')
@section('content')

<div class="flex">
    <div class="w-1/5"></div>
    <div class="w-2/5">
        <div class="bg-red-500 text-white font-bold p-5 flex justify-between rounded-full mt-10 ">
            <img class="h-10 w-10 object-cover rounded" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
            <div class=""><h1>Name</h1></div>
            <div class="px-2"><h1>Contact</h1></div>
        </div>
    </div>
</div>
    
@endsection