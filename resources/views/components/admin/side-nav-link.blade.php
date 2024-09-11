@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? '!bg-gray-800 text-gray-50' : 'text-gray-900 hover:bg-gray-100' }} flex items-center p-2 text-base font-medium rounded-lg group"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
