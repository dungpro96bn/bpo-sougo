
  <DIV class="swiper" id="swipe03_body">
    <DIV class="swiper-wrapper">
     <!-- *1 -->
      <article class="swiper-slide">

        <div class="box-in" onclick="App.loadSection('modal_case.php?section=1', '#modal_content1','Case 1')">
        <i>Case 1</i>
        <h2>印刷業界</h2>
        <h4>大型補助金に係る審査業務</h4>
        <!-- <p>
        経験豊富な業務設計者.社員管理者/短期間での爆発的な供給力/豊富な類似案件実績
        </p> -->
        </div>
        <figure>
        
        <img src="img/pic/case_01.jpg?<?= VER ?>" alt="印刷業界 型補助金に係る審査業務">
        </figure>
      </article>

      <!-- * 2-->
      <article class="swiper-slide ">
      <div class="box-in" onclick="App.loadSection('modal_case.php?section=2', '#modal_content1','Case 2')">
      <i>Case 2</i>
      <h2>不動産業界</h2>
      <h4>書類不備確認、内容照会、データ登録、書類作成、書類発送</h4>
      </div>
      <figure><img src="img/pic/case_02.jpg?<?= VER ?>" alt="不動産業界 書類不備確認、内容照会、データ登録、書類作成、書類発送"></figure>
      </article>
          <!-- *3 -->
          <article class="swiper-slide" >
          <div class="box-in" onclick="App.loadSection('modal_case.php?section=3', '#modal_content1','Case 3')">
            <i>Case 3</i>
            <h2>公共団体</h2>
          <h4>審査システム構築、申請書類審査業務、コールセンター、窓口業務、発送物作成/発送、郵便不達管理など</h4>
          </div>
          <figure><img src="img/pic/case_03.jpg?<?= VER ?>" alt="公共団体 審査システム構築、申請書類審査業務、コールセンター、窓口業務、発送物作成/発送、郵便不達管理など"></figure>

          </article>
          <!-- *4 -->
          <article class="swiper-slide" >
          
          <div class="box-in" onclick="App.loadSection('modal_case.php?section=4', '#modal_content1','Case 4')">
          <i>Case 4</i>
          <h2>物流業界</h2>
          <h4>EC関連企業倉庫内での構内作業員数千名派遣、人員管理、作業業務委託、コールセンター対応</h4>
          </div>
          <figure><img src="img/pic/case_04.jpg?<?= VER ?>" alt="物流業界 EC関連企業倉庫内での構内作業員数千名派遣、人員管理、作業業務委託、コールセンター対応"></figure>
          </article>
          <!-- *4 -->
          <article class="swiper-slide">
          <div class="box-in" onclick="App.loadSection('modal_case.php?section=5', '#modal_content1','Case 5')">
            <i>Case 5</i>
            <h2>物流業界</h2>
          <h4>倉庫内での雑貨ピッキング・梱包等の軽作業</h4>
          </div>
          <figure><img src="img/pic/case_05.jpg?<?= VER ?>" alt="物流業界 倉庫内での雑貨ピッキング・梱包等の軽作業"></figure>
          </article>
    </DIV>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </DIV>


<script>
  const swipe03_body = new Swiper('#swipe03_body', {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
      },
      navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
         // type: "progressbar",
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
     },
  });
</script>
