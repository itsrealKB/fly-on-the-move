<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\VideoGalleryController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/* Web Login & Register Create */
    Route::middleware('guest')->group(function(){
        Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
        Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
    });
/* Web Login & Register Create */

/* Web Auth */
    Route::controller(AuthController::class)->group(function(){
        Route::post('/register', 'register')->name('register.post');
        Route::post('/login', 'login')->name('login.post');
        Route::post('/logout', 'logout')->name('logout');
        Route::get('/forget-password','forgetPasswordFrom')->name('forget.password');
        Route::get('/reset-password','resetPasswordFrom')->name('reset.password');
    });
/* Web Auth */

Route::get('/', function () {
    return view('screens.web.index');
})->name('index');

Route::get('/deals', function () {
    return view('screens.web.deals');
})->name('deals');

Route::get('/view-deals', function () {
    return view('screens.web.view-deals');
})->name('view.deals');

Route::get('/freshwater', function () {
    return view('screens.web.freshwater');
})->name('freshwater');

Route::get('/salt-water', function () {
    return view('screens.web.salt-water');
})->name('salt.water');

Route::get('/rental-gear-rent-this-rod', function () {
    return view('screens.web.rental-gear-rent-this-rod');
})->name('rental.gear');

Route::get('/all-gallery-video', function () {
    return view('screens.web.all-gallery-video');
})->name('gallery.video');

Route::get('/about', function () {
    return view('screens.web.about');
})->name('about');

Route::get('/destination', function () {
    return view('screens.web.destination');
})->name('destination');

Route::get('/view-destination', function () {
    return view('screens.web.view-destination');
})->name('view.destination');

Route::get('/payment-detail', function () {
    return view('screens.web.payment-detail');
})->name('payment.detail');

Route::get('/booking-term-and-condition', function () {
    return view('screens.web.booking-term-and-condition');
})->name('booking.terms.conditions');

Route::get('/term-and-condition', function () {
    return view('screens.web.term-and-condition');
})->name('terms.conditions');

Route::get('/contact', function () {
    return view('screens.web.contact');
})->name('contact');

Route::get('/faq', function () {
    return view('screens.web.faq');
})->name('faq');

Route::get('/partner-help', function () {
    return view('screens.web.partner-help');
})->name('partner.help');

/* Admin Routes */

    Route::get('/dashboard', function () {
        return view('screens.admin.index');
    })->name('dashboard');

    Route::prefix('fish-operation')->group(function () {
        Route::get('/your-fish-operation', function () {
            return view('screens.admin.your-fish-operation');
        })->name('fish.operation');

        Route::get('/add-your-fishing', function () {
            return view('screens.admin.add-your-fishing');
        })->name('add.fishing');

        Route::get('/your-room-type', function () {
            return view('screens.admin.your-room-type');
        })->name('room.type');

        Route::get('/add-your-room-type', function () {
            return view('screens.admin.add-your-room-type');
        })->name('add.room.type');

        Route::get('/your-offers-and-deals', function () {
            return view('screens.admin.your-offers-and-deals');
        })->name('offers.and.deals');

        Route::get('/add-your-offers-and-deals', function () {
            return view('screens.admin.add-your-offers-and-deals');
        })->name('add.offers.and.deals');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/my-profile', function () {
            return view('screens.admin.my-profile');
        })->name('my.profile');

        Route::get('/contact-us', function () {
            return view('screens.admin.contact-us');
        })->name('contact.us');

        Route::get('/payment-detail', function () {
            return view('screens.admin.payment-detail');
        })->name('admin.payment.detail');
    });

    /* Route::get('/your-fish-operation', function () {
        return view('screens.admin.your-fish-operation');
    })->name('fish.operation');

    Route::get('/add-your-fishing', function () {
        return view('screens.admin.add-your-fishing');
    })->name('add.fishing');

    Route::get('/your-room-type', function () {
        return view('screens.admin.your-room-type');
    })->name('room.type');

    Route::get('/add-your-room-type', function () {
        return view('screens.admin.add-your-room-type');
    })->name('add.room.type');

    Route::get('/your-offers-and-deals', function () {
        return view('screens.admin.your-offers-and-deals');
    })->name('offers.and.deals');

    Route::get('/add-your-offers-and-deals', function () {
        return view('screens.admin.add-your-offers-and-deals');
    })->name('add.offers.and.deals'); */

    /* Route::get('/my-profile', function () {
        return view('screens.admin.my-profile');
    })->name('my.profile');

    Route::get('/contact-us', function () {
        return view('screens.admin.contact-us');
    })->name('contact.us');

    Route::get('/payment-detail', function () {
        return view('screens.admin.payment-detail');
    })->name('admin.payment.detail'); */

    Route::get('/booking', function () {
        return view('screens.admin.booking');
    })->name('booking');

    Route::get('/invoices', function () {
        return view('screens.admin.invoices');
    })->name('invoices');

    /* Route::get('/my-wallet', function () {
        return view('screens.admin.my-wallet');
    })->name('my.wallet');

    Route::get('/payout', function () {
        return view('screens.admin.payout');
    })->name('payout'); */

    Route::prefix('wallet')->group(function () {
        Route::get('/my-wallet', function () {
            return view('screens.admin.my-wallet');
        })->name('my.wallet');

        Route::get('/payout', function () {
            return view('screens.admin.payout');
        })->name('payout');
    });

    Route::get('/payment', function () {
        return view('screens.admin.payment');
    })->name('payment');

    Route::get('/coupon', function () {
        return view('screens.admin.coupon');
    })->name('coupon');

    Route::get('/car-hire' ,function() {
        return view('screens.admin.car-hire');
    })->name('car.hire');

    Route::get('/flight', function () {
        return view('screens.admin.flight');
    })->name('flight');

    Route::get('/wishlist', function () {
        return view('screens.admin.wishlist');
    })->name('wishlist');

    Route::get('/hotel', function () {
        return view('screens.admin.hotel');
    })->name('hotel');

    Route::controller(AdminAuthController::class)->prefix('admin')->group(function () {
        // Route::get('/register','registerForm')->name('admin.register');
        // Route::post('/register','register');
        Route::get('/login','loginForm')->name('admin.login')->middleware('guest');
        Route::post('/login','login')->name('admin.login.post');
        Route::post('/logout','logout')->name('admin.logout');
        Route::get('/reset-password','resetPasswordForm')->name('admin.reset.password');
        Route::post('/reset-password','resetPassword')->name('admin.reset.password.post');
        Route::get('/update-password/{token}','updatePasswordForm')->name('admin.update.password');
        Route::post('/update-password','updatePassword')->name('admin.update.password.post');
        Route::get('/success-login/{email}','successLogin')->name('admin.success.login');
    });

/* Admin Routes */


Route::get('/gallery',[ImageGalleryController::class,'index'])->name('gallery');

Route::prefix('cms')->group(function(){
    Route::get('/image-gallery', [ImageGalleryController::class,'create'])->name('image.gallery');
    Route::post('/image-gallery', [ImageGalleryController::class,'store'])->name('image.gallery.post');
    Route::get('/image-gallery/{cmsMeta}', [ImageGalleryController::class,'show'])->name('view.gallery.image');
    Route::get('/image-gallery/edit/{cmsMeta}', [ImageGalleryController::class,'edit'])->name('edit.gallery.image');
    Route::get('/video-gallery', [VideoGalleryController::class,'create'])->name('video.gallery');
    Route::post('/video-gallery', [VideoGalleryController::class,'store'])->name('video.gallery.post');

});


