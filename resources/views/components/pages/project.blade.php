<x-layouts.layout>
    <div class="h-screen">
        <div
            class="mt-24 mb-10 grid justify-items-center grid-cols-1 sm:grid-flow-col-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($projects as $project )
            <div class="card w-64 border bg-base-100 shadow-xl">
                <x-card title="{{ $project->title }}" image="{{ $project->image }}"
                    description="{{ $project->description }}">
                </x-card>
            </div>
            @endforeach
        </div>
    </div>
</x-layouts.layout>
