<?php

use Illuminate\Support\Facades\Route;

Route :: get ('/' , function () {
    return view ('home') -> with ('title' , ' home page' );
});


