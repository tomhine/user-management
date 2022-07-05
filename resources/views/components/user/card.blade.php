@props(['user_id'])

<article class="p-4 rounded-lg bg-white flex gap-2 border">
    <div>
        <img src="https://picsum.photos/50" alt="user avatar" class="rounded-full">
    </div>
    <div class="px-2 space-y-2 flex-grow">
        <div class="space-y-1">
            <h2 class="text-sm">{{ $name }}</h2>
            <h3 class="text-xs capitalize text-gray-700">{{ $job_title }}</h3>
        </div>
        <div class="space-y-1">
            <p class="text-xs text-gray-600">{{ $contact_number }}</p>
            <p class="text-xs text-gray-600">{{ $email }}</p>
        </div>
    </div>
    <div class="justify-self-end relative" x-data="{ open: false }">
        <button class="text-2xl text-gray-600 justify-self-end rounded-full px-1 hover:bg-gray-100 transition"
            @click="open = !open">&vellip;</button>
        <div class="bg-white p-4 rounded-md border absolute z-10 w-40 right-0" x-show="open"
            @click.outside="open = false" x-cloak>
            <ul>
                <a href="{{ route('user.edit', [ $user_id ]) }}">
                    <li class="py-1 px-2.5 rounded-md hover:bg-gray-100">Edit user</li>
                </a>
                <li">
                    <form action="{{ route('user.destroy', [ $user_id ]) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="py-1 px-2.5 rounded-md hover:bg-gray-100">Delete user</button>

                    </form>
                    </li>
            </ul>
        </div>
    </div>
</article>
