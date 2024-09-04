<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\KathavachakController;
use App\Http\Controllers\PujarijiController;
use App\Http\Controllers\JajmaanController;
use App\Http\Controllers\KathaBookingController;
use App\Http\Controllers\AstrologyController;
use App\Http\Controllers\PoojaBookingController;
use App\Http\Controllers\PoojaController;
use App\Http\Controllers\KundaliController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\TempleController;
use App\Http\Controllers\UpcomingPujaController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MuhhurtController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Artisan;

Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'hi'])) {
        abort(400);
    }
    Session::put('locale', $locale);
    Cookie::queue('locale', $locale, 60 * 24 * 365); // Store for 1 year

    return redirect()->back();
});
// Clear All cache:
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Cache::flush();
    return 'Route, Config and View cache cleared';
});

Route::get('/updateapp', function()
{
    exec('composer dump-autoload');
    echo 'composer dump-autoload complete';
});

Route::view('/cancellation_refund', 'front.cancellation_refund');
Route::view('/features', 'front.features')->name('features');
Route::view('/mobileapp', 'front.mobileapp');
Route::view('/signgle-blog', 'front.single_blog')->name('singleBlogs');
Route::view('/payment-success', 'front.payment_success');
Route::view('/payment-failed', 'front.payment_failed');
Route::view('/as-pujari', 'front.as-pujari')->name('asPujariJi');
// Route Before login
Route::controller(FrontEndController::class)->group(function () {
    // Route::get('/', 'index')->name('home');
    Route::get('/home', 'home')->name('home');
    Route::get('/', function () {
        return redirect()->route('puja');
    });
    Route::get('/blog', 'front_blog')->name('blogs');
    Route::get('/view-bolg/{id}', 'view_bolg');
    Route::get('/term-conditons', 'tc_page');
    Route::get('/privacy-ploicy', 'pp_page');
    Route::get('/pricing', 'pricing');
    Route::get('/puja', 'puja')->name('puja');
    Route::get('/puja/{slug}', 'pujaDetails')->name('pujaDetails');
    Route::get('/booking-process/{slug}', 'booking')->name('pujaBooking');
    Route::post('/send-otp','send_otp');
    Route::post('/verify-otp','verify_otp');
    Route::get('/pooja-feedback','poojaFeedback');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/login', 'login')->name('login');
    

});

Route::post('/initiate-payment', [PaymentController::class, 'initiatePayment'])->name('payment.initiate');
Route::post('/payment-callback', [PaymentController::class, 'paymentCallback'])->name('payment.callback');


// Route Before login
Route::controller(AdminAuthController::class)->group(function () {
    Route::get('/admin', 'index');
    Route::get('/account-login', 'member_login')->name('account.login');
    Route::get('/event-login', 'member_login')->name('event.login');
    Route::get('/customer-support-login', 'member_login')->name('customer.login');
    Route::get('/paditji-login', 'member_login')->name('panditji.login');
    Route::post('/admin-login-verify', 'admin_login')->name('admin-login-verify');
    Route::post('/member_login_post', 'member_login_post')->name('member_login_post');
});


// Route After login
Route::group(['middleware' => ['AdminCheck','prevent-back-history']], function(){

    Route::controller(AdminAuthController::class)->group(function () {
        Route::get('dashboard', 'admin_dashboard');
        Route::get('my-profile', 'admin_profile');
        Route::POST('update-profile', 'update_profile')->name('update_profile');
        Route::POST('update-password', 'update_password')->name('update_password');
        Route::POST('update-server-key', 'update_server_key')->name('update_server_key');
        Route::POST('update-company-details12', 'update_company_details')->name('update_company_details');
        Route::get('admin_logout', 'admin_logout')->name('admin.logout');

        Route::post('get_member_login', 'get_member_login')->name('admin.get.member.login');
        Route::post('update_member_details', 'update_member_details');
    });


    Route::controller(PujarijiController::class)->group(function () {

        Route::get('kathas', 'kathas')->name('admin.kathas');
        Route::get('astrology', 'astrology')->name('admin.astrology');
        Route::get('pooja-perform', 'pooja_perform')->name('admin.pooja-perform');
        Route::POST('update_types', 'update_types');
        Route::POST('delete_types', 'delete_types');
        Route::POST('save_types', 'save_types')->name('save_types');
        Route::POST('edit_data_types', 'edit_data_types')->name('edit_data_types');

        Route::get('language', 'language')->name('admin.languge');
        Route::POST('update_language', 'update_language');
        Route::POST('delete_language', 'delete_language');
        Route::POST('save_language', 'save_language')->name('save_language');
        Route::POST('edit_data_language', 'edit_data_language')->name('edit_data_language');

        Route::get('add-new-blog', 'addNewBlog')->name('admin.blog.add');
        Route::post('save-new-blog', 'saveNewBlog')->name('save.new.blog');

        Route::get('blog-list', 'blog_list')->name('admin.blog.list');
        Route::POST('update_blog', 'update_blog')->name('update_blog');
        Route::POST('delete_blog', 'delete_blog')->name('delete_blog');

        Route::get('pending-blog-list', 'pending_blog_list')->name('pending_blog_list');
        Route::POST('approve_blog', 'approve_blog')->name('approve_blog');

        Route::get('city-list', 'city_list')->name('city_list');
        Route::post('save_city', 'save_city')->name('save_city');
        Route::post('update_city', 'update_city')->name('update_city');
        Route::post('delete_city', 'delete_city')->name('delete_city');


        Route::get('state-list', 'state_list')->name('state_list');
        Route::post('save_state_post', 'save_state_post')->name('save_state_post');
        Route::post('update_state', 'update_state')->name('update_state');
        Route::post('delete_state', 'delete_state')->name('delete_state');

        Route::POST('send-notification', 'send_notification');

        Route::get('raised-query', 'raised_query');
        Route::POST('delete_app_review', 'delete_app_review');

        Route::POST('get_vendor_cities', 'get_vendor_cities');

        Route::get('extra-payment-history', 'extra_payment_history');

        Route::POST('delete_payment', 'delete_payment');

        Route::get('app-banner', 'app_banner');

        Route::POST('delete_banner', 'delete_banner');
        Route::POST('uppdate_banner', 'uppdate_banner');
        Route::POST('save_banner', 'saveBanner');
        Route::POST('get_blog', 'get_blog');

        Route::get('update-terms-condition', 'term_condition')->name('admin.tc');
        Route::post('update-tc-post', 'udpdate_term_condition')->name('admin.update.tc');
        Route::get('update-privacy-policies', 'privacy_policy')->name('admin.pp');
        Route::post('update-pp-post', 'udpdate_privacy_policies')->name('admin.update.pp');

        Route::get('send-vendor-notification', 'send_vendor_notification');
        Route::get('send-user-notification', 'send_user_notification');
        Route::post('send-bulk-notification-post', 'send_bulk_notification_post');

        Route::get('yajman-contact-details', 'yajman_contact_details');
        Route::get('astrologer-contact-details', 'astrologer_contact_details');
        Route::get('kathavachak-contact-details', 'kathavachak_contact_details');
        Route::get('pujari-contact-details', 'pujari_contact_details');

        Route::POST('get_p_cities', 'get_cities');

        Route::get('payment-history', 'payment_history');
    });



    Route::controller(KathavachakController::class)->group(function () {

        Route::get('kathavachak-list', 'index')->name('admin.kathavachak');
        Route::POST('update_kathavachak', 'update_kathavachak');
        Route::POST('get_kathavachak_details', 'get_kathavachak_details');

        Route::get('pending-kathavachak-request', 'pending_kathavachak')->name('admin.pending.kathavachak');
        Route::POST('verify_kathavachak', 'verify_kathavachak');
        Route::POST('reject_kathavachak', 'reject_kathavachak');

        Route::get('rejected-kathavachak-request', 'rejected_kathavachak')->name('admin.rejected.kathavachak');
        Route::get('kathavachak_filter', 'kathavachak_filter')->name('kathavachak_filter');

        Route::get('kathavachak-profile/{id}', 'kathavachak_profile');
        Route::get('update-profile/{id}', 'update_profile');
        Route::POST('update-kathavachak-post', 'update_kathavachak_post')->name('UpdateKathavachak');

        Route::POST('p_delete_kathavachak', 'p_delete_kathavachak')->name('p_delete_kathavachak');
    });


    Route::controller(KathaBookingController::class)->group(function () {

        Route::get('total-kathas', 'total_kathas')->name('admin.total.kathas');
        Route::POST('cancelled_booking_data', 'cancelled_booking_data')->name('cancelled_booking_data');
        Route::get('pending-kathas', 'pending_katha')->name('admin.pending.kathas');
        Route::get('cancel-kathas', 'cancel_katha')->name('admin.cancel.kathas');
        Route::get('approved-cancel-kathas', 'approved_cancel_katha')->name('admin.approved.cancel.kathas');
        Route::POST('initate_refund', 'initate_refund')->name('initate_refund');

        Route::GET('booking_filter', 'booking_filter')->name('booking_filter');
        Route::GET('state_city_filter', 'state_city_filter')->name('state_city_filter');

    });



    Route::controller(JajmaanController::class)->group(function () {

        Route::get('jajmaan', 'jajmaan')->name('admin.jajmaan');
        Route::get('jajmaan-profile/{id}', 'jajmaan_profile')->name('admin.jajmaan.profile');
        Route::POST('update_jajmaan', 'update_jajmaan');
        Route::POST('delete_jajmaan', 'delete_jajmaan');
        Route::get('edit-jajmaan/{id}', 'edit_jajmaan')->name('admin.edit.jajmaan');
        Route::POST('update-jajmaan-post', 'update_jajmaan_post');
        Route::get('jajmaan_filter', 'jajmaan_filter')->name('jajmaan_filter');
        // Route::POST('send-notification', 'send_notification');
        Route::POST('get_cities', 'get_cities');

    });


    Route::controller(AstrologyController::class)->group(function () {

        Route::get('astrologer-list', 'index')->name('admin.astrologer');
        Route::get('get-astro-list', 'get_astro')->name('get.astro');
        Route::post('update_astro', 'update_astro');
        Route::post('delete_astro', 'delete_astro');
        Route::get('astrologer-details/{id}', 'astrologer_details');

        Route::get('astrologer-pending-list', 'pending_list')->name('admin.astrologer.pendinglist');
        Route::post('verify_astro', 'verify_astro');
        Route::post('reject_astro', 'reject_astro');

        Route::get('astrologer-rejected-list', 'rejected_list')->name('admin.astrologer.rejectedlist');

        Route::get('astrology-plan', 'astrology_plan')->name('admin.astrology.plan');
        Route::get('store-plan', 'store_plan')->name('admin.store.plan');
        Route::post('save_plan', 'save_plan');
        Route::post('update_plan', 'update_plan');
        Route::post('delete_plan', 'delete_plan');
        Route::get('edit-plan/{id}', 'edit_plan')->name('admin.edit.plan');


        Route::get('pending-bookings', 'pending_bookings')->name('admin.pending.booking');
        Route::post('update_astro', 'update_astro');
        Route::post('delete_astro', 'delete_astro');


        Route::get('completed-bookings', 'completed_bookings')->name('admin.completed.booking');

        Route::get('cancelled-bookings', 'cancelled_bookings')->name('admin.cancelled.booking');
        Route::get('completed-cancelled-bookings', 'completed_cancelled_bookings')->name('admin.cancelled.approved.booking');
        Route::post('get-cancel-details', 'get_cancel_details');

        Route::post('initiate-astro-booking-refund', 'initate_refund_astro_booking');

        Route::get('astrologer-update-profile/{id}', 'update_profile');
        Route::POST('update-astrologer-post', 'update_astrologer_post')->name('Updateastrologer');

        Route::get('astrologer_filter', 'astrologer_filter')->name('astrologer_filter');


        Route::get('astro-withdraw-request', 'withdraw_request')->name('admin.astro.wihraw.request');
        Route::get('astro-complete-withdraw', 'complete_request')->name('admin.astro.complete.wihraw.request');
        Route::get('astro-rejected-request', 'rejected_request')->name('admin.astro.rejected.wihraw.request');
        Route::post('astro-verify_withdraw', 'verify_withdraw');
        Route::post('astro-reject_withdraw', 'reject_withdraw');
    });


    Route::controller(PoojaBookingController::class)->group(function () {

        Route::get('pujariji-list', 'index')->name('admin.pujariji');
        Route::post('update_pujari', 'update_pujari');
        Route::post('delete_pujari', 'delete_pujari');
        Route::get('pujariji-details/{id}', 'pujariji_details');

        Route::get('pending-pujariji-list', 'pending_pujariji')->name('admin.pending.pujariji');
        Route::post('verify_vendor', 'verify_vendor');
        Route::post('reject_vendor', 'reject_vendor');
        Route::get('pujariji-update-profile/{id}', 'update_profile');
        Route::POST('update-pujariji-post', 'update_pujariji_post')->name('UpdatePujari');

        Route::get('rejected-pujariji-list', 'rejected_pujariji')->name('admin.rejected.pujariji');
        Route::post('delete_permanently', 'delete_permanently');
        Route::get('withdraw-request', 'withdraw_request')->name('admin.wihraw.request');
        Route::get('complete-withdraw', 'complete_request')->name('admin.complete.wihraw.request');
        Route::get('rejected-request', 'rejected_request')->name('admin.rejected.wihraw.request');
        Route::post('verify_withdraw', 'verify_withdraw');
        Route::post('reject_withdraw', 'reject_withdraw');

        Route::get('pujari_filter', 'pujari_filter')->name('pujari_filter');

        // Offline Pooja Bookings
        Route::get('offline-pending-pooja', 'offline_pending_pooja')->name('offline.pending.list');

        Route::get('offline-completed-pooja', 'offline_completed_pooja')->name('offline.completed.list');

        Route::get('offline-cancelled-booking', 'offline_cancelled_request')->name('offline.cancelled.list');

        Route::get('offline-completed-cancelled-booking', 'offline_completed_cancelled_request')->name('offline.cancelled.completed.list');



        // online Pooja Bookings
        Route::get('online-pending-pooja', 'online_pending_pooja')->name('online.pending.list');

        Route::get('online-completed-pooja', 'online_completed_pooja')->name('online.completed.list');

        Route::get('online-cancelled-booking', 'online_cancelled_request')->name('online.cancelled.list');

        Route::get('online-completed-cancelled-booking', 'online_completed_cancelled_request')->name('online.cancelled.completed.list');

        Route::post('get_pooja_package_inclusion_detail', 'get_pooja_package_inclusion_detail');
        Route::post('initate_refund_pooja_booking', 'initate_refund_pooja_booking');
        Route::post('get-booking-details', 'get_booking_details');

        Route::post('update-pujari-details', 'update_pujari_details');

         // virtual Pooja Bookings
        Route::post('web-complete-puja', 'virtual_complete_booking');
        Route::get('virtual-pending-pooja', 'virtual_pending_pooja')->name('virtual.pending.list');
        Route::get('virtual-completed-pooja', 'virtual_completed_pooja')->name('virtual.completed.list');
        Route::get('virtual-cancelled-booking', 'virtual_cancelled_request')->name('virtual.cancelled.list');
        Route::get('virtual-completed-cancelled-booking', 'virtual_completed_cancelled_request')->name('virtual.cancelled.completed.list');
        Route::post('virtual-get-booking-details', 'virtual_get_booking_details');
    });


    Route::controller(PoojaController::class)->group(function () {

        Route::get('pooja-pactegory', 'pooja_pactegory')->name('admin.pooja-category');
        Route::post('save-category', 'save_category')->name('addNewCategoryPost');
        Route::post('get-category', 'get_category');
        Route::post('update-category', 'update_category')->name('updatecategory');
        Route::post('delete-category', 'delete_category')->name('deketecategory');

        Route::get('add-new-pooja', 'add_new_pooja')->name('admin.addNewPooja');
        Route::post('save-new-pooja', 'save_new_pooja')->name('addNewPoojaPost');
        Route::get('pooja-list', 'pooja_list')->name('admin.poojaList');
        Route::post('update-pooja', 'update_pooja')->name('updatePooja');
        Route::post('delete-pooja', 'delete_pooja')->name('deketePooja');
        Route::get('edit-pooja/{id}', 'edit_pooja');


        Route::get('package-list', 'package_list')->name('admin.packageList');
        Route::post('get-pooja-details', 'get_pooja_details');
        Route::post('update-package', 'update_package')->name('updatePackage');
        Route::post('delete-package', 'delete_package')->name('deletePackage');
        Route::get('add-new-package', 'add_new_package')->name('admin.addNewPackage');
        Route::get('edit-package/{id}', 'edit_package')->name('admin.editPackage');
        Route::post('save-package', 'save_package')->name('addNewPackagePost');
        Route::post('get-package-list', 'get_package_list')->name('ajax.package.list');


        Route::get('pooja-videos', 'pooja_videos')->name('admin.pooja-videos');
        Route::post('save-pooja-video', 'save_pooja_video')->name('addNewPoojaVideo');
        Route::get('get-video-single/{id}', 'get_pooja_video_single');
        Route::post('update-pooja-video', 'update_pooja_video')->name('updatePoojaVideo');
        Route::post('delete-pooja-video', 'delete_pooja_video')->name('deletePoojaVideo');

        Route::get('virtual-add-new-pooja', 'virtual_add_new_pooja')->name('virtual.addNewPooja');
        Route::post('virtual-save-new-pooja', 'virtual_save_new_pooja')->name('virtual.addNewPoojaPost');
        Route::post('save-pooja-basic', 'virtual_save_pooja_basic')->name('savePoojaBasic');
        Route::post('save-pooja-mandir', 'virtual_save_pooja_mandir')->name('savePoojaMandir');
        Route::post('save-pooja-benefit', 'virtual_save_pooja_benefit')->name('savePoojaBenefit');
        Route::post('save-pooja-process', 'virtual_save_pooja_process')->name('savePoojaProcess');
        Route::post('save-pooja-detail', 'virtual_save_pooja_detail')->name('savePoojaDetail');
        Route::get('virtual-pooja-list', 'virtual_pooja_list')->name('virtual.poojaList');
        Route::get('virtual-past-puja', 'virtual_past_puja')->name('virtual.pastPooja');
        Route::post('virtual-update-pooja', 'virtual_update_pooja')->name('virtual.updatePooja');
        Route::post('virtual-delete-pooja', 'virtual_delete_pooja')->name('virtual.deketePooja');
        Route::get('virtual-edit-pooja/{id}', 'virtual_edit_pooja')->name('virtual.editPuja');
        Route::get('get-puja-detail-single/{id}', 'get_pooja_detail_single');
        Route::post('delete-pooja-detail', 'delete_pooja_detail')->name('deletePoojaDetail');
        Route::get('get-puja-benefit-single/{id}', 'get_pooja_benefit_single');
        Route::post('delete-pooja-benefit', 'delete_pooja_benefit')->name('deletePoojaBenefit');
        Route::get('get-puja-process-single/{id}', 'get_pooja_process_single');
        Route::post('delete-pooja-process', 'delete_pooja_process')->name('deletePoojaProcess');
        Route::get('get-puja-mandir-single/{id}', 'get_pooja_mandir_single');
        Route::post('delete-pooja-mandir', 'delete_pooja_mandir')->name('deletePoojaMandir');
        Route::get('get-puja-package-single/{id}', 'get_pooja_package_single');
        Route::post('delete-pooja-package', 'delete_pooja_package')->name('deletePoojaPackage');

        Route::get('pooja-enquiry', 'puja_enquiry')->name('admin.poojaEnquiry');
        Route::get('pooja-reviews', 'puja_review')->name('admin.poojaReview');


        Route::get('virtual-pooja-category', 'virtual_pooja_category')->name('virtual.pooja-category');
        Route::post('virtual-save-category', 'save_category')->name('virtual.addNewCategoryPost');
        Route::post('virtual-get-category', 'get_category');
        Route::post('virtual-update-category', 'update_category')->name('virtual.updatecategory');
        Route::post('virtual-delete-category', 'delete_category')->name('virtual.deketecategory');

        Route::get('virtual-package-list', 'virtual_package_list')->name('virtual.packageList');
        Route::post('virtual-get-pooja-details', 'virtual_get_pooja_details');
        Route::post('virtual-update-package', 'virtual_update_package')->name('virtual.updatePackage');
        Route::post('virtual-delete-package', 'virtual_delete_package')->name('virtual.deletePackage');
        Route::get('virtual-add-new-package', 'virtual_add_new_package')->name('virtual.addNewPackage');
        Route::get('virtual-edit-package/{id}', 'virtual_edit_package')->name('virtual.editPackage');
        Route::post('virtual-save-package', 'virtual_save_package')->name('virtual.addNewPackagePost');

        Route::post('virtual-puja-save-image', 'virtual_savePoojaImages')->name('virtual.addNewPicturePost');
        Route::POST('delete-vertual-pooja-image', 'delete_pooja_image');

        Route::get('inclusion-list', 'inclusion_list')->name('admin.InclusionList');
        Route::post('update-inclusion', 'update_inclusion')->name('updateinclusion');
        Route::post('delete-inclusion', 'delete_inclusion')->name('deleteinclusion');
        Route::post('save-inclusion', 'save_inclusion')->name('addNewInclusionPost');
        Route::post('get_inclusion', 'get_inclusion');

        Route::get('pooja-material', 'pooja_material')->name('admin.pooja.material');
        Route::post('update-material', 'update_material')->name('updatematerial');
        Route::post('delete-material', 'delete_material')->name('deletematerial');
        Route::post('get-material', 'get_material');
        Route::post('save-material', 'save_material')->name('save.material');

        Route::post('getpoojadetails', 'get_poojaDetails')->name('get_poojaDetails');
    });




    Route::controller(KundaliController::class)->group(function () {

        Route::get('kundali', 'kundali')->name('admin.kundali');
        Route::post('update_kundali', 'update_kundali')->name('update_kundali');
        Route::post('delete_kundali', 'delete_kundali')->name('delete_kundali');
        Route::post('save-kundali', 'save_kundali')->name('addNewkundaliPost');
        Route::post('edit-kundali', 'edit_kundali')->name('editkundaliPost');

        Route::get('pending-booking', 'pending_booking')->name('admin.pending_booking');
        Route::get('complete-booking', 'complete_booking')->name('admin.complete_booking');
        Route::post('update-booking-complete', 'update_booking_complete')->name('admin.update.complete');

    });



    Route::controller(MuhhurtController::class)->group(function () {

        Route::get('muhurt', 'muhurt')->name('admin.muhurt');
        Route::post('update_muhurt', 'update_muhurt')->name('update_muhurt');
        Route::post('delete_muhurt', 'delete_muhurt')->name('delete_muhurt');
        Route::post('save-muhurt', 'save_muhurt')->name('addNewmuhurtPost');
        Route::post('edit-muhurt', 'edit_muhurt')->name('editmuhurtPost');

        Route::get('muhurt-pending-booking', 'pending_booking')->name('admin.muhurt.pending_booking');
        Route::get('muhurt-complete-booking', 'complete_booking')->name('admin.muhurt.complete_booking');
        Route::post('update-muhurt-booking-complete', 'update_booking_complete')->name('admin.muhurt.update.complete');

    });

    Route::controller(EventController::class)->group(function () {

        Route::get('event', 'event')->name('admin.event');
        Route::POST('get_event_details', 'get_event_details')->name('admin.event.details');

        Route::get('create-event', 'create_event')->name('admin.create.event');
        Route::post('save-event', 'save_event')->name('addNewEventPost');
        Route::get('edit-event/{id}', 'edit_event')->name('admin.edit.event');
        Route::post('update_event', 'update_event')->name('update_event');
        Route::post('delete_event', 'delete_event')->name('delete_event');


        Route::get('event-pending-booking', 'pending_booking')->name('admin.event.booking.pending');
        Route::get('event-complete-booking', 'complete_booking')->name('admin.event.booking.complete');
        Route::get('event-booking/{id}', 'event_bookings')->name('admin.event.booking');
        Route::post('update-link', 'update_link')->name('update_link');
    });

    Route::controller(EcommerceController::class)->group(function () {

        Route::get('products', 'products')->name('admin.products');
        Route::post('update_ecom_product', 'update_ecom_product')->name('update_ecom_product');
        Route::post('delete_ecom_product', 'delete_ecom_product')->name('delete_ecom_product');

        Route::get('add-products', 'add_products')->name('admin.add.products');
        Route::post('add-product-post', 'add_products_post')->name('addNewProductPost');
        Route::get('edit-products/{id}', 'edit_products')->name('admin.edit.products');

        Route::get('shipping-cities', 'shipping_cities')->name('admin.shippingcities');
        Route::post('update_cities', 'update_cities')->name('update_cities');
        Route::post('add_new_city_post', 'add_new_city_post')->name('add_new_city_post');
        // Route::get('add-new-city', 'add_new_city')->name('admin.add.city');

        Route::get('shipping-charge', 'shipping_charge')->name('admin.shippingcharge');
        Route::post('update-delivery-charge', 'update_delivery_charge')->name('admin.update.shippingcharge');


        Route::get('pending-order', 'pending_order')->name('admin.pending.order');
        Route::post('get-order-product', 'get_order_product')->name('admin.order.product');
        Route::post('update-order-complete', 'update_order_complete')->name('admin.order.update.status');

        Route::get('delivered-order', 'delivered_order')->name('admin.delivered.order');

        Route::get('cancelled-order', 'cancelled_order')->name('admin.cancelled.order');
        Route::post('get-order-details', 'get_order_details')->name('admin.order.details');
        Route::post('initate-refund', 'initate_refund')->name('admin.initate.refund');

        Route::get('refunded-order', 'refunded_order')->name('admin.refunded.order');
    });



    Route::controller(TempleController::class)->group(function () {

        Route::get('temple-list', 'temple_list')->name('admin.temple.list');
        Route::post('save-temple', 'save_temple')->name('admin.save.temple');
        Route::post('get-temple', 'get_temple')->name('admin.get.temple');
        Route::get('temple-pooja-list', 'pooja_list')->name('admin.temple.pooja.list');
        Route::post('update-temple-pooja', 'update_temple_pooja');
        Route::post('delete-temple-pooja', 'delete_temple_pooja');
        Route::get('add-new-temple-pooja', 'add_new_temple_pooja')->name('admin.add.temple.pooja');
        Route::post('save-pooja', 'save_pooja')->name('addNewTemplePoojaPost');
        Route::get('edit-temple-pooja/{id}', 'edit_temple_pooja');

        Route::get('temple-package-list', 'temple_package_list')->name('admin.temple.packageList');
        Route::post('temple-get-pooja-details', 'get_pooja_details');
        Route::post('temple-update-package', 'update_package')->name('temple.updatePackage');
        Route::post('temple-delete-package', 'delete_package')->name('temple.deletePackage');
        Route::get('temple-add-new-package', 'add_new_package')->name('admin.temple.addNewPackage');
        Route::get('temple-edit-package/{id}', 'edit_package')->name('admin.temple.editPackage');
        Route::post('temple-save-package', 'save_package')->name('temple.addNewPackagePost');

        Route::get('temple-inclusion-list', 'inclusion_list')->name('admin.temple.InclusionList');
        Route::post('temple-update-inclusion', 'update_inclusion')->name('temple.updateinclusion');
        Route::post('temple-delete-inclusion', 'delete_inclusion')->name('temple.deleteinclusion');
        Route::post('temple-save-inclusion', 'save_inclusion')->name('temple.addNewInclusionPost');
        Route::post('temple-get_inclusion', 'get_inclusion');


        // Offline Pooja Bookings
        Route::get('temple-offline-pending-pooja', 'offline_pending_pooja')->name('temple.offline.pending.list');
        Route::get('temple-offline-completed-pooja', 'offline_completed_pooja')->name('temple.offline.completed.list');
        Route::get('temple-offline-cancelled-booking', 'offline_cancelled_request')->name('temple.offline.cancelled.list');
        Route::get('temple-offline-completed-cancelled-booking', 'offline_completed_cancelled_request')->name('temple.offline.cancelled.completed.list');


        // online Pooja Bookings
        Route::get('temple-online-pending-pooja', 'online_pending_pooja')->name('temple.online.pending.list');
        Route::get('temple-online-completed-pooja', 'online_completed_pooja')->name('temple.online.completed.list');
        Route::get('temple-online-cancelled-booking', 'online_cancelled_request')->name('temple.online.cancelled.list');
        Route::get('temple-online-completed-cancelled-booking', 'online_completed_cancelled_request')->name('temple.online.cancelled.completed.list');

        Route::post('get-temple-booking-details', 'get_booking_details');
        Route::post('update-temple-pujari-details', 'update_pujari_details');

        Route::post('get_temple_pooja_package_inclusion_detail', 'get_pooja_package_inclusion_detail');

        Route::post('initate_refund_temple_pooja_booking', 'initate_refund_pooja_booking');

    });




    Route::controller(UpcomingPujaController::class)->group(function () {

        Route::get('upcoming-pooja', 'index')->name('admin.upcoming.pooja');
        Route::post('set-upcoming-pooja', 'set_upcoming_pooja');

    });



});
