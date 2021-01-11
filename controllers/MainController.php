<?php


class MainController extends Controller
{
    public function actionMain()
    {
        $this->renderView('', 'main');
    }
}