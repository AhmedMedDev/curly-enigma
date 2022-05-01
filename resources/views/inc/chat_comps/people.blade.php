@php
    $users = DB::table('users')->get();
@endphp

@foreach ($users as $user)

    @if ($user->id != Auth::user()->id)
        <div class="person sender_{{$user->id}}" data-chat="person{{ $user->id }}">
            <div class="user-info">
                <div class="f-head">
                    <img src="{{ asset('dash-assets/assets/img/90x90.jpg') }}" alt="avatar">
                </div>
                <div class="f-body">
                    <div class="meta-info">
                        <span class="user-name" data-name="{{ $user->name }}"">{{ $user->name }}</span>
                        <span class="  user-meta-time"><img class="online" src="https://www.pngkey.com/png/detail/417-4174990_how-to-set-use-small-green-dot-icon.png" alt="" width="20" id="online_flag{{$user->id}}"> 2:09 PM </span>
                       
                    </div>
                    <span class="preview">I was wondering...</span>
                </div>
            </div>
        </div>
    @endif

@endforeach
