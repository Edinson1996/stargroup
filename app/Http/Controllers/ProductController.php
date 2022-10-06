<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('panel.products.index', ['view' => 'index']);
    }

    public function table()
    {
        return datatables()
            ->eloquent(Product::query()
                ->where('deleted_at', null)
                // ->select('products.*')
                ->orderByDesc('created_at'))
            ->addColumn('image', '<img width="80px" src="{{asset("products/$image")}}"></img>')
            ->addColumn('actions', 'panel.products._actions')
            ->rawColumns(['image', 'actions'])
            ->toJson();
    }

    public function trashed()
    {
        return view('panel.products.index', [
            'view' => 'trash',
        ]);
    }

    public function trashedTable()
    {
        return datatables()
            ->eloquent(Product::onlyTrashed()->select('products.*')->orderByDesc('created_at'))
            ->addColumn('image', '<img width="80px" src="{{asset("products/$image")}}"></img>')
            ->addColumn('actions', 'panel.products._actions-trash')
            ->rawColumns(['image', 'actions'])
            ->toJson();
    }

    public function create()
    {
        //
        return view('panel.products._create');
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate(
            [
                'name' => 'required',
                'price' => 'required',
                'image' => 'required',
                'offer' => 'nullable',
            ],
            [
                'name.required' => 'El campo nombre es requerido',
                'price.required' => 'El campo precio es requerido',
                'image.required' => 'El campo imagen es requerido',
            ]
        );
        $product = new Product();
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->offer = $data['offer'];
        $path = public_path() . '/products/';
        $fileName = time() . $request->image->getClientOriginalName();
        $image = \Image::make($request->image)->fit(600,765)->save($path . $fileName);
        $product->image = $fileName;
        $product->save();
        return response()->json(null,201);
    }

    public function edit(Product $product)
    {
        //
        return view('panel.products._edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        //
        $data = $request->validate(
            [
                'name' => 'required',
                'price' => 'required',
                'offer' => 'nullable',
            ],
            [
                'name.required' => 'El campo nombre es requerido',
                'price.required' => 'El campo precio es requerido',
            ]
        );
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->offer = $data['offer'];
        if ($request->image) {
            $path = public_path() . '/products/';
            $fileName = time() . $request->image->getClientOriginalName();
            $image = \Image::make($request->image)->fit(600,765)->save($path . $fileName);
            $product->image = $fileName;
        }
        $product->save();
        return response()->json(null);
    }

    public function trash(Product $product)
    {
        //
        $product->delete();
        return response()->json(null, 204);
    }

    public function restore($id)
    {
        $product = Product::withTrashed()->where('id', '=', $id)->first();

        $product->restore();

        return \Redirect::route("products.index");
    }

    public function destroy($id)
    {
        $product = Product::onlyTrashed()->where('id', $id)->firstOrFail();
        $product->forceDelete();
        return json_encode(null, 204);
    }

    // public function indexNovelties()
    // {
    //     //
    //     $products=Product::all();
    //     $novelties = Product::orderBy('created_at')->where('featured',true)->get();
    //     return view('admin.novelties',compact('products','novelties'));
    // }

    // public function updateNovelties(Request $request)
    // {
    //     $data = $request->validate([
    //         'mySelect' => 'required|exists:products,id',
    //     ]);
    //     $product=Product::find($data['mySelect']);
    //     $product->update(['featured'=>true]);
    //     return redirect(route('novelties.index'));
    // }

    // public function destroyNovelties(Request $request)
    // {
    //     //
    //     $data = $request->validate([
    //         'product' => 'required|exists:products,id',
    //     ]);
    //     $product=Product::find($data['product']);
    //     $product->update(['featured'=>false]);
    //     return redirect(route('novelties.index'));
    // }
}
