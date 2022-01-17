@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <ul class="list-group">
                    @foreach (DB::table('users')->get() as $item)
                        <li class="list-group-item">{{ $item->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-8 col-md-6">
                {{--  --}}
                <div class="card">
                    <div class="card-header">chat abdo</div>
                    <div class="card-body chatBox">
                        @foreach (DB::table('chat_box')->get() as $item)
                            @if ($item->sender_id == Auth::user()->id)
                                <div class="replay">{{ $item->body }}</div>
                            @else
                                <div class="meessage">{{ $item->body }}</div>
                            @endif
                        @endforeach
                    </div>
                </div>
                {{--  --}}
                {{--  --}}
                <input type="text" class="form-control mt-4 mb-4">
                <button type="submit" class="form-control bg-primary">Send</button>
                {{--  --}}
            </div>
            {{--  --}}
        </div>
    </div>
@endsection

<style>
    .replay {
        float: right;
    }

</style>
