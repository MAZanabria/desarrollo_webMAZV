<?php
        if(isset($_POST['convertir'])){
            $cantidad = $_POST['cantidad'];
            $unidad_origen = $_POST['unidad_origen'];
            $unidad_destino = $_POST['unidad_destino'];
            
            $conversion = 0;

            switch($unidad_origen) {
                case 'mm':
                    switch($unidad_destino) {
                        case 'mm':
                            $conversion = $cantidad;
                            break;
                        case 'cm':
                            $conversion = $cantidad / 10;
                            break;
                        case 'dm':
                            $conversion = $cantidad / 100;
                            break;
                        case 'm':
                            $conversion = $cantidad / 1000;
                            break;
                        case 'km':
                            $conversion = $cantidad / 1000000;
                            break;
                    }
                    break;
                case 'cm':
                    switch($unidad_destino) {
                        case 'cm':
                            $conversion = $cantidad;
                            break;
                        case 'dm':
                            $conversion = $cantidad / 100;
                            break;
                        case 'm':
                            $conversion = $cantidad / 100;
                            break;
                        case 'km':
                            $conversion = $cantidad / 1000;
                            break;
                    }

                    break;
                case 'dm':
                    switch($unidad_destino) {
                        case 'dm':
                            $conversion = $cantidad;
                            break;
                        case 'cm':
                            $conversion = $cantidad / 10;
                            break;
                        case 'm':
                            $conversion = $cantidad / 1000;
                            break;
                        case 'km':
                            $conversion = $cantidad / 1000;
                            break;
                    }
                    break;
                case 'm':
                    switch($unidad_destino) {
                        case 'm':
                            $conversion = $cantidad;
                            break;
                        case 'cm':
                            $conversion = $cantidad / 100;
                            break;
                        case 'dm':
                            $conversion = $cantidad / 100;
                            break;
                        case 'km':
                            $conversion = $cantidad / 1000;
                            break;
                    }
                    break;
                case 'km':
                    switch($unidad_destino) {
                        case 'km':
                            $conversion = $cantidad;
                            break;
                        case 'cm':
                            $conversion = $cantidad / 10;
                            break;
                        case 'dm':
                            $conversion = $cantidad / 100;
                            break;
                        case 'm':
                            $conversion = $cantidad / 1000;
                            break;
                    }
                    break;
            }
            
            echo "Resultado: $cantidad $unidad_origen es igual a $conversion $unidad_destino";
        }
        ?>