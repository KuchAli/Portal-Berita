@extends('admin.layouts.main')

@section('admin-content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mt-6 mb-4">Tambah Article</h1>

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1 font-semibold">Title</label>
            <input type="text" name="title" class="w-full border px-3 py-2 rounded" value="{{ old('title') }}">
        </div>

        <div>
            <label class="block mb-1 font-semibold">Category</label>
            <select name="category_id" class="w-full border px-3 py-2 rounded">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Content</label>
            <textarea name="content" rows="6" class="w-full border px-3 py-2 rounded">{{ old('content') }}</textarea>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Thumbnail</label>
            <input type="file" name="thumbnail">
        </div>

        <div>
            <label class="block mb-1 font-semibold">Tags (pisahkan dengan koma)</label>
            <input type="text" name="tags" class="w-full border px-3 py-2 rounded" value="{{ old('tags') }}">
        </div>

        <div>
            <label class="block mb-1 font-semibold">Status</label>
            <select name="status" class="w-full border px-3 py-2 rounded">
                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="publish" {{ old('status') == 'publish' ? 'selected' : '' }}>Published</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Published At</label>
            <input type="datetime-local" name="published_at" class="w-full border px-3 py-2 rounded" value="{{ old('published_at') }}">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
    </form>
</div>
@endsection
