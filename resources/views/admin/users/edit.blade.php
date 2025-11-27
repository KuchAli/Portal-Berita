@extends('admin.layouts.main')

@section('admin-content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Edit Pengguna</h1>

    <form action="{{ route('admin.users.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" value="{{ old('name', $users->name) }}" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2" value="{{ old('email', $users->email) }}" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Password <span class="text-sm text-gray-500">(leave blank to keep current)</span></label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Role</label>
            <select name="role" class="w-full border rounded px-3 py-2">
                <option value="">Select Role</option>
                <option value="user" {{ old('role', $users->role)=='user' ? 'selected' : '' }}>User</option>
            </select>
        </div>

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Update Pengguna</button>
    </form>
</div>
@endsection
