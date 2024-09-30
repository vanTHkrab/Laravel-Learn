@extends('admin.layouts.admin')
@section('title', 'Profile')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Profile</h3>
        <div class="mt-8">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/3">
                    <div class="bg-white p-3 border-t-4 border-green-400">
                        <div class="flex items center">
                            <h3 class="text-gray-500 text-xs uppercase font-medium">Name</h3>
                        </div>
                        <p class="text-gray-700 text-lg font-medium">{{ Auth::user()->name }}</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <div class="bg-white p-3 border-t-4 border-green-400">
                        <div class="flex items-center">
                            <h3 class="text-gray-500 text-xs uppercase font-medium">Email</h3>
                        </div>
                        <p class="text-gray-700 text-lg font-medium">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="{{ route('admin.update-profile') }}" class="bg-gray-800 text-white uppercase text-lg mx-auto p-4 rounded">Update Profile</a>
                <a href="{{ route('admin.reset-password') }}" class="bg-gray-800 text-white uppercase text-lg mx-auto p-4 rounded">Reset Password</a>
            </div>
        </div>
    </div>
@endsection
