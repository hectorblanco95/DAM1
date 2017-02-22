<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario02</title>
    </head>
    <body>
        <header>
            <aside>
                <a href="indexFormulario02.php" target="_blank" title="Formulario2"> 
                    <img src="Captura de pantalla 2016-11-18 00.29.05.png"  alt="Formulario2" title="Formulario2" height="60" width="1098" /> 
                </a>
            </aside>
            <article>
                <h1>Registrarte</h1>
            </article>
        </header>
        <form action="generalistaFormulario02.php">
            <div>
                Usuario: <input required="" type="text" placeholder="inputNombre" name="nom"/>
                Email: <input required="" type="email" placeholder="inputEmail" name="email"/></div>
            <div>
                Password: <input required="" type="password" placeholder="inputPassword" name="password"/> 
                Confirma el Password: <input required="" type="password" placeholder="inputPassword" name="password2"/></div>
            <div>
                Transporte mas utilizado:   
                coche <input type="radio" name="transporteMasUtilizado[]" value="coche"/>
                tren <input type="radio" name="transporteMasUtilizado[]" value="tren"/>
                moto <input type="radio" name="transporteMasUtilizado[]" value="moto"/>
            </div>

            <input type="submit" value="Registrate" /><input type="reset" value="Reset"/>
        </form>   
    </body>
</html>