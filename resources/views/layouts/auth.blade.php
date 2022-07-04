@props(['title'])

<x-app-layout :title="$title">

    <!-- Header -->
    <header
        class="w-full h-16 bg-white flex lg:grid lg:grid-cols-3 items-center justify-between lg:justify-items-center px-8 lg:p-0">
        <h1 class="text-2xl font-semibold">
            <a href="{{ route('user.index') }}">User Management</a>
        </h1>
        <div class="lg:col-start-3">
            <x-button-link href="{{ route('user.create') }}">&plus; Add user</x-button-link>
        </div>
    </header>

    <!-- Page Content -->
    <main class="w-full max-w-7xl mx-auto flex flex-col items-center p-8">
        {{ $slot }}
    </main>
</x-app-layout>
