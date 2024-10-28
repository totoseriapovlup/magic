<?php


class Response
{
    /**
     * Render a view
     * @param string $page
     * @param array $data
     * @param string $template
     */
    public function render(string $page, array $data = [], string $template = 'default') : void
    {
        extract($data);
        include_once 'app/views/templates/' . $template . '.php';
    }

    /**
     * @param string $url
     */
    public function redirect(string $url) : never
    {
        Router::redirect($url);
    }
}