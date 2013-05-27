<?php
    session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <meta name="author" content="M@nyu">
                <meta http-equiv="Content-language" content="ja">
                <title>通知ったー α ﾃｽﾄ</title>
    </head>
    <style type="text/css">
      /*  div{
            outline: 1px solid red;
        }*/
        *{
            margin:0;
            padding:0;
        }
        body{
            font-family:'ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
            font-size:11px;
            background-color: #33ccff;
        }
        #wrap{
            width:900px;
            margin:0 auto;
            background-color:#ffffff;
        }
        #content{
            width:880px;
            height:530px;
            padding:20px;
        }
        #main{
            width:550px;
          height:500px; 
            margin:0 auto;
            float:left;
        }
        #title{
            padding:20px;
            font-size:3em;
            margin:0 auto;
            text-align:center;
        }
        #login{
            width:240px;
            height:110px;
            margin:0 auto;
            padding:20px;
            text-align:center;
            float:right;
        }
        #login button[type="submit"]{
            font-size:2.5em;
            height:70px;
            width:200px;
            color:#CC0000;
            background-color:#33aaFF;
            -webkit-border-radius:15px;
            -moz-border-radius:15px;
            border-radius: 15px;
            border:0px;            
        }
        #login button:hover{
            background-color: #66DDFF;
            color:F00;
        }
        #detail{
            font-size:1.5em;
            margin:20px auto 0 50px;
            padding:20px 0;
            width:400px;
            text-align:left;
            float:left;
        }
        #footer{
            width:100%;
            border-top:1px solid gray;
        }
        #footer p{
            margin:10px;
            padding-bottom: 10px;
            text-align: center;
        }
        #timeline{
            margin:0px;
            width:280px;
            float:right;
        }
        .twitter-timeline{
            width: 250px;
            height: 500px;
        }
    </style>

<body>
    <div id="wrap">
        <div id="title">
            <h1>通知ったー α</h1>
        </div>
        <div id="content">
            <div id="main">
                <div id="login">
                    <form action="./redirect.php">
                        <button type="submit">Login</button>
                    </form>
                </div>
                <div id="detail">
                    <h2>通知ったーについて</h2>
                    <ul>                        
                        <li>定期的に、いろんな通知を送るやつです。</li>
                        <li>簡易的なbotみたいなやつです。</li>
                        <li>開発中なので、不具合とかあっても自己責任です。</li>
                        <li>使い方？見ればわかるだろ（威嚇）</li>
                        <li><b>クドかわいいよぺろぺろ</b></li>
                    </ul>
                </div>
            </div>
            <div id="timeline">            
                <a class="twitter-timeline" href="https://twitter.com/3mkn" data-widget-id="338889333480226816">Timeline表示テスト</a>
                <script>
                    !function(d,s,id){
                        var js,fjs=d.getElementsByTagName(s)[0],
                        p=/^http:/.test(d.location)?'http':'https';
                        if(!d.getElementById(id)){
                            js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js,fjs);
                        }
                    }(document,"script","twitter-wjs");
                </script>
            </div>
        </div>  

        <div id="footer">
            <p>Copyright &copy; 2013 M@nyu All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
