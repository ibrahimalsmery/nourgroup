<?php

use App\Http\Controllers\BusnissDevelopmentRequestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ElearningRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobAdvertisementController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ResearchForClientRequestController;
use App\Http\Controllers\ResearchForCompanyRequestController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffingForClientRequestController;
use App\Http\Controllers\StaffingForCompanyRequestController;
use App\Http\Controllers\TraningRequestController;
use App\Models\JobAdvertisement;
use App\Models\StaffingForClientRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Post;

// Public routes
Route::get('/', function () {
    $services = Service::orderBy('id')->get();
    $posts = Post::whereNotNull('actived_at')->latest()->take(3)->get();
    return view('index', compact('services', 'posts'));
});
Route::view('/info', 'info', ['title' => 'معلومات']);
Route::view('/about', 'about', ['title' => 'من نحن']);
Route::view('/vision', 'vision', ['title' => 'رؤيتنا']);
Route::view('/services', 'new.services', ['title' => 'الخدمات']);
Route::view('/clients', 'clients', ['title' => 'العملاء']);
Route::view('/contact', 'contact', ['title' => 'اتصل بنا']);
Route::get('/jobs',[JobAdvertisementController::class,'jobs']);
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/service/{service}/posts', [ServiceController::class, 'service_posts'])->name('service.posts');
Route::get('/posts/create', [PostController::class, 'create_public'])->name('posts.public.create');
Route::post('/posts', [PostController::class, 'store_public'])->name('posts.public.store');
// traning service requests
Route::post('/research-client-save',[ResearchForClientRequestController::class,'store'])->name('research.client.store');
Route::post('/research-company-save',[ResearchForCompanyRequestController::class,'store'])->name('research.company.store');
Route::post('/traning-requests-save',[TraningRequestController::class,'store'])->name('traning.store');
Route::post('/bs-dev-save',[BusnissDevelopmentRequestController::class,'store'])->name('bs-dev.store');
Route::post('/elearning-save',[ElearningRequestController::class,'store'])->name('elearning.store');
Route::post('/staffing-client-save',[StaffingForClientRequestController::class,'store'])->name('staffing.client.store');
Route::post('/staffing-company-save',[StaffingForCompanyRequestController::class,'store'])->name('staffing.company.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');
// expert pages
Route::get('/show/expert/{expert}', [ExpertController::class, 'show_public'])->name('experts.public.show');
// posts pages
Route::get('/show/post/{post}', [PostController::class, 'show_public'])->name('posts.public.show');
// Authentication routes
Auth::routes(['register' => false]);
// Dashboard routes
Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
    Route::resource('experts', ExpertController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('sectors', SectorController::class);
    Route::resource('posts', PostController::class);
    Route::resource('jobs', JobAdvertisementController::class);
    Route::get('jobs/{job}/toggle-active', [JobAdvertisementController::class,'toggle_active'])->name('jobs.active');
    Route::resource('contacts', ContactController::class)->except(['create', 'edit', 'update']);
    Route::patch('contacts/{contact}/mark-as-read', [ContactController::class, 'mark_as_read'])
        ->name('contacts.markAsRead');
    Route::get('active-or-deactive/{post}', [PostController::class, 'toggle_active'])
        ->name('posts.toggle-active');
    // Requests pages
    Route::get('orders',[OrdersController::class,'index'])->name('orders.index');
    Route::get('orders/research/clients',[OrdersController::class,'research_client'])->name('orders.research.client');
    Route::get('orders/research/compnay',[OrdersController::class,'research_company'])->name('orders.research.company');
    Route::get('orders/traning',[OrdersController::class,'traning'])->name('orders.traning');
    Route::get('orders/bs-dev',[OrdersController::class,'bs_dev'])->name('orders.bs-dev');
    Route::get('orders/elearning',[OrdersController::class,'elearning'])->name('orders.elearning');
    Route::get('orders/staffing-client',[OrdersController::class,'staffing_client'])->name('orders.staffing.client');
    Route::get('orders/staffing-company',[OrdersController::class,'staffing_company'])->name('orders.staffing.company');
});
