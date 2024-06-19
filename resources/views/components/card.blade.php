{{-- Start Card --}}
<figure class="px-10 pt-10">
    <img src="{{ $image }}" alt="{{ $title }}" class="rounded-xl" />
</figure>
<div class="card-body items-center text-center">
    <h2 class="card-title">{{ $title }}</h2>
    <p>{{ $description }}</p>
    <div class="card-actions">
        <button class="btn btn-primary">Now</button>
    </div>
</div>
{{-- End Card --}}
