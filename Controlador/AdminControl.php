 <?php session_start();
    require_once '../Bean/AdminBean.php';
    require_once '../DAO/AdminDAO.php';
    require_once '../Bean/productoBean.php';
    require_once '../DAO/productoDAO.php';
    $op = $_REQUEST["op"];
    switch ($op) {
        case 1: {
                try {
                    unset($_SESSION['mensaje']);
                    $usuario = $_REQUEST["usuario"];
                    $clave = $_REQUEST["clave"];
                    $objbean = new AdminBean();
                    $objcapbean = new AdminBean();
                    $objdao = new AdminDAO();

                    $objbean->setUsuario($usuario);
                    $objbean->setClave($clave);
                    $i = $objdao->Acceso($objbean);

                    if ($i == 1) {
                        $mensaje = "Bienvenido";
                        $objcapbean = $objdao->DatosAdmin($objbean);
                        $id = $objcapbean->getIdUsuario();
                        $_SESSION['id'] = $id;

                        $objdao = new productoDAO();
                        $lista = $objdao->ListarProducto();
                        $_SESSION['lista'] = $lista;
                        $destino = "../Pages/inicio.php";


                        $objdaoA = new AdminDAO();
                        $listaA = $objdaoA->ListarAdmin();
                        $_SESSION['lista_u'] = $listaA;

                    } else {
                        $mensaje = "Datos incorrectos, Vuelva ingresar";
                        $destino = "../index.php";
                    }
                    $_SESSION["mensaje"] = $mensaje;
                } catch (Exception $ex) {
                    $destino = "../Login.php";
                }
                break;
            }
        case 2: {
                unset($_SESSION['mensaje']);
                $objdao = new AdminDAO();
                $lista = $objdao->ListarAdmin();
                $_SESSION['lista_u'] = $lista;
                $destino = "../Admin/ListarUsuario.php";
                break;
            }
        case 3: {
                unset($_SESSION['mensaje']);
                $destino = "../Admin/admin.php";
                break;
            }
        case 4: {
                unset($_SESSION['mensaje']);
                $id = $_REQUEST["id_usuario"];
                $nombre = $_REQUEST["nombres"];
                $usuario = $_REQUEST["usuario"];
                $clave = $_REQUEST["clave"];
                $repclave = $_REQUEST["rep_clave"];

                $objbean = new AdminBean();
                $objDao = new AdminDAO();
                $objbean->setIdUsuario($id);
                $objbean->setNombres($nombre);
                $objbean->setIdUsuario($usuario);
                $objbean->setClave($clave);
                $objbean->setRepClave($repclave);
                $i = $objDao->GrabarAdmin($objbean);
                if ($i) {
                    $mensaje = "Registro insertado Satisfactoriamente";
                } else {
                    $mensaje = "Registro no insertado";
                }
                $_SESSION["mensaje"] = $mensaje;

                $destino = "../Admin/admin.php";

                break;
            }

        case 5: {
                unset($_SESSION['mensaje']);
                $cod = $_REQUEST["cod"];
                $objbeann = new AdminBean();
                $objdaoo = new AdminDAO();
                $objbeann->setIdUsuario($cod);
                $i = $objdaoo->EliminarAdmin($objbeann);
                if ($i == 1) {
                    $mensaje = "Registro Eliminado";
                } else {
                    $mensaje = "Registro no Eliminado";
                }
                $_SESSION["mensaje"] = $mensaje;

                $lista = $objdaoo->ListarAdmin();
                $_SESSION['lista'] = $lista;
                $destino = "../Admin/ListarAdmin.php";
                break;
            }
        case 6: {
                unset($_SESSION['mensaje']);
                $cod = $_REQUEST['cod'];
                $objbean = new AdminBean();
                $objbe = new AdminBean();
                $objbean->setCodigo($cod);
                $objdaoo = new AdminDAO();
                $objbe = $objdaoo->CapturarAdmin($objbean);
                $id = $objbe->getCodigo();
                $nom = $objbe->getCodPersona();
                $usuar = $objbe->getUsuario();
                $contra = $objbe->getClave();
                $_SESSION['id'] = $id;
                $_SESSION['nom'] = $nom;
                $_SESSION['usu'] = $usuar;
                $_SESSION['contra'] = $contra;
                $destino = "../Admin/ModificarAdmin.php";

                break;
            }
        case 7: {
                unset($_SESSION['mensaje']);
                $id = $_REQUEST["id"];
                $nombre = $_REQUEST["nombre"];
                $usuario = $_REQUEST["usuario"];
                $contraseña = $_REQUEST["contraseña"];

                $objbeann = new AdminBean();
                $objDaoo = new AdminDAO();
                $objbeann->setIdadmin($id);
                $objbeann->setNombre($nombre);
                $objbeann->setUsuario($usuario);
                $objbeann->setContraseña($contraseña);

                $i = $objDaoo->ModificarAdmin($objbeann);
                if ($i == 1) {
                    $mensaje = "Registro modificado Satisfactoriamente";
                } else {
                    $mensaje = "Registro no modificado";
                }

                $lista = $objDaoo->ListarAdmin();
                $_SESSION['lista'] = $lista;
                $_SESSION["mensaje"] = $mensaje;
                $destino = "../Admin/ListarAdmin.php";
                break;
            }
        case 8: {
                unset($_SESSION['mensaje']);
                $usuario = $_REQUEST["id"];
                $objbeann = new AdminBean();
                $objdao = new AdminDAO();
                $objbeann->setIdadmin($usuario);
                $objcapbean = $objdao->CapturarAdmin($objbeann);
                $id = $objcapbean->getIdadmin();
                $_SESSION['id'] = $id;
                $destino = "../Seguridad/opciones_.php";

                break;
            }
        case 9: {
                unset($_SESSION['mensaje']);
                $nombres = $_REQUEST["nombres"];
                $usuario = $_REQUEST["usuario"];
                $clave = $_REQUEST["clave"];
                $rep_clave = $_REQUEST["rep_clave"];

                $objbean = new AdminBean();
                $objdao = new AdminDAO();

                $objbean->setNombres($nombres);
                $objbean->setUsuario($usuario);
                $objbean->setClave($clave);
                $objbean->setRepClave($rep_clave);
                $i = $objdao->GrabarAdmin($objbean);
                //$_SESSION['id'] = $id;

                if($i==1){

                    $objdaoA = new AdminDAO();
                    $lista = $objdaoA->ListarAdmin();
                    $_SESSION['lista_u'] = $lista;
                    $destino = "../Pages/Admin/ListarUsuario.php";
                }else{
                    $mensaje = "Datos incorrectos, Vuelva ingresar";
                    $destino = "../index.php";
                }

                break;
            }
    }
    header("location:$destino");
    ?>

