<?php namespace App\Http\Controllers;

use App\Produto;
use App\User;
use Symfony\Component\Security\Core\Tests\Authentication\Provider\UserAuthenticationProviderTest;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()

	{
//$user = UserAuthenticationProviderTest::any();

        return view('home');


	}

    public function produtos(){
        $produtos = Produto::all();

        return view('produtos')->with('produtos', $produtos);
    }

}
