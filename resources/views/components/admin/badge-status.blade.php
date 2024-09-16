@php

    $values = ['complete', 'packing', 'sending', 'failed'];

@endphp

<button id="dropdownBottomButton" data-dropdown-toggle="{{ $dataId }}" data-dropdown-placement="bottom"
    class="{{ ln_badgeChangeColor($status) }} flex items-center px-2.5 py-2 text-sm font-medium rounded capitalize" type="button">
    {{ $status }}
    <svg class="w-2 h-2 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
    </svg>
</button>

<div id="{{ $dataId }}" class="z-10 hidden bg-white shadow w-44 dark:bg-gray-700">
    <ul class="text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownBottomButton">
        @foreach ($values as $itemVal)
            @if ($status != $itemVal)
                <li class="my-1 first:mt-0 last:mb-0">
                    <form action="/admin/orders/{{ $dataId }}" method="POST">
                        @method('patch')
                        @csrf
                        <input type="hidden" name="status" value="{{ $itemVal }}">
                        <button class="{{ ln_badgeChangeColor($itemVal) }} w-full block px-2.5 py-2 text-sm font-medium capitalize" type="submit" onclick="return confirm('Are you sure? Want to change status?')">
                            {{ $itemVal }}
                        </button>
                    </form>
                </li>
            @endif
        @endforeach
    </ul>
</div>

{{-- Buat form untuk mengedit ini --}}
