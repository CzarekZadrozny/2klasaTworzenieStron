var liczbaZamowien = 1
var NoweId = 5

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

function Aktualizuj(id) {
    var x = parseInt(prompt("Podaj ilosc"));
    document.getElementById(id).innerHTML = x;
    sprawdz();
}

function Zamow(id){
    alert("Zamowienie nr: "+ liczbaZamowien)
    liczbaZamowien ++
    Ilosc = document.getElementById(id).innerHTML
    nowaIlosc = Ilosc - 1;
    document.getElementById(id).innerHTML = nowaIlosc
    sprawdz();
}

function Nowa(){
    var nazwa = prompt("Podaj nazwe produku")
    var typ = prompt("Podaj jednostke")
    var wiersz = document.createElement("tr");
    wiersz.innerHTML ='<tr class="tabelka"> <td class="tabelka">'+ nazwa +'</td> <td class="tabelka">'+ typ +'</td> <td class="wartosc" id="'+NoweId+'">0</td> <td class="tabelka"><button onclick="Aktualizuj('+NoweId+')">Aktualizuj</button></td> <td class="tabelka"><button onclick="Zamow('+NoweId+')">Zamów</button></td> </tr>'
    var dodanie = document.getElementById('table');
    dodanie.appendChild(wiersz);
    NoweId ++;
    sprawdz()

}         
