<?php namespace App\Http\Controllers;

use App\Produto;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Security\Core\Tests\Authentication\Provider\UserAuthenticationProviderTest;

class MenuController extends Controller {


    public function produtos1(){


        $lol = 'Comida';

        $produtos = DB::table('produtos')->where('tipo', '=', 'Comida')->get(); #('tipo','==','Comida');

        return view('produtos')->with('produtos', $produtos)->with($lol);
    }

    public function produtos2(){


        $lol = 'Comida';

        $produtos = DB::table('produtos')->where('tipo', '=', 'Bebida')->get(); #('tipo','==','Comida');

        return view('produtos')->with('produtos', $produtos)->with($lol);
    }
    public function produtos3(){


        $lol = 'Comida';

        $produtos = DB::table('produtos')->where('tipo', '=', 'Sobremesa')->get(); #('tipo','==','Comida');

        return view('produtos')->with('produtos', $produtos)->with($lol);
    }
    public function produtos4(){


        $lol = 'Comida';

        $produtos = DB::table('produtos')->where('tipo', '=', 'Drink')->get(); #('tipo','==','Comida');

        return view('produtos')->with('produtos', $produtos)->with($lol);
    }

    public function produtos5(){


        $lol = 'Comida';

        $produtos = DB::table('produtos')->where('tipo', '=', 'Combo')->get(); #('tipo','==','Comida');

        return view('produtos')->with('produtos', $produtos)->with($lol);
    }

}
