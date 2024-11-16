<?php

// Datos "quemados" (no se usan bases de datos)
$usuarios = [
    ["id" => 1, "nombre" => "Juan Pérez", "email" => "juan@correo.com", "fecha_creacion" => "2024-01-01 12:00:00"],
    ["id" => 2, "nombre" => "Ana Gómez", "email" => "ana@correo.com", "fecha_creacion" => "2024-02-15 09:30:00"],
    ["id" => 3, "nombre" => "Carlos Fernández", "email" => "carlos@correo.com", "fecha_creacion" => "2024-03-10 14:45:00"]
];

// Función para obtener todos los usuarios
function obtenerUsuarios() {
    global $usuarios;
    return $usuarios;
}

// Función para obtener un usuario por ID
function obtenerUsuarioPorId($id) {
    global $usuarios;
    foreach ($usuarios as $usuario) {
        if ($usuario['id'] == $id) {
            return $usuario;
        }
    }
    return null;
}

// Función para insertar un nuevo usuario
function insertarUsuario($nombre, $email) {
    global $usuarios;
    // Simulamos la inserción añadiendo al final del arreglo
    $nuevo_id = count($usuarios) + 1; // Generamos un nuevo ID
    $nuevo_usuario = [
        "id" => $nuevo_id,
        "nombre" => $nombre,
        "email" => $email,
        "fecha_creacion" => date("Y-m-d H:i:s") // Fecha actual
    ];
    $usuarios[] = $nuevo_usuario; // Añadimos el usuario al arreglo
    return $nuevo_usuario;
}
?>
