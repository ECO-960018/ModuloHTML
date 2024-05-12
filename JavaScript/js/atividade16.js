function verificaPrimo(p) {

let primo = true;

if (p == 1) {
    return "NÃO É PRIMO"
} else if (p > 1) {

    for (i = 2; i < p; i++) {
        if (p%i==0) {
            primo = false;
            break;
        }
    }

    if (primo) {
        return "É PRIMO"
    } else {
        return "NÃO É PRIMO"
    }
}
}

console.log("16 " + verificaPrimo(16));
document.getElementById("16").innerHTML = "16 " + verificaPrimo(16);