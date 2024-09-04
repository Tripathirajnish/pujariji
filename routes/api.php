<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\KathavachakAPIController;
use App\Http\Controllers\API\JajmaanAPIController;
use App\Http\Controllers\API\KathavachakRatingAPIController;
use App\Http\Controllers\API\KathavachakBookingAPIController;
use App\Http\Controllers\API\AppReviewAPIController;
use App\Http\Controllers\API\BlogAPIController;
use App\Http\Controllers\API\PujarijiAPIController;
use App\Http\Controllers\API\Astrologer\AstrologerAuthController;
use App\Http\Controllers\API\Astrologer\AstrologerBookingController;
use App\Http\Controllers\API\Astrologer\PlanAPIController;
use App\Http\Controllers\API\Astrologer\AstroWithdrawController;
use App\Http\Controllers\API\EventPooja\EventPoojaController;
use App\Http\Controllers\API\Kundali\KundaliAPIController;
use App\Http\Controllers\API\Ecommerce\EcommerceAPIController;
use App\Http\Controllers\API\PoojaBooking\PoojaPujariAuthAPIController;
use App\Http\Controllers\API\PoojaBooking\PoojaBookingAPIController;
use App\Http\Controllers\API\TemplePooja\TemplePoojaBookingAPIController;
use App\Http\Controllers\API\Muhurt\MuhurtAPIController;

// Jajmaan  Route
Route::post('jajmaan-registration',[JajmaanAPIController::class,'store']);
Route::post('jajmaan-login',[JajmaanAPIController::class,'send_otp']);
Route::post('jajmaan-update-profile',[JajmaanAPIController::class,'update_jajmaan_pofile']);
Route::post('jajmaan-verify-otp',[JajmaanAPIController::class,'verify_otp']);
// Route::post('jajmaan-dashboard',[JajmaanAPIController::class,'jajmaan_dashboard']);
Route::post('get-jajmaan-profile',[JajmaanAPIController::class,'get_profile']);
Route::post('save-jajmaan-address',[JajmaanAPIController::class,'store_address']);
Route::post('update-jajmaan-address',[JajmaanAPIController::class,'store_address']);
Route::post('get-jajmaan-address',[JajmaanAPIController::class,'get_address']);
Route::post('kathavachak-list',[JajmaanAPIController::class,'kathavachak_list']);
Route::post('delete-jajmaan-address',[JajmaanAPIController::class,'delete_jajmaan_address']);

// Kathavachak Route
Route::post('kathavachak-login',[KathavachakAPIController::class,'send_otp']);
Route::post('kathavachak-verify-otp',[KathavachakAPIController::class,'verify_otp']);
Route::post('kathavachak-registration',[KathavachakAPIController::class,'store']);
Route::post('kathavachak-profile',[KathavachakAPIController::class,'kathavachak_profile']);
Route::post('kathavachak-leave',[KathavachakAPIController::class,'kathavachak_leave']);
Route::post('kathavachak-bank',[KathavachakAPIController::class,'kathavachak_bank']);
Route::post('kathavachak-update-profile',[KathavachakAPIController::class,'updateProfile']);
Route::post('kathavachak-total-collection',[KathavachakAPIController::class,'total_cash_collection']);
Route::post('kathavachak-leave-date',[KathavachakAPIController::class,'kathavachak_leave_dates']);
Route::post('kathavachak-verification-status',[KathavachakAPIController::class,'kathvachak_verification_status']);
Route::post('kathavachak-dashboard',[KathavachakAPIController::class,'kathavachak_dashboard']);
Route::post('kathavachak-earning-history',[KathavachakAPIController::class,'kathavachak_earning_history']);
Route::post('kathavachak-on-off',[KathavachakAPIController::class,'kathavachak_on_off']);

// Kathavachak Rating Route
Route::post('kathavachak-rating',[KathavachakRatingAPIController::class,'store']);
Route::post('kathavachak-total-rating',[KathavachakRatingAPIController::class,'kathavachak_total_rating']);
Route::post('kathavachak-rating-list',[KathavachakRatingAPIController::class,'get_kathavachak_rating_list']);

// Kathavachak Booking
Route::post('kathavachak-create-bookings', [KathavachakBookingAPIController::class, 'store']);
Route::post('jajmaan-kathavachak-booking-list', [KathavachakBookingAPIController::class, 'jajmaan_kathavachak_total_booking']);
Route::post('jajmaan-kathavachak-booking-list-by-status', [KathavachakBookingAPIController::class, 'jajmaan_kathavachak_booking_list_by_status']);
Route::post('jajmaan-kathavachak-booking-cancel', [KathavachakBookingAPIController::class, 'cancel_kathavachak_booking']);
Route::post('kathavachak-booking-verify-otp', [KathavachakBookingAPIController::class, 'verify_booking_otp']);
Route::post('kathavachak-total-booking', [KathavachakBookingAPIController::class, 'kathavachak_total_bookings']);
Route::post('kathavachak-booking-list-by-status', [KathavachakBookingAPIController::class, 'kathavachak_booking_list_by_status']);
Route::post('kathavachak-unavailable-date',[KathavachakBookingAPIController::class,'kathavachak_unavailable_date']);
// Review
Route::post('save-app-review', [AppReviewAPIController::class, 'store_review']);

// Blog
Route::post('save-blog', [BlogAPIController::class, 'store_blog']);
Route::post('get-blog-list', [BlogAPIController::class, 'getBlogList']);
Route::post('get-detailed-blog', [BlogAPIController::class, 'get_detailed_blog']);
Route::post('delete-blog', [BlogAPIController::class, 'delete_blog']);
Route::post('get-jajmaan-blog', [BlogAPIController::class, 'getJajmaanBlogList']);
Route::post('detailed-jajmaan-blog', [BlogAPIController::class, 'get_jajmaan_detailed_blog']);



Route::post('state-list', [PujarijiAPIController::class, 'get_state_list']);
Route::post('city-list', [PujarijiAPIController::class, 'get_city_list']);
// Route::post('app-review', [PujarijiAPIController::class, 'app_review']);
Route::post('language-list', [PujarijiAPIController::class, 'get_language_list']);
Route::post('get-banner', [PujarijiAPIController::class, 'get_banner']);
Route::post('get-support', [PujarijiAPIController::class, 'get_support']);
Route::post('get-vendor-support', [PujarijiAPIController::class, 'get_vendor_support']);
Route::post('get-global-states', [PujarijiAPIController::class, 'get_global_states']);
Route::post('get-global-cities', [PujarijiAPIController::class, 'get_global_cities']);
Route::post('get-comapny-details', [PujarijiAPIController::class, 'get_company_details']);
Route::post('get-vendor-service-list', [PujarijiAPIController::class, 'get_vendor_services_list']);
Route::post('get-notification-list', [PujarijiAPIController::class, 'get_notification_by_id']);
Route::post('extra-payment', [PujarijiAPIController::class, 'extra_payment']);


// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------Start Astrologer-----------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
Route::post('astrologer-registration', [AstrologerAuthController::class, 'store']);
Route::post('astrologer-login', [AstrologerAuthController::class, 'send_otp']);
Route::post('astrologer-verify-otp', [AstrologerAuthController::class, 'verify_otp']);
Route::post('astrologer-verify-status', [AstrologerAuthController::class, 'astrologer_verification_status']);
Route::post('astrologer-update-profile', [AstrologerAuthController::class, 'updateProfile']);
Route::post('astrologer-list', [AstrologerAuthController::class, 'astrologer_list']);
Route::post('astrologer-profile', [AstrologerAuthController::class, 'astrologer_profile']);
Route::post('astrologer-rating', [AstrologerAuthController::class, 'create_astro_rating']);
Route::post('astrologer-total-rating', [AstrologerAuthController::class, 'astro_total_rating']);
Route::post('astrologer-rating-list', [AstrologerAuthController::class, 'get_astro_rating_list']);
Route::post('astrologer-dashboard', [AstrologerAuthController::class, 'astro_dashboard']);
Route::post('astrologer-save-bank-details', [AstrologerAuthController::class, 'save_bank_details']);
Route::post('astrologer-on-off', [AstrologerAuthController::class, 'astro_on_off']);
Route::post('astrologer-wallet', [AstrologerAuthController::class, 'astro_wallet_money']);

Route::post('astrologer-booking', [AstrologerBookingController::class, 'store']);
Route::post('cancel-astrologer-booking', [AstrologerBookingController::class, 'cancel_astrologer_booking']);
Route::post('verify-astrology-booking-by-otp', [AstrologerBookingController::class, 'verify_astrologer_booking_by_otp']);
Route::post('total-astrologer-bookings', [AstrologerBookingController::class, 'totalAstrologerBookings']);
Route::post('total-complete-astrologer-bookings', [AstrologerBookingController::class, 'totalCompleteAstrologerBookings']);
Route::post('jajmaan-total-astrologer-bookings', [AstrologerBookingController::class, 'totalAstrologerBookingsByJajamaan']);
Route::post('astrologer-earning-history', [AstrologerBookingController::class, 'earningsHistory']);

Route::post('astrologer-plan-list', [PlanAPIController::class, 'astrologer_plan_list']);

Route::post('create-astrologer-withdraw-request', [AstroWithdrawController::class, 'store']);
Route::post('astrologer-withdraw-history', [AstroWithdrawController::class, 'withdraw_history']);
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------End Astrologer-------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------




// ---------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------Start Event Pooja----------------------------------------------------------// ------------------------------------------------------------------------------------------------------------------------------------------------------------
Route::post('event-booking', [EventPoojaController::class, 'book_event']);
Route::post('event-list', [EventPoojaController::class, 'event_list']);
Route::post('booked-event-history', [EventPoojaController::class, 'booked_event_history']);
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------End Event Pooja------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------


// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------Start Kundali--------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
Route::post('kundali-price', [KundaliAPIController::class, 'kundali_price']);
Route::post('kundali-booking', [KundaliAPIController::class, 'kundali_booking']);
Route::post('kundali-history', [KundaliAPIController::class, 'kundali_history']);
Route::post('kundali-package-list', [KundaliAPIController::class, 'kundali_package_list']);
Route::post('kundali-list', [KundaliAPIController::class, 'get_kundali']);
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------End Kundali----------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------




// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------Start Ecommerce------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
Route::post('ecommerce-shipping-charge', [EcommerceAPIController::class, 'ecommerce_shippping_charge']);
Route::post('ecommerce-shipping-cities', [EcommerceAPIController::class, 'ecommerce_shippping_cities']);
Route::post('ecommerce-product-list', [EcommerceAPIController::class, 'product_list']);
Route::post('ecommerce-place-order', [EcommerceAPIController::class, 'place_order']);
Route::post('ecommerce-cancel-order', [EcommerceAPIController::class, 'cancel_order']);
Route::post('ecommerce-order-history', [EcommerceAPIController::class, 'order_history']);
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------End Ecommerce--------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------



// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------Start Pooja Booking--------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
Route::post('pujari-registration', [PoojaPujariAuthAPIController::class, 'store']);
Route::post('pujari-send-otp', [PoojaPujariAuthAPIController::class, 'send_otp']);
Route::post('pujari-verify-otp', [PoojaPujariAuthAPIController::class, 'verify_otp']);
Route::post('pujari-verification-status', [PoojaPujariAuthAPIController::class, 'verification_status']);
Route::post('pujari-update-profile', [PoojaPujariAuthAPIController::class, 'update_profile']);
Route::post('pujari-list', [PoojaPujariAuthAPIController::class, 'pujari_list']);
Route::post('store-pooja-pujari-review', [PoojaPujariAuthAPIController::class, 'store_pooja_and_pujari_review']);

Route::post('pujari-profile', [PoojaPujariAuthAPIController::class, 'pujari_profile']);
Route::post('pujari-dashboard', [PoojaPujariAuthAPIController::class, 'pujari_dashboard']);
Route::post('pujari-save-bank-details', [PoojaPujariAuthAPIController::class, 'save_bank_details']);
Route::post('pujari-duty-on-off', [PoojaPujariAuthAPIController::class, 'duty_on_off']);
Route::post('pujari-withdraw-balance', [PoojaPujariAuthAPIController::class, 'pujari_withdraw_money']);


Route::post('pooja-category', [PoojaBookingAPIController::class, 'get_pooja_category']);
Route::post('pooja-list', [PoojaBookingAPIController::class, 'pooja_list']);
Route::post('pooja-details', [PoojaBookingAPIController::class, 'pooja_details']);
Route::post('pooja-book-online', [PoojaBookingAPIController::class, 'pooja_online_booking']);
Route::post('pooja-book-offline', [PoojaBookingAPIController::class, 'pooja_offline_booking']);
Route::post('jajmaan-pooja-book-history', [PoojaBookingAPIController::class, 'jajmaan_pooja_booking_history']);
Route::post('jajmaan-pooja-book-cancel', [PoojaBookingAPIController::class, 'cancel_pooja_booking']);
Route::post('pooja-change-pujari', [PoojaBookingAPIController::class, 'change_pujari']);
Route::post('pooja-material', [PoojaBookingAPIController::class, 'pooja_material']);
Route::post('upcoming-pooja', [PoojaBookingAPIController::class, 'upcoming_pooja']);
Route::post('pujari-pending-request', [PoojaBookingAPIController::class, 'pujari_pending_request']);
Route::post('pujari-confirm-request', [PoojaBookingAPIController::class, 'pujari_total_confirm_request']);
Route::post('pujari-booking-list', [PoojaBookingAPIController::class, 'pujari_booking_list']);
Route::post('pujari-accept-reject-pooja-booking', [PoojaBookingAPIController::class, 'accept_or_reject_pooja_booking']);
Route::post('pujari-cancel-pooja-booking', [PoojaBookingAPIController::class, 'pujari_cancel_pooja_booking']);
Route::post('pujari-verify-pooja-booking-by-otp', [PoojaBookingAPIController::class, 'pujari_verify_booking_by_otp']);
Route::post('pujari-total-wallet-booking-history', [PoojaBookingAPIController::class, 'pujari_total_wallet_history_data']);
Route::post('pujari-total-wallet-balance', [PoojaBookingAPIController::class, 'pujari_total_wallet_balance']);

// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------End Pooja Booking----------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------



// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------Start Temple Pooja--------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
Route::post('temple-list', [TemplePoojaBookingAPIController::class, 'get_temple']);
Route::post('temple-pooja-list', [TemplePoojaBookingAPIController::class, 'pooja_list']);
Route::post('temple-pooja-detail', [TemplePoojaBookingAPIController::class, 'pooja_details']);
Route::post('temple-pooja-booking', [TemplePoojaBookingAPIController::class, 'temple_pooja_booking']);
Route::post('jajmaan-temple-pooja-history', [TemplePoojaBookingAPIController::class, 'jajmaan_pooja_booking_history']);
Route::post('jajmaan-cancel-temple-pooja', [TemplePoojaBookingAPIController::class, 'cancel_pooja_booking']);
Route::post('jajmaan-pooja-review', [TemplePoojaBookingAPIController::class, 'store_pooja_review']);
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------End Temple Pooja----------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------


// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------Start Muhurt--------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
Route::post('muhurt-booking', [MuhurtAPIController::class, 'muhurt_booking']);
Route::post('muhurt-history', [MuhurtAPIController::class, 'muhurt_history']);
Route::post('muhurt-list', [MuhurtAPIController::class, 'get_muhurt']);
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------End Muhurt----------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
