<?php

// 1. 一番最初にindex.phpにアクセスしたら、入力画面を出す
// 2. 入力データを入力後送信ボタンが押されたら、確認画面を出す
// 3. 入力データが空で送信ボタンが押されたら、未入力エラーを出す
// 4. 確認画面で完了が押されたら、確認画面のデータを引き継いで入力画面に表示する
//（完了しましたという文字列も表示する）
// 5. 確認画面で戻るをしたら、データを引き継いで入力画面を表示する
// （完了しましたという文字列は表示しない）
 
// 変数の初期化
$user_name = "";
$user_address = "";
$error_message = "";
$input_completed_user_name ="";


if (false) {
    include('./inputform.php');
} else {
    include('./data.php');
}

// 入力チェック
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


// 入力確認画面
function input_completed_user_name() {
    $input_completed_user_name = htmlspecialchars($_POST["input_completed_user_name"],ENT_QUOTES, 'UTF-8');
    if ($input_completed_user_name){
        echo $user_name;
    } else {

    }
}

// function input_completed_user_address() {
//     $input_completed_user_address = htmlspecialchars($_POST["input_completed_user_address"],ENT_QUOTES, 'UTF-8');
//     if ($input_completed_user_address){
//         echo $user_address;
//     } else {

//     }
// }


// ボタン判別確認
function submit_user_name() {
    if ($_POST['submit_user_name']){
        echo '名前の送信ボタンが押されました！';
    } else {

    }
}

// function submit_user_address() {
//     if ($_POST['submit_user_address']){
//         echo '名前の送信ボタンが押されました！';
//     } else {

//     }
// }




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
