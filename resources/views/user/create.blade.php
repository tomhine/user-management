<x-auth-layout title="Create a user">
    <div class="mt-20 bg-white border rounded-md p-8 w-full max-w-xl">
        <h2 class="text-xl font-medium">Create a new user</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ route('user.store') }}" method="POST" class="mt-8">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Job Title -->
            <div class="mt-4">
                <x-label for="job_title" :value="__('Job Title')" />

                <x-input id="job_title" class="block mt-1 w-full" type="job_title" name="job_title"
                    :value="old('job_title')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Contact Number -->
            <div class="mt-4">
                <x-label for="contact_number" :value="__('Contact Number')" />

                <x-input id="contact_number" class="block mt-1 w-full" type="contact_number" name="contact_number"
                    :value="old('contact_number')" required />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center mt-8">
                <x-button class="w-full ">
                    {{ __('Submit') }}
                </x-button>
            </div>

        </form>
    </div>
</x-auth-layout>
