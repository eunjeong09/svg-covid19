// 사각형
let rectArea = Snap('#rectArea');
let rect = rectArea.rect(10, 10, 50, 50);
rect.attr({
    fill:'#ff3f3f',
    stroke:"#000",
    strokeWidth:"3"
});

// 원
let circleArea = Snap('#circleArea');
let circle = circleArea.circle(50, 50, 50);
circle.attr({
    fill:'#af54ff'
})

// 구름
let paper = Snap("#cloudArea");
let water = paper.circle(50, 50, 30);
// Lets put this small circle and another one into a group:
let discs = paper.group(water, paper.circle(90, 50, 30), paper.circle(120, 50,30));
discs.attr({
    fill:'#2870ff',
    strokeWidth:2
});

// discs.prependTo(paper);

// 선1
let lineArea1 = Snap('#lineArea1');
let line1 = lineArea1.line(50, 50, 100, 100);
line1.attr({
    fill:'#000',
    strokeWidth:3,
    stroke:"#000"
});

// 컵
let cup = Snap('#cup');

// 컵 안에 물 그리기
// let cupWater = cup.path(d="M26,40 C 50 20, 65 10, 80 20 S 95 30, 110 20, 130 13, 147 25 L125, 150 45, 150z")

// cupWater.attr({
//     stroke:"#E78484",
//     fill:"#E78484",
//     strokeWidth:3,
//     strokeLinecap:"round"
// });

// water animation

cup.polygon(20,5,150,5,125,150,45,150).attr({ fill: "none", stroke: "#000", strokeWidth:"3" });

// cup.hover(function(){
//     wave();
// })

// function wave() {
//     cup.animate({
//       transform: 't100,0'
//     },2000)
//   };
