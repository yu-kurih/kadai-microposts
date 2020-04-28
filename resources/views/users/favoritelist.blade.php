@if (count($favorites) > 0)
    <ul class="list-unstyled">
        @foreach ($favorites as $favorites)
            <li class="media mb-3">
                <img class="mr-2 rounded" src="{{ Gravatar::src($favorites->user->email, 50) }}" alt="">
                <div class="media-body">
                    <div>
                        {!! link_to_route('users.show', $favorites->user->name, ['id' => $favorites->user->id]) !!}<span class="text-muted">posted at {{ $favorites->created_at }}</span>
                    </div> 
                    <div>
                         <p class="mb-0">{!! nl2br(e($favorites->content)) !!}</p>
                    </div>
                    <div>
                        {!! Form::open(['route' => ['favorites.unfavorite', $favorites->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Unfavorite', ['class' => 'btn btn-warning btn-sm']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endif