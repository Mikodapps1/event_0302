@extends('layouts.app')
@section('content')

<title>content</title>
<section class="group">
  <div class="event">
    <h1>イベントスケジュール</h1>
  </div>

  <section class="event_info">
      <p>Mikodappsでは、毎週、大阪を中心に様々なイベントを実施しております。このページでは開催イベントの日程を掲載しております。翌月のカレンダーを見る場合は矢印アイコンをクリックして翌月のスケージュールをご覧ください。
      </p>
      <!-- カレンダー -->
      <div id="calendar"></div>
      <!-- カレンダーここまで -->
    </section>
    <div class="bg_img"></div>
</section>

  <div class="event">
    <span><h1>イベント一覧</h1></span>
  </div>

  <section class="event_lists">
    <form action="/appointment" method="post" accept-charset="UTF-8">
      @csrf {{-- CSRF保護 --}}
      <section class="list">
        <h3 class="list_title"><a href="#"><span>12/19(土)クリスマス直前！婚歴理解者party企画★40代中心(37歳～50歳くらいまで）の婚活★恋活パーティー♪本町駅直結のお洒落な...</span></a></h3>

        <div class="parts">
          <div class="photo">
            <img src="image/schedule/image9.png" class="event_picture" alt="本町イタリアン倶楽部" >
           </div>
           <div class="details">
             <ul>
             <li><span>イベント名</span>モグラ最高<input type="hidden" name="title" value="モグラCM最高"></li>
             <li><span>開催場所</span><a href="" target="_blank" itemprop="url">本町イタリアン倶楽部</a>
             </li>
             <li><span>男性</span>5000円<input type="hidden" name="man_price1" value="5000円"></li>
             <li><span>女性</span>2000円<input type="hidden" name="woman_price1" value="2000円"></li>
             <li><span>参加状況</span>男性残りわずか★/ 女性残りわずか★</li>
             <li><span>年齢層</span>35歳〜50歳くらいまで【新年齢設定】</li>
           </ul>
           <div class="point">
             <p>出会いの秋企画<br>
                   婚歴者、婚歴理解者の独身限定★４０代中心のお洒落なデザイナーズイタリアンで美味しいイタリアンコースとお酒を堪能しながらわいわい楽しく婚活★恋活のきっかけつくりのパーティーに参加しませんか？...
             </p>
           </div>
         </div>
       </div>
       <div class="entry_btn">
         <button type="submit" name="submit" class="btnGold" >ご予約はこちら</button>
     </form>
    </section>

    <section class="list">
      <h3 class="list_title">
        <a href="#"><span>12/19(土)クリスマス直前！婚歴理解者party企画★40代中心(37歳～50歳くらいまで）の婚活★恋活パーティー♪本町駅直結のお洒落な...</span>
        </a>
      </h3>
      <div class="parts">
        <div class="photo">
            <img src="image/schedule/image10.png" class="event_picture" alt="本町イタリアン倶楽部" >
        </div>
        <div class="details">
          <ul>
            <li><span>開催場所</span>
                <a href="" target="_blank" itemprop="url">本町イタリアン倶楽部</a>
            </li>
            <li><span>男性</span>5000円</li>
            <li><span>女性</span>2000円</li>
            <li><span>参加状況</span>男性残りわずか★/ 女性残りわずか★</li>
            <li><span>年齢層</span>35歳〜50歳くらいまで【新年齢設定】</li>
          </ul>
            <div class="point">
                <p>出会いの秋企画<br>
                  婚歴者、婚歴理解者の独身限定★４０代中心のお洒落なデザイナーズイタリアンで美味しいイタリアンコースとお酒を堪能しながらわいわい楽しく婚活★恋活のきっかけつくりのパーティーに参加しませんか？...
                </p>
            </div>
          </div>
      </div>
      <div class="entry_btn">
        <p><a class="btnGold" href="appointment">ご予約はこちら</a></p>
      </div>
   </section>

    <section class="list">
      <h3 class="list_title">
        <a href="#"><span>12/19(土)クリスマス直前！婚歴理解者party企画★40代中心(37歳～50歳くらいまで）の婚活★恋活パーティー♪本町駅直結のお洒落な...</span>
        </a>
      </h3>
      <div class="parts">
        <div class="photo">
            <img src="image/schedule/image11.png" class="event_picture" alt="本町イタリアン倶楽部" >
        </div>
        <div class="details">
          <ul>
            <li><span>開催場所</span>
                <a href="" target="_blank" itemprop="url">本町イタリアン倶楽部</a>
            </li>
            <li><span>男性</span>5000円</li>
            <li><span>女性</span>2000円</li>
            <li><span>参加状況</span>男性残りわずか★/ 女性残りわずか★</li>
            <li><span>年齢層</span>35歳〜50歳くらいまで【新年齢設定】</li>
          </ul>
            <div class="point">
                <p>出会いの秋企画<br>
                  婚歴者、婚歴理解者の独身限定★４０代中心のお洒落なデザイナーズイタリアンで美味しいイタリアンコースとお酒を堪能しながらわいわい楽しく婚活★恋活のきっかけつくりのパーティーに参加しませんか？...
                </p>
            </div>
          </div>
      </div>
      <div class="entry_btn">
        <p><a class="btnGold" href="appointment">ご予約はこちら</a></p>
      </div>
    </section>
    <section class="list">
      <h3 class="list_title">
        <a href="#"><span>12/19(土)クリスマス直前！婚歴理解者party企画★40代中心(37歳～50歳くらいまで）の婚活★恋活パーティー♪本町駅直結のお洒落な...</span>
        </a>
      </h3>
      <div class="parts">
        <div class="photo">
            <img src="image/schedule/image12.png" class="event_picture" alt="本町イタリアン倶楽部" >
        </div>
        <div class="details">
          <ul>
            <li><span>開催場所</span>
                <a href="" target="_blank" itemprop="url">本町イタリアン倶楽部</a>
            </li>
            <li><span>男性</span>5000円</li>
            <li><span>女性</span>2000円</li>
            <li><span>参加状況</span>男性残りわずか★/ 女性残りわずか★</li>
            <li><span>年齢層</span>35歳〜50歳くらいまで【新年齢設定】</li>
          </ul>
            <div class="point">
                <p>出会いの秋企画<br>
                  婚歴者、婚歴理解者の独身限定★４０代中心のお洒落なデザイナーズイタリアンで美味しいイタリアンコースとお酒を堪能しながらわいわい楽しく婚活★恋活のきっかけつくりのパーティーに参加しませんか？...
                </p>
            </div>
           </div>
      </div>
      <div class="entry_btn">
        <p><a class="btnGold" href="appointment">ご予約はこちら</a></p>
      </div>
   </section>

    <section class="list">
      <h3 class="list_title">
        <a href="#"><span>12/19(土)クリスマス直前！婚歴理解者party企画★40代中心(37歳～50歳くらいまで）の婚活★恋活パーティー♪本町駅直結のお洒落な...</span>
        </a>
      </h3>
      <div class="parts">
        <div class="photo">
            <img src="image/schedule/image13.png" class="event_picture" alt="本町イタリアン倶楽部" >
        </div>
        <div class="details">
          <ul>
            <li><span>開催場所</span>
                <a href="" target="_blank" itemprop="url">本町イタリアン倶楽部</a>
            </li>
            <li><span>男性</span>5000円</li>
            <li><span>女性</span>2000円</li>
            <li><span>参加状況</span>男性残りわずか★/ 女性残りわずか★</li>
            <li><span>年齢層</span>35歳〜50歳くらいまで【新年齢設定】</li>
          </ul>
            <div class="point">
                <p>出会いの秋企画<br>
                  婚歴者、婚歴理解者の独身限定★４０代中心のお洒落なデザイナーズイタリアンで美味しいイタリアンコースとお酒を堪能しながらわいわい楽しく婚活★恋活のきっかけつくりのパーティーに参加しませんか？...
                </p>
            </div>
          </div>
      </div>
      <div class="entry_btn">
        <p><a class="btnGold" href="appointment">ご予約はこちら</a></p>
      </div>
    </section>

    <section class="list">
      <h3 class="list_title">
        <a href="#"><span>12/19(土)クリスマス直前！婚歴理解者party企画★40代中心(37歳～50歳くらいまで）の婚活★恋活パーティー♪本町駅直結のお洒落な...</span>
        </a>
      </h3>
      <div class="parts">
        <div class="photo">
            <img src="image/schedule/image14.png" class="event_picture" alt="本町イタリアン倶楽部" >
        </div>
        <div class="details">
          <ul>
            <li><span>開催場所</span>
                <a href="" target="_blank" itemprop="url">本町イタリアン倶楽部</a>
            </li>
            <li><span>男性</span>5000円</li>
            <li><span>女性</span>2000円</li>
            <li><span>参加状況</span>男性残りわずか★/ 女性残りわずか★</li>
            <li><span>年齢層</span>35歳〜50歳くらいまで【新年齢設定】</li>
          </ul>
            <div class="point">
                <p>出会いの秋企画<br>
                  婚歴者、婚歴理解者の独身限定★４０代中心のお洒落なデザイナーズイタリアンで美味しいイタリアンコースとお酒を堪能しながらわいわい楽しく婚活★恋活のきっかけつくりのパーティーに参加しませんか？...
                </p>
            </div>
          </div>
      </div>
      <div class="entry_btn">
        <p><a class="btnGold" href="appointment">ご予約はこちら</a></p>
      </div>
    </section>

    <section class="list">
      <h3 class="list_title">
        <a href="#"><span>12/19(土)クリスマス直前！婚歴理解者party企画★40代中心(37歳～50歳くらいまで）の婚活★恋活パーティー♪本町駅直結のお洒落な...</span>
        </a>
      </h3>
      <div class="parts">
        <div class="photo">
            <img src="image/schedule/image15.png" class="event_picture" alt="本町イタリアン倶楽部" >
        </div>
        <div class="details">
          <ul>
            <li><span>開催場所</span>
                <a href="" target="_blank" itemprop="url">本町イタリアン倶楽部</a>
            </li>
            <li><span>男性</span>5000円</li>
            <li><span>女性</span>2000円</li>
            <li><span>参加状況</span>男性残りわずか★/ 女性残りわずか★</li>
            <li><span>年齢層</span>35歳〜50歳くらいまで【新年齢設定】</li>
          </ul>
            <div class="point">
                <p>出会いの秋企画<br>
                  婚歴者、婚歴理解者の独身限定★４０代中心のお洒落なデザイナーズイタリアンで美味しいイタリアンコースとお酒を堪能しながらわいわい楽しく婚活★恋活のきっかけつくりのパーティーに参加しませんか？...
                </p>
            </div>
          </div>
      </div>
      <div class="entry_btn">
        <p><a class="btnGold" href="appointment">ご予約はこちら</a></p>
      </div>
    </section>
  </section>
</main>

@endsection