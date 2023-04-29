let currentTable = null;

function showTable(tableNum) {
  if (currentTable === tableNum) {
    return;
  }

  if (currentTable !== null) {
    hideTable(currentTable);
  }

  fetch(`asset/PHP/table${tableNum}.php`)
    .then(response => response.text())
    .then(data => {
      document.getElementById("data").innerHTML = data;
      document.getElementById("data").style.display = "block";
      setTimeout(function() {
        document.getElementById("data").style.opacity = 1;
        var table = document.getElementById("myTable");
        if (table) {
          var topPos = table.getBoundingClientRect().top + window.pageYOffset - 90;
          window.scrollTo({
            top: topPos,
            behavior: "smooth"
          });
        }
      }, 10);
      document.getElementById(`showTable${tableNum}Btn`).style.display = "none";
      document.getElementById(`hideTable${tableNum}Btn`).style.display = "inline-block";

      currentTable = tableNum;
    });
}

function hideTable(tableNum) {
  document.getElementById("data").style.opacity = 0;
  document.getElementById("data").style.display = "none";
  document.getElementById(`showTable${tableNum}Btn`).style.display = "inline-block";
  document.getElementById(`hideTable${tableNum}Btn`).style.display = "none";

  currentTable = null;
}
