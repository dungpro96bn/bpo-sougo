<?php
//DEV用 遅延させる
//sleep(5);
//////////////////////////////////////////
//////MAIL送信プログラム
//////////////////////////////////////////
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require(PROGRAM_DIR . '/libs/vendor/autoload.php'); 

// エラーメッセージを格納する連想配列
$errors = [];
// HTMLメールでおくるか
$htmlmail = true;

// リファラーチェック
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
$expected_referer_domain = $protocol . '://' . $host;
$formToken = isset($_POST['formToken']) ? $_POST['formToken'] : '';

// 不正なリファラーからのアクセス
if (strpos($referer, $expected_referer_domain) !== 0) {
$errors['security'] = "不正なアクセスが検出されました。";
echo json_encode(['errors' => $errors]);
header("Location: /");
exit;
}
//CSRF対策
if (empty($_SESSION['form_token']) ||$formToken !== $_SESSION['form_token']) {
$errors['security'] = "セキュリティエラーが発生しました。";
header('Location: index.php');
exit;
}

//Validationファイル
require(PROGRAM_DIR . '/contact_validation.php'); 

// 入力エラーがない場合
if (empty($errors)) {
    try {
        //●管理者向けメール
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        if($htmlmail){
            $mail->isHTML(true); 
        }
        //●自動返信メール
        $autoReplyMail = new PHPMailer(true);
        $autoReplyMail->CharSet = 'UTF-8';
        if($htmlmail){
            $autoReplyMail->isHTML(true); 
        }
        ////////////////////////////////////
        //本番かDEVか判定
        ////////////////////////////////////
        if (isProduction()) {
            $admin_mail_to='itaku_jigyo_member@cam-com.jp';
            $admin_mail_from='itaku_jigyo_member@cam-com.jp';
        } else {
            $admin_mail_to='liber.company0516@gmail.com';
            $admin_mail_from='test@ancs-japan.com';
        }
        //●●管理者向け自動返信メール
        $mail->setFrom($admin_mail_from, '綜合キャリアオプション');
        $mail->addAddress($admin_mail_to);
        $mail->Subject = '【BPOサイト(sc-bpo.jp) 】' . $name . '様よりお問い合わせがありました。';

        //●●ユーザ向け自動返信メール
        $autoReplyMail->setFrom($admin_mail_from, '綜合キャリアオプション');
        $autoReplyMail->addAddress($email); 
        $autoReplyMail->Subject = 'お問い合わせいただきましてありがとうございます。【綜合キャリアオプション】';
    
        //管理者向けメール定型文
        if($htmlmail){
            $mailTemplate = file_get_contents(PROGRAM_DIR . '/template/contact_to_support_html.php');
            $autoReplyMailTemplate = file_get_contents(PROGRAM_DIR . '/template/contact_to_user_html.php'); 
        }else{
            $mailTemplate = file_get_contents(PROGRAM_DIR . '/template/contact_to_support.php');
            $autoReplyMailTemplate = file_get_contents(PROGRAM_DIR . '/template/contact_to_user.php'); 
        }
        $templateVars = [
            '{companyName}' => escapeHtml($companyName),
            '{tel}' => escapeHtml($tel),
            '{name}' => escapeHtml($name),
            '{email}' => escapeHtml($email),
            '{content}' => ($htmlmail) ? nl2br(escapeHtml($content)) : escapeHtml($content),
            '{iagree}' => escapeHtml($iagree),
            //extra
            '{date}' => date('Y-m-d H:i:s'),
            '{ua}' => escapeHtml($_SERVER['HTTP_USER_AGENT']),
        ];
        // ●自動返信メール定型文
        $templateVarsAutoReply = [
            '{companyName}' => escapeHtml($companyName),
            '{tel}' => escapeHtml($tel),
            '{name}' => escapeHtml($name),
            '{email}' => escapeHtml($email),
            '{content}' => ($htmlmail) ? nl2br(escapeHtml($content)) : escapeHtml($content),
            '{iagree}' => escapeHtml($iagree),
            //extra
            //'{date}' => date('Y-m-d H:i:s'),
            //'{ua}' => escapeHtml($_SERVER['HTTP_USER_AGENT']),
        ];

        // LOGに書き込む
        //error_log("Template Vars:\n" . print_r($templateVars, true), 3, $logDirectory . "log_mail.txt");

        //●管理者向けメール送信実行
        $mailBody = strtr($mailTemplate, $templateVars);
        $mail->Body = $mailBody;
        $mail->send();
        //●ユーザー自動返信メール送信実行
        $autoReplyMailBody = strtr($autoReplyMailTemplate, $templateVarsAutoReply);
        $autoReplyMail->Body = $autoReplyMailBody;
        $autoReplyMail->send();
        //AJAX（JS)に成功を返す（その後JS処理でtokenをcontact_done.phpに向けてPOST)
        echo json_encode(['success' => true]);
        exit;
        } catch (Exception $e) {
        $errors['mail'] = "メールの送信中にエラーが発生しました.";
        $errorLogFile = PROGRAM_DIR . '/error.txt';
        if (!file_exists($errorLogFile)) {
            touch($errorLogFile); // ファイルが存在しない場合は新しいファイルを作成
        }
        file_put_contents($errorLogFile, date('Y-m-d H:i:s') . " - " . $e->getMessage() . PHP_EOL, FILE_APPEND);
        file_put_contents($errorLogFile, date('Y-m-d H:i:s') . " - PHPMailer ErrorInfo: " . $mail->ErrorInfo . PHP_EOL, FILE_APPEND);
        echo json_encode(['errors' => $errors]);
        exit;
    }
}
// 入力エラーがある場合、エラーメッセージを返す
echo json_encode(['errors' => $errors]);

//////////////////////////////////////////////
// $mail->AltBody = $body;
// $mail->isSMTP();
// $mail->Host = 'smtp.example.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'your_username';
// $mail->Password = 'your_password';
// $mail->SMTPSecure = 'tls'; // tls or ssl
// $mail->Port = 587; // use 465 for ssl
// ■メールの設定
// $mail->CharSet = 'UTF-8';
// $mail->isHTML(true);
// ■送信元(FROM)
// $mail->setFrom("xxx@xxx.com", "HP");
// $mail->setFrom("xxx@xxx.com","HP");
// ■送信先(TO,CC,BCC)
// $mail->addAddress('xxx@xxx.com');
// $mail->addCC('xxx@xxx.com', 'CC Recipient');
// $mail->addBCC('xxx@xxx.com', 'BCC Recipient');
// $mail->addAttachment('/path/to/file.pdf', 'Document.pdf');
// ■SUBJECT
// $mail->addCC('xxx@xxx.com', 'CC Recipient');
// $mail->addBCC('xxx@xxx.com', 'BCC Recipient');
// $mail->addAttachment('/path/to/file.pdf', 'Document.pdf');
?>
