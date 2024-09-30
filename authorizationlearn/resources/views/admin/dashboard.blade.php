@extends('admin.layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="flex justify-center mt-10">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-xl font-bold mb-4 text-center">Admin Dashboard</h2>
                <div class="mb-4">
                    <a href="{{route('admin.logout')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Logout</a>
                </div>
            </div>
        </div>
    </div>
@endsection
