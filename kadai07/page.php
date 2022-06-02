<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PFCページ</title>

    
    <script src="https://kit.fontawesome.com/4876f0dc74.js" crossorigin="anonymous"></script>


    <style>

        body{
            width:100%;
        }
        

        .header{
            background-color: green;


        }
        .title{
            text-align:center;
        }

        .form{
            margin:auto;
            text-align:center;
        }



    </style>

</head>
<body>

<header>

    <div class="header">
    <h1 class="title">PFCグルメ</h1>        
    </div>
</header>


<form action="cgi-bin/example.cgi" method="post" class="form">
  <p>検索したいキーワードを入力してください。</p>
  <i class="fa-solid fa-magnifying-glass"></i>
  <select name="living" size="1" id="living">
     <option value="">都道府県</option>
    <option value="">北海道</option>
    </select>
    <select name="food-type" size="1" id="food-type">
     <option value="">食タイプ</option>
    <option value="">ケトジェニック</option>
    </select>  
  <input type="search" name="search" placeholder="キーワード検索">
  <input type="submit" name="submit" value="検索">
</form>









<!-- 店名、住所、メニュー、PFC

お気に入りに追加
→店名、住所等をmysqlに登録
→ボタンアクションでmysqlからページに表示
→選択すると詳細情報が見れる
→htmlとDBの情報を表示する -->




<!-- 奥田グリル
東京都港区4-6-1
鳥もも肉のグリル200g
PFC:
p
F
C -->


<canvas>あああ</canvas>

<!-- 飲食店情報のAPIと接続 店名、住所-->



<!-- 自身の現在地を取得 -->




    
</body>
</html>