@extends('admin.layouts.main')

@section('admin-content')
<div class="container mx-auto px-4 mt-6">

    {{-- TITLE --}}
    <h1 class="text-2xl font-bold text-gray-700 mb-6">Tambah Kategori</h1>

    {{-- FORM --}}
    <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-5">
        @csrf

        {{-- NAMA KATEGORI --}}
        <div>
            <label class="block font-semibold text-gray-700 mb-2">Nama Kategori</label>
            <input type="text" name="name"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:ring focus:ring-blue-300"
                   placeholder="Masukkan nama kategori" required>
        </div>

        {{-- DESKRIPSI --}}
        <div>
            <label class="block font-semibold text-gray-700 mb-2">Deskripsi</label>
            <textarea name="description" rows="4"
                      class="w-full border border-gray-300 rounded px-3 py-2 focus:ring focus:ring-blue-300"
                      placeholder="Masukkan deskripsi kategori"></textarea>
        </div>

        {{-- BUTTON --}}
        <div class="flex items-center gap-3">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded">
                Simpan
            </button>

            <a href="{{ route('admin.categories.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded">
                Kembali
            </a>
        </div>

    </form>

</div>
@endsection
