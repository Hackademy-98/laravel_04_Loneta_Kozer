<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FioreController extends Controller
{
   public function index(){
        $fiori = [
            ["name" => "Ciclamino", "description" => "Pianta da esterno, fiorisce in inverno" ,"img" =>"https://www.venditapianteonline.it/wp-content/uploads/2023/11/Ciclamino--900x900.jpg"],
            ["name" => "Geragno", "description" => "Fiorisce tuttal'estate con fiori colorati" ,"img" =>"https://www.donnamoderna.com/content/uploads/2017/05/4386062-Fiori-estivi-da-balcone-i-gerani-725x530.jpg"],
            ["name" => "Hibiscus", "description" => "Pianta con fiori colorati e doppio" ,"img" =>"https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Double_hibiscus.jpg/180px-Double_hibiscus.jpg"],
            ["name" => "Rosa", "description" => "Ama i posti sollegiati,rampicante ho da vaso" ,"img" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPIylSMJ8y322MMw7TomCUj1UFn6zayeGq1g&usqp=CAU"]
        ];
        
          
        return view('fiori', ['fioriBelle'=> $fiori]);
    } 
    public function tipo($name){
        $fiori = [
            ["name" => "Ciclamino", "description" => "Pianta da esterno, fiorisce in inverno" ,"img" =>"https://www.venditapianteonline.it/wp-content/uploads/2023/11/Ciclamino--900x900.jpg"],
            ["name" => "Geragno", "description" => "Fiorisce tuttal'estate con fiori colorati" ,"img" =>"https://www.donnamoderna.com/content/uploads/2017/05/4386062-Fiori-estivi-da-balcone-i-gerani-725x530.jpg"],
            ["name" => "Hibiscus", "description" => "Pianta con fiori colorati e doppio" ,"img" =>"https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Double_hibiscus.jpg/180px-Double_hibiscus.jpg"],
            ["name" => "Rosa", "description" => "Ama i posti sollegiati,rampicante ho da vaso" ,"img" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPIylSMJ8y322MMw7TomCUj1UFn6zayeGq1g&usqp=CAU"]
        ];
          foreach ($fiori as $fiore){
            if ($name == $fiore["name"]){
                return view('detail',["pianta"=>$fiore]);
            }
          }
    }//
}
