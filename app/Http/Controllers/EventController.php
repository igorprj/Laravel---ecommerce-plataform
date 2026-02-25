<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
use App\Models\products;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Nette\Utils\Image;
use ReturnTypeWillChange;

class EventController extends Controller
{
    public function index() {
        $produtos = products::all();

        return view('welcome', ['produtos' => $produtos]);

    }

    public function create() {
        return view('Produtos.criarprodutos');
    }

    public function home() {
        return view ('layouts.home');
    }

    public function produtos() {
        $search = request('search');

        if($search) {
            $produtos = products::where([
                'title', 'like', '%'.$search.'%'
            ])->get();
        } else {
            $produtos = products::all();
        }

        

        return view('produtos', ['produtos' => $produtos, 'search' => $search]);
    }

    public function FAQs() {
        return view('FAQs');
    }
    
    public function sobre() {
        return view('sobre');
    }

    

  
    public function store(Request $request) {
        $product = new products;

        $product->name= $request->name;
        $product->qty= $request->qty;
        $product->price= $request->price;
        $product->description= $request->description;
        $product->category= $request->category;

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now'));

            $request->image->move(public_path('imagens/produtos'), $imageName);

            $product->image = $imageName;
        }

        $product->save();
        return redirect('/')->with('msg', 'Produto adicionado com sucesso!');
    }

    public function show($id) {
        $product = products::findOrFail($id);

        return view('/Produtos/produto_show', ['product' => $product]);
    }

}
