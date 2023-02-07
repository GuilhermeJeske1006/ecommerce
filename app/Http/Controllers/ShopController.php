<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShopController extends Controller
{
    public function Index($idCategoria = 0){
        $data = [];

        $queryProduto = Produto::limit(8);

        $listaCategorias = Categoria::all();

        if($idCategoria != 0){
            $queryProduto->where("categoria_id", $idCategoria);
        }
        $listaProdutos = $queryProduto->get();

        $carrinho = session('cart', []);

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        $data["idcategoria"] = $idCategoria;
        $data["carrinho"] = $carrinho;


        return view(
            'shop.Index',
            $data);
    }

    public function Check(){
        $carrinho = session('cart', []);

        return view('CheckOut.index', [
            'carrinho' => $carrinho
        ]);
    }

    public function Details($id){
        $produto = Produto::findOrFail($id);

        $comentarios = DB::select(
            'select * from comentarios where produto_id =' .$id);

        $tamanhos = DB::select(
            'select * from Tamanhos where produto_id =' .$id);

        $Imagens = DB::select(
            'select * from Imagems where produto_id =' .$id);

        $carrinho = session('cart', []);

        return view('shop.details',
            [
                'produto' => $produto,
                'comentarios' => $comentarios,
                'tamanhos' => $tamanhos,
                'imagens' => $Imagens,
                'carrinho' => $carrinho,
            ]);
    }

    public function Comentar(Request $request){

        $comentario = new Comentario;
        $comentario->descricao = $request->descricao;
        $comentario->usuario_id = $request->usuario_id;
        $comentario->produto_id = $request->produto_id;
        $comentario->estrela    = $request->estrela;

        $comentario->save();

        return redirect()
            ->to(url()->previous())
            ->with('msg', 'Comentado com suceso');
    }


    public function adicionarCarrinho($idProduto = 0, Request $request){
        $prod = Produto::find($idProduto);

        if($prod){
            $carrinho = session('cart', []);

            array_push($carrinho, $prod);
            session(['cart' => $carrinho]);
        }

        return  redirect()
            ->to(url()->previous());
    }

    public function excluirCarrinho($indice, Request $request){
        $carrinho = session('cart', []);

        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        }
        session(['cart' => $carrinho]);

        return redirect()
            ->to(url()->previous());

    }
}
