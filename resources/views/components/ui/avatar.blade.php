@if (auth()->user()->profile_photo_url)
<img class="h-8 w-8 rounded-full object-cover border border-gray-200 dark:border-gray-700"
     src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
@else
@php
    $name = auth()->user()->name;
    $parts = explode(' ', $name);
    $initials = strtoupper(substr($parts[0], 0, 1));
    if (count($parts) > 1) {
        $initials .= strtoupper(substr($parts[1], 0, 1));
    } elseif (strlen($parts[0]) > 1) {
        $initials .= strtoupper(substr($parts[0], 1, 1));
    }
@endphp
<div class="h-10 w-10 rounded-full flex items-center justify-center text-white font-semibold bg-indigo-600 dark:bg-indigo-500 border border-gray-200 dark:border-gray-700">
    {{ $initials }}
</div>
@endif

<span class="hidden lg:block text-sm font-medium text-gray-700 dark:text-gray-200">{{ auth()->user()->name }}</span>

<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 dark:text-gray-400"
 viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd"
      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
      clip-rule="evenodd" />
</svg>