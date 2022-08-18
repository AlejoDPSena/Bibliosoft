<?php

class Libro extends Controller
{
    public function __construct()
    {
        $this->LibroModel = $this->getModel('LibroModel');
    }

    public function index()
    {
        $data = $this->LibroModel->listar(); //temporal porque no hay
        $this->renderView('Libro/Libro', $data);
    }

    public function formUpdateBook($id)
    {
        $dataLibro = $this->LibroModel->listarUpdate($id);
        $dataEditorial = $this->LibroModel->listarEditorial();
        $data =  [
                'idLibro' => $id,
                'nombreLibro' => $dataLibro->nombreLibro,
                'categoriaLibro' => $dataLibro->categoriaLibro,
                'autorLibro' => $dataLibro->autorLibro,
                'cantidadLibro' => $dataLibro->cantidadLibro,
                'detallesLibro' => $dataLibro->detallesLibro,
                'publicacionLibro' => $dataLibro->publicacionLibro,
                'infoEditorial' => $dataEditorial
        ];
        $this->renderView('Libro/updateLibro', $data);
    }

    public function formAddBook()
    {
        $data = $this->LibroModel->listarEditorial(); //temporal porque no hay
        $this->renderView('Libro/nuevoLibro', $data);
    }

    public function addBook()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'nombreLibro' => $_POST['nombreLibro'],
                'categoriaLibro' => $_POST['categoriaLibro'],
                'autorLibro' => $_POST['nombreAutorLibro'],
                'cantidadLibro' => $_POST['cantidadLibro'],
                'detallesLibro' => $_POST['detallesLibro'],
                'publicacionLibro' => $_POST['fechaPublicacion'],
                'idEditorial' => $_POST['idEditorialLibro']
            ];
            $resultado = $this->LibroModel->add($data);
            if ($resultado) {
                $data = [
                    'mensajeLibro' => 'Insercion exitosa'
                ];
                $this->renderView('Libro/Libro', $data);
            } else {
                $data = [
                    'mensajeLibro' => 'Error en la insercion'
                ];
                $this->renderView('Libro/Libro', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }

    public function updateBook()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'idLibro' => $_POST['idLibro'],
                'nombreLibro' => $_POST['nombreLibro'],
                'categoriaLibro' => $_POST['categoriaLibro'],
                'autorLibro' => $_POST['nombreAutorLibro'],
                'cantidadLibro' => $_POST['cantidadLibro'],
                'detallesLibro' => $_POST['detallesLibro'],
                'publicacionLibro' => $_POST['fechaPublicacion'],
                'idEditorial' => $_POST['idEditorialLibro']
            ];
            $resultado = $this->LibroModel->update($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'Edicion exitosa'
                ];
                $this->renderView('Libro/Libro', $data);
            } else {
                $data = [
                    'mensaje' => 'Error en la edicion'
                ];
                $this->renderView('Libro/Libro', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }

    public function deleteBook($id)
    {
        $resultado = $this->LibroModel->delete($id);
        if($resultado){
            $data = [
                'mensaje' => 'Eliminación exitosa'
            ];
            $this->renderView('Libro/Libro', $data);
        }else{
            $data = [
                'mensaje' => 'Error en la eliminación'
            ];
            $this->renderView('Libro/Libro', $data);
        }
    }
    // public function formPenalizacion()
    // {
    //     $data = [];
    //     $this->renderView('Cliente/Penalizacion', $data);
    // }
}