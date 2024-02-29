document.write("問1");
document.write("<br>");
document.write("半径5㎝・・・");

function thecirclearea(hankei){
    return "円の面積は"+hankei*hankei*3.14+"㎠です。";
}

document.write(thecirclearea(5));
document.write("<br>");
document.write("半径7㎝・・・");
document.write(thecirclearea(7));
document.write("<br>");
document.write("半径10㎝・・・");
document.write(thecirclearea(10));

document.write("<br>");
document.write("<br>");


document.write("問2");
document.write("<br>");
document.write("Aグループの合計金額・・・");

function sum(otona,kodomo){
    return (otona*500)+(kodomo*200)+"円です。";
}

document.write(sum(2,4));
document.write("<br>");
document.write("Bグループの合計金額・・・");
document.write(sum(1,5));
document.write("<br>");
document.write("Cグループの合計金額・・・");
document.write(sum(3,7));