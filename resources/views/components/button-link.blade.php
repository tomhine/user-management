<a {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-blue-500 border
    border-blue-500 rounded-md font-semibold text-white hover:bg-blue-600 active:bg-blue-500 focus:outline-none
    focus:ring-2 ring-blue-400 ring-offset-2 ring-offset-white disabled:opacity-25 transition ease-in-out
    duration-150 uppercase']) }}>
    {{ $slot }}
</a>
