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

$(window).on('load', function () {
    // var result = $.ajax('/admin/getEvents',
    //     {
    //         type: 'get',
    //         data: { query: $('#keyword').val() },
    //         dataType: 'json',
    //         async: false
    //     }
    // )
    //     // 検索成功時にはページに結果を反映
    //     .done(function (data) {
    //         console.log(data);
    //         // 結果リストをクリア
    //         $('#result').empty();

    //     })
    //     // 検索失敗時には、その旨をダイアログ表示
    //     .fail(function () {
    //         window.alert('正しい結果を得られませんでした。');
    //     });


    //console.log(result);
    //var defaultCalendar = result.responseJSON;
    //console.log(defaultCalendar);
    let defaultCalendar = [];

    // $.each(result.responseJSON, function (index, val) {
    //     defaultCalendar.push({
    //         title: val.title,
    //         start: val.start
    //     });
    // });
    // console.log(defaultCalendar);
});

document.addEventListener('DOMContentLoaded', function (defaultCalendar) {
    const calendarEl = document.getElementById('calendar');

    const calendar = new Calendar(calendarEl, {
        locale: 'ja',

        allDaySlot: false,
        plugins: [dayGridPlugin, momentTimezonePlugin, interactionPlugin],
        timeZone: 'Asia/Tokyo', // momentTimezonePlugin
        defaultView: 'dayGrid',
        dayCellContent: function (e) {
            e.dayNumberText = e.dayNumberText.replace('日', '');
        },
        footerToolbar: {
            right: "prev,next"
        },
        // eventTimeFormat: { hour: 'numeric', minute: '2-digit' }

        events: '/admin/getEvents',
        dateClick: function (info) {
            var title = prompt('予定の名前を入力してください');
            //    console.log(info);
            console.log(info.dateStr);
            calendar.addEventSource({
                title: title,
                start: info.dateStr
            });
        }
    });
    calendar.render();


});


// $('#calendar').fullCalendar({
//     editable: true,
//     viewDisplay: function (view) {
//         $.ajax({
//             url: "json-events.php",
//             dataType: 'json',
//             type: "post",
//             data: {
//                 "start": view.start.toString(),
//                 "end": view.end.toString(),
//             },
//             success: function (EventSource) {
//                 $('#calendar').fullCalendar('removeEvents');
//                 $('#calendar').fullCalendar('addEventSource', EventSource);
//             }
//         });
//     },
//     eventDrop: function (event, delta) {
//         alert(event.title + ' was moved ' + delta + ' daysn' +
//             '(should probably update your database)');
//     },
//     loading: function (bool) {
//         if (bool) $('#loading').show();
//         else $('#loading').hide();
//     },
//     eventDblClick: function (calEvent, jsEvent, view) {

//         alert('Event: ' + calEvent.title);
//         alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
//         alert('View: ' + view.name);

//         // change the border color just for fun
//         $(this).css('border-color', 'red');

//     }
// });
// $("#bt2").on('click', function () {
//     $.ajaxSetup({
//         headers: {
//             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//         },
//     });
//     var formData = $("#form").serialize();
//     console.log(formData);
//     //非同期通信＝ajax
//     $.ajax({
//         //POST通信
//         type: "post", //HTTP通信のメソッドをPOSTで指定
//         //ここでデータの送信先URLを指定します。
//         url: "/admin/postevent", //通信先のURL
//         dataType: "json", // 応答データタイプをjsonで指定
//         data: formData, // serializeしたデータを指定
//     })
//         //通信が成功したとき
//         .then((res) => {
//             console.log(res);
//             // カレンダーの再描画
//             var calendarEl = document.getElementById("calendar");
//             var calendar = new FullCalendar.Calendar(calendarEl, {
//                 headerToolbar: {
//                     left: "prev,next today",
//                     center: "title",
//                     right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
//                 },
//                 locale: "ja",
//                 editable: true,
//                 googleCalendarApiKey: "GoogleのAPIKEY",
//                 eventSources: [{
//                     googleCalendarId: "japanese__ja@holiday.calendar.google.com", //祝日の予定を取得
//                     rendering: "background",
//                     color: "#FF6666",
//                 },],
//                 events: "/getevents",
//                 selectable: true,
//             });
//             calendar.render(); //カレンダーを再描画
//         })
//         //通信が失敗したとき
//         .fail((error) => {
//             console.log(error.statusText);
//         });

// });


