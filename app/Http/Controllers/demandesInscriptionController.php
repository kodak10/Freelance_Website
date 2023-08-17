<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;

class demandesInscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enterprisesToApprove = Entreprise::where('approve', '=', false)->get();
        $User = User::all();
        $Counter = 1;
        return view('Administration.demandes.inscription.index', compact('enterprisesToApprove', 'Counter', 'User'));
    }


    public function update(Request $request, string $id)
    {
        $client = Entreprise::where('id', $id)->firstOrFail();
        $data = array(
            'approve' => 1,
            'updated_at' => now()
        );
        if ($client->update($data)) {
            return json_encode(array('statusCode' => 200));
            // return redirect('demandes_inscription')->with('updated', 'updated');
        } else {
            return json_encode(array('statusCode'=>404));
            // return redirect('demandes_inscription')->with('nothing', 'nothing');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = Entreprise::where('id', $id)->firstOrFail();
        if ($info->delete()) {
            $info2 = User::where('id', $id)->firstOrFail();
            $info2->delete();
            return json_encode(array('statusCode' => 200));

            // return redirect('demandes_inscription')->with('deleted', 'deleted');
        } else {
            return json_encode(array('statusCode'=>404));
            // return redirect('demandes_inscription')->with('nothing', 'nothing');
        };
    }
}
