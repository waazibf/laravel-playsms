<?php
/*
 * Add helper function
 */
if (! function_exists('playsmsws_send')) {
    /**
     * @param string $to
     * @param string $message
     * @param array $extra_params
     * @return mixed
     */
    function playsmsws_send($to = null, $message = null, $extra_params=[])
    {
        $playsmsws = app('playsmsws');
        if (!is_null($to) && !is_null($message)) {
            $playsmsws->to = $to;
            $playsmsws->msg = $message;
            foreach($extra_params as $key=>$val) {
                $playsmsws->$key = $val;
            }
            return $playsmsws->sendSms();
        }
        return $playsmsws;
    }
}