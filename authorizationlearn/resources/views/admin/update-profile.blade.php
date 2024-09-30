@extends('admin.layouts.admin')
@section('title', 'Update Profile')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Update Profile</h3>
        <form class="mt-6 border-t border-gray-700 pt-4" method="POST" action="{{ route('admin.update-profile') }}">
            @csrf
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="name">Name</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" id="name" value="{{ Auth::user()->name }}">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="email">Email</label>
                <input class="border py-2 px-3 text-grey-darkest" type="email" name="email" id="email" value="{{ Auth::user()->email }}">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="password">Password</label>
                <input class="border py-2 px-3 text-grey-darkest" type="password" name="password" id="password">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="password_confirmation">Confirm Password</label>
                <input class="border py-2 px-3 text-grey-darkest" type="password" name="password_confirmation" id="password_confirmation">
            </div>
            <button type="submit" class="block bg-gray-800 text-white uppercase text-lg mx-auto p-4 rounded">Update</button>
        </form>
    </div>
@endsection
