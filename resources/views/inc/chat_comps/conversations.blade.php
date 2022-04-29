@php
$users = DB::table('users')->get();
$messages = DB::table('messages')->get();
@endphp


@foreach ($users as $user)
    @if ($user->id != Auth::user()->id)
        <div class="chat chat_{{ $user->id }}" data-chat="person{{ $user->id }}" data-user="{{ $user->id }}">
            <div class="conversation-start">
                <span>Today, 5:38 PM</span>
            </div>
            @foreach ($messages as $message)
                @if ($message->sender == Auth::user()->id && $message->receiver == $user->id)
                    <div class="bubble me">
                        {{ $message->body }}
                    </div>
                @endif
                @if ($message->sender == $user->id && $message->receiver == Auth::user()->id)
                    <div class="bubble you">
                        {{ $message->body }}
                    </div>
                @endif
            @endforeach
        </div>
    @endif
@endforeach
