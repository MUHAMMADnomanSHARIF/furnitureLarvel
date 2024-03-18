<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\ParentCategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\productSizeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StripePaymentController;
use App\Http\Controllers\frontend\DefaultController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Permissions;
use Illuminate\Support\Facades\Route;

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




Route::withoutMiddleware([Permissions::class])->group(function () {
    Route::controller(AuthController::class)
        ->prefix('auth')
        ->name('auth.')
        ->group(function () {
            Route::get('login', 'loginView')->name('login');
            Route::post('login-user', 'userLogin')->name('login.user');
            Route::get('register', 'registerView')->name('register');
            Route::post('check-register', 'checkRegister')->name('check.register');
            Route::get('logout', 'logout')->name('logout');

        });


    Route::view('/Terms', 'frontend.layout.terms')->name('web.terms');
    Route::view('/Privacy-Policy', 'frontend.layout.privacypolicy')->name('web.privacy');
    Route::view('/FAQ', 'frontend.layout.faq')->name('web.faq');
    Route::view('/Contact-Us', 'frontend.layout.contact');


    Route::controller(DefaultController::class)
        ->prefix('')
        ->name('web.')
        ->group(function () {
            Route::get('', 'home')->name('index');
            Route::get('/prod-by-cat/{parentCategory}', 'prodByCat')->name('prodByCat');
            Route::get('/allcategories', 'allparentcategory')->name('allcategories');
            Route::view('/about', 'frontend.layout.about')->name('about');
            Route::get('/product-by-category/{id}', 'productbycategory')->name('product-by-category');
            Route::get('/shop/{category?}', 'all')->name('shop');
            Route::get('/product-by-child-category/{id}', 'porductbychildcategory')->name('productbychildcategory');
            Route::view('/Terms', 'frontend.layout.terms')->name('terms');
            Route::view('/Privacy-Policy', 'frontend.layout.privacypolicy')->name('privacy');
            Route::view('/FAQ', 'frontend.layout.faq')->name('faq');
            Route::get('/product-by-category', 'productbycategory')->name('faq');
            Route::get('/blog', 'blog')->name('faq');
            Route::get('/blog-detail/{id}', 'blogDetail')->name('blogDetail');


            Route::post('add-to-cart', 'addtocart')->name('addtocart');
            Route::post('/update-cart', 'updateCart')->name('updatecart');
            Route::post('add-to-wish/{productId}', 'addtowishlist')->name('addtowish');
            Route::get('/check-out', 'checkout')->name('checkout');
            Route::post('/payment', 'payment')->name('payment');
            Route::get('/cart', 'cart')->name('cart');
            Route::get('/wish', 'wish')->name('wish');
            Route::delete('delete-wish', 'deletewish')->name('deletewish');
            Route::get('product-detail/{name}', 'productDetail')->name('product.detail');
            Route::get('/search/products', 'all')->name('search.products');
            Route::delete('delete-cart', 'deletecart')->name('deletecart');
            Route::get('product/detail/{product}', 'productDetails')->name('prod.detail');
            Route::get('getsize/{id}', function ($id) {

                $size = App\Models\productSize::where('parent_category_id', $id)->get();
                return response()->json($size);
            });
            Route::get('getproduct/{id?}', function ($id = null) {
                $productsQuery = App\Models\Product::query();

                if ($id !== null) {
                    $productsQuery->where('parent_category_id', $id);
                }

                $products = $productsQuery->get();

                $productsWithMedia = $products->map(function ($product) {
                    $product->image_url = $product->getFirstMediaUrl('product.image');
                    return $product;
                });

                return response()->json($productsWithMedia);
            });

            Route::get('getallproducts', function () {
                $products = App\Models\Product::all();

                $productsWithMedia = $products->map(function ($product) {
                    $product->image_url = $product->getFirstMediaUrl('product.image');
                    return $product;
                });

                return response()->json($productsWithMedia);
            });

        });

});

Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)
        ->prefix('user')
        ->name('user.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{user}', 'edit')->name('edit');
            Route::post('update/{user}', 'update')->name('update');
            Route::get('delete/{user}', 'destroy')->name('delete');
        });

    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('filemanager', [FileManagerController::class, 'index'])->name('file.index');
    Route::post('filemanager/upload', [FileManagerController::class, 'upload'])->name('file.upload');
    Route::post('file/store', [FileManagerController::class, 'store'])->name('file.store');
    Route::get('/file/get-image/{id}', [FileManagerController::class, 'getImage']);
    Route::delete('filemanager/{file}', [FileManagerController::class, 'delete'])->name('filemanager.delete');


    Route::controller(RoleController::class)
        ->prefix('role')
        ->name('role.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{role}', 'edit')->name('edit');
            Route::post('update/{role}', 'update')->name('update');
            Route::get('delete/{role}', 'destroy')->name('delete');
        });

    Route::controller(PermissionController::class)
        ->prefix('permission')
        ->name('permission.')
        ->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{permission}', 'edit')->name('edit');
            Route::post('update{permission}', 'update')->name('update');
            Route::get('delete/{permission}', 'destroy')->name('delete');
            Route::get('synchronize', 'synchronize')->name('synchronize');
        });

    Route::controller(ParentCategoryController::class)
        ->prefix('parent/category')
        ->name('parent.category.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{parentCategory}', 'edit')->name('edit');
            Route::post('update/{parentCategory}', 'update')->name('update');
            Route::get('delete/{parentCategory}', 'destroy')->name('delete');
        });

    ;
    Route::controller(ChildCategoryController::class)
        ->prefix('child/category')
        ->name('child.category.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{childCategory}', 'edit')->name('edit');
            Route::post('update/{childCategory}', 'update')->name('update');
            Route::get('delete/{childCategory}', 'destroy')->name('delete');
        });
    Route::controller(ProductController::class)
        ->prefix('product')
        ->name('product.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');

            Route::post('store', 'store')->name('store');
            Route::get('edit/{product}', 'edit')->name('edit');
            Route::post('update/{product}', 'update')->name('update');
            Route::get('delete/{product}', 'destroy')->name('delete');

        });
    Route::controller(ColorController::class)
        ->prefix('color')
        ->name('color.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('delete/{color}', 'destroy')->name('delete');
        });
    // Product Size Route
    Route::controller(productSizeController::class)
        ->prefix('size')
        ->name('size.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('delete/{size}', 'destroy')->name('delete');
        });

    // Setting Routes
    Route::controller(SettingController::class)
        ->prefix('setting')
        ->name('setting.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::post('store', 'storeUpdateSetting')->name('storeUpdate');
        });


    Route::controller(StripePaymentController::class)->group(function () {
        Route::get('stripe/{id}', 'stripe');

        Route::post('/stripe/{id}', 'StripePost')->name('stripe.post');

    });
    Route::controller(DefaultController::class)
        ->prefix('order')
        ->name('order.')
        ->group(function () {
            Route::get('detail', 'detail')->name('detail');
            Route::get('details{id}', 'details')->name('details');
            Route::get('edit/{id}', 'orderedit')->name('edit');
            Route::post('update/{id}', 'orderupdate')->name('update');


        });
    Route::controller(DefaultController::class)
        ->prefix('order')
        ->name('order.')
        ->group(function () {
            Route::get('trans', 'detail')->name('trans');


        });

        Route::controller(BlogController::class)
        ->prefix('admin/blog')
        ->name('blog.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{blog}', 'edit')->name('edit');
            Route::post('update{blog}', 'update')->name('update');
            Route::get('delete/{blog}', 'destroy')->name('delete');
        });

});
