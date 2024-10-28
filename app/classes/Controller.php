<?php


class Controller
{
    private $response;
    private $session;

    public function __construct()
    {
        $this->response = new Response();
        $this->session = new Session();
    }

    /**
     * default action
     * @return void
     */
    public function index() : void
    {
        $this->response->render('index', [
            'errors' => $this->session->get('errors'),
            'message' => $this->session->get('message'),
        ]);
    }

    /**
     * answer action
     * @return void
     */
    public function answer() : void
    {
        $question = filter_input(INPUT_POST, 'question');
        //TODO validate
        $answer = Answer::generate();
        $this->session->write('message', $answer);
        $this->response->redirect(Router::url());
    }
}