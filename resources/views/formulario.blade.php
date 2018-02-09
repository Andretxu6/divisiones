<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
        <form action="{{ route('getResultado') }}" method="post">
            {{ csrf_field() }}
            <h3>División</h3>
            <input type="number" name="dividendo" required/>
            <label> / </label>
            <input type="number" name="divisor" required/>
            <br/>
            <br/>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>