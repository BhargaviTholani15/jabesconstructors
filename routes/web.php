<?php

use App\Http\Controllers\Admin\secure\BlogController;
use App\Http\Controllers\Admin\secure\CkeditorController;
use App\Http\Controllers\Admin\secure\ClientLogoController;
use App\Http\Controllers\Admin\secure\DashboardController;
use App\Http\Controllers\Admin\secure\FaqController;
use App\Http\Controllers\Admin\secure\HomeBannersController;
use App\Http\Controllers\Admin\secure\ImageController;
use App\Http\Controllers\Admin\secure\ProjectCategoryController;
use App\Http\Controllers\Admin\secure\ProjectController;
use App\Http\Controllers\Admin\secure\ProjectItemController;
use App\Http\Controllers\Admin\secure\SeoController;
use App\Http\Controllers\Admin\secure\TeamController;
use App\Http\Controllers\Admin\secure\TestimonialController;
use App\Http\Controllers\Admin\secure\SettingsController;
use App\Http\Controllers\Admin\secure\ServiceController;
use App\Http\Controllers\Admin\secure\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//website
Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::post('/contact-us', [HomeController::class, 'contactUs']);
Route::get('/book-appointment', [HomeController::class, 'bookAppointment']);
Route::post('/book-appointment', [HomeController::class, 'bookAppointment']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/projects', [HomeController::class, 'projects']);
//having sub-pages
Route::prefix('/services')->group(function () {
    Route::get('', [HomeController::class, 'services']);
    Route::get('{service?}', [HomeController::class, 'servicesDetails']);
});
Route::prefix('/blogs')->group(function () {
    Route::get('', [HomeController::class, 'blogs']);
    Route::get('{slug?}', [HomeController::class, 'blogDetails']);
});

Route::prefix('/hospitals')->group(function () {
    Route::get('', [HomeController::class, 'hospitals']);
    Route::get('{hospital?}', [HomeController::class, 'hospitalDetails']);
});

Route::prefix('/departments')->group(function () {
    Route::get('', [HomeController::class, 'departments']);
    Route::get('{department?}', [HomeController::class, 'departmentDetails']);
});

Route::get('/faqs', [HomeController::class, 'faqs']);

Route::prefix('_admin')->group(function () {
    Route::get('', [LoginController::class, 'login']);
    Route::post('', [LoginController::class, 'loginsubmit']);

    Route::middleware('auth.web')->prefix('secure')->group(function () {
        //DASHBOARD       
        Route::get('dashboard', [DashboardController::class, 'index']);
        Route::get('contact', [DashboardController::class, 'contact']);
        Route::get('appointment', [DashboardController::class, 'appointments']);

        Route::prefix('images')->group(function () {
            Route::get('', [ImageController::class, 'index']);
            Route::get('add', [ImageController::class, 'add']);
            Route::post('add', [ImageController::class, 'save']);
            Route::get('delete/{id}', [ImageController::class, 'delete']);
        });
        Route::prefix('homeimages')->group(function () {
            Route::get('', [HomeBannersController::class, 'index']);
            Route::get('add/{id?}', [HomeBannersController::class, 'add']);
            Route::post('add/{id?}', [HomeBannersController::class, 'save']);
            Route::get('delete/{id}', [HomeBannersController::class, 'delete']);
        });

        Route::prefix('videos')->group(function () {
            Route::get('', [VideoController::class, 'index']);
            Route::get('add', [VideoController::class, 'add']);
            Route::post('add', [VideoController::class, 'save']);
            Route::get('delete/{id}', [VideoController::class, 'delete']);
        });
        Route::prefix('seo')->group(
            function () {
                Route::get('/', [SeoController::class, 'seoList']);
                Route::get('/addseo/{id?}', [SeoController::class, 'addseoList']);
                Route::post('/addseo/{id?}', [SeoController::class, 'saveList']);
                Route::get('/delete/{id}', [SeoController::class, 'delList']);
            }
        );
        Route::prefix('services')->group(function () {
            Route::get('', [ServiceController::class, 'index']);
            Route::get('add/{id?}', [ServiceController::class, 'add']);
            Route::post('add/{id?}', [ServiceController::class, 'save']);
            Route::get('delete/{id}', [ServiceController::class, 'delete']);
        });
          Route::prefix('project-categories')->group(function () {
            Route::get('', [ProjectCategoryController::class, 'index']);
            Route::get('add/{id?}', [ProjectCategoryController::class, 'add']);
            Route::post('add/{id?}', [ProjectCategoryController::class, 'save']);
            Route::get('delete/{id}', [ProjectCategoryController::class, 'delete']);
        });
          Route::prefix('project-items')->group(function () {
            Route::get('', [ProjectItemController::class, 'index']);
            Route::get('add/{id?}', [ProjectItemController::class, 'add']);
            Route::post('add/{id?}', [ProjectItemController::class, 'save']);
            Route::get('delete/{id}', [ProjectItemController::class, 'delete']);
            Route::get('delete-image/{id}', [ProjectItemController::class, 'deleteImage']);
        });
          Route::prefix('faqs')->group(function () {
            Route::get('', [FaqController::class, 'index']);
            Route::get('add/{id?}', [FaqController::class, 'add']);
            Route::post('add/{id?}', [FaqController::class, 'save']);
            Route::get('delete/{id}', [FaqController::class, 'delete']);
        });
          Route::get('change-password', [DashboardController::class, 'changePassword']);
          Route::post('change-password', [DashboardController::class, 'changePassword']);
          Route::post('ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');
          Route::prefix('testimonials')->group(function () {
            Route::get('', [TestimonialController::class, 'index']);
            Route::get('add/{id?}', [TestimonialController::class, 'add']);
            Route::post('add/{id?}', [TestimonialController::class, 'save']);
            Route::get('delete/{id}', [TestimonialController::class, 'delete']);
        });
          Route::prefix('team')->group(function () {
            Route::get('', [TeamController::class, 'index']);
            Route::get('add/{id?}', [TeamController::class, 'add']);
            Route::post('add/{id?}', [TeamController::class, 'save']);
            Route::get('delete/{id}', [TeamController::class, 'delete']);
        });
          Route::prefix('client-logos')->group(function () {
            Route::get('', [ClientLogoController::class, 'index']);
            Route::get('add/{id?}', [ClientLogoController::class, 'add']);
            Route::post('add/{id?}', [ClientLogoController::class, 'save']);
            Route::get('delete/{id}', [ClientLogoController::class, 'delete']);
        });
          Route::get('settings', [SettingsController::class, 'index']);
          Route::post('settings', [SettingsController::class, 'save']);
        Route::prefix('blog')->group(function () {
            Route::get('', [BlogController::class, 'index']);
            Route::get('add', [BlogController::class, 'add']);
            Route::post('add', [BlogController::class, 'save']);
            Route::get('edit/{id}', [BlogController::class, 'edit']);
            Route::post('edit/{id}', [BlogController::class, 'update']);
            Route::get('delete/{id}', [BlogController::class, 'delete']);
        });
        Route::get('accept/{id}', [DashboardController::class, 'statusAccept']);
        Route::get('cancle/{id}', [DashboardController::class, 'statusCancle']);
        Route::get('convert/{id}', [DashboardController::class, 'statusConvert']);
        Route::get('delete-contact/{id}', [DashboardController::class, 'deleteContact']);
        Route::get('delete-appointment/{id}', [DashboardController::class, 'deleteAppointment']);
    });
});





// Route::get(' ', [HomeController::class, 'home']);
// Route::get('home', [HomeController::class, 'home']);

// Route::get('blogs', [HomeController::class, 'blogs']);
// Route::get('galery', [HomeController::class, 'gallery']);
// Route::get('services', [HomeController::class, 'services']);

// Route::post('contact', [HomeController::class, 'contactSubmit']);
// Route::post('appointment', [HomeController::class, 'appointmentSubmit']);

// Route::get('blogs/{id}', [HomeController::class, 'blogsDetails']);
// Route::get('services/{id}', [HomeController::class, 'servicesDetails']);
// Route::get('/{page}', [HomeController::class, 'show']);
