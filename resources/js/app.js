/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var $ = require('jquery');
require('jquery-ui');
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//function getDate(hours) {
//    const currentDate = new Date();
//    const currentYear = currentDate.getFullYear();
// const currentMonth = currentDate.getMonth();
// const currentDay = currentDate.getDate();
// const timeStamp = new Date(currentYear, currentMonth, currentDay, 0, 0, 0).getTime();
// return new Date(timeStamp + hours * 60 * 60 * 1000).getTime();
//}

import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import momentTimezonePlugin from '@fullcalendar/moment-timezone';

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    const calendar = new Calendar(calendarEl, {
        allDaySlot: false,
        plugins: [dayGridPlugin, momentTimezonePlugin, interactionPlugin],
        timeZone: 'Asia/Tokyo', // momentTimezonePlugin
        defaultView: 'dayGrid',

        events: [{
            title: 'Business Lunch',
            start: '2021-02-03T13:00:00',
            constraint: 'businessHours'
        },]
    });

    calendar.render();
});

// let calendar = new Calendar(calendarEl, {
//     plugins: [timeGridPlugin]
// });

$("#bt2").on('click', function () {
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
        url: "/admin/postevent", //通信先のURL
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
                },],
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
