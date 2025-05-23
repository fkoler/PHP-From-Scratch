<?php

namespace Framework;

class Session
{
    /**
     * Start the session
     * 
     * @return void
     */
    public static function startSession()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * Set a session key/value pair
     * 
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function setSession($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Get a session value by the key
     * 
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function getSession($key, $default = null)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
    }

    /**
     * Check if session key exists
     * 
     * @param string $key
     * @return bool
     */
    public static function hasSession($key)
    {
        return isset($_SESSION[$key]);
    }

    /**
     * Clear session by key
     * 
     * @param string $key
     * @return void
     */
    public static function clearSession($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    /**
     * Clear all session data
     * 
     * @return void
     */
    public static function clearSessionData()
    {
        session_unset();
        session_destroy();
    }

    //
    // Flash Messages
    //

    /**
     * Set a flash message
     * 
     * @param string $key
     * @param string $message
     * @return void
     */
    public static function setFlashMessage($key, $message)
    {
        self::setSession("flash_" . $key, $message);
    }

    /**
     * Get a flash message and unset it
     * 
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function getFlashMessage($key, $default = null)
    {
        $message = self::getSession("flash_" . $key, $default);
        self::clearSession("flash_" . $key);

        return $message;
    }
}
