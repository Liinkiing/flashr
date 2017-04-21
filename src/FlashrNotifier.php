<?php
/**
 * Created by IntelliJ IDEA.
 * User: omar-
 * Date: 21/04/2017
 * Time: 05:36
 */

namespace Linking\Flashr;

use Illuminate\Contracts\Session\Session;
use Illuminate\Session\Store;
use Linking\Flashr\Interfaces\Flashable;

class FlashrNotifier implements Flashable
{
    /**
     * @var Store
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
     * @return void
     */
    public function info($message)
    {
        $this->setMessage($message, "info");
    }

    /**
     * Display a success message
     * @param $message
     * @return void
     */
    public function success($message)
    {
        $this->setMessage($message, "success");
    }

    /**
     * Display a warning message
     * @param $message
     * @return void
     */
    public function warning($message)
    {
        $this->setMessage($message, "warning");
    }

    /**
     * Display an error message
     * @param $message
     * @return void
     */
    public function danger($message)
    {
        $this->setMessage($message, "danger");
    }

    /**
     * Private function used to set a message in the session
     * @param $message
     * @param $type
     */
    private function setMessage($message, $type) {
        $this->session->flush();
        $this->session->flash('_flashr.type', $type);
        $this->session->flash('_flashr.message', $message);
    }
}