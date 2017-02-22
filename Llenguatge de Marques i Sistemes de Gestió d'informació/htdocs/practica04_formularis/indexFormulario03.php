<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario03</title>
    </head>
    <body>
        <header>
            <aside>
                <a href="indexFormulario03.php" target="_blank" title="Formulario2"> 
                    <img src="Captura de pantalla 2016-11-18 01.21.46.png"  alt="Formulario2" title="Formulario2" height="60" width="1098" /> 
                </a>
            </aside>
            <article>
                <h1>Registrarte</h1>
            </article>
        </header>
        <form action="generalistaFormulario03.php">
            <div>
                Nombre: <input required="" pattern="{3,11}" type="text" placeholder="inputNombre" name="nom"/>
                Nacimiento: <input required="" type="date" name="nacimiento"/></div>
            <div>
                Blog: <input required="" type="url" placeholder="inputUrl" name="blog"/> 
                Marca Mobil: <select name="marcaMobil">
                    <option value="1">Marca1</option>
                    <option value="2">Marca2</option>
                    <option value="3">Marca3</option>
                    <option value="4">Marca4</option>
                </select>                                                                 
            </div>
            <div>
                Número de hermanos: 
                <input required="" type="number" placeholder="inputNumeroHermanos" min="0" max="20" name="numeroHermanos"/>
            </div>
            <div>
                Sexo: hombre<input type="radio" name="radio" value="hombre"/> mujer<input type="radio" name="radio" value="mujer"/>    
            </div>
            <div>
                Comida favorita:
            </div>
            <div>
                chocolate <input type="checkbox" name="comidaFavorita[]" value="chocolate"/>
                pan <input type="checkbox" name="comidaFavorita[]" value="pan"/>
                acelgas <input type="checkbox" name="comidaFavorita[]" value="acelgas"/>
                macarrones <input type="checkbox" name="comidaFavorita[]" value="macarrones"/>
                lentejas <input type="checkbox" name="comidaFavorita[]" value="lentejas"/>
            </div>

            <input type="submit" value="Registrate" /><input type="reset" value="Reset"/>
        </form>  
    </body>
</html>