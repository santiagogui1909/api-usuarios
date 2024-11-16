<?php
header("Content-Type: application/json");

$request_method = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER['REQUEST_URI'];
$uri_parts = explode('/', trim($uri, '/'));

include_once 'usuarios.php';

switch ($request_method) {
    case 'GET':
        if (isset($uri_parts[1])) {
            // Consultar un usuario por ID
            $id = (int)$uri_parts[1];
            $usuario = obtenerUsuarioPorId($id);
            if ($usuario) {
                echo json_encode($usuario);
            } else {
                http_response_code(404);
                echo json_encode(["message" => "Usuario no encontrado"]);
            }
        } else {
            // Consultar todos los usuarios
            $usuarios = obtenerUsuarios();
            echo json_encode($usuarios);
        }
        break;

    case 'POST':

        // Obtener los datos del formulario
        $nombre = $_POST['nombre'] ?? '';
        $email = $_POST['email'] ?? '';

        // Validar que los datos no estén vacíos
        if ($nombre && $email) {
            // Insertar el nuevo usuario
            $nuevo_usuario = insertarUsuario($nombre, $email);
            $usuarios = obtenerUsuarios();
            echo json_encode($usuarios);
        } else {
            http_response_code(400);
            echo json_encode(["message" => "Datos incompletos"]);
        }

        break;

    default:
        http_response_code(405);
        echo json_encode(["message" => "Método no permitido"]);
        break;
}
?>
