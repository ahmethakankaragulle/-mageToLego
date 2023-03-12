<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/complete', function () {
    return view('orderscomplete');
});


Route::get('/editor', function () {
    return view('image-editor');
});


Route::get('user/orders', function () {

    $orders = auth()->user()->orders()->get();
    $query = OrderItem::query();
    foreach ($orders as $order) {
        $query->where('order_id', $order->id);
    }
    $order_items = $query;

    return view('userorders')->with([
        $orders,
        $order_items
    ]);
});


Route::get('/sepet', function () {
    return view('cart')->with([
        'baskets' => auth()->user()->baskets()->whereStatus(0)->get(),
        'products' => auth()->user()->products()->whereStatus(0)->get(),
    ]);
})->middleware('auth');


Route::middleware('auth')->post('/product/push', function (\Illuminate\Http\Request $request) {

    $filename = (string) auth()->user()->id . "-" . now()->format('Y-m-dHis');
    $dataurl = "storage/products/" . $filename . ".png";
    $image = Image::make($request->imagedata);
    $image->save($dataurl);
    $request->user()->products()->create([
        'imagedata' => $dataurl
    ]);
    return $request->user()->products()->whereStatus(0)->get();
});


Route::middleware('auth')->post('/basket/push', function (\Illuminate\Http\Request $request) {
    $pieces = $request->collect('data')->sum(function ($item) {
        return $item[3];
    });
    $request->user()->baskets()->create([
        'price' => $pieces * 0.2,
        'name' => "
        {$pieces} parça 1x1 TransLego paketi",
        'data' => $request->data,
        'product_id' => $request->product_id,
    ]);
    return $request->user()->baskets()->whereStatus(0)->get();
});


Route::group(['middleware' => ['auth', 'can:admin']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard')->with(
            [
                'orders' => Order::where('status', 0)->get(),
            ]
        );
    })->name('dashboard');
});


Route::get('/', [ContactUsFormController::class, 'createForm']);
Route::post('/', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


Route::get('/adres', function () {
    return view('address');
});

Route::post('/sepet/onayla', function (Request $request) {

    $request->validate([
        'full-name' => 'required|string|max:130|min:6',
        'state-address-region' => 'min:10|max:255|string',
        'telephone' => "starts_with:05|max:13|min:10",
    ]);

    $order = new Order();
    $product = auth()->user()->products()->whereStatus(0)->get()->first();

    $basket = auth()->user()->baskets()->whereStatus(0)->get();
    $order->price = $basket->sum('price');
    $order->user_id = auth()->user()->id;
    $order->phone = $request->telephone;
    $order->address = $request->get('state-adress-region');
    $order->name = $request->get('full-name');
    $order->status = 1;
    $order->save();

    $basket->each(function ($basket) use ($order, $product) {
        $orderItems = new OrderItem();
        $orderItems->order_id = $order->id;
        $orderItems->product_id = $product->id;
        $orderItems->data = $basket->data;
        $orderItems->save();
    });


    $basket->each(fn ($basket) => $basket->update(['status' => 1]));
    $product->each(fn ($product) => $product->update(['status' => 1]));

    return view('orderscomplete');
})->name('sepet.onay');



Route::get('/sepet/{id}/sil', function ($id) {
    auth()->user()->baskets()->where('id', $id)->delete();
    return back();
})->name('sepet.sil');




Route::get('/sepet-durum/{order}/{status}', function (Order $order, int $status) {
    $order->status = $status;
    $order->save();

    return back();
})->name('siparis.durum');
