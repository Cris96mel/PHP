<!DOCTYPE html>
<html>
    <head>
        <title>formulario</title>
        <meta charset="UTD-8">
        <link rel="shortcut icon" href="img/fav.png"/>
</head>
<body>
<form method="post" action="">
    <fieldset>
        <legend>Datos Personales</legend>

        <input type="text" placeholder="Tu nombre" name="nombre"required autofocus/>
        <input type="text" placeholder="Tu apellido" name="apellido" required/>
        <label>Fecha de nacimiento</label>
        <input type="date"/></label>
        <input type=""number placeholer="tu edad/"></p>

        <input type="email" placeholder="tu email"/>
        <input type="phone" placeholder="Telefono"/>
        <input type="radio" name="sexo" value="H"/><label>Hombre</label>
        <input type="radio" name="sexo" value="M"/><label>Mujer</label>

        <label>Ciudad de residencia</label>
        <select name="ciudad">
            <option>Asuncion </option>
            <option>San Lorenzo</option>
            <option>Fernando de la Mora</option>
        </select>
        </fieldset>
        <fieldset>
            <legend>Datos laborales</legend>
            <label>Disponibilidad de tiempo</label>
            <input type="checkbox" value="true" name="dispo_m">Mañana
            <input type="checkbox" value="true" name="dispo_t">Tarde
            <input type="checkbox" value="true" name="dispo_n">Noche
            <p><label>Aspiracion salarial</label>
            Gs.2.500.000<input type="range" min="25000000" max"5500000" step="1000000"> Gs. 5.500.000
        </fieldset>
        <button type="submit">Enviar</button>
    </form>
    </body>
</html>   
