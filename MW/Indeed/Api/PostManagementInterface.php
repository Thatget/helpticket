<?php
namespace MW\Indeed\Api;
interface PostManagementInterface {
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */
    public function getWelcomeText($name);
}