<?php

function obtenerLibros(){
    $libros = [
        [
            "titulo" => "El Código da Vinci",
            "autor" => "Dan Brown",
            "año" => 2003,
            "genero" => "Ciencia Ficción"
        ],
        [
            "titulo" => "El Señor de los Anillos",
            "autor" => "J.R.R. Tolkien",
            "año" => 1954,
            "genero" => "Novela"
        ],
        [
            "titulo" => "El Principito",
            "autor" => "Antoine de Saint-Exupéry",
            "año" => 1943,
            "genero" => "Novela"
        ],
        [
            "titulo" => "Festín de Cuervos",
            "autor" => "George R.R. Martin",
            "año" => 2005,
            "genero" => "Fantasía"
        ],
        [
            "titulo" => "El diario de Ana Frank",
            "autor" => "Ana Frank",
            "año" => 1947,
            "genero" => "Autobiografía"
        ]
    ];
    return $libros;
}

function mostrarDetallesLibro($libro){
    $html = "<div class = 'Libro'>";
    $html .= "<h2>" . $libro['titulo'] . "</h2>";
    $html .= "<p><strong>Autor:</strong> " . $libro['autor'] . "</p>";
    $html .= "<p><strong>Año:</strong> " . $libro['año'] . "</p>";
    $html .= "<p><strong>Género:</strong> " . $libro['genero'] . "</p>";
    $html .= "</div>"; 
    return $html;
}
?>