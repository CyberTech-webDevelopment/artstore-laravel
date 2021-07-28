@forelse($notifications as $notification)
    <div class="alert alert-success" role="alert">
        [{{ $notification->created_at }}] User {{ $notification->data['name'] }} ({{ $notification->data['quantity'] }}) has just ordered.
        <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">
            Mark as read
        </a>
    </div>

    @if($loop->last)
        <a href="#" id="mark-all">
            Mark all as read
        </a>
    @endif
@empty
    There are no new notifications
@endforelse
