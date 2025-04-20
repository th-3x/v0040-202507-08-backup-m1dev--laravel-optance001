@props(['active' => false, 'href' => '/'])


<a href="{{ $href }}" class="{{ $active ? 'bg-red-200' : '' }} 
	mr-4 text-blue-700 hover:underline" {{ $attributes }}>
    {{ $slot }}
</a>
