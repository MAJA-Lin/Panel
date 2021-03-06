{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- Permission is hereby granted, free of charge, to any person obtaining a copy --}}
{{-- of this software and associated documentation files (the "Software"), to deal --}}
{{-- in the Software without restriction, including without limitation the rights --}}
{{-- to use, copy, modify, merge, publish, distribute, sublicense, and/or sell --}}
{{-- copies of the Software, and to permit persons to whom the Software is --}}
{{-- furnished to do so, subject to the following conditions: --}}

{{-- The above copyright notice and this permission notice shall be included in all --}}
{{-- copies or substantial portions of the Software. --}}

{{-- THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR --}}
{{-- IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, --}}
{{-- FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE --}}
{{-- AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER --}}
{{-- LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, --}}
{{-- OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE --}}
{{-- SOFTWARE. --}}
<!DOCTYPE html>
<html>
    <head>
        <title>{{ Settings::get('company', 'Pterodactyl') }} - Console &rarr; {{ $server->name }}</title>
        @include('layouts.scripts')
        {!! Theme::css('vendor/bootstrap/bootstrap.min.css') !!}
        {!! Theme::css('css/terminal.css') !!}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body id="terminal-body">
        <div id="terminal" style="width:100%;max-height: none !important;"></div>
        <div id="terminal_input" class="form-group no-margin">
            <div class="input-group">
                <div class="input-group-addon terminal_input--prompt">{{ $server->username }}:~$</div>
                <input type="text" class="form-control terminal_input--input">
            </div>
        </div>
        <div id="terminalNotify" class="terminal-notify hidden">
            <i class="fa fa-bell"></i>
        </div>
    </body>
    <script>window.SkipConsoleCharts = true</script>
    {!! Theme::js('js/laroute.js') !!}
    {!! Theme::js('vendor/ansi/ansi_up.js') !!}
    {!! Theme::js('vendor/jquery/jquery.min.js') !!}
    {!! Theme::js('vendor/socketio/socket.io.v203.min.js') !!}
    {!! Theme::js('vendor/bootstrap-notify/bootstrap-notify.min.js') !!}
    {!! Theme::js('js/frontend/server.socket.js') !!}
    {!! Theme::js('vendor/mousewheel/jquery.mousewheel-min.js') !!}
    {!! Theme::js('js/frontend/console.js') !!}
    <script>
        $terminal.height($(window).innerHeight() - 40);
        $terminal.width($(window).innerWidth());
        $(window).on('resize', function () {
            window.scrollToBottom();
            $terminal.height($(window).innerHeight() - 40);
            $terminal.width($(window).innerWidth());
        });
    </script>
</html>
