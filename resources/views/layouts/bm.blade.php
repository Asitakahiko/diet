<!DOCTYPE HTML>
<html>
<head>
    <title>基礎代謝の計算</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
    性別：
    <input type="radio" name="sex" value="men" />
    男性
    <input type="radio" name="sex" value="woman" checked="checked" />
    女性
    <br />
    年齢：<input type="text" id="age" size="2" />才
    <br />
    体重：<input type="text" id="weight" size="3" />kg
    <br />
    <div style="padding: 15px 0px;">
        <input type="button" id="calc" value="基礎代謝を計算" />
    </div>
    <div style="font-size: 12px;">
        あなたの基礎代謝は<span style="font-size: 24px; padding: 0px 5px;" id="result">0</span>kcalです。<br />
        平均値は<span style="font-size: 24px; padding: 0px 5px;" id="ave">0</span>kcalです。
    </div>
</body>
</html>
