<?

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
   public function index()
   {
     //dd('Olá Mundo');
     $jogos = Jogo::all();
     //dd($jogos);
     return view('jogos.index', ['jogos' => $jogos]);
   }
}
