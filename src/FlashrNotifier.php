<?php
/**
 * Created by IntelliJ IDEA.
 * User: omar-
 * Date: 21/04/2017
 * Time: 05:36
 */

namespace Linking\Flashr;

use Illuminate\Contracts\Session\Session;
use Linking\Flashr\Interfaces\Flashable;

class FlashrNotifier implements Flashable
{
    /**
     * @var Session
     */
    private $session;

    /**
     * FlashrNotifier constructor.
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }


    /**
     * Display an information message
     * @param $message
     * @return mixed
     */
    public function info($message)
    {
        // TODO: Implement info() method.
    }

    /**
     * Display a success message
     * @param $message
     * @return mixed
     */
    public function success($message)
    {
        // TODO: Implement success() method.
    }

    /**
     * Display a warning message
     * @param $message
     * @return mixed
     */
    public function warning($message)
    {
        // TODO: Implement warning() method.
    }

    /**
     * Display an error message
     * @param $message
     * @return mixed
     */
    public function error($message)
    {
        // TODO: Implement error() method.
    }
}