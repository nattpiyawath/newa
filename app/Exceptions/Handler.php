<?php
namespace App\Exceptions;
use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
class Handler extends ExceptionHandler
{
   // use Throwable - you should NOT import Throwable class as a trait here. You need to just import it above the class
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }
    // public function render($request, Throwable $exception)
    // {
    //     return parent::render($request, $exception);
    // }
    

    public function render($request, Throwable $e)
    {
        if($this->isHttpException($e))
        {
            switch ($e->getStatusCode()) 
                {
                // not found
                case 404:
                return redirect()->guest('/');
                break;

                // internal error
                case '500':
                return redirect()->guest('/');
                break;

                default:
                    return $this->renderHttpException($e);
                break;
            }
        }
        else
        {
                return parent::render($request, $e);
        }
    }
}