<body>
    <input type="text" id="numero1" placeholder="Numero1">
    <input type="text" id="numero2" placeholder= "Numero2">
    <input type="text" id="resultado" placehoder="RESULTADO">
    <br>
    <br>
    <button id="sumar">+</button>
    <button id="restar">-</button>
    <button id="multiplicar">*</button>
    <button id="dividir">/</button>
    <button id="exponente">x<sup>y</sup></button>
    <button id="modulo">%</button>
    <br>
    <script>
        // Aquí va el código JavaScript que te proporcioné anteriormente
        document.getElementById("sumar").addEventListener("click", function() {
  var numero1 = parseFloat(document.getElementById("numero1").value);
  var numero2 = parseFloat(document.getElementById("numero2").value); 
  var resultado = numero1 + numero2;
  document.getElementById("resultado").value = resultado;
});

document.getElementById("restar").addEventListener("click", function() {
  var numero1 = parseFloat(document.getElementById("numero1").value);
  var numero2 = parseFloat(document.getElementById("numero2").value);
  var resultado = numero1 - numero2;
  document.getElementById("resultado").value = resultado;
});

document.getElementById("multiplicar").addEventListener("click",function() {
  var numero1 = parseFloat(document.getElementById("numero1").value);
  var numero2 = parseFloat(document.getElementById("numero2").value);
  var resultado = numero1 * numero2;
  document.getElementById("resultado").value = resultado;
});

document.getElementById("dividir").addEventListener("click",function() {
  var numero1 = parseFloat(document.getElementById("numero1").value);
  var numero2 = parseFloat(document.getElementById("numero2").value); 
  var resultado = numero1 / numero2;
  document.getElementById("resultado").value = resultado;
});
    </script>
</body>
</html>
</body>