<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 offset-1">
            <div class="card " style="width: 40rem;">
                <div class="card-body p-4">
                    <h5 class="card-title text-center">{{ $post->title }}</h5>
                    <h6 class="card-subtitle mb-2  text-muted">
                        Posted by {{ $post->user->name }}
                    </h6>
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                    <p>Posted on {{ $post->created_at->diffForHumans() }}</p>
                    <p>Updated on {{ $post->updated_at->diffForHumans() }}</p>
                    <a href="{{ route('livewire-posts') }}" class="card-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
