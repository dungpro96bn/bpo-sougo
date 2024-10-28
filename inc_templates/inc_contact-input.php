<?php /*==========================
CONTATCT
===============================*/ ?>

<SECTION style="margin:auto">
<table class="fm-table">
<tbody>
<tr class="r">
<th>貴社名</th>
<td>
<span class="error" id="error_company_name"></span>
<input type="text" name="company_name" placeholder="例）株式会社綜合キャリアオプション" class="form-control w-100">
</td>
</tr>
<tr class="r">
<th>ご担当者名</th>
<td>
<span class="error" id="error_name"></span>
<input type="text" name="name" value="" placeholder="例）山田太郎" size="50" class="form-control">
</td>
</tr>
<tr class="r">
<th>メールアドレス</th>
<td>
<span class="error" id="error_email"></span>
<input type="email" name="email" id="email" placeholder="例）info@abc.com" value="" size="75" class="form-control">
</td>
</tr>
<tr class="r">
<th>電話番号</th>
<td>
<span class="error" id="error_tel"></span>
<input type="tel" name="tel" id="tel" pattern="[0-9\-]*" placeholder="例）03-1234-5678" value="" size="30" class="form-control js-number">
<script>
    $(function() {
        $('.js-number').on('input', function() {
            // 全角数字を半角に変換
            var convertedValue = $(this).val().replace(/[０-９]/g, function(s) {
                return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
            });
            $(this).val(convertedValue);
        });
    });
</script>
</td>
</tr>
<tr>
<th>お問い合わせ内容</th>
<td>
<span class="error" id="error_content"></span>
<textarea name="content" placeholder="ご相談されたい内容をご記入くださいませ。" cols="40" rows="3" class="form-control js-autoheight"></textarea>
</td>
</tr>
<!--*-->
<tr class="r">
<th>個人情報の取り扱い</th>
<td>
<span class="error" id="error_iagree"></span>
    <div class="fm-agreement">
    <label for="iagree"><input type="checkbox" name="iagree" id="iagree" value="内容に同意" required>同意する</label>
    <p> お客様よりお寄せ頂く個人情報は、お問い合わせ・ご要望へのご回答、情報提供に限り使用させていただきます。<br>
    当社の「<a href="https://sougo-career.co.jp/privacypolicy/" target="_blank">個人情報の取り扱いについて</a>」
    をお読みのうえ、「同意する」にチェックをつけたうえでご利用ください。
    </p>
    </div>
</td>
</tr>
</tbody>
</table>
<input type="hidden" name="formToken" value="<?php echo $formToken; ?>">
</SECTION>