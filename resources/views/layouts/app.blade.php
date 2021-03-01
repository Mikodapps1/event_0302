@component('components.header')
@endcomponent

<main class="py-4 mb-5">
  @yield('content')
</main>

@component('components.footer')
@endcomponent


<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- スライダー -->
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<!-- カレンダー -->
<script src="fullcalendar/main.js"></script>

<!-- ハンバーガーアクション -->
<script>
$('.sp_menu').on('click', ()=> {
 $('.content_hbg').toggleClass('overlay'),
 $('.open').toggleClass('open_icon'),
 $('.close').toggleClass('close_icon')
})
</script>
<!-- スライダーアクション -->
<script>
  $(document).ready(function(){
    $('.slider').bxSlider({
      // pager: false,
      // controls: false,
      // auto: true,
      minSlides: 3,
      maxSlides: 3,
      slideWidth: 470,
      slideMargin: 10,
      pause: 4000,
    });
  });
</script>
<!-- カレンダーアクション -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth', // オプション （月表示）
      firstDay: 1, //0なら日曜日始まり
      events: [
        {
          id: 'a',
          title: 'GODBOX争奪戦',
          start: '2021-01-30',
          url: 'http://google.com/'
        },
        {
          id: 'b',
          title: '広島',
          start: '2021-02-06',
          url:'https://www.yahoo.co.jp/'
        }
      ],

    eventClick: function(info) {
      info.jsEvent.preventDefault();
      if (info.event.url) {
        window.open(info.event.url);
        }
    }
    });
    calendar.render(); // カレンダーの初期化（再レンダリング）
  });
</script>

<!-- スクロールアニメーション -->
<script>
const list = document.querySelectorAll(".list");
console.log("画面の高さ" , window.innerHeight);
document.addEventListener("scroll" , function(){
  for (let i = 0; i < list.length; i++) {
  const getList = list[i].
  getBoundingClientRect().top + list[i].clientHeight*0.3

  // getBoundingClientRect().top 今見えているブラスザTOPからの距離
  // clientHeight sectionの高さ。６割見えたら
  // window.innerHeight 現在のブラウザの高さ
    if(window.innerHeight > getList) {
      list[i].classList.add("show");
    }
  }
})

</script>
</body>
</html>