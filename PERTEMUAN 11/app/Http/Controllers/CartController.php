<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Halaman Keranjang
     */
    public function index()
    {
        return view('cart.index', [
            'title' => 'Keranjang'
        ]);
    }

    /**
     * Menambahkan item ke keranjang (AJAX)
     */
    public function addToCart(Request $request)
    {
        $cart = Session::get('cart', []);
        
        $itemName = $request->item_name;
        $itemPrice = $request->item_price;

        if (isset($cart[$itemName])) {
            $cart[$itemName]['quantity']++;
        } else {
            $cart[$itemName] = [
                'name' => $itemName,
                'price' => $itemPrice,
                'quantity' => 1
            ];
        }

        Session::put('cart', $cart);

        return response()->json([
            'success' => true,
            'cart' => $cart,
            'total' => $this->calculateTotal($cart),
            'cart_count' => count($cart)
        ]);
    }

    /**
     * Mendapatkan data keranjang (AJAX)
     */
    public function getCart()
    {
        $cart = Session::get('cart', []);
        
        return response()->json([
            'cart' => $cart,
            'total' => $this->calculateTotal($cart),
            'cart_count' => count($cart)
        ]);
    }

    /**
     * Mengirim pesanan ke WhatsApp
     */
    public function sendOrder(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor' => 'required|string|max:15'
        ]);

        $cart = Session::get('cart', []);
        
        if (empty($cart)) {
            return response()->json([
                'success' => false,
                'message' => 'Keranjang kosong! Silakan tambah item terlebih dahulu.'
            ]);
        }

        $pesan = "Halo, saya {$request->nama} ({$request->nomor}) ingin pesan:\n";
        $total = 0;

        foreach ($cart as $item) {
            $subtotal = $item['price'] * $item['quantity'];
            $total += $subtotal;
            $pesan .= "- {$item['name']} x{$item['quantity']} - Rp " . number_format($subtotal, 0, ',', '.') . "\n";
        }

        $pesan .= "Total: Rp " . number_format($total, 0, ',', '.');

        Session::forget('cart');

        $whatsappUrl = "https://wa.me/6287722408446?text=" . urlencode($pesan);

        return response()->json([
            'success' => true,
            'whatsapp_url' => $whatsappUrl,
            'message' => 'Pesanan berhasil dikirim!'
        ]);
    }

    /**
     * Mengosongkan keranjang
     */
    public function clearCart()
    {
        Session::forget('cart');
        
        return response()->json([
            'success' => true,
            'message' => 'Keranjang berhasil dikosongkan!'
        ]);
    }

    /**
     * Helper method untuk menghitung total harga
     */
    private function calculateTotal($cart)
    {
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }
}