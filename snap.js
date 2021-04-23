
// 컵
let cup = Snap('#cup');

// 컵 안에 물 그리기
let cupWater = cup.path(d = "M26,40 C 50 20, 65 10, 80 20 S 95 30, 110 20, 130 13, 147 25 L125, 150 45, 150z")

cupWater.attr({
    stroke: "#E78484",
    fill: "#E78484",
    strokeWidth: 3,
    strokeLinecap: "round"
});

// water animation
cupWater.animate({
    d: "M24,20 C 50 40, 65 30, 80 13 S 95 25, 110 15, 130 40, 147 15 L125, 150 45, 150z;",
}, 1000, mina.linear)

cup.polygon(20, 5, 150, 5, 125, 150, 45, 150).attr({ fill: "none", stroke: "#000", strokeWidth: "3" });



let s = Snap('#circleTest');
console.log(s);

var circle_1 = s.circle(200, 200, 140);
var circle_2 = s.circle(150, 200, 140);
 
var circles = s.group(circle_1, circle_2);
 
circles.attr({
  fill: 'coral',
  fillOpacity: .6
});