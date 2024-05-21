function generatePalette() {
    var hueValue = document.getElementById('hue-input').value;
    var saturationValues = [100, 80, 60, 40, 20];
    var colorCells = document.getElementsByClassName('color-cell');
    for (var i = 0; i < colorCells.length; i++) {
      colorCells[i].style.backgroundColor = 'hsl(' + hueValue + ', ' + saturationValues[i] + '%, 50%)';
    }
  }
  