function Aktualizuj(id) {
    var x = parseInt(prompt("Podaj ilosc"));
    document.getElementById(id).innerHTML = x;
    sprawdz();
}

function sprawdz() {
    const collection = document.getElementsByClassName("wartosc");
    for (let i = 0; i < collection.length; i++) {
        if (parseInt(collection[i].innerHTML) === 0) {
            collection[i].style.backgroundColor = "red";
        } else if (parseInt(collection[i].innerHTML) >= 1 && parseInt(collection[i].innerHTML) <= 5) {
            collection[i].style.backgroundColor = "yellow";
        } else {
            collection[i].style.backgroundColor = "honeydew";
        }
    }
}