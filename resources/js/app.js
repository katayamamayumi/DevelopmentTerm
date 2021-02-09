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
function getDate(hours) {
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth();
    const currentDay = currentDate.getDate();
    const timeStamp = new Date(currentYear, currentMonth, currentDay, 0, 0, 0).getTime();
    return new Date(timeStamp + hours * 60 * 60 * 1000).getTime();
}

// let tasks = [
//     {
//         id: 1,
//         label: 'Make some noise',
//         user:
//             '<a href="https://www.google.com/search?q=John+Doe" target="_blank" style="color:#0077c0;">John Doe</a>',
//         start: getDate(-24 * 5),
//         duration: 15 * 24 * 60 * 60 * 1000,
//         progress: 85,
//         type: 'project',
//         //collapsed: true,
//     },
//     {
//         id: 2,
//         label: 'With great power comes great responsibility',
//         user:
//             '<a href="https://www.google.com/search?q=Peter+Parker" target="_blank" style="color:#0077c0;">Peter Parker</a>',
//         parentId: 1,
//         start: getDate(-24 * 4),
//         duration: 4 * 24 * 60 * 60 * 1000,
//         progress: 50,
//         type: 'milestone',
//         collapsed: true,
//         style: {
//             base: {
//                 fill: '#1EBC61',
//                 stroke: '#0EAC51',
//             },
//             /*'tree-row-bar': {
//               fill: '#1EBC61',
//               stroke: '#0EAC51'
//             },
//             'tree-row-bar-polygon': {
//               stroke: '#0EAC51'
//             }*/
//         },
//     },
//     {
//         id: 3,
//         label: 'Courage is being scared to death, but saddling up anyway.',
//         user:
//             '<a href="https://www.google.com/search?q=John+Wayne" target="_blank" style="color:#0077c0;">John Wayne</a>',
//         parentId: 2,
//         start: getDate(-24 * 3),
//         duration: 2 * 24 * 60 * 60 * 1000,
//         progress: 100,
//         type: 'task',
//     },
//     {
//         id: 4,
//         label: 'Put that toy AWAY!',
//         user:
//             '<a href="https://www.google.com/search?q=Clark+Kent" target="_blank" style="color:#0077c0;">Clark Kent</a>',
//         start: getDate(-24 * 2),
//         duration: 2 * 24 * 60 * 60 * 1000,
//         progress: 50,
//         type: 'task',
//         dependentOn: [3],
//     },
// ];

// let options = {
//     maxRows: 100,
//     maxHeight: 300,
//     title: {
//         label: 'Your project title as html (link or whatever...)',
//         html: false,
//     },
//     row: {
//         height: 24,
//     },
//     calendar: {
//         hour: {
//             display: false,
//         },
//     },
//     chart: {
//         progress: {
//             bar: false,
//         },
//         expander: {
//             display: true,
//         },
//     },
//     taskList: {
//         expander: {
//             straight: false,
//         },
//         columns: [
//             {
//                 id: 1,
//                 label: 'ID',
//                 value: 'id',
//                 width: 40,
//             },
//             {
//                 id: 2,
//                 label: 'Description',
//                 value: 'label',
//                 width: 200,
//                 expander: true,
//                 html: true,
//                 events: {
//                     click({ data, column }) {
//                         alert('description clicked!\n' + data.label);
//                     },
//                 },
//             },
//             {
//                 id: 3,
//                 label: 'Assigned to',
//                 value: 'user',
//                 width: 130,
//                 html: true,
//             },
//             {
//                 id: 3,
//                 label: 'Start',
//                 value: (task) => dayjs(task.start).format('YYYY-MM-DD'),
//                 width: 78,
//             },
//             {
//                 id: 4,
//                 label: 'Type',
//                 value: 'type',
//                 width: 68,
//             },
//             {
//                 id: 5,
//                 label: '%',
//                 value: 'progress',
//                 width: 35,
//                 style: {
//                     'task-list-header-label': {
//                         'text-align': 'center',
//                         width: '100%',
//                     },
//                     'task-list-item-value-container': {
//                         'text-align': 'center',
//                         width: '100%',
//                     },
//                 },
//             },
//         ],
//     },
//     /*locale:{
//       name: 'pl', // name String
//       weekdays: 'Poniedziałek_Wtorek_Środa_Czwartek_Piątek_Sobota_Niedziela'.split('_'), // weekdays Array
//       weekdaysShort: 'Pon_Wto_Śro_Czw_Pią_Sob_Nie'.split('_'), // OPTIONAL, short weekdays Array, use first three letters if not provided
//       weekdaysMin: 'Pn_Wt_Śr_Cz_Pt_So_Ni'.split('_'), // OPTIONAL, min weekdays Array, use first two letters if not provided
//       months: 'Styczeń_Luty_Marzec_Kwiecień_Maj_Czerwiec_Lipiec_Sierpień_Wrzesień_Październik_Listopad_Grudzień'.split('_'), // months Array
//       monthsShort: 'Sty_Lut_Mar_Kwi_Maj_Cze_Lip_Sie_Wrz_Paź_Lis_Gru'.split('_'), // OPTIONAL, short months Array, use first three letters if not provided
//       ordinal: n => `${n}`, // ordinal Function (number) => return number + output
//       relativeTime: { // relative time format strings, keep %s %d as the same
//         future: 'za %s', // e.g. in 2 hours, %s been replaced with 2hours
//         past: '%s temu',
//         s: 'kilka sekund',
//         m: 'minutę',
//         mm: '%d minut',
//         h: 'godzinę',
//         hh: '%d godzin', // e.g. 2 hours, %d been replaced with 2
//         d: 'dzień',
//         dd: '%d dni',
//         M: 'miesiąc',
//         MM: '%d miesięcy',
//         y: 'rok',
//         yy: '%d lat'
//       }
//    }*/
// };

// let Header;
// let GanttElastic;
// const app = new Vue({
//     components: {
//         'gantt-header': Header,
//         'gantt-elastic': GanttElastic,
//         'gantt-footer': {
//             template: `<span>this is a footer</span>`,
//         },
//     },
//     data: {
//         tasks: tasks.map((task) => Object.assign({}, task)),
//         options,
//         dynamicStyle: {
//             'task-list-header-label': {
//                 'font-weight': 'bold',
//             },
//         },
//         destroy: false,
//     },
// });

// // gantt state which will be updated in realtime
// let ganttState, ganttInstance;

// listen to 'gantt-elastic.ready' or 'gantt-elastic.mounted' event
// to get the gantt state for real time modification

// app.$on('gantt-elastic-ready', (ganttElasticInstance) => {
//     ganttInstance = ganttElasticInstance;

//     ganttInstance.$on('tasks-changed', (tasks) => {
//         app.tasks = tasks;
//     });
//     ganttInstance.$on('options-changed', (options) => {
//         app.options = options;
//     });
//     ganttInstance.$on('dynamic-style-changed', (style) => {
//         app.dynamicStyle = style;
//     });

//     ganttInstance.$on('chart-task-mouseenter', ({ data, event }) => {
//         console.log('task mouse enter', { data, event });
//     });
//     ganttInstance.$on('updated', () => {
//         //console.log('gantt view was updated');
//     });
//     ganttInstance.$on('destroyed', () => {
//         //console.log('gantt was destroyed');
//     });
//     ganttInstance.$on('times-timeZoom-updated', () => {
//         console.log('time zoom changed');
//     });
//     ganttInstance.$on('taskList-task-click', ({ event, data, column }) => {
//         console.log('task list clicked! (task)', { data, column });
//     });
// });

// mount gantt to DOM
// app.$mount('#app');

// import { SVGGantt, CanvasGantt, StrGantt } from 'gantt';

// const data = [{
//     id: 1,
//     type: 'group',
//     text: '1 Waterfall model',
//     start: new Date('2018-10-10T09:24:24.319Z'),
//     end: new Date('2018-12-12T09:32:51.245Z'),
//     percent: 0.71,
//     links: []
// }, {
//     id: 11,
//     parent: 1,
//     text: '1.1 Requirements',
//     start: new Date('2018-10-21T09:24:24.319Z'),
//     end: new Date('2018-11-22T01:01:08.938Z'),
//     percent: 0.29,
//     links: [{
//         target: 12,
//         type: 'FS'
//     }]
// }, {
//     id: 12,
//     parent: 1,
//     text: '1.2 Design',
//     start: new Date('2018-11-05T09:24:24.319Z'),
//     end: new Date('2018-12-12T09:32:51.245Z'),
//     percent: 0.78,
// }];

// new SVGGantt('#svg-root', data, {
//     viewMode: 'week'
// });

// new CanvasGantt('#canvas-root', data, {
//     viewMode: 'week'
// });

// const strGantt = new StrGantt(data, {
//     viewMode: 'week'
// });
// this.body = strGantt.render();

import { Calendar } from '@fullcalendar/core';
import timeGridPlugin from '@fullcalendar/timegrid';
let calendar = new Calendar(calendarEl, {
    plugins: [timeGridPlugin]
});

$("#bt2").click(function () {
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