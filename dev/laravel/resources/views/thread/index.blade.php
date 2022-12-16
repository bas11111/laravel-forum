@extends('layouts.main')

@section('pagetitle')
    Thread
@endsection

@section('content')
    <div class="row first-row">

        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ $thread->title }} - Topics</span>
                    <div class="collection">
                        @foreach($thread->topics as $topic)
                        <!-- BEGIN TOPIC -->
                        <a href="{{ route('topic.index', ['topic' => $topic->id]) }}" class="collection-item avatar collection-link">
                            <img src="https://s.gravatar.com/avatar/7937bf581643d051030fd500a738a6c5?s=50" alt="" class="square">

                            <div class="row">

                                <div class="col s8">
                                    <div class="row last-row">
                                        <div class="col s12">
                                            <span class="title">{{ $topic->title }}</span>
                                            <p>{{ $topic->content }}</p>
                                        </div>
                                    </div>
                                    <div class="row last-row">
                                        <div class="col s12 post-timestamp">
                                            {{ $topic->user->name }} op: {{ $topic->created_at }}
                                        </div>
                                    </div>
                                </div>

                                <div class="col s2">
                                    <h6 class="title center-align">Replies</h6>
                                    <p class="center replies">{{ $topic->replies->count() }}</p>
                                </div>

                                <div class="col s2">
                                    <h6 class="title center-align">Status</h6>
                                    <div class="status-wrapper">
                                        <span class="status-badge status-open">open</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- EINDE TOPIC -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
