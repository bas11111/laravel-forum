@extends('layouts.main')

@section('pagetitle')
    Topic
@endsection

@section('content')
    <div class="row first-row">

        <div class="col s12">
            <div class="card">
                <div class="card-content clearfix">
                    <span class="card-title">
                        Topic Titel&nbsp;
                        <span class="status-badge status-open">
                            Open
                        </span>
                    </span>
                </div>
            </div>

            <!-- BEGIN TOPIC -->
            <div class="card cyan lighten-5">
                <div class="card-content">
                    <div class="collection">
                        <div class="collection-item row">
                            <div class="col s3">
                                <div class="avatar collection-link">
                                    <div class="row">
                                        <div class="col s3">
                                            <img src="https://s.gravatar.com/avatar/7937bf581643d051030fd500a738a6c5?s=50" alt="" class="square">
                                        </div>
                                        <div class="col s9">
                                            <p class="user-name">{{ $topic->user->name }}</p>
                                        </div>
                                    </div>
                                    <p class="post-timestamp">
                                        Gepost op {{ $topic->created_at }}
                                    </p>
                                </div>
                            </div>
                            <div class="col s9">
                                <div class="row last-row">
                                    <div class="col s12">
                                        <h6 class="title">{{ $topic->title }}</h6>
                                        {!! $topic->content !!}
                                    </div>
                                </div>
                                <div class="row last-row block-timestamp">
                                    <div class="col s6 push-s6">
                                        <p class="post-timestamp last-post-timestamp">Laatst aangepast op: {{ $topic->updated_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EINDE TOPIC -->

            @foreach($topic->replies as $reply)
            <!-- BEGIN REPLY -->
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Replies</span>
                    <div class="collection">
                        <div class="collection-item row">
                            <div class="col s2">
                                <span class="reply-username">{{ $reply->user->name }}</span>
                                <span class="reply-timestamp">{{ $reply->created_at }}</span>
                            </div>
                            <div class="col s10">
                                {!! $reply->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EINDE REPLY -->
            @endforeach

            @auth
            <!-- TOEVOEGEN VAN EEN REPLY -->
            <div class="card">
                <div class="card-content">
                    <form method="POST" action="{{ route('reply.store', ['id' => $topic->id]) }}">
                        @csrf
{{--                        <input type="hidden" name="topic_id" value="{{ $topic->id }}" />--}}
{{--                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />--}}
                        <div class="row">
                            <div class="col s12">
                                <textarea id="message-body" name="content"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6 push-s6">
                                <button type="submit" class="btn right cyan darken-1">
                                    Bewaren
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- EINDE TOEVOEGEN VAN EEN REPLY -->
            @endauth

        </div>
@endsection

@section('scripts')
            <script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/editor.js') }}"></script>
@endsection
