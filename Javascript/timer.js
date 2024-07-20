let timer;
let seconds = 0;
let minutes = 0;
let hours = 0;
let isTimerRunning = false;

function startTimer() {
  if (!isTimerRunning) {
    isTimerRunning = true;
    timer = setInterval(updateTimer, 1000);
    document.getElementById("startBtn").disabled = true;
  }
}

function stopTimer() {
  clearInterval(timer);
  isTimerRunning = false;
  document.getElementById("startBtn").disabled = false;
}

function resetTimer() {
  clearInterval(timer);
  isTimerRunning = false;
  seconds = 0;
  minutes = 0;
  hours = 0;
  document.getElementById("display").textContent = "00:00:00";
  document.getElementById("startBtn").disabled = false;
}

function updateTimer() {
  seconds++;
  if (seconds >= 60) {
    seconds = 0;
    minutes++;
    if (minutes >= 60) {
      minutes = 0;
      hours++;
    }
  }

  let displayHours = hours < 10 ? "0" + hours : hours;
  let displayMinutes = minutes < 10 ? "0" + minutes : minutes;
  let displaySeconds = seconds < 10 ? "0" + seconds : seconds;

  document.getElementById("display").textContent = displayHours + ":" + displayMinutes + ":" + displaySeconds;
}
