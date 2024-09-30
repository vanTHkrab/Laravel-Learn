@extends('layouts.app')
@section('title', 'Create Student')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <form action="./insert" method="GET">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Student Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter student name">
                    @error('name')
                    <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Student Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter student email">
                    @error('email')
                    <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Student Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter student phone">
                    @error('phone')
                    <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Student Address</label>
                    <textarea name="address" class="form-control" id="address" placeholder="Enter student address"></textarea>
                    @error('address')
                    <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
