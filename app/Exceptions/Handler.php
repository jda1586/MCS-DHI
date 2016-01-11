<?php

namespace DHI\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
        ModelNotFoundException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        /*if ($e instanceof ModelNotFoundException) {
            $e = new NotFoundHttpException($e->getMessage(), $e);
        }
        return parent::render($request, $e);*/
        $debug = env('APP_DEBUG');
//        echo $debug;
        if ($debug == 0) {  //si es falso no esta en modo debug y muestra la pagina
//            echo $debug.'<br>  entro a 0';
            if ($this->isHttpException($e)) {
//                echo '<br> entro isHttpException ';
                return $this->renderHttpException($e);
            } else if ($e instanceof NotFoundHttpException) {
//                echo '<br> entro no encontrado ';
                return response()->view('errors.404', [], 400);
            }elseif ($e instanceof FatalErrorException) {
//                    dd('error fatal');
                    return response()->view('errors.500', [], 500);
            }elseif ($e instanceof handleError) {
//                dd('exeption');
                return response()->view('errors.500', [], 500);
            }elseif ($e instanceof ModelNotFoundException) {
                return response()->view('errors.500', [], 500);
            }else
            {
//                dd('ninguno');
                return response()->view('errors.500', [], 500);
            }
        }else if($debug == 1) {     //si es verdadero esta en modo debug y muestra el error
//            echo '<br> entro a 1';
            if ($e instanceof ModelNotFoundException) {
                $e = new NotFoundHttpException($e->getMessage(), $e);
            }
            return parent::render($request, $e);
        }
    }
}
