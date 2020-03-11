<?php
namespace MW\Indeed\Model;
class PostManagement {
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */
    public function getWelcomeText($name)
    {
        return 'Welcome ' . $name;
    }
}