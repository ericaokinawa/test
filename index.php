<?php
// 1. 一番最初にindex.phpにアクセスしたら、入力画面を出す
// 2. 入力データを入力後送信ボタンが押されたら、確認画面を出す
// 3. 入力データが空で送信ボタンが押されたら、未入力エラーを出す、
// 入力されてたら、入力データを表示する
// 4. どのボタンが押されたか判別
// 5. 確認画面で完了が押されたら、入力画面に表示する
// 6. 入力画面に確認画面で入力されたデータを表示する
//（完了しましたという文字列も表示する）
// 7. 確認画面で戻るをしたら、データを引き継いで入力画面を表示する
// （完了しましたという文字列は表示しない）


// 変数の初期化
$user_name = "";
$user_address = "";
$user_notes = "";

$error_message = "";

$submit_user_name = "";
$submit_user_address = "";
$submit_user_notes = "";

$input_completed_user_name = "";
$input_completed_user_address = "";
$input_completed_notes = "";




// 1. 一番最初にindex.phpにアクセスしたら、入力画面を出す
if (false) {
    include('./inputform.html');
} else {
    include('./data.html');
}

// 3. 入力データが空で送信ボタンが押されたら、未入力エラーを出す。
// 入力されてたら、入力データを表示する
function user_name() {
    $error_message = "<p style='color:red;'>*未入力です。</p>";
    $user_name = htmlspecialchars($_POST["user_name"],ENT_QUOTES, 'UTF-8');
    if (empty($user_name)) {
        echo $error_message;
    } else {
        echo $user_name;
    }
}

function user_address() {
    $error_message = "<p style='color:red;'>*未入力です。</p>";
    $user_address = htmlspecialchars($_POST["user_address"],ENT_QUOTES, 'UTF-8');
    if (empty($user_address)) {
        echo $error_message;
    } else {
        echo $user_address;
    }
}

function user_notes() {
    $error_message = "<p style='color:red;'>*未入力です。</p>";
    $user_notes = htmlspecialchars($_POST["user_notes"],ENT_QUOTES, 'UTF-8');
    if (empty($user_notes)) {
        echo $error_message;
    } else {
        echo  nl2br($user_notes);
    }
}

// 4. どのボタンが押されたか判別
function submit_user_name() {
    $submit_user_name = htmlspecialchars($_POST["submit_user_name"],ENT_QUOTES, 'UTF-8');
    if ($submit_user_name){
        echo $submit_user_name;
    } else {

    }
}

function submit_user_address() {
    $submit_user_address = htmlspecialchars($_POST["submit_user_address"],ENT_QUOTES, 'UTF-8');
    if ($submit_user_address){
        echo $submit_user_address;
    } else {

    }
}

function submit_user_notes() {
    $submit_user_notes = htmlspecialchars($_POST["submit_user_notes"],ENT_QUOTES, 'UTF-8');
    if ($submit_user_notes){
        echo  nl2br($submit_user_notes);
    } else {

    }
}

// 6. 入力画面に確認画面で入力されたデータを表示する
//（完了しましたという文字列も表示する）
// function input_completed_user_name() {
//     // $input_completed_user_name = htmlspecialchars($_POST["input_completed_user_name"],ENT_QUOTES, 'UTF-8');
// $compleets_data = ''
//     if ($compleets_data) {
//         echo "OK";
//     } else {
//         echo "NG";
//     }
// }



?>
