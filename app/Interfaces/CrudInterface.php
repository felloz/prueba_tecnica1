<?php

namespace App\Interfaces;

interface CrudInterface
{
    public function guardar();
    public function actualizar();
    public function eliminar();
}