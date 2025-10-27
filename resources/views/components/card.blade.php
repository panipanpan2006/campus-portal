@props(['title', 'body', 'icon' => null])

<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
    @if($icon)
    <div class="text-undip-blue dark:text-blue-400 text-3xl mb-3">
        {!! $icon !!}
    </div>
    @endif
    
    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ $title }}</h3>
    <p class="text-gray-600 dark:text-gray-300">{{ $body }}</p>
</div>