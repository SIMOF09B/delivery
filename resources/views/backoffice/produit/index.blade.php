@extends('backoffice.layouts.app')
@section('content')
<div class="container">
<a class="btn btn-success mt-5 mb-5 ml-auto" href="{{route('produit.add')}}">Ajouter</a>

<table class="table table-striped table-bordered text-center">
    
        <tr>
            
            <th>Id </th>
            <th>Name</th>
            <th>Categorier_id  </th>
            <th>Description  </th>
            <th>Prix</th>
            <th>Duree Preparation</th>
            <th>Action</th>
           

        </tr>
   
   @foreach($produits as $produit)  
           <tr>
               <td>{{$produit->id}}</td>
               <td>{{$produit->name}}</td>
               <td>{{$produit->categorie_id}}</td>
               <td>{{$produit->desc}}</td>
               <td>{{$produit->prix}}</td>
               <td>{{$produit->duree_preparation}}</td>
             
               <td>
                <a class="btn btn-danger" href="{{route('produit.delete',['id'=>$produit->id])}}">Delete</a>
               <a class="btn btn-secondary" href="{{route('produit.edit',['id'=>$produit->id])}}">Update</a>
               </td>
        
     </tr>  
     @endforeach

</table>
@endsection  
</div>