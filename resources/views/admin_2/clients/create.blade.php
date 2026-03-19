@extends('admin_2.layouts.app')

@section('title', 'Add New Client')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Add New Client</h1>
        <p class="text-gray-500 text-sm mt-1">Add a new client to showcase on your website.</p>
    </div>
    <a href="{{ route('admin_2.clients.index') }}" class="text-gray-500 hover:text-gray-700 font-medium py-2 px-4 border border-gray-200 rounded-lg bg-white shadow-sm transition-colors flex items-center gap-2">
        <i class="fas fa-arrow-left"></i> Back to List
    </a>
</div>

<div class="bg-gray-100 rounded-xl shadow-sm border border-gray-200 p-6 max-w-3xl">
    <form action="{{ route('admin_2.clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-5">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Company / Client Name*</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 transition-colors">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-5">
            <label for="logo" class="block text-sm font-medium text-gray-700 mb-1">Client Logo*</label>
            <div class="mt-1 border-2 border-gray-300 border-dashed rounded-lg px-6 pt-5 pb-6 flex justify-center hover:bg-gray-50 transition-colors">
                <div class="space-y-1 text-center">
                    <i class="fas fa-cloud-upload-alt text-4xl text-gray-500 mb-2"></i>
                    <div class="flex text-sm text-gray-600 justify-center">
                        <label for="logo" class="relative cursor-pointer bg-gray-100 rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                            <span>Upload a file</span>
                            <input id="logo" name="logo" type="file" class="sr-only" accept="image/*" required onchange="previewImage(event)">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, SVG up to 2MB</p>
                </div>
            </div>
            
            <!-- Image Preview -->
            <div id="imagePreviewContainer" class="mt-4 hidden">
                <p class="text-sm font-medium text-gray-700 mb-2">Selected Image:</p>
                <div class="p-2 border border-gray-200 rounded bg-gray-50 inline-block">
                    <img id="imagePreview" src="#" alt="Preview" class="h-20 w-auto object-contain">
                </div>
            </div>

            @error('logo')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="flex items-center cursor-pointer">
                <input type="checkbox" name="is_active" value="1" class="w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500 transition duration-150 ease-in-out cursor-pointer" {{ old('is_active', true) ? 'checked' : '' }}>
                <span class="ml-2 text-gray-700 font-medium cursor-pointer">Active Client</span>
            </label>
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
            <a href="{{ route('admin_2.clients.index') }}" class="px-5 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition-colors">Cancel</a>
            <button type="submit" class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium shadow-sm transition-colors cursor-pointer flex items-center gap-2">
                <i class="fas fa-save"></i> Save Client
            </button>
        </div>
    </form>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview');
            var container = document.getElementById('imagePreviewContainer');
            output.src = reader.result;
            container.classList.remove('hidden');
        };
        if(event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>
@endsection
