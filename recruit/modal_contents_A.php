
<?php
$now = new DateTime();
$datetime = $now->format('Ymd-His');
define('VER', $datetime);
$section = isset($_GET['section']) ? $_GET['section'] : '';
?>

<?php if($section == 0):?>
<div class="box-interview-col2">
  <div class="col1">
      <figure><img src="img/interview/0/pic_0.jpg?<?= VER ?>" alt="綜合キャリアオプション 取締役副社長 神保光路郎"></figure>
  </div>
  <div class="col2">
      <h4>綜合キャリアオプション</h4>
      <i>取締役副社長</i>
      <h5 class="name"><ruby>神保<rt>ジンボ</rt></ruby> <ruby>光路郎<rt>コウジロウ</rt></ruby></h5>
  </div>
</div>

<DIV class="px-4 mt-4">
<DIV class="box-message-mov">
  <div class="media-mov">
    <video controls playsinline webkit-playsinline poster="img/interview/0/interview00.jpg?<?= VER ?>" preload="metadata" alt="メッセージ動画" >
    <source src="img/interview/0/interview00.mp4?<?= VER ?>" target="_blank">
    </video>
  </div>
</DIV>
</DIV>

<DIV class="px-4">
  <article class="flx2-interview mt-0">
    <!--*-->
      <div class="order-1 box-text">
        <h2>やれることは全部やろう</h2>
        <h3>入社のキッカケ</h3>
        <p>元々IT業界でいたんですけれでも、役員の方にお声がけいただいて3回くらいお話しを聞きましたかね。
        後は働き方ですかね。前職は外資だったので少しドライでした。ワンチームで何とかしようという概念はあまりありませんでした。
        しかしここのチームでは「一緒にやろう！」という人が多く、僕も元々起業しようと思っていたので、これはいいなと思い入社させてもらいました。</p>
        
        <h3>綜合キャリアオプションの社風</h3>
        <p>目的達成のために必要なことはかなり自由です。うちのチームの座右の銘が「犯罪以外は全部やろう」という、ことなんです。
        売上を上げるために一生懸命営業することも一つですが、人がいなければ採用すればいいでしょうし、売上を上げる感じの話ではれば事業譲渡も手をだしていいでしょうし。
        やれることは全部やろうということで、縛りはありません。他の会社で事業を立ち上げましたとか、元々会社やってましたとかいう人がよくいらっしゃるので、その自由がよく共感するのかなと思います。</p>
        
     </div>
</article>


<article class="flx2-interview">
  <!--*-->
    <div class="order-2 box-text">
      <h2>自分で考えて、自分でやるという事を重要視しています。</h2>
      <h3>採用基準</h3>
      <p>仕事が好きで、日本語が喋れればだいたい採用です。
      高卒、大卒の人もいますし、あまり気にしたことはありません。
      もう一個は別の文化で、手をあげようというものがあります。プロアクティブ・能動的に動ける人を重視しています。
      例えば新しいサービスを立ち上げるときにも「はい」と手を挙げてくれる人。このような方は新卒でも中途でも歓迎です。
      自分で考えて、自分でやるという事を重要視しています。
      ビジネスマンとして人に選ばれるという事が会社としても、個人としても最終目的になると思います。そう思うと社内でそれができる人が当然活躍しています。</p>
      
      <h3>この動画を見ている方へ</h3>
      <p>うちの事業部という意味では100人くらいで自由にやっているのですが、元々グループ全体は派遣会社から始まり、新しいステージに移動しようとしています。
      自由な社風が故に、色々な所から色々なナレッジを持った人が集まってきており、このチームが間違いなく中核になっていきます。
      将来的に自分のやりたいこと、グループ全体をもっと高みに押し上げていく時に先頭を走ってみたい方がいれば、是非一緒に働きたいと思います。</p>
      
   </div>
  <!--*-->
   <div class="order-1 box-media">
    <section class="wrap-gallery02">
      <DIV class="swiper swiper_body" id="box-gallery100">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="img/interview/0/pic_1.jpg?<?= VER ?>" alt="代表メッセージ写真1" /></div>
          <div class="swiper-slide"><img src="img/interview/0/pic_2.jpg?<?= VER ?>" alt="代表メッセージ写真2" /></div>
          <div class="swiper-slide"><img src="img/interview/0/pic_3.jpg?<?= VER ?>" alt="代表メッセージ写真3" /></div>
          <div class="swiper-slide"><img src="img/interview/0/pic_4.jpg?<?= VER ?>" alt="代表メッセージ写真4" /></div>
        </div>
      </DIV>
      <DIV class="swiper swiper_menu" id="box-gallery100_menu">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="img/interview/0/pic_1.jpg?<?= VER ?>" alt="代表メッセージ写真1" /></div>
          <div class="swiper-slide"><img src="img/interview/0/pic_2.jpg?<?= VER ?>" alt="代表メッセージ写真2" /></div>
          <div class="swiper-slide"><img src="img/interview/0/pic_3.jpg?<?= VER ?>" alt="代表メッセージ写真3" /></div>
          <div class="swiper-slide"><img src="img/interview/0/pic_4.jpg?<?= VER ?>" alt="代表メッセージ写真4" /></div>
        </div>
      </DIV>
    </section>
    </div>
</article>
</DIV>


<script>
  $(function() {
   function initializeSwiper(containerId, menuId) {
     var menuSwiper = new Swiper(menuId, {
       spaceBetween: 10,
       slidesPerView: 4,
       freeMode: true,
       loop: true,
     });
     var mainSwiper = new Swiper(containerId, {
       loop: true,
       spaceBetween: 0,
       clickable: true,
       speed: 300,
       thumbs: {
         swiper: menuSwiper,
       },
     });
   }
   initializeSwiper("#box-gallery100", "#box-gallery100_menu");
  // $("#modal_contents_C").find("button").removeClass("active");
  // $("#modal_contents_C").find("#no1").addClass("active");
 });
 </script>

<?php endif; ?>