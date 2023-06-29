<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'rak_id' => 'required|exists:raks,id',
            'lokasi_id' => 'required|exists:lokasis,id',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|unique:products|max:255',
        ]);

        $model = new Product();
        $model->fill($request->all());
        $model->save();

        return createJsonResponse($model->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'rak_id' => 'required|exists:raks,id',
            'lokasi_id' => 'required|exists:lokasis,id',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|unique:products|max:255',
        ]);

        $model = Product::findOrFail($id);
        $model->fill($request->all());
        $model->save();

        return createJsonResponse($model->toArray());
    }

    public function uploadImage(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            //max file size 15MB
            'image' => 'required|image|mimes:jpeg,png,jpg|max:15360',
        ]);

        $product = Product::findOrFail($id);

        $image = $request->file('image');

        $thumb_file_name = 'thumb_' . $product->id . $image->getClientOriginalExtension();
        $image_file_name = $product->id . '.' . $image->getClientOriginalExtension();

        //resize image rentain the aspect ratio for thumbnail
        $thumb = Image::make($image->getRealPath())->resize(null, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->fit(300, 300);

        $big_image = Image::make($image->getRealPath())->resize(null, 1000, function ($constraint) {
            $constraint->aspectRatio();
        });

        //check if folder images not exist then create folder
        if (!file_exists(public_path('images'))) {
            mkdir(public_path('images'), 0777, true);
        }

        //save resized image
        $thumb->save(public_path('images/' . $thumb_file_name));
        $big_image->save(public_path('images/' . $image_file_name));

        $model = new ProductImage();
        $model->product_id = $product->id;
        $model->image = $image_file_name;
        $model->save();

        return createJsonResponse($model->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): \Illuminate\Http\JsonResponse
    {
        $model = Product::findOrFail($request->id);
        $images = ProductImage::where('product_id', $model->id)->get();
        foreach ($images as $image) {
            $image->delete();
        }
        $model->delete();

        return createJsonResponse($model->toArray());
    }
}
