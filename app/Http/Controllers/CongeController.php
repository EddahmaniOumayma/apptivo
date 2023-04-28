<?php

namespace App\Http\Controllers;

use App\Models\Conge;
use App\Models\Type_conge;
use App\Models\User;
use App\Notifications\DemandeConge;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;

class CongeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    
    {
       
        $conges = Conge::with(['user' => function($query){
            
        },'type_conge' => function($query){
            
        }])
       
        ->paginate(10);
       
        
      return view('conge.index',compact('conges'));
  
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $types_conge = Type_conge::all();

        return view('conge.ajouter', compact('user', 'types_conge'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        // Validation des champs du formulaire
            $validatedData = $request->validate([
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'cin' => 'required|string',
                'date_naissance' => 'required|date',
                'date_debut' => 'required|date',
                'date_fin' => 'required|date',
                'type_conge_id' => 'required|integer|exists:type_conges,id',
                
                
                
            ]);
        
            // Recherche de l'utilisateur en fonction du cin
            $user = User::where('cin', $request->cin)->first();
        
            // Création du congé associé à l'utilisateur s'il existe
            if ($user) {
                $conge = new Conge;
                $conge->date_debut = $request->date_debut;
                $conge->date_fin = $request->date_fin;
                $conge->duration = Carbon::parse($request->date_debut)->diffInDays(Carbon::parse($request->date_fin));
                $conge->user_id = $user->id;
                $conge->type_conge_id = $request->type_conge_id;


                $user = User::where('cin', $request->cin)->get();
                $jours_type = Type_conge::where('id', '=', $request->type_conge_id)->pluck('Nbr_jrs')->first();
                $user_conge = Conge::where('user_id', '=', $user->first()->id)
                
                ->where('type_conge_id','=',$request->type_conge_id)
               
                ->where('status','=','Validé')->pluck('duration')->sum();
                $duration=  $conge->duration = Carbon::parse($request->date_debut)->diffInDays(Carbon::parse($request->date_fin));
                if($user_conge <  $jours_type){
                    if($duration <=($jours_type - $user_conge)){

                        $conge->save();
                           
                        $admin = User::where('id', 1)->first();
                        Notification::send($admin, new DemandeConge($admin));
                        return redirect()->back()->with('success','Le congé a été créé avec succès');
                    }
                    else{
                        return redirect()->back()->with('error','Votre demande ne peut pas être envoyée car le nombre de jours restant ne correspond pas à votre demande');
  
                    }



                }
                

               
                
                
             
             
                             
        
                // Redirection vers la page de liste des congés avec un message de confirmation
                return redirect()->route('dashbordF')->with('success', 'Le congé a été créé avec succès.');


             
            }
        
            // Redirection vers la page de création de congé avec un message d'erreur
            return redirect()->back()->withErrors(['cin' => 'Aucun utilisateur trouvé avec ce cin.']);
        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'annulation' => 'required|in:0,1',
          
            
            
            
        ]);
    
        // Recherche de l'utilisateur en fonction du cin
        $user = User::where('cin', $request->cin)->first();
    
        // Création du congé associé à l'utilisateur s'il existe
        
            $conge = Conge::find($id);
            if ($request->annulation == 1) {
                $conge->annulation = $request->annulation;
                $conge->date_annulation = now();
            }
            
           
            $conge->save();
    
            // Redirection vers la page de liste des congés avec un message de confirmation
            return redirect()->route('dashbordF')->with('success', 'Votre Conge Annulee.');
       
       


        
    }

    public function ValiderConge(Request $request, $id){
       

   

    $validatedData = $request->validate([
     
        'status' => 'required|in:0,1'
    ]);
    $conge=Conge::find($id);

    // Mettre à jour le statut de la demande en fonction du bouton radio sélectionné
    if ($request->input('status') == 1) {
        $conge->status = 'Validé';

        // Calculer la durée du congé en jours ouvrables (en excluant les samedis et dimanches)
      $nbJoursOuvrables = 0;
      $nbJoursTotal = Carbon::parse($conge->date_debut)->diffInDays(Carbon::parse($conge->date_fin));
      for ($i = 0; $i <= $nbJoursTotal; $i++) 
      {
          $date = Carbon::parse($conge->date_debut)->addDays($i);
          if (!$date->isSaturday() && !$date->isSunday())
          {
            $conge->date_fin= $conge->date_fin;
          }
          elseif($date->isSaturday())
          {
            $conge->date_fin =  Carbon::parse($conge->date_debut)->addDay();
          }
          elseif($date->isSunday())
          {
            $conge->date_fin =  Carbon::parse($conge->date_debut)->addDay();

          }
          elseif($date->isSaturday() && $date->isSunday())
          {
            $conge->date_fin =  Carbon::parse($conge->date_debut)->addDays(2);
          }
        }
        $conge->save();
        return redirect()->back()->with( 'success','vous avez valider le conge');
    } 
  
    
    else {
        $conge->status = 'Refusé';
        $conge->save();
        return redirect()->back()->with( 'error','vous avez refuse la demande de  conge');
    }


    // Enregistrer la demande mise à jour dans la base de données
    
  

    

       





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
