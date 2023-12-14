<?phpphp

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $productId)
    {
        // Mendapatkan data keranjang dari session, jika tidak ada, inisialisasi array kosong
        $cart = $request->session()->get('cart', []);

        // Menambahkan produk ke keranjang
        $cart[] = $productId;

        // Menyimpan kembali data keranjang ke dalam session
        $request->session()->put('cart', $cart);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
}
