<?php
echo '   <section id="formu">
                <form>
                    <div>
                        Nombre:
                        <input type="text" name="nombre" id="nombre" size="20" required>
                    </div>
                   <div>
                        Apellidos:
                        <input type="text" name="apellidos" id="apellidos" maxlength="20" size="30" required>
                    </div>
                    <div>
                        Edad:
                        <input type="text" name="edad" id="edad" maxlength="2" size="5" min="18" max="100" required>
                    </div>
                    <div>
                        Móvil:
                        <input type="text" name="movil" id="movil" size="20" maxlength="9" required>
                    </div>
                    <div>
                        Correo electrónico:
                        <input type="text" name="correo" id="correo" maxlength="30" size="40" required>
                    </div>
                    <div>
                        Contraseña:
                        <input type="password" name="contrasena" id="contrasena1" size="40" required>
                    </div>
                    <div>
                    Repite contraseña:
                    <input type="password" name="contrasena" id="contrasena2" size="40" required>
                    <div>
                        Recodar:
                        <input type="checkbox" name="recordar" id="recordar">
                    </div>
                    <div>
                        <button type="submit" onclick="validar()">Válidar</button>
                        <button type="reset">Reniciar</button>
                    </div>
                </form>    
         ';