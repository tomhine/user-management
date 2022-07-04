<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blue-500 border
    border-transparent rounded-md font-semibold text-white capitalize tracking-widest hover:bg-blue-600
    active:bg-blue-500 focus:outline-none focus:ring ring-offset-2 ring-offset-white ring-blue-400 disabled:opacity-25
    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
