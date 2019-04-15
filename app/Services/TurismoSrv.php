<?php


namespace App\Services;


use App\Turismo;

class TurismoSrv
{
    /**
     * Se crea el primer registro del mayorista, luego siguen los datos de perfil
     * @param array $input
     * @return Turismo
     */
    public function create(array $input)
    {
        $input['password'] = bcrypt($input['password']);
        return Turismo::create($input);
    }
}
