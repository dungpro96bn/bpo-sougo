<?php
// 入力データの取得
$companyName = isset($_POST['company_name']) ? $_POST['company_name'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$tel = isset($_POST['tel']) ? $_POST['tel'] : '';
$content = isset($_POST['content']) ? $_POST['content'] : '';
$iagree = isset($_POST['iagree']) ? $_POST['iagree'] : '';
//貴社名
if (empty($companyName)) {
    $errors['company_name'] = "必須項目です";
} elseif (mb_strlen($companyName, 'UTF-8') > 50) {
    $errors['company_name'] = "貴社名は50文字以内で入力してください。";
}
//ご担当者名
if (empty($name)) {
    $errors['name'] = "必須項目です";
} elseif (mb_strlen($companyName, 'UTF-8') > 50) {
    $errors['name'] = "ご担当者名は50文字以内で入力してください。";
}

// メールアドレス
if (empty($email)) {
    $errors['email'] = "必須項目です";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "有効なメールアドレスを入力してください。";
}

// 電話番号
if (empty($tel)) {
    $errors['tel'] = "必須項目です";
} else {
    $cleanedTel = preg_replace('/[^0-9-]/', '', $tel);
    $telPattern = '/^(\d{10}|\d{11}|\d{2,4}-\d{2,4}-\d{2,4})$/';
    if (!preg_match($telPattern, $cleanedTel)) {
        $errors['tel'] = "有効な電話番号の形式で入力してください";
    }
}

// ご相談・お問合せ内容
if (empty($content)) {
    //$errors['content'] = "必須項目です";
}elseif (mb_strlen($content, 'UTF-8') > 1000) {
    $errors['content'] = "1000文字以内で入力してください。";
}

// 同意
if (empty($iagree)) {
    $errors['iagree'] = "必須項目です";
}
?>
