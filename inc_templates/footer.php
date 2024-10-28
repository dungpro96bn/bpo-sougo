<?php if($pagename !== 'contact_done'):?>

<!--/////////////////////////////
FOOTER
/////////////////////////////////-->
<footer id="footer">
<section class="container">

<div id="wrapper-scrolltop">
    <a href="#body" class="btn-maru-top" id="footer-scrolltop"></a>
</div>

<div class="col-12 row-2nd">
    <div class="row">

        <div class="col-md-6 text-center" id="footer-col-01">
            <a href="index.php" id="footer-logo">
            <img src="img/logo00_w.svg?<?= VER ?>" alt="綜合キャリアオプション">
            <small> BPS ( ビジネス・プロセス・ソリューション事業本部 )</small>
            </a>
            <p class="small">
            </p>
            <ul class="footer-menu">
                <?php require('./inc_templates/inc_menulist.php'); ?>
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
<p id="footer-copyright"><i class="fa-regular fa-copyright"></i> <?php echo date('Y');?> SOUGO CAREER OPTION Co.,Ltd.</p>

</section>
</footer>


</DIV>

<!-- Modal -->
<div class="modal fade" id="modal_content1">
<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-fullscreen">
<div class="modal-content">
<div class="modal-header">
    <h1 class="modal-title fs-5" id="modal_content_title">コンテンツ</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body" style="padding:0">
<div id="ajx_content_output"><!-- * --></div>
</div>
    <div class="modal-footer">
    <?php /*<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>*/ ?>
    </div>
</div>
</div>
</div>

<?php /*
<!-- Modal -->
<div class="modal fade" id="modal_content2">
<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-fullscreen">
<div class="modal-content">
<div class="modal-header">
    <h1 class="modal-title fs-5" id="modal_content_title">コンテンツ</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body" style="padding:0;overflow-y: hidden;">
<iframe src="" id="iframe_content"><!-- * --></iframe>
</div>
    <div class="modal-footer">

    </div>
</div>
</div>
</div>
*/ ?>

<script>
const text1 = new SplitType('.js-split');
</script>

<?php if(!isProduction()):?>
<script>
    $(function() {
        $(".dev-bg i").on("click", function(e) {
            e.preventDefault();
            var classNum = $(this).data("bg");
            $(this).closest(".mvimg").removeClass(function(index, className) {
                return (className.match(/(^|\s)mv-\S+/g) || []).join(" ");
            }).addClass("mv-" + classNum);
        });
  
    $('[data-js="add_hover"]').hover(function() {
      $(this).closest('.mvimg').addClass('is_hover');
    }, function() {
      $(this).closest('.mvimg').removeClass('is_hover');
    });
  });
</script>
<?php endif;?>


<?php endif; ?>

</BODY>
</HTML>
