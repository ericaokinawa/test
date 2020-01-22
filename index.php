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
$notes = "";

$error_message = "";

$input_completed_user_name ="";
$input_completed_user_address ="";
$input_completed_notes ="";

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
        echo $user_notes;
    }
}

// 4. どのボタンが押されたか判別
function submit_user_name() {
    if ($_POST['submit_user_name']){
        echo '【名前（フリガナ）】の送信ボタンが押されました';
    } else {

    }
}

function submit_user_address() {
    if ($_POST['submit_user_address']){
        echo '【住所】の送信ボタンが押されました';
    } else {

    }
}

function submit_user_notes() {
    if ($_POST['submit_user_notes']){
        echo '【備考】の送信ボタンが押されました';
    } else {

    }
}

// 6. 入力画面に確認画面で入力されたデータを表示する
//（完了しましたという文字列も表示する）
if ($compleets_data) {
    echo "<a href='./inputform.html'></a>";
} else {

}






/*

// 変数初期化
$user_name = "$_POST["name"]";
$address = "";
$other = "";
$error_message = "<p style='color:red;'>*未入力です。</p>";
$done_data = "";
$data_in = "";
$data_out = "";


// 未入力時のエラー表示
// $var_name = """";
// $error_message = ""<p style='color:red;'>*未入力です。</p>"";
// $name = htmlspecialchars($_POST[""name""],ENT_QUOTES, 'UTF-8');
//
// if (empty($var_name)) {
//   echo $error_message;
// } else {
//   echo $name;
// }

if (empty($user_name)) {
    echo
} else {
    echo 
}


function error_name()
{
    $name = htmlspecialchars($_POST["name"],ENT_QUOTES, 'UTF-8');

    if (empty($name))
    {
      echo $error_message;
    } else {
      echo $name;
    }
}

function error_address()
 {
    $error_message =  "<p style='color:red;'>*未入力です。</p>";
    $address = htmlspecialchars($_POST["address"],ENT_QUOTES, 'UTF-8');

    if (empty($address))
    {
      echo $error_message;
    } else {
      echo $address;
    }
}

function error_other()
 {
    $error_message = "<p style='color:red;'>*未入力です。</p>";
    $other = htmlspecialchars($_POST["other"],ENT_QUOTES, 'UTF-8');

    if (empty($other))
    {
      echo $error_message;
    } else {
      echo  $other;
    }
}

// 名前、住所のボタン、備考欄のボタンの動き
if($done_data)
{
  echo $name;
  echo htmlspecialchars($_POST["address"],ENT_QUOTES, 'UTF-8');
  echo htmlspecialchars($_POST["other],ENT_QUOTES, 'UTF-8');
} else {
  echo "error" . "<br>;
}



$name = htmlspecialchars($_POST["name"],ENT_QUOTES, 'UTF-8');
$address = htmlspecialchars($_POST["address"],ENT_QUOTES, 'UTF-8');
$other = htmlspecialchars($_POST["other"],ENT_QUOTES, 'UTF-8');

// ファイルの取り出し
$data_in = file_get_contents('../../test/form.txt');

// ファイルへの書き込み
$data_out = file_put_contents('../../test/form.txt',$name.$address.$other);

*/

?>


