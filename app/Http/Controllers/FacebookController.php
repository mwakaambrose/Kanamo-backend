<?php

namespace App\Http\Controllers;

use App\Facebook;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Casperlaitw\LaravelFbMessenger\Contracts\WebhookHandler;
use Casperlaitw\LaravelFbMessenger\Contracts\Debug\Debug;
use Casperlaitw\LaravelFbMessenger\Messages\Receiver;
use Casperlaitw\LaravelFbMessenger\Middleware\RequestReceived;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FacebookController extends Controller
{
    /**
     * @var Repository
     */
    private $config;

    /**
     * @var Debug
     */
    private $debug;

    /**
     * WebhookController constructor.
     *
     * @param Repository $config
     * @param Debug $debug
     */
    public function __construct(Repository $config, Debug $debug)
    {
        $this->config = $config;
        $this->debug = $debug;
        if ($this->config->get('fb-messenger.debug')) {
            $this->middleware(RequestReceived::class);
        }
    }

    /**
     * Webhook verify request
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response|void
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     * @throws \InvalidArgumentException
     */
    public function index(Request $request)
    {
        if ($request->get('hub_mode') === 'subscribe'
            && $request->get('hub_verify_token') === $this->config->get('fb-messenger.verify_token')) {
            return new Response($request->get('hub_challenge'));
        }

        throw new NotFoundHttpException('Not found resources');
    }

    /**
     * Receive the webhook request
     *
     * @param Request $request
     */
    public function receive(Request $request)
    {
        $receive = new Receiver($request);
        $webhook = new WebhookHandler($receive->getMessages(), $this->config, $this->debug);
        $webhook->handle();
    }

    public function facebookVerify(Request $request)
    {
        return $request->all()['hub_challenge'];
    }

    public function message(Request $request)
    {
       return $request->all();
    }

    public function subscribe(Request $request)
    {
        return $request->all();
    }

    public function reserve(Request $request)
    {
        return $request->all(); 
    }
}