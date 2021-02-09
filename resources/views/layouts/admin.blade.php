<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <script type="text/javascript" src="{{ asset('js/jquery.ganttView/lib/jquery-1.4.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.ganttView/lib/jquery-ui-1.8.2.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.ganttView/lib/date.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.ganttView/lib/holidays.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.ganttView/jquery.ganttView.js') }}"></script> -->

    <!-- メンタリング後に入れてみた３行 -->
    <link href="{{ asset('js/fullcalendar-5.5.1/lib/main.css') }}" rel='stylesheet'>
    <script src="{{ asset('js/fullcalendar-5.5.1/lib/main.js') }}"></script>
    <script>
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            defaultView: 'dayGridMonth'
        });

        calendar.render();
    </script>
    <!-- ここまで -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <script>
        /*
        $("#bt2").click(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });
            var formData = $("#form").serialize();
            console.log(formData);

            $.ajax({
                    //POST通信
                    type: "post", //HTTP通信のメソッドをPOSTで指定
                    //ここでデータの送信先URLを指定します。
                    url: "/postevent", //通信先のURL
                    dataType: "json", // データタイプをjsonで指定
                    data: formData, // serializeしたデータを指定
                })
                //通信が成功したとき
                .then((res) => {
                    console.log(res);
                    // カレンダーの再描画
                    var calendarEl = document.getElementById("calendar");
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        headerToolbar: {
                            left: "prev,next today",
                            center: "title",
                            right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
                        },
                        locale: "ja",
                        editable: true,
                        googleCalendarApiKey: "GoogleのAPIKEY",
                        eventSources: [{
                            googleCalendarId: "japanese__ja@holiday.calendar.google.com", //祝日の予定を取得
                            rendering: "background",
                            color: "#FF6666",
                        }, ],
                        events: "/getevents",
                        selectable: true,
                    });
                    calendar.render(); //カレンダーを再描画
                })
                //通信が失敗したとき
                .fail((error) => {
                    console.log(error.statusText);
                });
        });
        */
    </script>



</head>

<body>
    <title>@yield('title')</title>
    <h1>目標365</h1>

    <div id="app">
        <div>
            <nav class="navbar  navbar-default">
                <ul class="nav navbar-tabs">
                    <li class='nav-item'>
                        <a href='/admin' class='nav-link' active>TOP </a>
                    </li>
                    <li class=' nav-item'>
                        <a href='/admin/user/edit' class='nav-link' active>マイページ </a>

                    </li>
                    <li class='nav-item'>
                        <a href='/admin/userfollow/edit' class='nav-link' active>ユーザー応援 </a>

                    </li>
                    <li class='nav-item'>
                        <a href='/admin/task/edit' class='nav-link' active>タスク管理 </a>

                    </li>
                    <li class='nav-item'>
                        <a href='/admin/usermessage/edit' class='nav-link' active>最近登録した人 </a>

                    </li>
                    <li class='nav-item'>
                        <a href='/admin/goal/edit' class='nav-link' active>最近登録された目標 </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <main>
        @yield('content')
        <div id='calendar'>
        </div>
        1111111111111111
    </main>

</body>