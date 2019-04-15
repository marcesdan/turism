<?php


namespace App\Services;


use App\Mayorista;

class MayoristaSrv
{
    /**
     * Se crea el primer registro del mayorista, luego siguen los datos de perfil
     * @param array $input
     * @return Mayorista
     */
    public function create(array $input)
    {
        $input['password'] = bcrypt($input['password']);
        return Mayorista::create($input);
    }
}
