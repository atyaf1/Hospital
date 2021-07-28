<div>


    <div class="container mt-4">
        <div class="input-group mb-3">
            <input type="text" wire:model.debounce.500ms="newComment" class="form-control" placeholder="Recipient's username">
            {{-- ms بالتالي بيصير يعمل ريكويست كل 500 debounce.500msكل حرف عبارة عن ريكويست لضلك باستخدم ال  --}}

            <button class="btn btn-dark" wire:click="addComment" type="button" id="button-addon2">Add Comment</button>
        </div>
        @foreach ($comments as $comment)
        <div class="comment rounded p-2 my-2" style="border: 1px solid rgb(219, 218, 218)">
            <div class="d-flex justify-content-between">
                <h4 class="text-danger fw-bold">{{ $comment['name'] }}</h4>
                <small class="text-success fw-bold">{{ $comment['created_at'] }}</small>
            </div>
            <p>{{ $comment['body'] }}</p>
        </div>
        @endforeach
    </div>


</div>
