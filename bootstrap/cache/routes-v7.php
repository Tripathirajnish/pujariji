<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EzD6fettUc0qIBNY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f0P2AgDZxqZUcaQ4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rPYZ105wYajVLcW0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xBzaZDYmRfV670Ym',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-jajmaan-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Y4UssA1qtWqqhZr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/save-jajmaan-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8vvseTXDSqjFUdZa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update-jajmaan-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GD4UN2Tp3OLaDPKd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-jajmaan-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WyFbhh05sVGoYdoZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DucL4bADGXN4RxLo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete-jajmaan-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9x3CIDJDfRyTSc0B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rMli5WCJWJhKGj5L',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z1CePBcSdyijkBx6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cJBwJmJLSur9QF8I',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ivVSZgeIasObSi1B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RlMvm7yCIxCVbVtS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-bank' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S2UIkZ3EupXAC3zU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ErLRpgjP8gxLvhfA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-total-collection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DNUHVpInfGaeDgwG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-leave-date' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ttQXHhrLFMkQvwHm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-verification-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dho9lzoPekrJAJfN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PGSBUHcqXXiNYRPb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-earning-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gkpPjvyMV3nVb2OL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-on-off' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CifjA26MthF6wTV9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o7y8JWX1M8amoXe9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-total-rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::63Y4caLoBjzsfZzw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-rating-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sUPUBSrMfWsex2bp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-create-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8BZW4Aok45TD2PCC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-kathavachak-booking-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R5BDWfPJo9BH8nHa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-kathavachak-booking-list-by-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MtXf7jwgdCFB7HVB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-kathavachak-booking-cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9UwxIzwgkDsIKODT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-booking-verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gujPLm3jnjG56MZA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-total-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VFRFeaDCLsrWdhZM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-booking-list-by-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y8wbOMWVCw9cDLJ6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kathavachak-unavailable-date' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YWWd65l2UtTDqf2W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/save-app-review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jOOb9MIWOy85PB9P',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/save-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0NXVwTjgBGwh4UfQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-blog-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AQBF0omiaULP9RDi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-detailed-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xDaaPdzZs8CpWYJw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RhcR4yd7uSCWo6Ia',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-jajmaan-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YQYi6u3MA51HCeWO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/detailed-jajmaan-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MjsZUXbiKGa9c6ut',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/state-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::km0FqrVm5mUrlKAs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/city-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ra5l4IZiOnCVbeWR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/language-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JGvceG8UdwWRfRPJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pfrYRFofPwMKl2xA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HSodJlso9mBJen0Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-vendor-support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UCm5Ds6EYEp95SLi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-global-states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iY6BtJyHjK070nY4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-global-cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2dPOPGS4hZnDeQn1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-comapny-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kL10miYa1ugvFKJx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-vendor-service-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UhI3XFtkEA4tDKsF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-notification-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0zpHE1tXsCavCaks',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/extra-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NOpPJRDSDT6A3rN6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GrxoetRVu7FBDAnI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qLq7xViWu7AF8jvx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dHVxjDO64rAifgfq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-verify-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MoNCKX0qCNkTFGGj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::deHLoCgKlIOqG6gJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hJA2Xe5ANJwpthCi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PJCsZwOkcsEKtQ73',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ogUwxEBYFFq8o4cW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-total-rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ph5GlPcJMVKHdNsj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-rating-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a9LpmAhvYBh60QAE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7yFvkKliTborzi7A',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-save-bank-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RsQkOQS6c9qrX3iG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-on-off' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::liNcBedXgbu671kt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i5iT8WwsBehD3Car',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DnRWFJjL5Qw9AIEP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cancel-astrologer-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7GYj8I3kf2Dmy4FH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verify-astrology-booking-by-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Biz5OwaiGHBDpLYT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/total-astrologer-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EhwPeGc6Gtd3Xrq6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/total-complete-astrologer-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::naKrMZSPW42ABrYB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-total-astrologer-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3a9vREOXQk04q8mM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-earning-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MDbhlbmNky8n6Tbb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-plan-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::66wRum0JhHvxHo7g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/create-astrologer-withdraw-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wCfDAAolEPgY9Bia',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/astrologer-withdraw-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sd7lBs8dnlglNUr7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/event-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pMkGwwFQnvPbV00D',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/event-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XAkqxDfw1uSB1knJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/booked-event-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AuoWpZV5Qp9zdJBP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kundali-price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::noCcRGZRqwSFrNcH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kundali-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZDlvbQZRse0SpAjN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kundali-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w9Zl6EUFlJlhODw2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kundali-package-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wfUEcOV3DHbvcT2r',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/kundali-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ncNFvGZrTlig4kIW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ecommerce-shipping-charge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AJDXRIxgUDvQYkjd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ecommerce-shipping-cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XoImtnk6aTKdf4eh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ecommerce-product-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MH7NV4JCd9G2HnaZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ecommerce-place-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U62Te0TOxMvMNbMp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ecommerce-cancel-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xkWHIj4tuc0Qh2TW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ecommerce-order-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::77DmAzxrO95EjZ5Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CGJE31OhTXosuurU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-send-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VJ5vi6k1xLYVdTym',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uk8jtumk7fd7pzP4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-verification-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yiGLS1EtpigyodF2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kgeydAMfG1YCORJy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lyGbdefZyELmGXHx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store-pooja-pujari-review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JoEhMfTtMr6CkVCJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jz2XVYzK3Ojd6phb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ySec8no3VlRM2jcK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-save-bank-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FONLlMyPh2kVxUTc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-duty-on-off' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VZPdFCEPRe14noMs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-withdraw-balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HxcUGb0O21FanUjf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pooja-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lKqbVyGAQS7aaI5h',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pooja-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v5jzKZMSLYYGY46N',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pooja-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r8RMC14hov3QEeYH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pooja-book-online' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ORSVOzHfqQCae3J0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pooja-book-offline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3FIbkGT6nrqQEgJI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-pooja-book-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MoklYaDpOHd7UtoA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-pooja-book-cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wi3CKwF3CQo60TEd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pooja-change-pujari' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0i2qStysIP2627f6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pooja-material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tiZW9sESeO4xFegl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/upcoming-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bSnRiQ278HumQI2M',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-pending-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CY6hZhPBPs3dkk8Q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-confirm-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IUxHwgjVgmOb9hhH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-booking-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2ZpJzlOauzIhzWkx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-accept-reject-pooja-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m59eqZbj6N1mLhmI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-cancel-pooja-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OXKRk2R47paTdRJu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-verify-pooja-booking-by-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9gYIw4pnP5WoWhWP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-total-wallet-booking-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MtA47JWE2HzYykbR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pujari-total-wallet-balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z3vPDP68kxGvI2YE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/temple-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gYBAlgx9YvuiKY72',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/temple-pooja-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U4gYRfaSg7IlRpVy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/temple-pooja-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ad0GZ19BPhyjnvaD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/temple-pooja-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mjygfZD715u9oUDg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-temple-pooja-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::quoSeE9MydIfQzyA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-cancel-temple-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2EFR49gAQBrIEnxF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jajmaan-pooja-review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MqpyoX2cZJve9r5J',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/muhurt-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J5rb6u6bbvsevjdL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/muhurt-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::txuVF9IdyWYAQUAf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/muhurt-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jsVDpSCD1Go8akle',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F3PaE32oes6UUR9G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updateapp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::868cIUvuGkt8sJkb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancellation_refund' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::86e5HydYFqBMPnRT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/features' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'features',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mobileapp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gcRFB8tvOZ448B0Q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/signgle-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'singleBlogs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K43QTVO4z5Jmx2rv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment-failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7zQvqYaPDQtK6LvT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/as-pujari' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'asPujariJi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7sLShlHfq5KLxgrH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/term-conditons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MA2zRhuD6m5njDLA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacy-ploicy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZCe4j8dHhKAUbuXg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pricing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ehRwb9n4VlXrZaOO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/puja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'puja',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X1UCIHa3P5ubGdcE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ptlR2vMy1gAXLplA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pooja-feedback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SVFZ4fFXXSeHJ9zn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/initiate-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.initiate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::44REn4Il9K8Mocso',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'event.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer-support-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paditji-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'panditji.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-login-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-login-verify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/member_login_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member_login_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UTrZAPYdZIdQQwz3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8TVCQ2SQTTCoxcWb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_profile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-server-key' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_server_key',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-company-details12' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_company_details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_member_login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.get.member.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_member_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7xwDxHDSA3uIcLcU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kathas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kathas',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astrology' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.astrology',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pooja-perform' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pooja-perform',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ecsD8HeHrTm3gmt2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kMwkXHGYZeWP6vSq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save_types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save_types',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/edit_data_types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit_data_types',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languge',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MNSYhhXx3xzmqwN4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nyczaa04hT00vYjv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save_language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save_language',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/edit_data_language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit_data_language',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-new-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-new-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save.new.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_blog',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_blog',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pending-blog-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pending_blog_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/approve_blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'approve_blog',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/city-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'city_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save_city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save_city',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_city',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_city',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/state-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'state_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save_state_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save_state_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_state',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_state',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lCkOQXFCLafFA7VL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/raised-query' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A09PgpnzeqetGhxZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_app_review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I8Qw83EFv4YzG3Cd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_vendor_cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ujZSsZXjIz4RmrwZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/extra-payment-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aTg3lBwTZpUg2pEl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U8Ump0mD0O0631To',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app-banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i18ZHhkddh8fosKs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C8PUPIsWDtIQ5G6y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/uppdate_banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DFEiby941DkOPIea',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save_banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zwkGCi96A5cHCtjS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bxYoxnpID6zmjAzM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-terms-condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-tc-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.tc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-privacy-policies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-pp-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.pp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-vendor-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EskDsEQrKOBqV6B1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-user-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9IVcdv8QFKUHo3TR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-bulk-notification-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lrDLUnGtaeOX8w8q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/yajman-contact-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iY0YozEmeM0A4UoL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astrologer-contact-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mO3Ws03vYRHmov4R',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kathavachak-contact-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rzWDH1fLvxfTdRUi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pujari-contact-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wmUgr6VqfSs6xIe4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_p_cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RQ9LkxFow2lJ1pr5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AE0geiD3Iz1qPgqZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kathavachak-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kathavachak',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_kathavachak' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZavAe9lci9Hbp0Vv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_kathavachak_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iZ14L54ubpnsubUc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pending-kathavachak-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pending.kathavachak',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify_kathavachak' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kqv6qatWTDSJZgth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reject_kathavachak' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pXcfCRnzUsOCf3GU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rejected-kathavachak-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rejected.kathavachak',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kathavachak_filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kathavachak_filter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-kathavachak-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateKathavachak',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/p_delete_kathavachak' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'p_delete_kathavachak',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/total-kathas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.total.kathas',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancelled_booking_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cancelled_booking_data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pending-kathas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pending.kathas',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancel-kathas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancel.kathas',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/approved-cancel-kathas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.approved.cancel.kathas',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/initate_refund' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'initate_refund',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/booking_filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'booking_filter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/state_city_filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'state_city_filter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/jajmaan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.jajmaan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_jajmaan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rOGML5fWB2enuZTA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_jajmaan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D0rHgB7Ec8HJXsIH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-jajmaan-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZDziIVvxV0tzRXok',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/jajmaan_filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'jajmaan_filter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZohAevT6Y4sAhokE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astrologer-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.astrologer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-astro-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.astro',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_astro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zZimxOzhhSt06GKA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_astro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZhFLGRlRavFlJfmD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astrologer-pending-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.astrologer.pendinglist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify_astro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fti6mFhfK9kbbCw0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reject_astro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bdkXnWUfp1ury6on',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astrologer-rejected-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.astrologer.rejectedlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astrology-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.astrology.plan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.plan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save_plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RwirFtCvQdP0uj8D',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bZtXMiLunzy6incj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QGBMh5xb6ZvhvzEI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pending-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pending.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/completed-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.completed.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancelled-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancelled.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/completed-cancelled-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancelled.approved.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-cancel-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FWJagYjMcRToaY6W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/initiate-astro-booking-refund' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bvmlm1whOq3BeSG2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-astrologer-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Updateastrologer',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astrologer_filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'astrologer_filter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astro-withdraw-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.astro.wihraw.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astro-complete-withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.astro.complete.wihraw.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astro-rejected-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.astro.rejected.wihraw.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astro-verify_withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y1qX0LSu5BzID0Zx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/astro-reject_withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1ALxKJ41Ba2reJwe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pujariji-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pujariji',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_pujari' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MdGlf8U3DeG5JOmM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_pujari' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pQSQTJ3JNVphFrvw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pending-pujariji-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pending.pujariji',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify_vendor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ySmzze1x2Q7MqTQd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reject_vendor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K1rHTJrhHMMx6vyN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-pujariji-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdatePujari',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rejected-pujariji-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rejected.pujariji',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_permanently' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NLSIyb8koD3WXU4C',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/withdraw-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wihraw.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/complete-withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.complete.wihraw.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rejected-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rejected.wihraw.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify_withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ej5iCvVRcsZMiTfK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reject_withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xvLMgvcoGPNWo7UO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pujari_filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pujari_filter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/offline-pending-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'offline.pending.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/offline-completed-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'offline.completed.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/offline-cancelled-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'offline.cancelled.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/offline-completed-cancelled-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'offline.cancelled.completed.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/online-pending-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online.pending.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/online-completed-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online.completed.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/online-cancelled-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online.cancelled.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/online-completed-cancelled-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online.cancelled.completed.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_pooja_package_inclusion_detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9nwKHEg9xBl85Hct',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/initate_refund_pooja_booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rOst80RJz7HLOZ3n',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-booking-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OZwnijk7hrzl9oEH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-pujari-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u3cxMRpOZai5rQbs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/web-complete-puja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S2jS7b8xZ81WYClX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-pending-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.pending.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-completed-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.completed.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-cancelled-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.cancelled.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-completed-cancelled-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.cancelled.completed.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-get-booking-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cXnN4uGDmS1PIcpX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pooja-pactegory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pooja-category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addNewCategoryPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gJpvMOBflWVKHyP9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatecategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deketecategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-new-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.addNewPooja',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-new-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addNewPoojaPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pooja-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.poojaList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatePooja',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deketePooja',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.packageList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-pooja-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IgLF5ym0sg0eEGiI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatePackage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletePackage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-new-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.addNewPackage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addNewPackagePost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-package-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ajax.package.list',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pooja-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pooja-videos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-pooja-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addNewPoojaVideo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-pooja-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatePoojaVideo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-pooja-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletePoojaVideo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-add-new-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.addNewPooja',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-save-new-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.addNewPoojaPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-pooja-basic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'savePoojaBasic',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-pooja-mandir' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'savePoojaMandir',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-pooja-benefit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'savePoojaBenefit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-pooja-process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'savePoojaProcess',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-pooja-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'savePoojaDetail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-pooja-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.poojaList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-past-puja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.pastPooja',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-update-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.updatePooja',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-delete-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.deketePooja',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-pooja-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletePoojaDetail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-pooja-benefit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletePoojaBenefit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-pooja-process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletePoojaProcess',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-pooja-mandir' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletePoojaMandir',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-pooja-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletePoojaPackage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pooja-enquiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.poojaEnquiry',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pooja-reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.poojaReview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-pooja-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.pooja-category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-save-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.addNewCategoryPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-get-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lb12UfD7sitB6Ieq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-update-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.updatecategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-delete-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.deketecategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-package-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.packageList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-get-pooja-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wbGGUtKSRB8HMdrf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-update-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.updatePackage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-delete-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.deletePackage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-add-new-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.addNewPackage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-save-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.addNewPackagePost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/virtual-puja-save-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.addNewPicturePost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-vertual-pooja-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dnh4m8L1BFjvZ72g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inclusion-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.InclusionList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-inclusion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateinclusion',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-inclusion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteinclusion',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-inclusion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addNewInclusionPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_inclusion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aTGKuVl3MgHATYiG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pooja-material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pooja.material',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatematerial',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletematerial',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bg0DT0VwAss3veXa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save.material',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getpoojadetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_poojaDetails',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kundali' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kundali',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_kundali' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_kundali',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_kundali' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_kundali',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-kundali' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addNewkundaliPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/edit-kundali' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editkundaliPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pending-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pending_booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/complete-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.complete_booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-booking-complete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.complete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/muhurt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.muhurt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_muhurt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_muhurt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_muhurt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_muhurt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-muhurt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addNewmuhurtPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/edit-muhurt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editmuhurtPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/muhurt-pending-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.muhurt.pending_booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/muhurt-complete-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.muhurt.complete_booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-muhurt-booking-complete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.muhurt.update.complete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_event_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event.details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create.event',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addNewEventPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_event',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_event',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-pending-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event.booking.pending',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-complete-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event.booking.complete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_link',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_ecom_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_ecom_product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_ecom_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_ecom_product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.add.products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-product-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addNewProductPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipping-cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shippingcities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_cities',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_new_city_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add_new_city_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipping-charge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shippingcharge',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-delivery-charge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.shippingcharge',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pending-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pending.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-order-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-order-complete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.update.status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delivered-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivered.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancelled-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancelled.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-order-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/initate-refund' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.initate.refund',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/refunded-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.refunded.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.temple.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-temple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.save.temple',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-temple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.get.temple',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-pooja-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.temple.pooja.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-temple-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XFSCgeMwMD1EdBml',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-temple-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TitWNgGAuSBiYlHQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-new-temple-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.add.temple.pooja',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addNewTemplePoojaPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-package-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.temple.packageList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-get-pooja-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::swUjLeiJiAMURBen',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-update-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.updatePackage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-delete-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.deletePackage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-add-new-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.temple.addNewPackage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-save-package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.addNewPackagePost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-inclusion-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.temple.InclusionList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-update-inclusion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.updateinclusion',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-delete-inclusion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.deleteinclusion',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-save-inclusion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.addNewInclusionPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-get_inclusion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::25zzeFSVJurBC90j',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-offline-pending-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.offline.pending.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-offline-completed-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.offline.completed.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-offline-cancelled-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.offline.cancelled.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-offline-completed-cancelled-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.offline.cancelled.completed.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-online-pending-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.online.pending.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-online-completed-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.online.completed.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-online-cancelled-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.online.cancelled.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/temple-online-completed-cancelled-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'temple.online.cancelled.completed.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-temple-booking-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5X0xqpx293Jzvkti',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-temple-pujari-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i7ppoqJLrS6VkCpc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_temple_pooja_package_inclusion_detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JIUP1338oKN3cS0E',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/initate_refund_temple_pooja_booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::imJd4yikb9veajiy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/upcoming-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upcoming.pooja',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/set-upcoming-pooja' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fHbUDoqbiTJDKVSG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/lang/([^/]++)(*:21)|/vi(?|ew\\-bolg/([^/]++)(*:51)|rtual\\-edit\\-p(?|ooja/([^/]++)(*:88)|ackage/([^/]++)(*:110)))|/puja(?|/([^/]++)(*:137)|riji\\-(?|details/([^/]++)(*:170)|update\\-profile/([^/]++)(*:202)))|/booking\\-process/([^/]++)(*:238)|/kathavachak\\-profile/([^/]++)(*:276)|/update\\-profile/([^/]++)(*:309)|/jajmaan\\-profile/([^/]++)(*:343)|/e(?|dit\\-(?|jajmaan/([^/]++)(*:380)|p(?|lan/([^/]++)(*:404)|ooja/([^/]++)(*:425)|ackage/([^/]++)(*:448)|roducts/([^/]++)(*:472))|event/([^/]++)(*:495)|temple\\-pooja/([^/]++)(*:525))|vent\\-booking/([^/]++)(*:556))|/astrologer\\-(?|details/([^/]++)(*:597)|update\\-profile/([^/]++)(*:629))|/get\\-(?|video\\-single/([^/]++)(*:669)|puja\\-(?|detail\\-single/([^/]++)(*:709)|benefit\\-single/([^/]++)(*:741)|p(?|rocess\\-single/([^/]++)(*:776)|ackage\\-single/([^/]++)(*:807))|mandir\\-single/([^/]++)(*:839)))|/temple\\-edit\\-package/([^/]++)(*:880))/?$}sDu',
    ),
    3 => 
    array (
      21 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M5kYn95ag3gSQ76t',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      51 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NR7T4OquXVcjKUiG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      88 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.editPuja',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'virtual.editPackage',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pujaDetails',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ysm7MhUOLhzZaI1e',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::glPbSMvOMVwbzkMu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pujaBooking',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cD8IJpcfNnRvuGE8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WqMrcTHx47UEjZIl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.jajmaan.profile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit.jajmaan',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit.plan',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FSpPruup2HMH0mBf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.editPackage',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      472 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit.products',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit.event',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UYz2FignLoTKsTUb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event.booking',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fprJlLwSeGJ5Uqum',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6hnFfKHbQ0jajTVR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::86Ied5CqPFY42Ktx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      709 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4V8O2keVYCxz5i8m',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3dtwVVNlBoK9jIJv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ez4AHH04EBm1WKfZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      807 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YZfprfAVdxNc8B1C',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YVnRmBJtYBj078Fj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.temple.editPackage',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EzD6fettUc0qIBNY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@store',
        'controller' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EzD6fettUc0qIBNY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f0P2AgDZxqZUcaQ4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@send_otp',
        'controller' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@send_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::f0P2AgDZxqZUcaQ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rPYZ105wYajVLcW0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@update_jajmaan_pofile',
        'controller' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@update_jajmaan_pofile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rPYZ105wYajVLcW0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xBzaZDYmRfV670Ym' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@verify_otp',
        'controller' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@verify_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xBzaZDYmRfV670Ym',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Y4UssA1qtWqqhZr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-jajmaan-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@get_profile',
        'controller' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@get_profile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3Y4UssA1qtWqqhZr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8vvseTXDSqjFUdZa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/save-jajmaan-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@store_address',
        'controller' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@store_address',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8vvseTXDSqjFUdZa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GD4UN2Tp3OLaDPKd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update-jajmaan-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@store_address',
        'controller' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@store_address',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GD4UN2Tp3OLaDPKd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WyFbhh05sVGoYdoZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-jajmaan-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@get_address',
        'controller' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@get_address',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WyFbhh05sVGoYdoZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DucL4bADGXN4RxLo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@kathavachak_list',
        'controller' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@kathavachak_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DucL4bADGXN4RxLo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9x3CIDJDfRyTSc0B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete-jajmaan-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@delete_jajmaan_address',
        'controller' => 'App\\Http\\Controllers\\API\\JajmaanAPIController@delete_jajmaan_address',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9x3CIDJDfRyTSc0B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rMli5WCJWJhKGj5L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@send_otp',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@send_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rMli5WCJWJhKGj5L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z1CePBcSdyijkBx6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@verify_otp',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@verify_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Z1CePBcSdyijkBx6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cJBwJmJLSur9QF8I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@store',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::cJBwJmJLSur9QF8I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ivVSZgeIasObSi1B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_profile',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_profile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ivVSZgeIasObSi1B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RlMvm7yCIxCVbVtS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_leave',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_leave',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RlMvm7yCIxCVbVtS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S2UIkZ3EupXAC3zU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-bank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_bank',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_bank',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::S2UIkZ3EupXAC3zU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ErLRpgjP8gxLvhfA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@updateProfile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ErLRpgjP8gxLvhfA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DNUHVpInfGaeDgwG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-total-collection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@total_cash_collection',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@total_cash_collection',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DNUHVpInfGaeDgwG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ttQXHhrLFMkQvwHm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-leave-date',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_leave_dates',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_leave_dates',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ttQXHhrLFMkQvwHm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dho9lzoPekrJAJfN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-verification-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathvachak_verification_status',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathvachak_verification_status',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dho9lzoPekrJAJfN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PGSBUHcqXXiNYRPb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_dashboard',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_dashboard',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PGSBUHcqXXiNYRPb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gkpPjvyMV3nVb2OL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-earning-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_earning_history',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_earning_history',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gkpPjvyMV3nVb2OL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CifjA26MthF6wTV9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-on-off',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_on_off',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakAPIController@kathavachak_on_off',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CifjA26MthF6wTV9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o7y8JWX1M8amoXe9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakRatingAPIController@store',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakRatingAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::o7y8JWX1M8amoXe9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::63Y4caLoBjzsfZzw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-total-rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakRatingAPIController@kathavachak_total_rating',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakRatingAPIController@kathavachak_total_rating',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::63Y4caLoBjzsfZzw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sUPUBSrMfWsex2bp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-rating-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakRatingAPIController@get_kathavachak_rating_list',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakRatingAPIController@get_kathavachak_rating_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::sUPUBSrMfWsex2bp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8BZW4Aok45TD2PCC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-create-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@store',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8BZW4Aok45TD2PCC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R5BDWfPJo9BH8nHa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-kathavachak-booking-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@jajmaan_kathavachak_total_booking',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@jajmaan_kathavachak_total_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::R5BDWfPJo9BH8nHa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MtXf7jwgdCFB7HVB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-kathavachak-booking-list-by-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@jajmaan_kathavachak_booking_list_by_status',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@jajmaan_kathavachak_booking_list_by_status',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MtXf7jwgdCFB7HVB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9UwxIzwgkDsIKODT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-kathavachak-booking-cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@cancel_kathavachak_booking',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@cancel_kathavachak_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9UwxIzwgkDsIKODT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gujPLm3jnjG56MZA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-booking-verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@verify_booking_otp',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@verify_booking_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gujPLm3jnjG56MZA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VFRFeaDCLsrWdhZM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-total-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@kathavachak_total_bookings',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@kathavachak_total_bookings',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VFRFeaDCLsrWdhZM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y8wbOMWVCw9cDLJ6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-booking-list-by-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@kathavachak_booking_list_by_status',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@kathavachak_booking_list_by_status',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::y8wbOMWVCw9cDLJ6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YWWd65l2UtTDqf2W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kathavachak-unavailable-date',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@kathavachak_unavailable_date',
        'controller' => 'App\\Http\\Controllers\\API\\KathavachakBookingAPIController@kathavachak_unavailable_date',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YWWd65l2UtTDqf2W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jOOb9MIWOy85PB9P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/save-app-review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AppReviewAPIController@store_review',
        'controller' => 'App\\Http\\Controllers\\API\\AppReviewAPIController@store_review',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jOOb9MIWOy85PB9P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0NXVwTjgBGwh4UfQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/save-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\BlogAPIController@store_blog',
        'controller' => 'App\\Http\\Controllers\\API\\BlogAPIController@store_blog',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0NXVwTjgBGwh4UfQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AQBF0omiaULP9RDi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-blog-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\BlogAPIController@getBlogList',
        'controller' => 'App\\Http\\Controllers\\API\\BlogAPIController@getBlogList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AQBF0omiaULP9RDi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xDaaPdzZs8CpWYJw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-detailed-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\BlogAPIController@get_detailed_blog',
        'controller' => 'App\\Http\\Controllers\\API\\BlogAPIController@get_detailed_blog',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xDaaPdzZs8CpWYJw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RhcR4yd7uSCWo6Ia' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\BlogAPIController@delete_blog',
        'controller' => 'App\\Http\\Controllers\\API\\BlogAPIController@delete_blog',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RhcR4yd7uSCWo6Ia',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YQYi6u3MA51HCeWO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-jajmaan-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\BlogAPIController@getJajmaanBlogList',
        'controller' => 'App\\Http\\Controllers\\API\\BlogAPIController@getJajmaanBlogList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YQYi6u3MA51HCeWO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MjsZUXbiKGa9c6ut' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/detailed-jajmaan-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\BlogAPIController@get_jajmaan_detailed_blog',
        'controller' => 'App\\Http\\Controllers\\API\\BlogAPIController@get_jajmaan_detailed_blog',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MjsZUXbiKGa9c6ut',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::km0FqrVm5mUrlKAs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/state-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_state_list',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_state_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::km0FqrVm5mUrlKAs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ra5l4IZiOnCVbeWR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/city-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_city_list',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_city_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Ra5l4IZiOnCVbeWR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JGvceG8UdwWRfRPJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/language-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_language_list',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_language_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::JGvceG8UdwWRfRPJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pfrYRFofPwMKl2xA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_banner',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_banner',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pfrYRFofPwMKl2xA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HSodJlso9mBJen0Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_support',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_support',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HSodJlso9mBJen0Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UCm5Ds6EYEp95SLi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-vendor-support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_vendor_support',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_vendor_support',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UCm5Ds6EYEp95SLi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iY6BtJyHjK070nY4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-global-states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_global_states',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_global_states',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::iY6BtJyHjK070nY4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2dPOPGS4hZnDeQn1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-global-cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_global_cities',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_global_cities',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2dPOPGS4hZnDeQn1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kL10miYa1ugvFKJx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-comapny-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_company_details',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_company_details',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kL10miYa1ugvFKJx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UhI3XFtkEA4tDKsF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-vendor-service-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_vendor_services_list',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_vendor_services_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UhI3XFtkEA4tDKsF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0zpHE1tXsCavCaks' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-notification-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_notification_by_id',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@get_notification_by_id',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0zpHE1tXsCavCaks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NOpPJRDSDT6A3rN6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/extra-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@extra_payment',
        'controller' => 'App\\Http\\Controllers\\API\\PujarijiAPIController@extra_payment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NOpPJRDSDT6A3rN6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GrxoetRVu7FBDAnI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GrxoetRVu7FBDAnI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qLq7xViWu7AF8jvx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@send_otp',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@send_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qLq7xViWu7AF8jvx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dHVxjDO64rAifgfq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@verify_otp',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@verify_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dHVxjDO64rAifgfq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MoNCKX0qCNkTFGGj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-verify-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astrologer_verification_status',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astrologer_verification_status',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MoNCKX0qCNkTFGGj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::deHLoCgKlIOqG6gJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@updateProfile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::deHLoCgKlIOqG6gJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hJA2Xe5ANJwpthCi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astrologer_list',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astrologer_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hJA2Xe5ANJwpthCi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PJCsZwOkcsEKtQ73' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astrologer_profile',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astrologer_profile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PJCsZwOkcsEKtQ73',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ogUwxEBYFFq8o4cW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@create_astro_rating',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@create_astro_rating',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ogUwxEBYFFq8o4cW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ph5GlPcJMVKHdNsj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-total-rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astro_total_rating',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astro_total_rating',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ph5GlPcJMVKHdNsj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a9LpmAhvYBh60QAE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-rating-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@get_astro_rating_list',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@get_astro_rating_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::a9LpmAhvYBh60QAE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7yFvkKliTborzi7A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astro_dashboard',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astro_dashboard',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7yFvkKliTborzi7A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RsQkOQS6c9qrX3iG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-save-bank-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@save_bank_details',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@save_bank_details',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RsQkOQS6c9qrX3iG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::liNcBedXgbu671kt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-on-off',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astro_on_off',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astro_on_off',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::liNcBedXgbu671kt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i5iT8WwsBehD3Car' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astro_wallet_money',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerAuthController@astro_wallet_money',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::i5iT8WwsBehD3Car',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DnRWFJjL5Qw9AIEP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DnRWFJjL5Qw9AIEP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7GYj8I3kf2Dmy4FH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cancel-astrologer-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@cancel_astrologer_booking',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@cancel_astrologer_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7GYj8I3kf2Dmy4FH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Biz5OwaiGHBDpLYT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verify-astrology-booking-by-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@verify_astrologer_booking_by_otp',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@verify_astrologer_booking_by_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Biz5OwaiGHBDpLYT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EhwPeGc6Gtd3Xrq6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/total-astrologer-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@totalAstrologerBookings',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@totalAstrologerBookings',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EhwPeGc6Gtd3Xrq6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::naKrMZSPW42ABrYB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/total-complete-astrologer-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@totalCompleteAstrologerBookings',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@totalCompleteAstrologerBookings',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::naKrMZSPW42ABrYB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3a9vREOXQk04q8mM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-total-astrologer-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@totalAstrologerBookingsByJajamaan',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@totalAstrologerBookingsByJajamaan',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3a9vREOXQk04q8mM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MDbhlbmNky8n6Tbb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-earning-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@earningsHistory',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstrologerBookingController@earningsHistory',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MDbhlbmNky8n6Tbb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::66wRum0JhHvxHo7g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-plan-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\PlanAPIController@astrologer_plan_list',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\PlanAPIController@astrologer_plan_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::66wRum0JhHvxHo7g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wCfDAAolEPgY9Bia' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/create-astrologer-withdraw-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstroWithdrawController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstroWithdrawController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wCfDAAolEPgY9Bia',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sd7lBs8dnlglNUr7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/astrologer-withdraw-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Astrologer\\AstroWithdrawController@withdraw_history',
        'controller' => 'App\\Http\\Controllers\\API\\Astrologer\\AstroWithdrawController@withdraw_history',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::sd7lBs8dnlglNUr7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pMkGwwFQnvPbV00D' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/event-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\EventPooja\\EventPoojaController@book_event',
        'controller' => 'App\\Http\\Controllers\\API\\EventPooja\\EventPoojaController@book_event',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pMkGwwFQnvPbV00D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XAkqxDfw1uSB1knJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/event-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\EventPooja\\EventPoojaController@event_list',
        'controller' => 'App\\Http\\Controllers\\API\\EventPooja\\EventPoojaController@event_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XAkqxDfw1uSB1knJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AuoWpZV5Qp9zdJBP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/booked-event-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\EventPooja\\EventPoojaController@booked_event_history',
        'controller' => 'App\\Http\\Controllers\\API\\EventPooja\\EventPoojaController@booked_event_history',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AuoWpZV5Qp9zdJBP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::noCcRGZRqwSFrNcH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kundali-price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Kundali\\KundaliAPIController@kundali_price',
        'controller' => 'App\\Http\\Controllers\\API\\Kundali\\KundaliAPIController@kundali_price',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::noCcRGZRqwSFrNcH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZDlvbQZRse0SpAjN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kundali-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Kundali\\KundaliAPIController@kundali_booking',
        'controller' => 'App\\Http\\Controllers\\API\\Kundali\\KundaliAPIController@kundali_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZDlvbQZRse0SpAjN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w9Zl6EUFlJlhODw2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kundali-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Kundali\\KundaliAPIController@kundali_history',
        'controller' => 'App\\Http\\Controllers\\API\\Kundali\\KundaliAPIController@kundali_history',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::w9Zl6EUFlJlhODw2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wfUEcOV3DHbvcT2r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kundali-package-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Kundali\\KundaliAPIController@kundali_package_list',
        'controller' => 'App\\Http\\Controllers\\API\\Kundali\\KundaliAPIController@kundali_package_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wfUEcOV3DHbvcT2r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ncNFvGZrTlig4kIW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/kundali-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Kundali\\KundaliAPIController@get_kundali',
        'controller' => 'App\\Http\\Controllers\\API\\Kundali\\KundaliAPIController@get_kundali',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ncNFvGZrTlig4kIW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AJDXRIxgUDvQYkjd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/ecommerce-shipping-charge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@ecommerce_shippping_charge',
        'controller' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@ecommerce_shippping_charge',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AJDXRIxgUDvQYkjd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XoImtnk6aTKdf4eh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/ecommerce-shipping-cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@ecommerce_shippping_cities',
        'controller' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@ecommerce_shippping_cities',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XoImtnk6aTKdf4eh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MH7NV4JCd9G2HnaZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/ecommerce-product-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@product_list',
        'controller' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@product_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MH7NV4JCd9G2HnaZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U62Te0TOxMvMNbMp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/ecommerce-place-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@place_order',
        'controller' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@place_order',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::U62Te0TOxMvMNbMp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xkWHIj4tuc0Qh2TW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/ecommerce-cancel-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@cancel_order',
        'controller' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@cancel_order',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xkWHIj4tuc0Qh2TW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::77DmAzxrO95EjZ5Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/ecommerce-order-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@order_history',
        'controller' => 'App\\Http\\Controllers\\API\\Ecommerce\\EcommerceAPIController@order_history',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::77DmAzxrO95EjZ5Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CGJE31OhTXosuurU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@store',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CGJE31OhTXosuurU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VJ5vi6k1xLYVdTym' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-send-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@send_otp',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@send_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VJ5vi6k1xLYVdTym',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uk8jtumk7fd7pzP4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@verify_otp',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@verify_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uk8jtumk7fd7pzP4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yiGLS1EtpigyodF2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-verification-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@verification_status',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@verification_status',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yiGLS1EtpigyodF2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kgeydAMfG1YCORJy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@update_profile',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@update_profile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kgeydAMfG1YCORJy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lyGbdefZyELmGXHx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@pujari_list',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@pujari_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lyGbdefZyELmGXHx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JoEhMfTtMr6CkVCJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-pooja-pujari-review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@store_pooja_and_pujari_review',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@store_pooja_and_pujari_review',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::JoEhMfTtMr6CkVCJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jz2XVYzK3Ojd6phb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@pujari_profile',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@pujari_profile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Jz2XVYzK3Ojd6phb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ySec8no3VlRM2jcK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@pujari_dashboard',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@pujari_dashboard',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ySec8no3VlRM2jcK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FONLlMyPh2kVxUTc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-save-bank-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@save_bank_details',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@save_bank_details',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FONLlMyPh2kVxUTc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VZPdFCEPRe14noMs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-duty-on-off',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@duty_on_off',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@duty_on_off',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VZPdFCEPRe14noMs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HxcUGb0O21FanUjf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-withdraw-balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@pujari_withdraw_money',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaPujariAuthAPIController@pujari_withdraw_money',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HxcUGb0O21FanUjf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lKqbVyGAQS7aaI5h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pooja-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@get_pooja_category',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@get_pooja_category',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lKqbVyGAQS7aaI5h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v5jzKZMSLYYGY46N' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pooja-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pooja_list',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pooja_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::v5jzKZMSLYYGY46N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r8RMC14hov3QEeYH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pooja-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pooja_details',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pooja_details',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::r8RMC14hov3QEeYH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ORSVOzHfqQCae3J0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pooja-book-online',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pooja_online_booking',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pooja_online_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ORSVOzHfqQCae3J0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3FIbkGT6nrqQEgJI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pooja-book-offline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pooja_offline_booking',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pooja_offline_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3FIbkGT6nrqQEgJI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MoklYaDpOHd7UtoA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-pooja-book-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@jajmaan_pooja_booking_history',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@jajmaan_pooja_booking_history',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MoklYaDpOHd7UtoA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wi3CKwF3CQo60TEd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-pooja-book-cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@cancel_pooja_booking',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@cancel_pooja_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Wi3CKwF3CQo60TEd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0i2qStysIP2627f6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pooja-change-pujari',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@change_pujari',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@change_pujari',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0i2qStysIP2627f6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tiZW9sESeO4xFegl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pooja-material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pooja_material',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pooja_material',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::tiZW9sESeO4xFegl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bSnRiQ278HumQI2M' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/upcoming-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@upcoming_pooja',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@upcoming_pooja',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::bSnRiQ278HumQI2M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CY6hZhPBPs3dkk8Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-pending-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_pending_request',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_pending_request',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CY6hZhPBPs3dkk8Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IUxHwgjVgmOb9hhH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-confirm-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_total_confirm_request',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_total_confirm_request',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IUxHwgjVgmOb9hhH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2ZpJzlOauzIhzWkx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-booking-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_booking_list',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_booking_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2ZpJzlOauzIhzWkx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m59eqZbj6N1mLhmI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-accept-reject-pooja-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@accept_or_reject_pooja_booking',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@accept_or_reject_pooja_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::m59eqZbj6N1mLhmI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OXKRk2R47paTdRJu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-cancel-pooja-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_cancel_pooja_booking',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_cancel_pooja_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OXKRk2R47paTdRJu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9gYIw4pnP5WoWhWP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-verify-pooja-booking-by-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_verify_booking_by_otp',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_verify_booking_by_otp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9gYIw4pnP5WoWhWP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MtA47JWE2HzYykbR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-total-wallet-booking-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_total_wallet_history_data',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_total_wallet_history_data',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MtA47JWE2HzYykbR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z3vPDP68kxGvI2YE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pujari-total-wallet-balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_total_wallet_balance',
        'controller' => 'App\\Http\\Controllers\\API\\PoojaBooking\\PoojaBookingAPIController@pujari_total_wallet_balance',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Z3vPDP68kxGvI2YE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gYBAlgx9YvuiKY72' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/temple-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@get_temple',
        'controller' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@get_temple',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gYBAlgx9YvuiKY72',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U4gYRfaSg7IlRpVy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/temple-pooja-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@pooja_list',
        'controller' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@pooja_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::U4gYRfaSg7IlRpVy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ad0GZ19BPhyjnvaD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/temple-pooja-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@pooja_details',
        'controller' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@pooja_details',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ad0GZ19BPhyjnvaD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mjygfZD715u9oUDg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/temple-pooja-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@temple_pooja_booking',
        'controller' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@temple_pooja_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mjygfZD715u9oUDg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::quoSeE9MydIfQzyA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-temple-pooja-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@jajmaan_pooja_booking_history',
        'controller' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@jajmaan_pooja_booking_history',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::quoSeE9MydIfQzyA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2EFR49gAQBrIEnxF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-cancel-temple-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@cancel_pooja_booking',
        'controller' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@cancel_pooja_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2EFR49gAQBrIEnxF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MqpyoX2cZJve9r5J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jajmaan-pooja-review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@store_pooja_review',
        'controller' => 'App\\Http\\Controllers\\API\\TemplePooja\\TemplePoojaBookingAPIController@store_pooja_review',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MqpyoX2cZJve9r5J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J5rb6u6bbvsevjdL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/muhurt-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Muhurt\\MuhurtAPIController@muhurt_booking',
        'controller' => 'App\\Http\\Controllers\\API\\Muhurt\\MuhurtAPIController@muhurt_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::J5rb6u6bbvsevjdL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::txuVF9IdyWYAQUAf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/muhurt-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Muhurt\\MuhurtAPIController@muhurt_history',
        'controller' => 'App\\Http\\Controllers\\API\\Muhurt\\MuhurtAPIController@muhurt_history',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::txuVF9IdyWYAQUAf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jsVDpSCD1Go8akle' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/muhurt-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Muhurt\\MuhurtAPIController@get_muhurt',
        'controller' => 'App\\Http\\Controllers\\API\\Muhurt\\MuhurtAPIController@get_muhurt',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jsVDpSCD1Go8akle',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M5kYn95ag3gSQ76t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:293:"function ($locale) {
    if (!\\in_array($locale, [\'en\', \'hi\'])) {
        \\abort(400);
    }
    \\Illuminate\\Support\\Facades\\Session::put(\'locale\', $locale);
    \\Illuminate\\Support\\Facades\\Cookie::queue(\'locale\', $locale, 60 * 24 * 365); // Store for 1 year

    return \\redirect()->back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003de0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::M5kYn95ag3gSQ76t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F3PaE32oes6UUR9G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:335:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'cache:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'route:cache\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'config:cache\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'view:clear\');
    \\Cache::flush();
    return \'Route, Config and View cache cleared\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003e00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::F3PaE32oes6UUR9G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::868cIUvuGkt8sJkb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'updateapp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:95:"function()
{
    \\exec(\'composer dump-autoload\');
    echo \'composer dump-autoload complete\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003e20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::868cIUvuGkt8sJkb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::86e5HydYFqBMPnRT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancellation_refund',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::86e5HydYFqBMPnRT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'front.cancellation_refund',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'features' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'features',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'front.features',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gcRFB8tvOZ448B0Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mobileapp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gcRFB8tvOZ448B0Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'front.mobileapp',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'singleBlogs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'signgle-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'singleBlogs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'front.single_blog',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K43QTVO4z5Jmx2rv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K43QTVO4z5Jmx2rv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'front.payment_success',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7zQvqYaPDQtK6LvT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7zQvqYaPDQtK6LvT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'front.payment_failed',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'asPujariJi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'as-pujari',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'asPujariJi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'front.as-pujari',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@home',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@home',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7sLShlHfq5KLxgrH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'controller' => 'App\\Http\\Controllers\\FrontEndController',
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:62:"function () {
        return \\redirect()->route(\'puja\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003ee0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7sLShlHfq5KLxgrH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@front_blog',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@front_blog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NR7T4OquXVcjKUiG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-bolg/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@view_bolg',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@view_bolg',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NR7T4OquXVcjKUiG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MA2zRhuD6m5njDLA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'term-conditons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@tc_page',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@tc_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MA2zRhuD6m5njDLA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZCe4j8dHhKAUbuXg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-ploicy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@pp_page',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@pp_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZCe4j8dHhKAUbuXg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ehRwb9n4VlXrZaOO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pricing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@pricing',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@pricing',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ehRwb9n4VlXrZaOO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'puja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'puja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@puja',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@puja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'puja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pujaDetails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'puja/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@pujaDetails',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@pujaDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pujaDetails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pujaBooking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking-process/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@booking',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pujaBooking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X1UCIHa3P5ubGdcE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@send_otp',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@send_otp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::X1UCIHa3P5ubGdcE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ptlR2vMy1gAXLplA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@verify_otp',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@verify_otp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ptlR2vMy1gAXLplA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SVFZ4fFXXSeHJ9zn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pooja-feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@poojaFeedback',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@poojaFeedback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SVFZ4fFXXSeHJ9zn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@logout',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@login',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.initiate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'initiate-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@initiatePayment',
        'controller' => 'App\\Http\\Controllers\\PaymentController@initiatePayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.initiate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.callback' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment-callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@paymentCallback',
        'controller' => 'App\\Http\\Controllers\\PaymentController@paymentCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::44REn4Il9K8Mocso' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@index',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::44REn4Il9K8Mocso',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@member_login',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@member_login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'account.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'event.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@member_login',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@member_login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'event.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer-support-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@member_login',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@member_login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'panditji.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paditji-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@member_login',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@member_login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'panditji.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-login-verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-login-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@admin_login',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@admin_login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-login-verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member_login_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'member_login_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@member_login_post',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@member_login_post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'member_login_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UTrZAPYdZIdQQwz3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@admin_dashboard',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@admin_dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UTrZAPYdZIdQQwz3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8TVCQ2SQTTCoxcWb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@admin_profile',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@admin_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8TVCQ2SQTTCoxcWb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@update_profile',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@update_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@update_password',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@update_password',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_server_key' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-server-key',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@update_server_key',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@update_server_key',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_server_key',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_company_details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-company-details12',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@update_company_details',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@update_company_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_company_details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@admin_logout',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@admin_logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.get.member.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_member_login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@get_member_login',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@get_member_login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.get.member.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7xwDxHDSA3uIcLcU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_member_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAuthController@update_member_details',
        'controller' => 'App\\Http\\Controllers\\AdminAuthController@update_member_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7xwDxHDSA3uIcLcU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kathas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kathas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@kathas',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@kathas',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.kathas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.astrology' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astrology',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@astrology',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@astrology',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.astrology',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pooja-perform' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pooja-perform',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@pooja_perform',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@pooja_perform',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pooja-perform',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ecsD8HeHrTm3gmt2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@update_types',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@update_types',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ecsD8HeHrTm3gmt2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kMwkXHGYZeWP6vSq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@delete_types',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@delete_types',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kMwkXHGYZeWP6vSq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save_types' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save_types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@save_types',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@save_types',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save_types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit_data_types' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'edit_data_types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@edit_data_types',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@edit_data_types',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit_data_types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languge' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@language',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.languge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MNSYhhXx3xzmqwN4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@update_language',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@update_language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MNSYhhXx3xzmqwN4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nyczaa04hT00vYjv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@delete_language',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@delete_language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nyczaa04hT00vYjv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save_language' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save_language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@save_language',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@save_language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save_language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit_data_language' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'edit_data_language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@edit_data_language',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@edit_data_language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit_data_language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-new-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@addNewBlog',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@addNewBlog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save.new.blog' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-new-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@saveNewBlog',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@saveNewBlog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save.new.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@blog_list',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@blog_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_blog' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@update_blog',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@update_blog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_blog' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@delete_blog',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@delete_blog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pending_blog_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pending-blog-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@pending_blog_list',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@pending_blog_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pending_blog_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'approve_blog' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'approve_blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@approve_blog',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@approve_blog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'approve_blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'city_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'city-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@city_list',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@city_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'city_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save_city' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save_city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@save_city',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@save_city',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save_city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_city' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@update_city',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@update_city',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_city' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@delete_city',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@delete_city',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'state_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'state-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@state_list',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@state_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'state_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save_state_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save_state_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@save_state_post',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@save_state_post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save_state_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_state' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@update_state',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@update_state',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_state' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@delete_state',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@delete_state',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lCkOQXFCLafFA7VL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@send_notification',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@send_notification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lCkOQXFCLafFA7VL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A09PgpnzeqetGhxZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'raised-query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@raised_query',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@raised_query',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::A09PgpnzeqetGhxZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I8Qw83EFv4YzG3Cd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_app_review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@delete_app_review',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@delete_app_review',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::I8Qw83EFv4YzG3Cd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ujZSsZXjIz4RmrwZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_vendor_cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@get_vendor_cities',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@get_vendor_cities',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ujZSsZXjIz4RmrwZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aTg3lBwTZpUg2pEl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'extra-payment-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@extra_payment_history',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@extra_payment_history',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aTg3lBwTZpUg2pEl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U8Ump0mD0O0631To' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@delete_payment',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@delete_payment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::U8Ump0mD0O0631To',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i18ZHhkddh8fosKs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app-banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@app_banner',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@app_banner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i18ZHhkddh8fosKs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C8PUPIsWDtIQ5G6y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@delete_banner',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@delete_banner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::C8PUPIsWDtIQ5G6y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DFEiby941DkOPIea' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'uppdate_banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@uppdate_banner',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@uppdate_banner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DFEiby941DkOPIea',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zwkGCi96A5cHCtjS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save_banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@saveBanner',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@saveBanner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zwkGCi96A5cHCtjS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bxYoxnpID6zmjAzM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@get_blog',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@get_blog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bxYoxnpID6zmjAzM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update-terms-condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@term_condition',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@term_condition',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.tc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.tc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-tc-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@udpdate_term_condition',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@udpdate_term_condition',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update.tc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update-privacy-policies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@privacy_policy',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@privacy_policy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.pp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-pp-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@udpdate_privacy_policies',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@udpdate_privacy_policies',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update.pp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EskDsEQrKOBqV6B1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send-vendor-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@send_vendor_notification',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@send_vendor_notification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EskDsEQrKOBqV6B1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9IVcdv8QFKUHo3TR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send-user-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@send_user_notification',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@send_user_notification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9IVcdv8QFKUHo3TR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lrDLUnGtaeOX8w8q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send-bulk-notification-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@send_bulk_notification_post',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@send_bulk_notification_post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lrDLUnGtaeOX8w8q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iY0YozEmeM0A4UoL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'yajman-contact-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@yajman_contact_details',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@yajman_contact_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iY0YozEmeM0A4UoL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mO3Ws03vYRHmov4R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astrologer-contact-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@astrologer_contact_details',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@astrologer_contact_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mO3Ws03vYRHmov4R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rzWDH1fLvxfTdRUi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kathavachak-contact-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@kathavachak_contact_details',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@kathavachak_contact_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rzWDH1fLvxfTdRUi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wmUgr6VqfSs6xIe4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pujari-contact-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@pujari_contact_details',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@pujari_contact_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wmUgr6VqfSs6xIe4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RQ9LkxFow2lJ1pr5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_p_cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@get_cities',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@get_cities',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RQ9LkxFow2lJ1pr5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AE0geiD3Iz1qPgqZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PujarijiController@payment_history',
        'controller' => 'App\\Http\\Controllers\\PujarijiController@payment_history',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AE0geiD3Iz1qPgqZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kathavachak' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kathavachak-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@index',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.kathavachak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZavAe9lci9Hbp0Vv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_kathavachak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@update_kathavachak',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@update_kathavachak',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZavAe9lci9Hbp0Vv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iZ14L54ubpnsubUc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_kathavachak_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@get_kathavachak_details',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@get_kathavachak_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iZ14L54ubpnsubUc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pending.kathavachak' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pending-kathavachak-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@pending_kathavachak',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@pending_kathavachak',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pending.kathavachak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kqv6qatWTDSJZgth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verify_kathavachak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@verify_kathavachak',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@verify_kathavachak',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Kqv6qatWTDSJZgth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pXcfCRnzUsOCf3GU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reject_kathavachak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@reject_kathavachak',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@reject_kathavachak',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pXcfCRnzUsOCf3GU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rejected.kathavachak' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rejected-kathavachak-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@rejected_kathavachak',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@rejected_kathavachak',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.rejected.kathavachak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kathavachak_filter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kathavachak_filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@kathavachak_filter',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@kathavachak_filter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kathavachak_filter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cD8IJpcfNnRvuGE8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kathavachak-profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@kathavachak_profile',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@kathavachak_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cD8IJpcfNnRvuGE8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WqMrcTHx47UEjZIl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update-profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@update_profile',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@update_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WqMrcTHx47UEjZIl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'UpdateKathavachak' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-kathavachak-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@update_kathavachak_post',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@update_kathavachak_post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'UpdateKathavachak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'p_delete_kathavachak' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'p_delete_kathavachak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathavachakController@p_delete_kathavachak',
        'controller' => 'App\\Http\\Controllers\\KathavachakController@p_delete_kathavachak',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'p_delete_kathavachak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.total.kathas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'total-kathas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathaBookingController@total_kathas',
        'controller' => 'App\\Http\\Controllers\\KathaBookingController@total_kathas',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.total.kathas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cancelled_booking_data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cancelled_booking_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathaBookingController@cancelled_booking_data',
        'controller' => 'App\\Http\\Controllers\\KathaBookingController@cancelled_booking_data',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cancelled_booking_data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pending.kathas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pending-kathas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathaBookingController@pending_katha',
        'controller' => 'App\\Http\\Controllers\\KathaBookingController@pending_katha',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pending.kathas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cancel.kathas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancel-kathas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathaBookingController@cancel_katha',
        'controller' => 'App\\Http\\Controllers\\KathaBookingController@cancel_katha',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.cancel.kathas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.approved.cancel.kathas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'approved-cancel-kathas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathaBookingController@approved_cancel_katha',
        'controller' => 'App\\Http\\Controllers\\KathaBookingController@approved_cancel_katha',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.approved.cancel.kathas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'initate_refund' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'initate_refund',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathaBookingController@initate_refund',
        'controller' => 'App\\Http\\Controllers\\KathaBookingController@initate_refund',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'initate_refund',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking_filter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking_filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathaBookingController@booking_filter',
        'controller' => 'App\\Http\\Controllers\\KathaBookingController@booking_filter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'booking_filter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'state_city_filter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'state_city_filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KathaBookingController@state_city_filter',
        'controller' => 'App\\Http\\Controllers\\KathaBookingController@state_city_filter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'state_city_filter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.jajmaan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jajmaan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\JajmaanController@jajmaan',
        'controller' => 'App\\Http\\Controllers\\JajmaanController@jajmaan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.jajmaan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.jajmaan.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jajmaan-profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\JajmaanController@jajmaan_profile',
        'controller' => 'App\\Http\\Controllers\\JajmaanController@jajmaan_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.jajmaan.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rOGML5fWB2enuZTA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_jajmaan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\JajmaanController@update_jajmaan',
        'controller' => 'App\\Http\\Controllers\\JajmaanController@update_jajmaan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rOGML5fWB2enuZTA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D0rHgB7Ec8HJXsIH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_jajmaan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\JajmaanController@delete_jajmaan',
        'controller' => 'App\\Http\\Controllers\\JajmaanController@delete_jajmaan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D0rHgB7Ec8HJXsIH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit.jajmaan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-jajmaan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\JajmaanController@edit_jajmaan',
        'controller' => 'App\\Http\\Controllers\\JajmaanController@edit_jajmaan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.edit.jajmaan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZDziIVvxV0tzRXok' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-jajmaan-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\JajmaanController@update_jajmaan_post',
        'controller' => 'App\\Http\\Controllers\\JajmaanController@update_jajmaan_post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZDziIVvxV0tzRXok',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'jajmaan_filter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jajmaan_filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\JajmaanController@jajmaan_filter',
        'controller' => 'App\\Http\\Controllers\\JajmaanController@jajmaan_filter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'jajmaan_filter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZohAevT6Y4sAhokE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\JajmaanController@get_cities',
        'controller' => 'App\\Http\\Controllers\\JajmaanController@get_cities',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZohAevT6Y4sAhokE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.astrologer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astrologer-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@index',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.astrologer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get.astro' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-astro-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@get_astro',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@get_astro',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get.astro',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zZimxOzhhSt06GKA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_astro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@update_astro',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@update_astro',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zZimxOzhhSt06GKA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZhFLGRlRavFlJfmD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_astro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@delete_astro',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@delete_astro',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZhFLGRlRavFlJfmD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fprJlLwSeGJ5Uqum' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astrologer-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@astrologer_details',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@astrologer_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fprJlLwSeGJ5Uqum',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.astrologer.pendinglist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astrologer-pending-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@pending_list',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@pending_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.astrologer.pendinglist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fti6mFhfK9kbbCw0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verify_astro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@verify_astro',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@verify_astro',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Fti6mFhfK9kbbCw0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bdkXnWUfp1ury6on' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reject_astro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@reject_astro',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@reject_astro',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bdkXnWUfp1ury6on',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.astrologer.rejectedlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astrologer-rejected-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@rejected_list',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@rejected_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.astrologer.rejectedlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.astrology.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astrology-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@astrology_plan',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@astrology_plan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.astrology.plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.store.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@store_plan',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@store_plan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.store.plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RwirFtCvQdP0uj8D' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save_plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@save_plan',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@save_plan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RwirFtCvQdP0uj8D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bZtXMiLunzy6incj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@update_plan',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@update_plan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bZtXMiLunzy6incj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QGBMh5xb6ZvhvzEI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@delete_plan',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@delete_plan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QGBMh5xb6ZvhvzEI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-plan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@edit_plan',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@edit_plan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.edit.plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pending.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pending-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@pending_bookings',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@pending_bookings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pending.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.completed.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'completed-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@completed_bookings',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@completed_bookings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.completed.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cancelled.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancelled-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@cancelled_bookings',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@cancelled_bookings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.cancelled.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cancelled.approved.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'completed-cancelled-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@completed_cancelled_bookings',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@completed_cancelled_bookings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.cancelled.approved.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FWJagYjMcRToaY6W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-cancel-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@get_cancel_details',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@get_cancel_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FWJagYjMcRToaY6W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bvmlm1whOq3BeSG2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'initiate-astro-booking-refund',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@initate_refund_astro_booking',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@initate_refund_astro_booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bvmlm1whOq3BeSG2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6hnFfKHbQ0jajTVR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astrologer-update-profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@update_profile',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@update_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6hnFfKHbQ0jajTVR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Updateastrologer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-astrologer-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@update_astrologer_post',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@update_astrologer_post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'Updateastrologer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'astrologer_filter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astrologer_filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@astrologer_filter',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@astrologer_filter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'astrologer_filter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.astro.wihraw.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astro-withdraw-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@withdraw_request',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@withdraw_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.astro.wihraw.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.astro.complete.wihraw.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astro-complete-withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@complete_request',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@complete_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.astro.complete.wihraw.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.astro.rejected.wihraw.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'astro-rejected-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@rejected_request',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@rejected_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.astro.rejected.wihraw.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y1qX0LSu5BzID0Zx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'astro-verify_withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@verify_withdraw',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@verify_withdraw',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::y1qX0LSu5BzID0Zx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1ALxKJ41Ba2reJwe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'astro-reject_withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\AstrologyController@reject_withdraw',
        'controller' => 'App\\Http\\Controllers\\AstrologyController@reject_withdraw',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1ALxKJ41Ba2reJwe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pujariji' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pujariji-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@index',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pujariji',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MdGlf8U3DeG5JOmM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_pujari',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@update_pujari',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@update_pujari',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MdGlf8U3DeG5JOmM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pQSQTJ3JNVphFrvw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_pujari',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@delete_pujari',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@delete_pujari',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pQSQTJ3JNVphFrvw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ysm7MhUOLhzZaI1e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pujariji-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@pujariji_details',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@pujariji_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ysm7MhUOLhzZaI1e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pending.pujariji' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pending-pujariji-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@pending_pujariji',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@pending_pujariji',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pending.pujariji',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ySmzze1x2Q7MqTQd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verify_vendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@verify_vendor',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@verify_vendor',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ySmzze1x2Q7MqTQd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K1rHTJrhHMMx6vyN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reject_vendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@reject_vendor',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@reject_vendor',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K1rHTJrhHMMx6vyN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::glPbSMvOMVwbzkMu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pujariji-update-profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@update_profile',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@update_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::glPbSMvOMVwbzkMu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'UpdatePujari' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-pujariji-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@update_pujariji_post',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@update_pujariji_post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'UpdatePujari',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rejected.pujariji' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rejected-pujariji-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@rejected_pujariji',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@rejected_pujariji',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.rejected.pujariji',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NLSIyb8koD3WXU4C' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_permanently',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@delete_permanently',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@delete_permanently',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NLSIyb8koD3WXU4C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wihraw.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'withdraw-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@withdraw_request',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@withdraw_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.wihraw.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.complete.wihraw.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'complete-withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@complete_request',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@complete_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.complete.wihraw.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rejected.wihraw.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rejected-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@rejected_request',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@rejected_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.rejected.wihraw.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ej5iCvVRcsZMiTfK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verify_withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@verify_withdraw',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@verify_withdraw',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Ej5iCvVRcsZMiTfK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xvLMgvcoGPNWo7UO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reject_withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@reject_withdraw',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@reject_withdraw',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xvLMgvcoGPNWo7UO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pujari_filter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pujari_filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@pujari_filter',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@pujari_filter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pujari_filter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'offline.pending.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'offline-pending-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@offline_pending_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@offline_pending_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'offline.pending.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'offline.completed.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'offline-completed-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@offline_completed_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@offline_completed_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'offline.completed.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'offline.cancelled.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'offline-cancelled-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@offline_cancelled_request',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@offline_cancelled_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'offline.cancelled.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'offline.cancelled.completed.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'offline-completed-cancelled-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@offline_completed_cancelled_request',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@offline_completed_cancelled_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'offline.cancelled.completed.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online.pending.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-pending-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@online_pending_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@online_pending_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'online.pending.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online.completed.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-completed-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@online_completed_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@online_completed_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'online.completed.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online.cancelled.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-cancelled-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@online_cancelled_request',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@online_cancelled_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'online.cancelled.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online.cancelled.completed.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-completed-cancelled-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@online_completed_cancelled_request',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@online_completed_cancelled_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'online.cancelled.completed.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9nwKHEg9xBl85Hct' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_pooja_package_inclusion_detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@get_pooja_package_inclusion_detail',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@get_pooja_package_inclusion_detail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9nwKHEg9xBl85Hct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rOst80RJz7HLOZ3n' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'initate_refund_pooja_booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@initate_refund_pooja_booking',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@initate_refund_pooja_booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rOst80RJz7HLOZ3n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OZwnijk7hrzl9oEH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-booking-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@get_booking_details',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@get_booking_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OZwnijk7hrzl9oEH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u3cxMRpOZai5rQbs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-pujari-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@update_pujari_details',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@update_pujari_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::u3cxMRpOZai5rQbs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S2jS7b8xZ81WYClX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'web-complete-puja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_complete_booking',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_complete_booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::S2jS7b8xZ81WYClX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.pending.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-pending-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_pending_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_pending_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.pending.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.completed.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-completed-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_completed_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_completed_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.completed.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.cancelled.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-cancelled-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_cancelled_request',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_cancelled_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.cancelled.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.cancelled.completed.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-completed-cancelled-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_completed_cancelled_request',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_completed_cancelled_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.cancelled.completed.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cXnN4uGDmS1PIcpX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-get-booking-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_get_booking_details',
        'controller' => 'App\\Http\\Controllers\\PoojaBookingController@virtual_get_booking_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cXnN4uGDmS1PIcpX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pooja-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pooja-pactegory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@pooja_pactegory',
        'controller' => 'App\\Http\\Controllers\\PoojaController@pooja_pactegory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pooja-category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addNewCategoryPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@save_category',
        'controller' => 'App\\Http\\Controllers\\PoojaController@save_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'addNewCategoryPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gJpvMOBflWVKHyP9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_category',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gJpvMOBflWVKHyP9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatecategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@update_category',
        'controller' => 'App\\Http\\Controllers\\PoojaController@update_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updatecategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deketecategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_category',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deketecategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.addNewPooja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-new-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@add_new_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@add_new_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.addNewPooja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addNewPoojaPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-new-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@save_new_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@save_new_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'addNewPoojaPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.poojaList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pooja-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@pooja_list',
        'controller' => 'App\\Http\\Controllers\\PoojaController@pooja_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.poojaList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatePooja' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@update_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@update_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updatePooja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deketePooja' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deketePooja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FSpPruup2HMH0mBf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-pooja/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@edit_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@edit_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FSpPruup2HMH0mBf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.packageList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@package_list',
        'controller' => 'App\\Http\\Controllers\\PoojaController@package_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.packageList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IgLF5ym0sg0eEGiI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-pooja-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_pooja_details',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_pooja_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IgLF5ym0sg0eEGiI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatePackage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@update_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@update_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updatePackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletePackage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deletePackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.addNewPackage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-new-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@add_new_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@add_new_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.addNewPackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.editPackage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-package/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@edit_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@edit_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.editPackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addNewPackagePost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@save_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@save_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'addNewPackagePost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ajax.package.list' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-package-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_package_list',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_package_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ajax.package.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pooja-videos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pooja-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@pooja_videos',
        'controller' => 'App\\Http\\Controllers\\PoojaController@pooja_videos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pooja-videos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addNewPoojaVideo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-pooja-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@save_pooja_video',
        'controller' => 'App\\Http\\Controllers\\PoojaController@save_pooja_video',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'addNewPoojaVideo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::86Ied5CqPFY42Ktx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-video-single/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_pooja_video_single',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_pooja_video_single',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::86Ied5CqPFY42Ktx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatePoojaVideo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-pooja-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@update_pooja_video',
        'controller' => 'App\\Http\\Controllers\\PoojaController@update_pooja_video',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updatePoojaVideo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletePoojaVideo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-pooja-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_video',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_video',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deletePoojaVideo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.addNewPooja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-add-new-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_add_new_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_add_new_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.addNewPooja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.addNewPoojaPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-save-new-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_save_new_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_save_new_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.addNewPoojaPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'savePoojaBasic' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-pooja-basic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_save_pooja_basic',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_save_pooja_basic',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'savePoojaBasic',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'savePoojaMandir' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-pooja-mandir',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_save_pooja_mandir',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_save_pooja_mandir',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'savePoojaMandir',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'savePoojaBenefit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-pooja-benefit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_save_pooja_benefit',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_save_pooja_benefit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'savePoojaBenefit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'savePoojaProcess' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-pooja-process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_save_pooja_process',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_save_pooja_process',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'savePoojaProcess',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'savePoojaDetail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-pooja-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_save_pooja_detail',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_save_pooja_detail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'savePoojaDetail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.poojaList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-pooja-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_pooja_list',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_pooja_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.poojaList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.pastPooja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-past-puja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_past_puja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_past_puja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.pastPooja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.updatePooja' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-update-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_update_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_update_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.updatePooja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.deketePooja' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-delete-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_delete_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_delete_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.deketePooja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.editPuja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-edit-pooja/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_edit_pooja',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_edit_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.editPuja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4V8O2keVYCxz5i8m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-puja-detail-single/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_pooja_detail_single',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_pooja_detail_single',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4V8O2keVYCxz5i8m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletePoojaDetail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-pooja-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_detail',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_detail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deletePoojaDetail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3dtwVVNlBoK9jIJv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-puja-benefit-single/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_pooja_benefit_single',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_pooja_benefit_single',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3dtwVVNlBoK9jIJv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletePoojaBenefit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-pooja-benefit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_benefit',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_benefit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deletePoojaBenefit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ez4AHH04EBm1WKfZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-puja-process-single/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_pooja_process_single',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_pooja_process_single',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ez4AHH04EBm1WKfZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletePoojaProcess' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-pooja-process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_process',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_process',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deletePoojaProcess',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YVnRmBJtYBj078Fj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-puja-mandir-single/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_pooja_mandir_single',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_pooja_mandir_single',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YVnRmBJtYBj078Fj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletePoojaMandir' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-pooja-mandir',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_mandir',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_mandir',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deletePoojaMandir',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YZfprfAVdxNc8B1C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-puja-package-single/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_pooja_package_single',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_pooja_package_single',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YZfprfAVdxNc8B1C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletePoojaPackage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-pooja-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deletePoojaPackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.poojaEnquiry' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pooja-enquiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@puja_enquiry',
        'controller' => 'App\\Http\\Controllers\\PoojaController@puja_enquiry',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.poojaEnquiry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.poojaReview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pooja-reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@puja_review',
        'controller' => 'App\\Http\\Controllers\\PoojaController@puja_review',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.poojaReview',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.pooja-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-pooja-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_pooja_category',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_pooja_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.pooja-category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.addNewCategoryPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-save-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@save_category',
        'controller' => 'App\\Http\\Controllers\\PoojaController@save_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.addNewCategoryPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lb12UfD7sitB6Ieq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-get-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_category',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Lb12UfD7sitB6Ieq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.updatecategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-update-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@update_category',
        'controller' => 'App\\Http\\Controllers\\PoojaController@update_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.updatecategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.deketecategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-delete-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_category',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.deketecategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.packageList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-package-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_package_list',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_package_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.packageList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wbGGUtKSRB8HMdrf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-get-pooja-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_get_pooja_details',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_get_pooja_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wbGGUtKSRB8HMdrf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.updatePackage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-update-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_update_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_update_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.updatePackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.deletePackage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-delete-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_delete_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_delete_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.deletePackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.addNewPackage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-add-new-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_add_new_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_add_new_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.addNewPackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.editPackage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'virtual-edit-package/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_edit_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_edit_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.editPackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.addNewPackagePost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-save-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_save_package',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_save_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.addNewPackagePost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'virtual.addNewPicturePost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'virtual-puja-save-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@virtual_savePoojaImages',
        'controller' => 'App\\Http\\Controllers\\PoojaController@virtual_savePoojaImages',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'virtual.addNewPicturePost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dnh4m8L1BFjvZ72g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-vertual-pooja-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_image',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_pooja_image',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Dnh4m8L1BFjvZ72g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.InclusionList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inclusion-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@inclusion_list',
        'controller' => 'App\\Http\\Controllers\\PoojaController@inclusion_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.InclusionList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateinclusion' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-inclusion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@update_inclusion',
        'controller' => 'App\\Http\\Controllers\\PoojaController@update_inclusion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updateinclusion',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteinclusion' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-inclusion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_inclusion',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_inclusion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deleteinclusion',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addNewInclusionPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-inclusion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@save_inclusion',
        'controller' => 'App\\Http\\Controllers\\PoojaController@save_inclusion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'addNewInclusionPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aTGKuVl3MgHATYiG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_inclusion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_inclusion',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_inclusion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aTGKuVl3MgHATYiG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pooja.material' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pooja-material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@pooja_material',
        'controller' => 'App\\Http\\Controllers\\PoojaController@pooja_material',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pooja.material',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatematerial' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@update_material',
        'controller' => 'App\\Http\\Controllers\\PoojaController@update_material',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updatematerial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletematerial' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@delete_material',
        'controller' => 'App\\Http\\Controllers\\PoojaController@delete_material',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deletematerial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bg0DT0VwAss3veXa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_material',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_material',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Bg0DT0VwAss3veXa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save.material' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@save_material',
        'controller' => 'App\\Http\\Controllers\\PoojaController@save_material',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save.material',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get_poojaDetails' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getpoojadetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\PoojaController@get_poojaDetails',
        'controller' => 'App\\Http\\Controllers\\PoojaController@get_poojaDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get_poojaDetails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kundali' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kundali',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KundaliController@kundali',
        'controller' => 'App\\Http\\Controllers\\KundaliController@kundali',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.kundali',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_kundali' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_kundali',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KundaliController@update_kundali',
        'controller' => 'App\\Http\\Controllers\\KundaliController@update_kundali',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_kundali',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_kundali' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_kundali',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KundaliController@delete_kundali',
        'controller' => 'App\\Http\\Controllers\\KundaliController@delete_kundali',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_kundali',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addNewkundaliPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-kundali',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KundaliController@save_kundali',
        'controller' => 'App\\Http\\Controllers\\KundaliController@save_kundali',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'addNewkundaliPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editkundaliPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'edit-kundali',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KundaliController@edit_kundali',
        'controller' => 'App\\Http\\Controllers\\KundaliController@edit_kundali',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'editkundaliPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pending_booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pending-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KundaliController@pending_booking',
        'controller' => 'App\\Http\\Controllers\\KundaliController@pending_booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pending_booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.complete_booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'complete-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KundaliController@complete_booking',
        'controller' => 'App\\Http\\Controllers\\KundaliController@complete_booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.complete_booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.complete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-booking-complete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\KundaliController@update_booking_complete',
        'controller' => 'App\\Http\\Controllers\\KundaliController@update_booking_complete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update.complete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.muhurt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'muhurt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\MuhhurtController@muhurt',
        'controller' => 'App\\Http\\Controllers\\MuhhurtController@muhurt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.muhurt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_muhurt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_muhurt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\MuhhurtController@update_muhurt',
        'controller' => 'App\\Http\\Controllers\\MuhhurtController@update_muhurt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_muhurt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_muhurt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_muhurt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\MuhhurtController@delete_muhurt',
        'controller' => 'App\\Http\\Controllers\\MuhhurtController@delete_muhurt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_muhurt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addNewmuhurtPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-muhurt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\MuhhurtController@save_muhurt',
        'controller' => 'App\\Http\\Controllers\\MuhhurtController@save_muhurt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'addNewmuhurtPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editmuhurtPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'edit-muhurt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\MuhhurtController@edit_muhurt',
        'controller' => 'App\\Http\\Controllers\\MuhhurtController@edit_muhurt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'editmuhurtPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.muhurt.pending_booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'muhurt-pending-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\MuhhurtController@pending_booking',
        'controller' => 'App\\Http\\Controllers\\MuhhurtController@pending_booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.muhurt.pending_booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.muhurt.complete_booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'muhurt-complete-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\MuhhurtController@complete_booking',
        'controller' => 'App\\Http\\Controllers\\MuhhurtController@complete_booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.muhurt.complete_booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.muhurt.update.complete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-muhurt-booking-complete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\MuhhurtController@update_booking_complete',
        'controller' => 'App\\Http\\Controllers\\MuhhurtController@update_booking_complete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.muhurt.update.complete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.event' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@event',
        'controller' => 'App\\Http\\Controllers\\EventController@event',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.event',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.event.details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_event_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@get_event_details',
        'controller' => 'App\\Http\\Controllers\\EventController@get_event_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.event.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create.event' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@create_event',
        'controller' => 'App\\Http\\Controllers\\EventController@create_event',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.create.event',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addNewEventPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@save_event',
        'controller' => 'App\\Http\\Controllers\\EventController@save_event',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'addNewEventPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit.event' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-event/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@edit_event',
        'controller' => 'App\\Http\\Controllers\\EventController@edit_event',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.edit.event',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_event' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@update_event',
        'controller' => 'App\\Http\\Controllers\\EventController@update_event',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_event',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_event' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@delete_event',
        'controller' => 'App\\Http\\Controllers\\EventController@delete_event',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_event',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.event.booking.pending' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-pending-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@pending_booking',
        'controller' => 'App\\Http\\Controllers\\EventController@pending_booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.event.booking.pending',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.event.booking.complete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-complete-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@complete_booking',
        'controller' => 'App\\Http\\Controllers\\EventController@complete_booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.event.booking.complete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.event.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-booking/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@event_bookings',
        'controller' => 'App\\Http\\Controllers\\EventController@event_bookings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.event.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_link' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@update_link',
        'controller' => 'App\\Http\\Controllers\\EventController@update_link',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_link',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@products',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@products',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_ecom_product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_ecom_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@update_ecom_product',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@update_ecom_product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_ecom_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_ecom_product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_ecom_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@delete_ecom_product',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@delete_ecom_product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_ecom_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.add.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@add_products',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@add_products',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.add.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addNewProductPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-product-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@add_products_post',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@add_products_post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'addNewProductPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-products/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@edit_products',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@edit_products',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.edit.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shippingcities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipping-cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@shipping_cities',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@shipping_cities',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.shippingcities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_cities' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@update_cities',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@update_cities',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add_new_city_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add_new_city_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@add_new_city_post',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@add_new_city_post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add_new_city_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shippingcharge' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipping-charge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@shipping_charge',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@shipping_charge',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.shippingcharge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.shippingcharge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-delivery-charge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@update_delivery_charge',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@update_delivery_charge',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update.shippingcharge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pending.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pending-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@pending_order',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@pending_order',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.pending.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-order-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@get_order_product',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@get_order_product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.order.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.update.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-order-complete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@update_order_complete',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@update_order_complete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.order.update.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivered.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delivered-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@delivered_order',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@delivered_order',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.delivered.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cancelled.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancelled-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@cancelled_order',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@cancelled_order',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.cancelled.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-order-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@get_order_details',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@get_order_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.order.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.initate.refund' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'initate-refund',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@initate_refund',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@initate_refund',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.initate.refund',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.refunded.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'refunded-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\EcommerceController@refunded_order',
        'controller' => 'App\\Http\\Controllers\\EcommerceController@refunded_order',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.refunded.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.temple.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@temple_list',
        'controller' => 'App\\Http\\Controllers\\TempleController@temple_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.temple.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.save.temple' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-temple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@save_temple',
        'controller' => 'App\\Http\\Controllers\\TempleController@save_temple',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.save.temple',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.get.temple' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-temple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@get_temple',
        'controller' => 'App\\Http\\Controllers\\TempleController@get_temple',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.get.temple',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.temple.pooja.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-pooja-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@pooja_list',
        'controller' => 'App\\Http\\Controllers\\TempleController@pooja_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.temple.pooja.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XFSCgeMwMD1EdBml' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-temple-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@update_temple_pooja',
        'controller' => 'App\\Http\\Controllers\\TempleController@update_temple_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XFSCgeMwMD1EdBml',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TitWNgGAuSBiYlHQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-temple-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@delete_temple_pooja',
        'controller' => 'App\\Http\\Controllers\\TempleController@delete_temple_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TitWNgGAuSBiYlHQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.add.temple.pooja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-new-temple-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@add_new_temple_pooja',
        'controller' => 'App\\Http\\Controllers\\TempleController@add_new_temple_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.add.temple.pooja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addNewTemplePoojaPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@save_pooja',
        'controller' => 'App\\Http\\Controllers\\TempleController@save_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'addNewTemplePoojaPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UYz2FignLoTKsTUb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-temple-pooja/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@edit_temple_pooja',
        'controller' => 'App\\Http\\Controllers\\TempleController@edit_temple_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UYz2FignLoTKsTUb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.temple.packageList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-package-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@temple_package_list',
        'controller' => 'App\\Http\\Controllers\\TempleController@temple_package_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.temple.packageList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::swUjLeiJiAMURBen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'temple-get-pooja-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@get_pooja_details',
        'controller' => 'App\\Http\\Controllers\\TempleController@get_pooja_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::swUjLeiJiAMURBen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.updatePackage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'temple-update-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@update_package',
        'controller' => 'App\\Http\\Controllers\\TempleController@update_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.updatePackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.deletePackage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'temple-delete-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@delete_package',
        'controller' => 'App\\Http\\Controllers\\TempleController@delete_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.deletePackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.temple.addNewPackage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-add-new-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@add_new_package',
        'controller' => 'App\\Http\\Controllers\\TempleController@add_new_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.temple.addNewPackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.temple.editPackage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-edit-package/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@edit_package',
        'controller' => 'App\\Http\\Controllers\\TempleController@edit_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.temple.editPackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.addNewPackagePost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'temple-save-package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@save_package',
        'controller' => 'App\\Http\\Controllers\\TempleController@save_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.addNewPackagePost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.temple.InclusionList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-inclusion-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@inclusion_list',
        'controller' => 'App\\Http\\Controllers\\TempleController@inclusion_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.temple.InclusionList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.updateinclusion' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'temple-update-inclusion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@update_inclusion',
        'controller' => 'App\\Http\\Controllers\\TempleController@update_inclusion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.updateinclusion',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.deleteinclusion' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'temple-delete-inclusion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@delete_inclusion',
        'controller' => 'App\\Http\\Controllers\\TempleController@delete_inclusion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.deleteinclusion',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.addNewInclusionPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'temple-save-inclusion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@save_inclusion',
        'controller' => 'App\\Http\\Controllers\\TempleController@save_inclusion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.addNewInclusionPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::25zzeFSVJurBC90j' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'temple-get_inclusion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@get_inclusion',
        'controller' => 'App\\Http\\Controllers\\TempleController@get_inclusion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::25zzeFSVJurBC90j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.offline.pending.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-offline-pending-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@offline_pending_pooja',
        'controller' => 'App\\Http\\Controllers\\TempleController@offline_pending_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.offline.pending.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.offline.completed.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-offline-completed-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@offline_completed_pooja',
        'controller' => 'App\\Http\\Controllers\\TempleController@offline_completed_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.offline.completed.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.offline.cancelled.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-offline-cancelled-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@offline_cancelled_request',
        'controller' => 'App\\Http\\Controllers\\TempleController@offline_cancelled_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.offline.cancelled.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.offline.cancelled.completed.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-offline-completed-cancelled-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@offline_completed_cancelled_request',
        'controller' => 'App\\Http\\Controllers\\TempleController@offline_completed_cancelled_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.offline.cancelled.completed.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.online.pending.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-online-pending-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@online_pending_pooja',
        'controller' => 'App\\Http\\Controllers\\TempleController@online_pending_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.online.pending.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.online.completed.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-online-completed-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@online_completed_pooja',
        'controller' => 'App\\Http\\Controllers\\TempleController@online_completed_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.online.completed.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.online.cancelled.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-online-cancelled-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@online_cancelled_request',
        'controller' => 'App\\Http\\Controllers\\TempleController@online_cancelled_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.online.cancelled.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'temple.online.cancelled.completed.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'temple-online-completed-cancelled-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@online_completed_cancelled_request',
        'controller' => 'App\\Http\\Controllers\\TempleController@online_completed_cancelled_request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'temple.online.cancelled.completed.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5X0xqpx293Jzvkti' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-temple-booking-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@get_booking_details',
        'controller' => 'App\\Http\\Controllers\\TempleController@get_booking_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5X0xqpx293Jzvkti',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i7ppoqJLrS6VkCpc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-temple-pujari-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@update_pujari_details',
        'controller' => 'App\\Http\\Controllers\\TempleController@update_pujari_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i7ppoqJLrS6VkCpc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JIUP1338oKN3cS0E' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_temple_pooja_package_inclusion_detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@get_pooja_package_inclusion_detail',
        'controller' => 'App\\Http\\Controllers\\TempleController@get_pooja_package_inclusion_detail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JIUP1338oKN3cS0E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::imJd4yikb9veajiy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'initate_refund_temple_pooja_booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\TempleController@initate_refund_pooja_booking',
        'controller' => 'App\\Http\\Controllers\\TempleController@initate_refund_pooja_booking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::imJd4yikb9veajiy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upcoming.pooja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'upcoming-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\UpcomingPujaController@index',
        'controller' => 'App\\Http\\Controllers\\UpcomingPujaController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.upcoming.pooja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fHbUDoqbiTJDKVSG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'set-upcoming-pooja',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AdminCheck',
          2 => 'prevent-back-history',
        ),
        'uses' => 'App\\Http\\Controllers\\UpcomingPujaController@set_upcoming_pooja',
        'controller' => 'App\\Http\\Controllers\\UpcomingPujaController@set_upcoming_pooja',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fHbUDoqbiTJDKVSG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
