@php
$users = DB::table('users')->get();
$messages = DB::table('messages')->get();
@endphp


@foreach ($users as $user)

    @if ($user->id != Auth::user()->id)
        <div class="chat" data-chat="person{{ $user->id }}">
            <div class="conversation-start">
                <span>Today, 5:38 PM</span>
            </div>
            @foreach ($messages as $message)
                @if ($message->from == Auth::user()->id && $message->to == $user->id)
                    <div class="bubble me">
                        {{ $message->body }}
                    </div>
                @endif
                @if ($message->from == $user->id && $message->to == Auth::user()->id)
                    <div class="bubble you">
                        {{ $message->body }}
                    </div>
                @endif
            @endforeach
        </div>
    @endif

@endforeach
