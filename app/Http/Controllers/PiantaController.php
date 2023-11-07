<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiantaController extends Controller
{
  public  function index(){
        $piante = [
            ["name" => "Pachira", "description" => "Pachira acquatica. Conosciuta anche come Pachira o . Questa pianta è originaria dell'America Centrale, in particolare del Messico e del Costa Rica. Ti fará compagnia per molti anni. Facile da curare.", "img" =>"https://begreen.imgix.net/63d78be921cf4570485468.jpg?w=620&h=620&auto=format"],
            ["name" => "Calathea", "description" => "Calathea Orbifolia, nota anche come Calathea Ornata o Pianta a strisce per la sua frondosità e il disegno simmetrico delle foglie. Originaria del Brasile, questa Calathea non smette di crescere in cambio di poche cure e molta umidità.", "img" =>"https://begreen.imgix.net/63490ac674b98092621674.jpg?w=620&h=620&auto=format"],
            ["name" => "Dracaena Fragrans", "description" => "Dracaena Fragrans o Tronchetto della Felicità, detta anche Falsa Palma. È una pianta originaria delle regioni tropicali dell'Africa. Ha bisogno di pochissime attenzioni.", "img" =>"https://begreen.imgix.net/647f3de4b88bb787824197.jpg?w=620&h=620&auto=format"],
            ["name" => "Ficus Ginseng", "description" => "Il Ficus ginseng o Ficus microcarpa è una pianta semitropicale che ama le zone umide. Si sviluppa nei bonsai con fusto ampio e fogliame verde scuro. Necessita di un terreno fertile ben drenato, annaffiature abbondanti in estate e nebulizzazioni continue.", "img" =>"https://www.lezio.it/wp-content/uploads/regslo-san-valentino4-700x700.jpg"],
            ];
         return view('piante' , ['pianteVerde'=>$piante]);
    } 
   public function tipo($name){
        $piante = [
            ["name" => "Pachira", "description" => "Pachira acquatica. Conosciuta anche come Pachira o . Questa pianta è originaria dell'America Centrale, in particolare del Messico e del Costa Rica. Ti fará compagnia per molti anni. Facile da curare.", "img" =>"https://begreen.imgix.net/63d78be921cf4570485468.jpg?w=620&h=620&auto=format"],
            ["name" => "Calathea", "description" => "Calathea Orbifolia, nota anche come Calathea Ornata o Pianta a strisce per la sua frondosità e il disegno simmetrico delle foglie. Originaria del Brasile, questa Calathea non smette di crescere in cambio di poche cure e molta umidità.", "img" =>"https://begreen.imgix.net/63490ac674b98092621674.jpg?w=620&h=620&auto=format"],
            ["name" => "Dracaena Fragrans", "description" => "Dracaena Fragrans o Tronchetto della Felicità, detta anche Falsa Palma. È una pianta originaria delle regioni tropicali dell'Africa. Ha bisogno di pochissime attenzioni.", "img" =>"https://begreen.imgix.net/647f3de4b88bb787824197.jpg?w=620&h=620&auto=format"],
            ["name" => "Ficus Ginseng", "description" => "Il Ficus ginseng o Ficus microcarpa è una pianta semitropicale che ama le zone umide. Si sviluppa nei bonsai con fusto ampio e fogliame verde scuro. Necessita di un terreno fertile ben drenato, annaffiature abbondanti in estate e nebulizzazioni continue.", "img" =>"https://www.lezio.it/wp-content/uploads/regslo-san-valentino4-700x700.jpg"],
            ];
            foreach($piante as $pianta){
                if($name == $pianta["name"]){
                    return view('detail',["pianta"=>$pianta]);
                }
            }
        
    } //
}
