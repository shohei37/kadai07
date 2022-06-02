## 課題{07} -PHPを使用したアプリ-

タイトル：偏食レストランサーチャー　

※実際に作ろうと思っているプロダクトの作成途中過程です。

**実装機能**

①SQLを活用したユーザー登録機能
　　　・名前、e-mail、生年月日、住んでいる地域、偏食タイプ
   
②ホットペッパーAPIを活用した飲食店検索機能
　　　・地域検索で飲食店の一覧が見れます

## 課題内容（どんな作品か）

why me：自身筋トレをして減量をする時に極端に脂質もしくは糖質を制限した食事をすることが多い
　　　　　　　　　　　　　　　→前提：外食は栄養素が分からないので自炊で食事を作ることが多い
       課題：①自炊することが多いが外食を楽しみたい→店探しが非常に大変
       　　　　　　　 ②忙しくて外で食べないといけない時に店が見つからない
       　
        上記のような課題を感じている。
        
作りたい世界観：自分のように極端な食事を行う人（トレーニー、糖尿病患者、ヴィーガン、ベジタリア等）が
　　　　　　　　　　　　　　　　　　　　　　　　　安心して外食を楽しめる世界
               

# 工夫した点・こだわった点

①実際に使いたい機能としてユーザー登録画面のデザインにこだわりました
②ホットペッパーAPIを活用して地域検索で飲食店を検索できるようにしました
　　　　└他の検索軸との連動は随時実装予定

# 質問・疑問（あれば）

①セレクトボックスタイプのDBへの情報送信について

inputでテキストタイプの項目はDBに情報を飛ばせたのですが
selectで作ったセレクトボックスのデータは条件選択、データ送信後
SQLに情報が登録されなかったのでセレクトボックス情報をどうやったらSQLに
登録できるか知りたいです。

②form methodのgetとpostの両立について

ホットペッパーAPIを活用するにあたってform methodのgetでAPIから情報を取得するように
しましたが取得した情報をDBに保存した際にform method　のpostを重ねて記載すると
APIからのgetができなくなってしまったので両立の方法を知りたいです

# その他（感想、シェアしたいことなんでも）
