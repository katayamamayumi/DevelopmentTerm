
import { Calendar } from '@fullcalendar/core'

// 1週間カレンダー表示
import timeGridPlugin from '@fullcalendar/timegrid';

// 1ヶ月カレンダー表示
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction';
import momentTimezonePlugin from '@fullcalendar/moment-timezone';

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    const calendar = new Calendar(calendarEl, {
        allDaySlot: false,

        // timeGridPlugin と dayGridPlugin のどちかを選択して読み込む
        plugins: [dayGridPlugin, momentTimezonePlugin, interactionPlugin],
        // plugins: [dayGridPlugin, momentTimezonePlugin, interactionPlugin],
        timeZone: 'Asia/Tokyo', // momentTimezonePlugin

        // timeGridPlugin のときは defaultView: timeGrid
        // dayGridPlugin のときは defaultView: dayGrid
        // defaultView: 'timeGrid',
        defaultView: 'dayGrid',

        // スケジュールなどの情報を格納する変数の初期化
        events: []
    });

    calendar.render();
});
