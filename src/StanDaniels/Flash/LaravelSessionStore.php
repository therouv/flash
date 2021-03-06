<?php
namespace StanDaniels\Flash;

use Illuminate\Session\Store;

class LaravelSessionStore implements SessionStore
{
    /**
     * @var Store
     */
    private $session;

    /**
     * Create a new session store instance.
     *
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash a message to the session.
     *
     * @param string $name
     * @param array  $data
     */
    public function flash($name, $data)
    {
        $this->session->flash($name, $data);
    }

    /**
     * Get the value of a given key and then forget it.
     *
     * @param string $name
     * @param mixed  $default
     * @return mixed
     */
    public function pull($name, $default)
    {
        return $this->session->pull($name, $default);
    }

    /**
     * Get the value of a given key.
     *
     * @param string $name
     * @param mixed  $default
     * @return mixed
     */
    public function get($name, $default)
    {
        return $this->session->get($name, $default);
    }
}
