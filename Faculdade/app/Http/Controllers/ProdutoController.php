<?php

namespace App\Http\Controllers;

use App\Produto;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos =Produto::all();
        return view('menuPrincipal',compact('produtos'));
    }
         //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('cadastroProduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validaçoes
        $validar = $request->validate([
            'nome_do_produto'=>'required |max:20 |min:2',
            'imagem'=>'required',
            'quantidade'=>'required' ,
            'preco'=>'required'
        ]);

        $fotoProduto=$request->file('imagem')->getClientOriginalName();
        $produto = new Produto();
        $produto-> nome_do_produto = $request -> input('nome_do_produto');
        $produto-> imagem = $request->file('imagem')->storeAs('public',$fotoProduto);
        $produto-> quantidade = $request -> input('quantidade');
        $produto-> preco = $request -> input('preco');
       // dd($produto); DEPURAR CODIGO
        $produto->save();
            //redirecionamento de pagina
        return redirect('produto')->with('success','Cadastro do produto realizado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
