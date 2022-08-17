<?php

declare(strict_types=1);

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Palestra;

class PalestraController extends Controller
{
    public function getList()
    {
        return response()->json(
            Palestra::all()
        );
    }

    public function getOne(int $id)
    {
        return response()->json(
            Palestra::findOrFail($id)
        );
    }

    public function post(Request $request)
    {
        {
            $palestra = Palestra::create(
                $request->all()
            );
    
            return response()->json($palestra);
        }
    

    }

    public function patch(Request $request, int $id)
    {
        $palestra = Palestra::findOrFail($id);

        $palestra->nome = $request->get('nome');
        $palestra->palestrante = $request->get('palestrante');
        $palestra->assunto = $request->get('assunto');
        $palestra->hora = $request->get('hora');

        $palestra->save();

        return  response()->json($palestra);
    }

    public function delete(int $id) 
    {
        Palestra::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Palestra Deleted',
        ]);
    }
}