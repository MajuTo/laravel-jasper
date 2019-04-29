<?php
namespace MajuTo\LaravelJasper;

use Jaspersoft\Client\Client;
use Jaspersoft\Dto\User\User;
use Jaspersoft\Exception\RESTRequestException;

class Jasper extends Client
{

    /**
     * Firstclass constructor.
     */
    public function __construct($host, $username, $password, $orgId = null)
    {
        parent::__construct($host, $username, $password, $orgId);
    }

    /**
     * Get a specific Jasper user by $username
     *
     * @param string $username
     * @param null $organization
     * @return User
     */
    public function getUser (string $username, $organization = null)
    {
        return $this->userService()->getUser($username, $organization);
    }

    /**
     * Get all Jasper users, filtered by $search
     *
     * @param string $search search query
     * @return array
     */
    public function searchUsers (string $search = '')
    {
        return $this->userService()->searchUsers($search);
    }

    /**
     * Add a new Jasper User or update an existing one
     *
     * @param User $user
     * @return array
     * @throws RESTRequestException
     */
    public function addOrUpdateUser (User $user)
    {
        return $this->userService()->addOrUpdateUser($user);
    }

}