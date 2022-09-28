@extends('user.base')
@section('content')
    <div class="bg-slate-500 h-screen flex place-content-center place-items-center">
        <div class="1/3 bg-yellow-200 rounded-xl shadow ">
            <form action="{{route('vcard.store')}}" method="post" class="p-3">
                @csrf
                <div class="text-center font-bold text-xl">Contact Insert</div>
                <div class="flex flex-col">
                    <label for="">Name</label>
                    <input type="text" name="name" class="p-2 rounded shadow border-2 hover:border-red-400" size="40">
                </div>
                <div class="flex flex-col">
                    <label for="">Contact</label>
                    <input type="contact" name="contact" class="p-2 rounded shadow border-2 hover:border-red-400" size="40">
                </div>
                <div class="flex flex-col mt-4">
                    <input type="submit" class="p-2 rounded shadow  bg-green-500 hover:bg-red-400" size="40">
                </div>
            </form>
        </div>
    </div>
@endsection