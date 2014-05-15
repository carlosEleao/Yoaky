<?php 
class UserController extends BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layout';

    /**
     * Show the user profile.
     */
    public function showProfile($id = null)
    {
        $this->layout->content = View::make('users');
    }

}
