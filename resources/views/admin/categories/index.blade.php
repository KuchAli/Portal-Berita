@extends('admin.layouts.main')

@section('admin-content')
<div class="w-full px-4 py-6">

    <!-- Header + Tombol -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Data Kategori</h1>

        <a href="{{ route('admin.categories.create') }}"
           class="px-4 py-2 bg-gray-600 text-white rounded-lg shadow hover:bg-green-700 transition">
           + Tambah Kategori
        </a>
    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto mt-3">
        <table class="min-w-full bg-white shadow rounded-lg overflow-hidden">

            <thead class="bg-green-600 text-white uppercase text-sm">
                <tr>
                    <th class="px-4 py-3 text-left">No</th>
                    <th class="px-4 py-3 text-left">Nama Kategori</th>
                    <th class="px-4 py-3 text-left">Deskripsi</th>
                    <th class="px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $item)
                <tr class="{{ $loop->odd ? 'bg-gray-50' : 'bg-white' }} border-b hover:bg-gray-100 transition">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 font-semibold">{{ $item->name }}</td>
                    <td class="px-4 py-3">{{ $item->description }}</td>

                    <td class="px-4 py-3 text-center flex justify-center gap-2">

                        <a href="{{ route('admin.categories.edit', $item->id) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">
                           Edit
                        </a>

                        <form action="{{ route('admin.categories.destroy', $item->id) }}"
                              method="POST"
                              onsubmit="return confirm('Hapus kategori ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">
                                Hapus
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection
