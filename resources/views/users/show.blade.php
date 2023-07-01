<x-app-layout>
    <div class="container">
        <h1>
            {{ $user->name }}
            <div class="small text-secondary">
                {{ $user->username }}
            </div>
        </h1>
    </div>
</x-app-layout>
