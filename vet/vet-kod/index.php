<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weterynarz 24/7</title>
    <link rel="stylesheet" href="styl.css">
    <script src='obraki.js'>

    </script>
</head>
<body>
    <header>
        <div class="baner1"> 
           
            <h1>Gabinet weterynaryjny FAUNA</h1> 
           
        </div>
        <div class="baner2">
            <form action="" class="wyszukiwanie">
            <input type="text" name="zap" id="zap" placeholder="Szukaj..." class="search" />
            <button class="btn1"><img src="lupa1.png" alt=""></button>
            </form>
          
        
        </div>
        <div class="przyciski">
            <a href=""><button class="btn2">O nas</button></a>
            <a href=""><button class="btn2">Oferta</button></a>
            <a href=""><button class="btn2">x</button></a>
            <a href=""><button class="btn2">kontakt</button></a>
            <a href=""><button class="btn2">regulamin</button></a>

        </div>
    </header>
    <main>
        <div class="zdjecia">
            <img name="obrazek" src="zdj1.jpg" alt="pies1">
            <button onclick="poprzedni()" class="poprzedni"> ◀ </button>
            <button onclick="nastepny()" class="nastpeny"> ▶ </button>
            
        </div>
        <div class="main">
            lalalal
        </div>
    </main>
    
</body>
</html>
<script>
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
    if (document.images) {
        if (a < ileObrazkow) {
            a++;
        } else {
            a = 0; 
        }
        document.images.obrazek.src = obrazki[a];
    }
}
</script>