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

/*
// 직선 그리기 animation

var s = Snap("#myLine");

//Line parameters (x1, y1, x2, y2)
var line = s.line(30, 45, 30, 45);
line.attr({
    stroke: "#000",
    strokeWidth: 2
});

//Old x2 values is 30 and now it is increasing to 70 with 1 second duration
line.animate({x2: 70}, 1000);
*/