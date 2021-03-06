<?php

namespace App\Exceptions;
use Illuminate\Validation\Validator;
// use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    // public function render($request, Throwable $exception)
    // {
    //         return response(['error'=>$exception->getMessage()],$exception->getCode()? : 400);
    // }

    public function render($request, Throwable $exception){
        // dd(ValidationException);
        // $validator = Validator::make($request,$rules);
        // dd($validator);
        // if($exception instanceof \Illuminate\Validation\ValidationException){
        //     return \response([
        //         'errors'=>$exception->error()
        //     ]);
        // }
        
        return response(['error'=>$exception->getMessage(),'code'=>$exception->getCode()? :400]);

    }
}
