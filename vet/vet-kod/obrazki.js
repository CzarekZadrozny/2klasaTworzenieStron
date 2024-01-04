

    var obrazki = ["zdj1.jpg", "zdj2.jpg", "zdj3.jpg"];
    var a = 0;
    var ileObrazkow = obrazki.length - 1;

    function poprzedni() {
        if (document.images && a > 0) {
            a--;
            document.images.obrazek.src = obrazki[a];
        }
    }

    function nastepny() {
        if (document.images && a < ileObrazkow) {
            a++;
            document.images.obrazek.src = obrazki[a];
        }
    }
