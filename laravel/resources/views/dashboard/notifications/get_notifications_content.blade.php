@foreach ($notifications as $notification)
<li>
    <a href="{{ route('clients.event' , $notification->client_id) }}">
        <!-- <span class="time">{{ $notification}}</span> -->
        <span class="details">
            <span class="label label-sm label-icon label-success">
                <i class="fa fa-plus"></i>
            </span> {{ $notification->content }} </span>
    </a>
</li>
@endforeach
