@if (session('status'))
<div class="container">
    <div class="alert alert-{{session('message_type') ?? 'info' }} my-3">
        {{ session('status') }}
    </div>
</div>
@endif