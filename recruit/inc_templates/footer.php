
<footer id="footer" class="mvimg mv-120">
<div class="wraper-box top01">
<div class="box"></div>
</div>
  <section class="container">
  <div id="wrapper-scrolltop">
      <a href="#body" class="btn-maru-top" id="footer-scrolltop"></a>
  </div>
  
  <div class="col-12 row-2nd">
      <div class="row">
          <div class="col-md-6 text-center" id="footer-col-01">
              <a href="index.php" id="footer-logo">
              <img src="img/logo00_w.svg?<?= VER ?>" alt="綜合キャリアオプション">
              <small> BPO ( ビジネス・プロセス・ソリューション事業本部 )</small>
              </a>
              <ul class="footer-menu">
                <?php 
                $sidemenu = false;
                require('./inc_templates/inc_menu_global.php'); ?>
              </ul>
          </div>
  
          <div class="col-md-6" id="footer-col-02">
                  <strong>BPO サービス一覧</strong>
                  <ul class="footer-menu">
                  <li><a href="https://sc-bpo.jp/willful/" target="_blank">WILFULL</a></li>
                  <li><a href="https://sc-bpo.jp/bensys/" target="_blank">BENSYS</a></li>
                  <li><a href="https://sc-bpo.jp/logi/" target="_blank">マルっと！logi</a></li>
                  <li><a href="https://sc-bpo.jp/jichitainext/" target="_blank">自治体ネクスト</a></li>
                  <li><a href="https://sc-bpo.jp/i-bpo/" target="_blank">Industry BPO</a></li>
                  <li><a href="https://sc-bpo.jp/nekonote/" target="_blank">ねこのて</a></li>
                  <li><a href="https://sc-bpo.jp/hitorque/" target="_blank">ヒトルク</a></li>
                  <li><a href="#" class="disabled" target="_blank">ShareSight</a></li>
                  <li><a href="https://sc-bpo.jp/capion/" target="_blank">SC CAPION</a></li>
                  <li><a href="https://sc-bpo.jp/sakurabpo/" target="_blank">SAKURA BPO</a></li>
                  <li><a href="#" class="disabled" target="_blank">ひざもと</a></li>
                  <li><a href="https://sougo-career.co.jp/mpo/" target="_blank">MPO</a></li>
                  </ul>
          </div>
      </div>

  </div>
  <p id="footer-copyright"><i class="fa-regular fa-copyright"></i> <?php echo date('Y');?> © SOUGO CAREER OPTION Inc.</p>
  </section>
  </footer>

</DIV>
<script>
    const text1 = new SplitType('.js-split');
</script>

<!-- Modal -->
<div class="modal fade" id="modal_contents_A">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal_content_title">代表メッセージ</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="ajx_content_output"></div>
        </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">CLOSE</button>
          </div>
      </div>
    </div>
  </div>

</BODY>
</HTML>