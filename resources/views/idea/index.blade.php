<x-layout>
    <header class="py-8 md:py-12">
        <h1 class="text-3xl font-bold">Ideas</h1>
        <p class="text-muted-foreground text-sm mt-2">Capture your thoughts and ideas in one place.</p>
    </header>

    <div class="space-x-2 space-y-2 md:space-y-0">
        <a href="/ideas" class="btn {{ request()->has('status') ? 'btn-outlined' : '' }}">All</a>
        @foreach (App\IdeaStatus::cases() as $status)
            <a href="/ideas?status={{ $status->value }}"
                class="btn {{ request('status') === $status->value ? '' : 'btn-outlined' }}">
                {{ $status->label() }}
                <span>{{ $statusCount->get($status->value) }}</span>
            </a>
        @endforeach
    </div>

    <div class="mt-10 mb-10 text-muted-foreground">
        <div class="grid md:grid-cols-2 gap-6">
            @forelse ($ideas as $idea)
                <x-card href="{{ route('idea.show', $idea) }}">
                    <h2 class="text-foreground text-lg font-semibold">{{ $idea->title }}</h2>

                    <div class="mt-1">
                        <x-idea.status-label status="{{ $idea->status }}">
                            {{ $idea->status->label() }}
                        </x-idea.status-label>
                    </div>


                    <p class="text-sm mt-1">{{ $idea->description }}</p>
                    <div class="mt-4">{{ $idea->created_at->diffForHumans() }}</div>
                </x-card>
            @empty
                <x-card>
                    <p>No ideas yet.</p>
                </x-card>
            @endforelse
        </div>
    </div>
</x-layout>
