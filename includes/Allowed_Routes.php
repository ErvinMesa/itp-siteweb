<?php
return [
    ['GET','/',['HomeController','show']],
    //Login&Register
    ['GET','/login',['AuthController','log_show']],
    ['POST','/login',['AuthController','log_post']],
    ['POST','/logout',['AuthController','logout']],
    ['GET','/register',['AuthController','reg_show']],
    ['POST','/register',['AuthController','reg_post']],
    //Profile
    ['GET','/profile',['ProfilesController','show']],
    //Contact Tracing / Cities / Municipalities
    ['GET','/ctracing',['ContactTracingController','show']],
    ['GET','/ctracing/create',['ContactTracingController','create']],
    ['GET','/ctracing/delete/{id}',['ContactTracingController','delete']],
    ['GET','/ctracing/{id}',['ContactTracingController','edit']],
    ['POST','/ctracing/{id}',['ContactTracingController','save']],
    ['POST','/ctracing',['ContactTracingController','post']],
    //Barangay
    ['GET','/barangay',['BarangayController','show']],
    ['GET','/barangay/delete/{id}',['BarangayController','delete']],
    ['GET','/barangay/create',['BarangayController','create']],
    ['GET','/barangay/{id}',['BarangayController','edit']],
    ['POST','/barangay/{id}',['BarangayController','save']],
    ['POST','/barangay',['BarangayController','post']],
];
?>