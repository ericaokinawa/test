<!DOCTYPE html>
<html lang="ja">
<head>
        <meta charset="utf-8">
        <title>会員登録ページ</title>
</head>

<body>
        <!-- actionでデータ送り先のPHPファイルを指定、methodで入力データの受け渡し方 -->
        <h3>会員登録ページ</h3>

        <form action="index.php" method="post">
                <label for="user_name">名前（フリガナ）</label>
                        <input type="text" name="user_name" id="name" maxlength="18" value="">
                        <input type="submit" name="submit_user_name">
                        <p><?php user_name(); ?></p>
                        <!-- <p><?php input_completed_user_name(); ?></p> -->


                <label for="user_address">住所</label>
                        <input type="text" name="user_address" id="address" maxlength="255" value="">
                        <input type="submit" name="submit_user_address">
                        <p><?php user_address(); ?></p>
                        <p><?php input_completed_user_address(); ?></p>

        </form>


      <!--   <form action="data.php" method="post">
                <label for="other">備考欄</label>
                        <textarea name="other" id="other" row="5" cols="50"></textarea>
                        <input type="submit" name="submit_other">
                        <input type="hidden" name="other_hidden">
        </form> -->

<!-- <p><?php echo "入力完了<br>".$data_in; ?></p> -->

</body>
</html>
