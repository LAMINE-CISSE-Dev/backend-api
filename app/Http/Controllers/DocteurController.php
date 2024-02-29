<?php

namespace App\Http\Controllers;

use App\Models\Docteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DocteurController extends Controller
{
    public function index()
    {
        $docteurs = Docteur::all();
        return response()->json($docteurs);
    }

    public function show($id)
    {
        $docteur = Docteur::find($id);

        if (!$docteur) {
            return Response::json(['error' => 'Docteur non trouvé'], 404);
        }

        return response()->json($docteur);
    }
}
