<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main class=" bg-zinc-100 dark:bg-zinc-800">
        
            {{ $slot }}
    </flux:main>
    
</x-layouts.app.sidebar>
