

    //SOLO PERMITE LETRAS
        function soloLetras(e)
        {
            key=e.keyCode || e.which;
            teclado=String.fromCharCode(key).toLowerCase();
            
            letras="aábcdeéfghiíjklmnñoópqrstuúvwxyz";
            especiales="8-37-38-46-164";

            teclado_especial=false;

            for(var i in especiales)
            {
                if(key==especiales[i])
                {
                    teclado_especial=true;
                    break;
                }
            }

            if(letras.indexOf(teclado)==-1 && !teclado_especial)
            {
                return false;
            }
        };
    //

    //SOLO PERMITE NUMEROS
        function soloNumeros(e)
        {
            key=e.keyCode || e.which;
            teclado=String.fromCharCode(key).toLowerCase();
            
            letras="0123456789";
            especiales="8-37-38-46-164";

            teclado_especial=false;

            for(var i in especiales)
            {
                if(key==especiales[i])
                {
                    teclado_especial=true;
                    break;
                }
            }

            if(letras.indexOf(teclado)==-1 && !teclado_especial)
            {
                return false;
            }
        };
    //
    

        //SOLO PERMITE NUMEROS Y LETRAS
        function soloNumerosYLetras(e)
        {
            key=e.keyCode || e.which;
            teclado=String.fromCharCode(key).toLowerCase();
            
            letras="0123456789aábcdeéfghiíjklmnñoópqrstuúvwxyz";
            especiales="8-37-38-46-164";

            teclado_especial=false;

            for(var i in especiales)
            {
                if(key==especiales[i])
                {
                    teclado_especial=true;
                    break;
                }
            }

            if(letras.indexOf(teclado)==-1 && !teclado_especial)
            {
                return false;
            }
        };
    //


    //SOLO PERMITE LETRAS CON ESPACIOS
        function letrasYEspacios(e)
        {
            key=e.keyCode || e.which;
            teclado=String.fromCharCode(key).toLowerCase();
            
            letras=" aábcdeéfghiíjklmnñoópqrstuúvwxyz";
            especiales="8-37-38-46-164";

            teclado_especial=false;

            for(var i in especiales)
            {
                if(key==especiales[i])
                {
                    teclado_especial=true;
                    break;
                }
            }

            if(letras.indexOf(teclado)==-1 && !teclado_especial)
            {
                return false;
            }
        };
    //


    //SOLO PERMITE NUMEROS, lETRAS Y ESPACIOS
        function soloNumerosLetrasYEspacios(e)
        {
            key=e.keyCode || e.which;
            teclado=String.fromCharCode(key).toLowerCase();
            
            letras=" .,-_*/aábcdeéfghiíjklmnñoópqrstuúvwxyz0123456789";
            especiales="8-37-38-46-164";

            teclado_especial=false;

            for(var i in especiales)
            {
                if(key==especiales[i])
                {
                    teclado_especial=true;
                    break;
                }
            }

            if(letras.indexOf(teclado)==-1 && !teclado_especial)
            {
                return false;
            }
        };
    //
