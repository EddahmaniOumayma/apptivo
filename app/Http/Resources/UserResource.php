<?php

namespace App\Http\Resources;

use App\Models\Cadre;
use App\Models\Corp;
use App\Models\Grade;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $indice = $this->indices[0]->id;
        $grade = Grade::where('id', $this->indices[0]->id)->pluck('id')->first();
        $cadre = Cadre::where('id', $grade)->pluck('id')->first();


        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'date_naissance' => $this->date_naissance,
            'lieu_naissance' => $this->lieu_naissance,
            'sexe' => $this->sexe,
            'image' => $this->image,
            'tel' =>$this->tel,
            'cin' =>$this->cin,
            'date_ambauche' =>$this->date_ambauche,
            'situation_familial' =>$this->situation_familial,
            'Nbr_enfants' =>$this->Nbr_enfants,
            'status' =>$this->status,
            'libelle_i' =>$this->indices[0]->libelle_i,
            'libelle_g' => Grade::where('id',$indice)->pluck('libelle_g')->first(),
            'libelle_c' => Cadre::where('id', $grade)->pluck('libelle_c')->first(),
            'libelle' => Corp::where('id', $cadre)->pluck('libelle')->first(),



        ];
    }

    public function with($request)
    {
        return [
            'meta' => [
                'total' => $this->resource->total(),
                'per_page' => $this->resource->perPage(),
                'current_page' => $this->resource->currentPage(),
                'last_page' => $this->resource->lastPage(),
                'from' => $this->resource->firstItem(),
                'to' => $this->resource->lastItem(),
            ],
        ];
    }
}
