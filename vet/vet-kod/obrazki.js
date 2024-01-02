obrazki = new Array("zdj1.jpg", "zdj2.jpg", "zdj3.jpg");
a = 0
ileObrazkow = obrazki - 1

function poprzedni(){
    if(document.images && a > 0){
        a--
        document.obrazek.src = obrazki[a]
    }
}

function nastepny(){
    if(document.images && a < ileObrazkow){
        a++
        document.obrazek.src = obrazki[a]
    }
}


