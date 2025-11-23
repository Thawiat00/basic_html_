let i = 0;

function timedCount() {
  i++;
  postMessage(i);
  setTimeout(timedCount, 500); // นับทุก 0.5 วินาที
}

timedCount();
