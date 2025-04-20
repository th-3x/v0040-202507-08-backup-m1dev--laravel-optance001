@props(['active' => false])

<a class="{{ $active ? 'bg-red-200' : '' }} 
	mr-4 text-blue-700 hover:underline" {{ $attributes }}>
    {{ $slot }}
</a>
