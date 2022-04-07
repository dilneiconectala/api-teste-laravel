<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use App\Models\TesteLogPhp;
use Illuminate\Http\Request;

class TesteApiController extends Controller
{

    public function ping()
    {
        $data = [];
        $data['result'] = 'pong';
        return response($data, 200);
    }

    public function getAll()
    {
        $data = Teste::get()->toJson(JSON_PRETTY_PRINT);
        return response($data, 200);
    }

    public function insert(Request $request)
    {

        $teste = Teste::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Created successfully!",
            'teste' => $teste
        ], 201);

    }

    public function getAllSaving()
    {

        $all = Teste::get();

        /**
         * @var Teste $teste
         */
        foreach ($all as $teste) {

            $testeLogPhp = new TesteLogPhp();
            $testeLogPhp->id_fk = $teste->id;
            $testeLogPhp->name = $teste->name;
            $testeLogPhp->save();

        }

        $data = $all->toJson(JSON_PRETTY_PRINT);

        return response($data, 200);

    }

}
