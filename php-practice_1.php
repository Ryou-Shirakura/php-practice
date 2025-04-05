<?php
// Q1 変数と文字列
$name = '白倉';
echo"私の名前は「{$name}」です。";
// Q2 四則演算
$num = 5 * 4;
$divided = $num / 2;
echo$num ."\n" .$divided;
// Q3 日付操作
$currentTimestamp = time() + (9 * 3600);
echo '現在の時刻は'. date("Y年m月d日 H時i分s秒", $currentTimestamp);
// Q4 条件分岐-1 if文
$device = "windows";

if ($device === "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device === "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}

// Q5 条件分岐-2 三項演算子
$age = 16;

echo ($age < 18) ? "未成年です。" : "成人です。";

// Q6 配列
$kanto_eria = ["東京都", "神奈川県", "埼玉県", "千葉県", "茨城県", "栃木県", "群馬県", "山梨県"];

echo $kanto_eria[5] . "と" . $kanto_eria[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$kanto = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

foreach ($kanto as $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
$pref = "埼玉県";

if (array_key_exists($pref, $kanto)) {
    echo $pref . "の県庁所在地は、" . $kanto[$pref] . "です。";
}

// Q9 連想配列-3
$non_kanto = [
    "愛知県" => "名古屋市",
    "大阪府" => "大阪市"
];

$all_prefectures = array_merge($kanto, $non_kanto);

foreach ($all_prefectures as $prefecture => $capital) {
    if (array_key_exists($prefecture, $kanto)) {
        echo $prefecture . "の県庁所在地は、" . $capital . "です。\n";
    } else {
        echo $prefecture . "は関東地方ではありません。\n";
    }
}

// Q10 関数-1
function hello($name){
    echo $name. 'さん、こんにちは。'."\n";
}

hello('高橋');
hello('伊藤');

// Q11 関数-2
$price = 1000;
$tax = 10;

function calcTaxInPrice($price, $tax) {
    $tax_in_price = $price * (1 + $tax / 100);
    return $tax_in_price;
}
$taxInPrice = calcTaxInPrice($price, $tax);
echo $price .  "円の商品の税込価格は"  . $taxInPrice . "円です。";

// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 != 0) {
        return $num . "は奇数です。";
    }
    else {
        return $num . "は偶数です。";
    }
}
echo distinguishNum(5);
echo distinguishNum(8);

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。";
        case 'C':
            return "合格ですが追加課題があります。";
        case 'D':
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}
echo evaluateGrade('C');
echo evaluateGrade('D');
?>