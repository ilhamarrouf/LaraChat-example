<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group {
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                <li class="list-group-item active">
                    Chat room 
                    <span class="badge badge-pill badge-danger">@{{ numberOfUsers }}</span>
                </li>
                <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                <ul class="list-group" v-chat-scroll>
                    <message
                        v-for="value, index in chat.message"
                        :key=value.index
                        :color=chat.color[index]
                        :user=chat.user[index]
                        :time=chat.time[index]
                    >
                        @{{ value }}
                    </message>
                </ul>

                <input class="form-control" type="text" v-model="message" @keyup.enter="send" placeholder="Type your message here...">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>