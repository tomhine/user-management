<x-auth-layout title="Home">
    <ul class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
        @foreach ($users as $user)
        <li>
            <x-user.card>
                <x-slot:name>{{ $user->name }}</x-slot:name>
                <x-slot:job_title>{{ $user->job_title }}</x-slot:job_title>
                <x-slot:contact_number>{{ $user->contact_number }}</x-slot:contact_number>
                <x-slot:email>{{ $user->email }}</x-slot:email>
            </x-user.card>
        </li>
        @endforeach
    </ul>
</x-auth-layout>
