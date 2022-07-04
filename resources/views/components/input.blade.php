@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300
focus:border-blue-300 focus:ring ring-offset-2 ring-offset-white focus:ring-blue-200']) !!}>
