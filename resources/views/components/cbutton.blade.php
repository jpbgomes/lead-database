@if ($attributes->has('href'))
    @if ($attributes->has('target') && $attributes->has('target') == '_blank')
        <a href="{{ $attributes->get('href') }}" target="_blank">
            <button
                {{ $attributes->merge(['type' => 'button', 'class' => 'text-black px-3 text-md py-2 rounded-md hover:bg-gray-300 transition-all']) }}>
                {{ $slot }}
            </button>
        </a>
    @else
        <a href="{{ $attributes->get('href') }}">
            <button
                {{ $attributes->merge(['type' => 'button', 'class' => 'text-black px-3 text-md py-2 rounded-md hover:bg-gray-300 transition-all']) }}>
                {{ $slot }}
            </button>
        </a>
    @endif
@else
    <button
        {{ $attributes->merge(['type' => 'submit', 'class' => 'text-black px-3 text-md py-2 rounded-md hover:bg-gray-300 transition-all']) }}>
        {{ $slot }}
    </button>
@endif
