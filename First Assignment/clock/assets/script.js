function updateTime() {
  var currentTime = new Date();
  var hours = currentTime.getHours();
  var minutes = String(currentTime.getMinutes()).padStart(2, "0");
  var seconds = String(currentTime.getSeconds()).padStart(2, "0");
  var dayOfWeek = currentTime.getDay(); // 0 (Sunday) to 6 (Saturday)

  // convert 24 to 12
  var ampm = hours >= 12 ? "PM" : "AM";
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  hours = String(hours).padStart(2, "0");

  // update time display
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;

  // update AM/PM
  if (ampm === "AM") {
    document.getElementById("am").style.backgroundColor = "#e01b21";
    document.getElementById("pm").style.backgroundColor = "#000";
  } else {
    document.getElementById("pm").style.backgroundColor = "#e01b21";
    document.getElementById("am").style.backgroundColor = "#000";
  }

  // update date
  document.getElementById("day").innerHTML = String(
    currentTime.getDate()
  ).padStart(2, "0");
  document.getElementById("month").innerHTML = String(
    currentTime.getMonth() + 1
  ).padStart(2, "0");
  document.getElementById("year").innerHTML = currentTime.getFullYear();

  // update weekdays
  const weekdays = [
    "SUNDAY",
    "MONDAY",
    "TUESDAY",
    "WEDNESDAY",
    "THURSDAY",
    "FRIDAY",
    "SATURDAY",
  ];
  document.querySelectorAll('input[type="radio"]').forEach((radio, index) => {
    radio.checked = index === dayOfWeek;
    // Clear any existing text and then set the correct weekday text
    radio.nextSibling.textContent = " " + weekdays[index];
  });
}

// update time every second
setInterval(updateTime, 1000);

// initial call to display the time immediately
updateTime();
