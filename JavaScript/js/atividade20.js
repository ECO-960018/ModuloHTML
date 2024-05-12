function valid() {
  let x = document.forms["Teste"]["nome"].value;
  if (x == "") {
    alert("O nome precia ser preenchido!");
    return false;
  }
}