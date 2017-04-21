<?php
/**
 * Created by IntelliJ IDEA.
 * User: omar-
 * Date: 21/04/2017
 * Time: 06:13
 */

namespace Linking\Flashr\Interfaces;


interface Flashable
{
    /**
     * Display an information message
     * @param $message
     * @return mixed
     */
    public function info($message);

    /**
     * Display a success message
     * @param $message
     * @return mixed
     */
    public function success($message);

    /**
     * Display a warning message
     * @param $message
     * @return mixed
     */
    public function warning($message);

    /**
     * Display an error message
     * @param $message
     * @return mixed
     */
    public function danger($message);


}