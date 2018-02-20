<?php
/*
 * Add helper function
 */
if (! function_exists('playsmsws')) {
    /**
     * @param string $to
     * @param string $message
     * @param array $extra_params
     * @return mixed
     */
    function playsmsws($to = null, $message = null, $extra_params=null)
    {
        $playsmsws = app('playsmsws');
        if (! (is_null($to) || is_null($message))) {
            return $playsmsws->sendMessage($to,$message,$extra_params);
        }
        return $playsmsws;
    }
}