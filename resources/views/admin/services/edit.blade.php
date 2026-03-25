@extends('admin.layouts.app')

@section('title', 'Edit Service - ' . $service->title)

@section('content')
<div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
    <div>
        <h1 class="text-3xl font-extrabold text-white tracking-tight">Edit Service</h1>
        <p class="text-slate-400 text-sm mt-2">Update details and information for {{ $service->title }}.</p>
    </div>
    <a href="{{ route('admin.services.index') }}" class="text-slate-300 hover:text-white font-medium py-2.5 px-5 border border-slate-700 hover:border-slate-500 hover:bg-slate-800 rounded-xl shadow-sm transition-all flex items-center gap-2">
        <i class="fas fa-arrow-left"></i> Back to List
    </a>
</div>

<div class="bg-slate-900 rounded-2xl shadow-xl shadow-black/20 border border-slate-800 p-6 md:p-8 max-w-3xl relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500/5 rounded-full blur-3xl pointer-events-none"></div>

    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data" class="relative z-10">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label for="title" class="block text-sm font-semibold text-slate-300 mb-2">Service Title*</label>
            <input type="text" id="title" name="title" value="{{ old('title', $service->title) }}" required
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 text-white transition-all placeholder-slate-500">
            @error('title')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="image" class="block text-sm font-semibold text-slate-300 mb-2">Service Image (Optional)</label>
            <div class="mt-1 border-2 border-slate-700 border-dashed rounded-xl px-6 pt-5 pb-6 flex justify-center hover:bg-slate-800/50 hover:border-slate-600 transition-all group cursor-pointer" onclick="document.getElementById('image').click()">
                <div class="space-y-1 text-center">
                    <i class="fas fa-cloud-upload-alt text-4xl text-slate-500 mb-2 group-hover:text-blue-400 transition-colors"></i>
                    <div class="flex flex-col sm:flex-row text-sm text-slate-400 justify-center gap-1">
                        <label for="image" class="relative cursor-pointer rounded-md font-medium text-blue-400 hover:text-blue-300 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-focus:ring-blue-500 focus-within:ring-offset-slate-900">
                            <span>Upload an image</span>
                            <input id="image" name="image" type="file" class="sr-only" accept="image/*" onchange="previewImage(event)">
                        </label>
                        <p>or drag and drop</p>
                    </div>
                    <p class="text-xs text-slate-500 pt-1">PNG, JPG, SVG up to 2MB</p>
                </div>
            </div>
            
            <!-- Image Preview -->
            <div id="imagePreviewContainer" class="mt-4 {{ $service->image ? '' : 'hidden' }}">
                <p class="text-sm font-medium text-slate-400 mb-2">Current/Selected Image:</p>
                <div class="p-2 border border-slate-700 rounded-xl bg-slate-800/50 inline-block shadow-inner relative group">
                    <img id="imagePreview" src="{{ $service->image ? asset('storage/' . $service->image) : '#' }}" alt="Preview" class="h-20 w-auto object-contain rounded-lg">
                </div>
            </div>

            @error('image')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="short_description" class="block text-sm font-semibold text-slate-300 mb-2">Short Description*</label>
            <textarea id="short_description" name="short_description" rows="3" required
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 text-white transition-all placeholder-slate-500">{{ old('short_description', $service->short_description) }}</textarea>
            @error('short_description')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <label class="flex items-center cursor-pointer group">
                <div class="relative flex items-center justify-center">
                    <input type="checkbox" name="is_active" value="1" class="peer sr-only" {{ old('is_active', $service->is_active) ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-slate-700 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                </div>
                <span class="ml-3 text-slate-300 font-medium group-hover:text-white transition-colors">Active Service</span>
            </label>
        </div>

        <div class="flex justify-end gap-3 pt-6 border-t border-slate-800">
            <a href="{{ route('admin.services.index') }}" class="px-6 py-3 border border-slate-700 rounded-xl text-slate-300 hover:text-white hover:bg-slate-800 font-medium transition-colors">Cancel</a>
            <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-xl font-bold shadow-lg shadow-blue-500/20 transition-all cursor-pointer flex items-center gap-2 hover:-translate-y-0.5">
                <i class="fas fa-save"></i> Update Service
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
