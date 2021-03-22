function getRandom() {
  const randomNumber = Math.floor(Math.random() * (40 - 1) + 1);

  let randomText = document.getElementById("random");
  randomText.innerText = randomNumber;

  setCup(randomNumber);
}

function setCup(randomNumber) {
    if(randomNumber < 11){
        return drawCup("one");
    }
    if(randomNumber < 21){
        return drawCup("two");
    }
    if(randomNumber < 31){
        return drawCup("three");
    }
    if(randomNumber < 41){
        return drawCup("four");
    }
}

function drawCup(cupId) {
  let cup = document.querySelector("#" + cupId);
  let svg = cup.childNodes[1].cloneNode(true);

  let cupArea = document.getElementById("cupArea");
  // 자식요소 모두 삭제해서 대체하기
  let last;
  while (last = cupArea.lastChild) cupArea.removeChild(last);
  cupArea.appendChild(svg);
}

// 로드되자마자
getRandom();
let interval = setInterval(getRandom, 5000);
