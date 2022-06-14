<x-panel class="bg-gray-50">
    <article class="flex space-x-10">
        <div class="flex-shrink-0">
            <img src="http://i.pravatar.cc/60?u={{ $comment->user_id }}" width="60" height="60" class="rounded-xl">
        </div>

        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->username }}</h3>
                <p class="text-xs">
                    Posted
                    <time>{{ $comment->created_at->format('d/m/Y H:m:s') }}</time>
                </p>
            </header>
            <p>
                {{ $comment->body }}
            </p>
        </div>
    </article>
</x-panel>
