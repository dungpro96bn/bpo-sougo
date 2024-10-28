<?php
require("./app/common.php");
$section = isset($_GET['section']) ? $_GET['section'] : '';
?>
<?php if($section == 1):?>
<article class="modal-content contents-case">
    <figure class="this-mv">
        <h2>印刷業界</h2>
        <img src="img/pic/case_01.jpg?<?= VER ?>" alt="印刷業界">
    </figure>
    <section>
    <h3>大型補助金に係る審査業務</h3>
    <table>
        <tr>
            <th><strong>業界</strong></th>
            <td>印刷</td>
        </tr>
        <tr>
            <th><strong>規模</strong></th>
            <td>最大3000名</td>
        </tr>
        <tr>
            <th><strong>履行場所</strong></th>
            <td>クライアント借り入れの外部拠点</td>
        </tr>
        <tr>
            <th><strong>業務内容</strong></th>
            <td>大型補助金に係る審査業務</td>
        </tr>
        <tr>
            <th><strong>導入背景</strong></th>
            <td>コロナ禍による景気悪化に伴い、経営が厳しくなった中小事業者に対して経営支援すべく立ち上がった国策の事業となります。
                事業規模が非常に大きいものの、受託事業者決定から履行開始までの期間が少ないことから当社への発注が決定。</td>
        </tr>
        <tr>
            <th><strong>ポイント</strong></th>
            <td>経験豊富な業務設計者.社員管理者/短期間での爆発的な供給力/豊富な類似案件実績</td>
        </tr>
    </table>
</section>
</article>
<?php endif; ?>


<?php if($section == 2):?>
<article class="modal-content contents-case">
    <figure class="this-mv">
        <h2>不動産業界</h2>
        <img src="img/pic/case_02.jpg?<?= VER ?>" alt="不動産業界">
    </figure>


    <section>
        <h3>書類不備確認、内容照会、データ登録、書類作成、書類発送</h3>
        <table>
            <tr>
                <th><strong>業界</strong></th>
                <td>不動産</td>
            </tr>
            <tr>
                <th><strong>規模</strong></th>
                <td>15名</td>
            </tr>
            <tr>
                <th><strong>履行場所</strong></th>
                <td>弊社BPOセンター</td>
            </tr>
            <tr>
                <th><strong>業務内容</strong></th>
                <td>書類不備確認、内容照会、データ登録、書類作成、書類発送</td>
            </tr>
            <tr>
                <th><strong>導入背景</strong></th>
                <td>営業所で営業社員が付帯業務として行っていた事務処理業務を、コア業務への集中と残業時間削減の目的</td>
            </tr>
        </table>
</section>
</article>
<?php endif; ?>

<?php if($section == 3):?>
<article class="modal-content contents-case">

    <figure class="this-mv">
        <h2>公共団体</h2>
        <figure><img src="img/pic/case_03.jpg?<?= VER ?>" alt="公共団体"></figure>
    </figure>

    <section>
        <h3>審査システム構築、申請書類審査業務、コールセンター、窓口業務、発送物作成/発送、郵便不達管理など</h3>
        <table>
            <tr>
                <th><strong>業界</strong></th>
                <td>公共団体</td>
            </tr>
            <tr>
                <th><strong>規模</strong></th>
                <td>90名</td>
            </tr>
            <tr>
                <th><strong>履行場所</strong></th>
                <td>弊社BPOセンター</td>
            </tr>
            <tr>
                <th><strong>業務内容</strong></th>
                <td>審査システム構築、申請書類審査業務、コールセンター、窓口業務、発送物作成/発送、郵便不達管理など</td>
            </tr>
            <tr>
                <th><strong>導入背景</strong></th>
                <td>国の指針により急な事業化が決まるも、業務量的に既存職員では対応できず。
                    また、CRMや進捗管理システムなどを早急に構築する必要があることもあり外部委託化が決定。
                    要件定義、業務フロー作成、システム選定及び構築、業務スペースのレイアウト変更などの各種業務効率化施策に関する当社実績やノウハウに魅力を感じていただき、選定いただく。</td>
            </tr>
            <tr>
                <th><strong>ポイント</strong></th>
                <td>二次元バーコード、審査結果や不備照会通知の自動出力機能などを有したシステムを構築。
                    複数回の制度変更や要件変更に対しても業務フローの見直しやシステム改修により柔軟に対応することで、
                    業務の合理化・効率化に成功</td>
            </tr>
        </table>

</section>    
</article>
<?php endif; ?>


<?php if($section == 4):?>

<article class="modal-content contents-case">

    <figure class="this-mv">
        <h2>物流業界</h2>
        <figure><img src="img/pic/case_04.jpg?<?= VER ?>" alt="物流業界"></figure>
    </figure>

    <section>
        <h3>EC関連企業倉庫内での構内作業員数千名派遣、人員管理、作業業務委託、コールセンター対応</h3>
        <table>
            <tr>
                <th><strong>業界</strong></th>
                <td>物流</td>
            </tr>
            <tr>
                <th><strong>規模</strong></th>
                <td>最大1300名</td>
            </tr>
            <tr>
                <th><strong>履行場所</strong></th>
                <td>全国</td>
            </tr>
            <tr>
                <th><strong>業務内容</strong></th>
                <td>EC関連企業倉庫内での構内作業員数千名派遣、人員管理、作業業務委託、コールセンター対応</td>
            </tr>
            <tr>
                <th><strong>導入背景</strong></th>
                <td>
                    コロナ禍〜コロナ以降でEC需要が増加。
希望の時間に希望の商品を届けるという顧客ニーズに合わせる為、人員確保と業務生産性を高める必要がある。
業界トップクラスの人員供給力と、管理システムによる定着と生産性改善の評価をもらい発注が決定。
                </td>
            </tr>
            <tr>
                <th><strong>ポイント</strong></th>
                <td>
                    全国カバーできる人員供給力/管理者・システム併用しての一括管理/業務設計者による委託現場の構築/物流ワーカー以外のリソース提案
                </td>
            </tr>
        </table>
</section>
</article>
<?php endif; ?>


<?php if($section == 5):?>

<article class="modal-content contents-case">

    <figure class="this-mv">
        <h2>物流業界</h2>
        <figure><img src="img/pic/case_05.jpg?<?= VER ?>" alt="物流業界"></figure>
    </figure>
   
    <section>
        <h3>倉庫内での雑貨ピッキング・梱包等の軽作業</h3>
        <table>
            <tr>
                <th><strong>業界</strong></th>
                <td>物流</td>
            </tr>
            <tr>
                <th><strong>規模</strong></th>
                <td>約300坪　人数30名程</td>
            </tr>
            <tr>
                <th><strong>履行場所</strong></th>
                <td>静岡県クライアント倉庫</td>
            </tr>
            <tr>
                <th><strong>業務内容</strong></th>
                <td>倉庫内での雑貨ピッキング・梱包等の軽作業</td>
            </tr>
            <tr>
                <th><strong>導入背景</strong></th>
                <td>
                    作業の統一化が図れてきた段階で自社リソースを管理・改善等に充てていきたいというクライアント要望があり生産性の向上とコストダウンが導入の目的
                </td>
            </tr>
     
        </table>
</section>
</article>
<?php endif; ?>
